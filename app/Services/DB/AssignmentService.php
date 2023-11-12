<?php

namespace App\Services\DB;

use App\Models\Admin\Appointment;
use App\Models\Admin\PublicHolidays;
use App\Models\Admin\TicketTeam;
use App\Models\Assignment;
use App\Models\Course;

class AssignmentService
{
    /**
     * @return Assignment
     */
    public static function query(): Assignment
    {
        return new Assignment();
    }

    /**
     * @return CourseService
     */
    public static function build(): AssignmentService
    {
        return new self();
    }

    public function getCoursesAssignments(){
        $courses = CourseService::build()->getEnrolledCourses(auth()->user())->pluck('id');
        return $this->query()->whereIn('id', $courses)->paginate(10);
    }

}
