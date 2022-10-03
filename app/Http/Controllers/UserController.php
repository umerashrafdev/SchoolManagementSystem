<?php

namespace App\Http\Controllers;

use App\Models\attdance;
use App\Models\expense;
use App\Models\notii;
use App\Models\section;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function redirect(){
        $usertype = Auth::user()->usertype;
        if($usertype=='admin'){
            $data = expense::all();
            $total = 0;
            $credit = 0;
            foreach ($data as $i) {
                $expence =  $i->expense;
                $total = $expence + $total;
                $credit = $credit + $i->credit;
            }
            $count = User::where('usertype', 'student')->count();


            $data1 = DB::table('expenses')
           ->whereBetween('created_at', [date("Y-n-j 0:0:0",strtotime("-4 week")), date("Y-n-j 0:0:0",strtotime("+1 day"))])
           ->get();
            $mtotal = 0;
            $mcredit = 0;
            foreach ($data1 as $i) {
                $mexpence =  $i->expense;
                $mtotal = $mexpence + $mtotal;
                $mcredit = $mcredit + $i->credit;
            }
            $sdata = User::all();
            return view('SuperAdmin.home',compact('total','count','credit','mtotal','mcredit','sdata'));
        }
        else if($usertype == 'administator'){
            $data = notii::all();
            return view('Administrator.home',compact('data'));


        }
        else if($usertype == 'accountant'){
            $data = notii::all();
            return view('Accouant.home',compact('data'));


        }
        else if($usertype == 'principle'){
            $data = notii::all();
            $sdata = User::all();
            return view('Principle.home',compact('data','sdata'));


        }
        else if($usertype == 'teacher'){
            $data = User::all();
            $class = section::all();
            $user = auth()->user();
            $datee = date("Y-n-j 0:0:0",strtotime("today"));
            $tatta = attdance::where('date',$datee);
            $tatta = DB::table('attdances')
           ->whereBetween('created_at', [date("Y-n-j 0:0:0",strtotime("-1 day")), date("Y-n-j 0:0:0",strtotime("+1 day"))])
           ->get();
           $ndata = notii::all();
           $sdata = User::all();
            return view('Teacher.home',compact('data','class','user','tatta','ndata'));


        }
        elseif ($usertype == 'student') {
            $data = User::all();
            $class = section::all();
            $user = auth()->user();
            $datee = date("Y-n-j 0:0:0",strtotime("today"));
            $tatta = attdance::where('date',$datee);
            $tatta = DB::table('attdances')
           ->whereBetween('created_at', [date("Y-n-j 0:0:0",strtotime("-1 day")), date("Y-n-j 0:0:0",strtotime("+1 day"))])
           ->get();
           $ndata = notii::all();
           $sdata = User::all();

            return view('Student.home',compact('data','class','user','tatta','ndata'));
        }
        else{

        }
    }
}
