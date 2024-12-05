<?php
namespace App\Traits;

use App\Batch;
use App\CourseEnrollment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

trait EnrollmentTrait
{
    /**
     * Check if the user can enroll in a batch.
     *
     * @param int $batchId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function checkEnroll($batchId)
    {
        $batch = Batch::findOrFail($batchId);
        $isEnrolled = $this->isEnrolled($batchId);

        if ($isEnrolled === 'true') {
            if ($this->batchStatus($batchId) === 'true') {
                if ($this->inLimit($batchId) === 'true') {
                    return $this->enroll($batch);
                } else {
                    session()->flash('alert-warning', 'All the seats are full');
                    return redirect('/home');
                }
            } else {
                session()->flash('alert-warning', 'Batch is not active');
                return redirect('/home');
            }
        } else {
            session()->flash('alert-warning', 'Already enrolled');
            $enrollId = Crypt::encrypt($isEnrolled->id);
            return redirect('checkout/' . $enrollId);
        }
    }

    /**
     * Check if the user is already enrolled in the batch.
     *
     * @param int $batchId
     * @return mixed
     */
    private function isEnrolled($batchId)
    {
        $enrollment = CourseEnrollment::where('batchId', $batchId)
            ->where('userId', Auth::user()->id)
            ->first();

        return $enrollment ?? 'true';
    }

    /**
     * Check if the batch is active.
     *
     * @param int $batchId
     * @return string
     */
    private function batchStatus($batchId)
    {
        $batch = Batch::findOrFail($batchId);
        return $batch->status == 1 ? 'true' : 'false';
    }

    /**
     * Check if there are seats available in the batch.
     *
     * @param int $batchId
     * @return string
     */
    private function inLimit($batchId)
    {
        $batch = Batch::findOrFail($batchId);

        if (!empty($batch->limit)) {
            $paidEnrollments = CourseEnrollment::where('batchId', $batchId)
                ->where('hasPaid', 1)
                ->count();

            return $paidEnrollments < $batch->limit ? 'true' : 'false';
        }

        return 'true'; // No limit specified
    }

    /**
     * Enroll the user in the batch.
     *
     * @param Batch $batch
     * @return \Illuminate\Http\RedirectResponse
     */
    private function enroll($batch)
    {
        $enrollment = new CourseEnrollment();
        $enrollment->userId = Auth::user()->id;
        $enrollment->batchId = $batch->id;
        $enrollment->price = $batch->price;
        $enrollment->amountPayable = $batch->payable;

        if ($batch->payable == 0) {
            $enrollment->status = 1;
            $enrollment->hasPaid = 1;
            $enrollment->save();

            $this->successMail($enrollment->id);

            session()->flash('alert-success', 'You have successfully enrolled in the course');
            return redirect('/home');
        } else {
            $enrollment->save();
            $encryptedId = Crypt::encrypt($enrollment->id);
            return redirect('checkout/' . $encryptedId);
        }
    }

    /**
     * Send a success mail after enrollment.
     *
     * @param int $enrollmentId
     * @return void
     */
    private function successMail($enrollmentId)
    {
        // Add logic to send success email to the user
        // e.g., Mail::to(Auth::user()->email)->send(new EnrollmentSuccessMail($enrollmentId));
    }
}
