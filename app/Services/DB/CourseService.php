<?php

namespace App\Services\DB;

use App\Models\Admin\Appointment;
use App\Models\Admin\PublicHolidays;
use App\Models\Admin\TicketTeam;
use App\Models\Course;
use App\Models\Enrollment;

class CourseService
{
    /**
     * @return Course
     */
    public static function query(): Course
    {
        return new Course();
    }

    /**
     * @return CourseService
     */
    public static function build(): CourseService
    {
        return new self();
    }


  public function getUserCourses($user = null){
        if ($user->hasAnyRole(['instructor'])){
           $courses =  $this->query()->where('instructor', $user->id);
        }else{
            $courses =  $this->query();

        }
        return $courses->orderBy('created_at', 'desc')->paginate(10);
  }

  public function getEnrolledCourses($user = null){

      if ($user->hasAnyRole(['instructor'])){
          $courses =  $this->query()->where('instructor', $user->id);
      }else{
          $courses =  $this->query()->whereHas('enrollments', function ($course) use ($user){
              $course->where('user_id', $user->id);
          });
      }

      return $courses->orderBy('created_at', 'desc')->paginate(10);
  }

}
