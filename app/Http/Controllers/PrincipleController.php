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

class PrincipleController extends Controller
{
    public function padd_teacher(Request $request){
        return view('Principle.addTeacher');
    }
    public function paddTeacher(Request $request){
        $data= new User;
        $data-> name= $request->name;
        $data-> email= $request->email;
        $data-> password= $request->password;
        $data-> password= Hash::make($request->password);
        $data-> usertype = "teacher";
        $data-> phn = $request->phn;
        $data->save();
        return redirect()->back();
    }
    public function pshowTeacher(){
        $data = User::all();
        return view('Principle.showTeacher',compact('data'));
    }
    public function pteacherView($id){
        $data = User::find($id);
        return view('Principle.teacherview',compact('data'));
    }



// add student

    public function padd_student(Request $request){
        $data = Section::all();
        return view('Principle.addStudent',compact('data'));
    }
    public function paddStudent(Request $request){
        $data= new User;
        $data-> name= $request->name;
        $data-> email= $request->email;
        $data-> class= $request->class;
        $data-> password= Hash::make($request->password);
        $data-> usertype = "student";
        $data-> phn = $request->phn;
        $data->save();
        return redirect()->back();
    }
    public function pshowStudent(){
        $data = User::all();
        return view('Principle.showStudent',compact('data'));
    }
    public function pstudentView($id){
        $data = User::find($id);
        return view('Principle.studentview',compact('data'));
    }
// add class

public function padd_class(Request $request){
    $data = User::all();

    return view('Principle.addClass',compact('data'));
}
public function paddClass(Request $request){
    $data= new section();
    $data-> class= $request->class;
    $data-> classTeacher= $request->teacher;
    $data->save();
    return redirect()->back();
}
public function pshowClass(){
    $data = Section::all();
    return view('Principle.showClass',compact('data'));
}
public function pclassView($id){
    $data = Section::find($id);
    return view('Principle.classview',compact('data'));
}



// add subject

public function padd_subject(Request $request){
    $data = User::all();
    $data2 = section::all();
    return view('Principle.addSubject',compact('data','data2'));
}
public function paddSubject(Request $request){
    $data= new subject();
    $data-> class= $request->class;
    $data-> title= $request->title;
    $data-> starttime= $request->starttime;
    $data-> endtime= $request->endtime;
    $data-> teacher= $request->teacher;
    $data->save();
    return redirect()->back();
}
public function pshowSubject(){
    $data = subject::all();
    return view('Principle.showSubject',compact('data'));
}
public function psubjectView($id){
    $data = subject::find($id);
    return view('Principle.subjectview',compact('data'));
}



// add duty

public function padd_duty(Request $request){
    $data = User::all();
    $data2 = section::all();
    return view('Principle.addSubject',compact('data','data2'));
}
public function paddDuty(Request $request){
    $data= new subject();
    $data-> class= $request->class;
    $data-> title= $request->title;
    $data-> starttime= $request->starttime;
    $data-> endtime= $request->endtime;
    $data-> teacher= $request->teacher;
    $data->save();
    return redirect()->back();
}
public function pshowDuty(){
    $data = subject::all();
    return view('Principle.showSubject',compact('data'));
}
public function pdutyView($id){
    $data = subject::find($id);
    return view('Principle.subjectview',compact('data'));
}

// add fee

public function padd_fee(Request $request){
    $data = User::all();
    $data2 = section::all();
    return view('Principle.addFee',compact('data','data2'));
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
    return view('Principle.ppshowFee',compact('data','sdata'));
}
public function upshowFee(){
    $data = fee::all();
    $sdata = user::all();
    return view('Principle.upshowFee',compact('data','sdata'));
}
public function pfeeView($id){
    $data = subject::find($id);
    return view('Principle.feeview',compact('data'));
}



// add notii

public function padd_noti(Request $request){
    $data = User::all();
    $data2 = section::all();
    return view('Principle.addNotii',compact('data','data2'));
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
    return view('Principle.pshowNoti',compact('data','sdata'));
}

public function pnotiView($id){
    $data = subject::find($id);
    return view('Principle.feeview',compact('data'));
}





public function padd_expences(Request $request){
    $data = User::all();
    $data2 = section::all();
    return view('Principle.addExpences',compact('data','data2'));
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
    return view('Principle.pshowExpences',compact('data','sdata'));
}

public function pexpencesView($id){
    $data = subject::find($id);
    return view('Principle.feeview',compact('data'));
}





public function padd_salary(Request $request){
    $data = User::all();
    $data2 = section::all();
    return view('Principle.addsalary',compact('data','data2'));
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
    return view('Principle.pshowsalary',compact('data','sdata'));
}

public function pSalaryView($id){
    $data = subject::find($id);
    return view('Principle.feeview',compact('data'));
}


}

