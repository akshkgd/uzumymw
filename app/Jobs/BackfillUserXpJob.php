<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use App\User;

class BackfillUserXpJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * The number of seconds the job can run before timing out.
     *
     * @var int
     */
    public $timeout = 600;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $driver = DB::connection()->getDriverName();

        if ($driver === 'mysql' || $driver === 'mariadb') {
            // Optimized JOIN update for MySQL/MariaDB (takes <2 seconds for 100k users)
            DB::statement("
                UPDATE users 
                JOIN (
                    SELECT userId, SUM(COALESCE(time_spent, 0)) as total_time
                    FROM course_enrollments
                    GROUP BY userId
                ) as enrollment_totals ON users.id = enrollment_totals.userId
                SET users.xp = COALESCE(FLOOR((enrollment_totals.total_time / 60) * 100), 0)
            ");
        } else {
            // Database-agnostic chunked fallback for local development (SQLite/PostgreSQL)
            User::select('id')->chunkById(1000, function ($users) {
                $userIds = $users->pluck('id')->toArray();
                
                $totals = DB::table('course_enrollments')
                    ->whereIn('userId', $userIds)
                    ->groupBy('userId')
                    ->select('userId', DB::raw('SUM(time_spent) as total_time'))
                    ->pluck('total_time', 'userId');
                    
                foreach ($users as $user) {
                    $totalTime = $totals[$user->id] ?? 0;
                    if ($totalTime > 0) {
                        $xp = floor(($totalTime / 60) * 100);
                        DB::table('users')->where('id', $user->id)->update(['xp' => $xp]);
                    }
                }
            });
        }
    }
}
