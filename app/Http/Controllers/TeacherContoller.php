<?php

namespace App\Http\Controllers;

use App\Models\attdance;
use App\Models\dairy;
use App\Models\section;
use App\Models\subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class TeacherContoller extends Controller
{
    public function attdance(){
        $data = User::all();
            $class = section::all();
            $user = auth()->user();
            $datee = date("Y-n-j 0:0:0",strtotime("today"));
            $tatta = attdance::where('date',$datee);
            $tatta = DB::table('attdances')
           ->whereBetween('created_at', [date("Y-n-j 0:0:0",strtotime("-1 day")), date("Y-n-j 0:0:0",strtotime("+1 day"))])
           ->get();
        return view('Teacher.attdance',compact('data','class','user','tatta'));
    }
    public function attdances(Request $request){
        foreach($request->name as $key=>$name){
            $order = new attdance();
            $order->name = $request->name[$key];
            $order->attdance = $request->attdance[$key];
            $order->date = date("Y-m-d H:i:s");
            $order->roll = $request->roll;
            $order->save();
        }
        return redirect()->back();
    }
    public function Dairy(Request $request){
        $class = subject::all();
        $user = auth()->user();
        return view('Teacher.dairy',compact('class','user'));
    }
    public function adddairy(Request $request,$id){
        $class = $id;

        return view('Teacher.adddairy',compact('class'));
    }
    public function uploadd(Request $request){
        $data =  new dairy();
        $data->title = $request->title;
        $data->des = $request->des;
        $data->cid = $request->id;
        $data -> save();
        $class = subject::all();
        $user = auth()->user();
        return Redirect('/Dairy');
    }
}
