<?php
namespace App\Traits;

use App\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Str;

trait CreateUserTrait
{
    public function findOrCreateAndLoginUser($data)
    {
        $user = User::where('email', $data['email'])->first();
        if ($user) {
            Auth::login($user);
        } else {
            $user = new User;
            $user->name = $data['name'] ?? substr($data['email'], 0, strpos($data['email'], "@"));
            $user->email = $data['email'];
            $user->mobile = $data['mobile'] ?? null;
            $user->password = bcrypt(Str::random(12));
            $user->is_verified = 1;
            $user->role = 0;
            $user->email_verified_at = Carbon::now();
            foreach (['source' => 'field1', 'medium' => 'field2', 'campaign' => 'field3'] as $key => $field) {
                if (isset($data[$key])) {
                    $user->$field = $data[$key];
                }
            }
            $user->save();
            Auth::login($user);
        }
        return $user;
    }
}
