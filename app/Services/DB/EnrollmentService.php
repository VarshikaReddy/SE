<?php

namespace App\Services\DB;

use App\Models\Admin\Appointment;
use App\Models\Admin\PublicHolidays;
use App\Models\Admin\TicketTeam;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EnrollmentService
{
    /**
     * @return Enrollment
     */
    public static function query(): Enrollment
    {
        return new Enrollment();
    }

    /**
     * @return EnrollmentService
     */
    public static function build(): EnrollmentService
    {
        return new self();
    }

  public function getUserEnrollments($user = null){
        if ($user->hasAnyRole(['instructor'])){
           $enrollments =  $this->query()->whereHas('course', function ($course) use ($user){
                $course->where('instructor', $user->id);
            })->get();
        }else{
            $enrollments = $this->query()->where('user_id', $user->id);
        }
        return $enrollments;
  }

}
