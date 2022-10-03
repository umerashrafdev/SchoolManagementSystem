<?php
namespace App\Http\Controllers;

use App\Models\expense;
use App\Models\fee;
use App\Models\notii;
use App\Models\salary;
use App\Models\section;
use App\Models\subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AccouantController extends Controller
{

// add fee

public function padd_fee(Request $request){
    $data = User::all();
    $data2 = section::all();
    return view('Accouant.addFee',compact('data','data2'));
}
public function paddFee(Request $request){
    $data= new fee();
    $data-> ino= $request->no;
    $data-> fee= $request->fee;
    $data-> month= $request->month;
    $data-> enddate= $request->enddate;
    $data-> startdate= $request->startdate;
    $data-> sid= $request->student;
    $data-> status= $request->status;
    $data->save();
    if($request->status == "paid"){
        $fee = new expense();
        $fee->dedit = $request->fee;
        $fee->time = date('Y-m-d');
        $fee->save();
    }
    else{
        $fee = new expense();
        $fee->credit = $request->fee;
        $fee->time = date('Y-m-d');
        $fee->save();
    }
    return redirect()->back();
}
public function ppshowFee(){
    $data = fee::all();
    $sdata = user::all();
    return view('Accouant.ppshowFee',compact('data','sdata'));
}
public function upshowFee(){
    $data = fee::all();
    $sdata = user::all();
    return view('Accouant.upshowFee',compact('data','sdata'));
}
public function pfeeView($id){
    $data = subject::find($id);
    return view('Accouant.feeview',compact('data'));
}



// add notii

public function padd_noti(Request $request){
    $data = User::all();
    $data2 = section::all();
    return view('Accouant.addNotii',compact('data','data2'));
}
public function paddNoti(Request $request){

    $data= new notii();
    $data->title= $request->title;
    $data-> des= $request->des;
    if($request->fort == 'on'){
        $data-> forTeacher= True;
    }

    if($request->fors == 'on'){
        $data-> forStudent= True;
    }
    if($request->forall == 'on'){
        $data-> forAll= True;
    }
    if($request->fora == 'on'){
        $data-> forAccountan= True;
    }
    if($request->forp == 'on'){
        $data-> forPrinciple= True;
    }



    $image = $request ->img;
    if($image){
        $imagename = time().".".$image->getClientOriginalExtension();
    $request->img->move('image',$imagename);
    $data->img=$imagename;
}
    $data->save();

    return redirect()->back();
}
public function pshowNoti(){
    $data = fee::all();
    $sdata = user::all();
    return view('Accouant.pshowNoti',compact('data','sdata'));
}

public function pnotiView($id){
    $data = subject::find($id);
    return view('Accouant.feeview',compact('data'));
}





public function padd_expences(Request $request){
    $data = User::all();
    $data2 = section::all();
    return view('Accouant.addExpences',compact('data','data2'));
}
public function paddExpences(Request $request){

    $data= new expense();
    $data->expense= $request->expe;
    // $data-> reason= $request->reason;
    $data->time = date('Y-m-d');
    $data->save();

    return redirect()->back();
}
public function pshowExpences(){
    $data = expense::all();
    $sdata = user::all();
    return view('Accouant.pshowExpences',compact('data','sdata'));
}

public function pexpencesView($id){
    $data = subject::find($id);
    return view('Accouant.feeview',compact('data'));
}





public function padd_salary(Request $request){
    $data = User::all();
    $data2 = section::all();
    return view('Accouant.addsalary',compact('data','data2'));
}
public function paddSalary(Request $request){

    $data= new salary();
    $data-> ino= $request->no;
    $data-> salary= $request->fee;
    $data-> month= $request->month;

    $data-> date= $request->date;
    $data-> tid= $request->student;
    $data-> status= $request->status;
    $data->save();
    if($request->status == "unpaid"){
        $fee = new expense();
        $fee->dedit = $request->fee;
        $fee->time = date('Y-m-d');
        $fee->save();
    }
    else{
        $fee = new expense();
        $fee->credit = $request->fee;
        $fee->time = date('Y-m-d');
        $fee->save();
    }

    return redirect()->back();
}
public function pshowSalary(){
    $data = salary::all();
    $sdata = user::all();
    return view('Accouant.pshowsalary',compact('data','sdata'));
}

public function pSalaryView($id){
    $data = subject::find($id);
    return view('Accouant.feeview',compact('data'));
}
}
