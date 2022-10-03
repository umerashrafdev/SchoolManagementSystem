<?php

namespace App\Http\Controllers;
use App\Models\attdance;
use App\Models\dairy;
use App\Models\fee;
use App\Models\section;
use App\Models\subject;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function attdances(){
        $data = User::all();
            $class = section::all();
            $user = auth()->user();
            $datee = date("Y-n-j 0:0:0",strtotime("today"));
            $tatta = attdance::where('date',$datee);
            $tatta = DB::table('attdances')->where('name', $user->name)
           ->whereBetween('created_at', [date("Y-n-j 0:0:0",strtotime("-1 day")), date("Y-n-j 0:0:0",strtotime("+1 day"))])
           ->get();
           $lastma = DB::table('attdances')->where('name', $user->name)
           ->whereBetween('created_at', [date("Y-n-j 0:0:0",strtotime("-4 week")), date("Y-n-j 0:0:0",strtotime("+1 day"))])
           ->get();
        return view('Student.attdance',compact('data','class','user','tatta','lastma'));
    }
    public function Dairy(Request $request){
        $user = auth()->user();

        $dairy =  DB::table('dairies')->where('cid', $user->class)
        ->whereBetween('created_at', [date("Y-n-j 0:0:0",strtotime("-1 day")), date("Y-n-j 0:0:0",strtotime("+1 day"))])
        ->get();

        $cass = section::all();

        return view('Student.dairy',compact('dairy','user','cass'));
    }
    public function fee (){
        $fee = fee::all();
        return view('Student.fee',compact('fee'));
    }
}
