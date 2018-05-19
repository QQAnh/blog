<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
//    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
//    public function registerLocal()
//    {
//        $student = new Student();
//        $student->name = 'name';
//        $student->email = 'email';
//        $student->phone = '01231231';
//        $student->save();
//
//        return 'ok';
//    }
//
//
//    public function update()
//    {
//       $studen = Student::find(2);
//       $studen->name = 'Quynh Anh';
//       $studen->save();
//
//
//        return 'ok';
//    }
//    public function select(){
//        $student = DB::table('students')->select('name','email')->get();
//        return $student ;
//    }
}
