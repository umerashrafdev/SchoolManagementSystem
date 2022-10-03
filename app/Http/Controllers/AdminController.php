<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\addmission;
use App\Models\AdmissionFee;
use App\Models\applications;
use App\Models\classSection;
use App\Models\expense;
use App\Models\fee;
use App\Models\inquery;
use App\Models\notii;
use App\Models\salary;
use App\Models\section;
use App\Models\staffInquery;
use App\Models\subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Mockery\Matcher\Subset;

class AdminController extends Controller
{

    //iquery controller
    public function inquery()
    {
        $data = inquery::all()->reverse()->values();;

        return view('SuperAdmin.inquery.home',compact('data'));
    }
    public function inqueryForm()
    {


        return view('SuperAdmin.inquery.form');
    }
    public function inquerySubmit(Request $request)
    {
        $data = new inquery();
        $data->name = $request->name;
        $data->fname = $request->fname;
        $data->phn = $request->phn;
        $data->section = $request->class;
        $data->status = 'new';
        $data->save();

        return redirect('/inquery')->with('mes','Inquery submitted');
    }
    //Addmission controller
    public function addmission(Request $request)
    {
        if($request->id != null){
            $data = inquery::find($request->id);

            return view('SuperAdmin.Addmission.home', compact('data'));
        }
        else{
            $data = null;
            return view('SuperAdmin.Addmission.home', compact('data'));
        }


    }
    public function addmissionSubmit(Request $request)
    {
        $data = new addmission();
        $image = $request->img;
        if ($image) {
            $imagename = time() . "." . $image->getClientOriginalExtension();
            $request->img->move('productimage', $imagename);
            $data->img = $imagename;
        }
        $data->name = $request->name;
        $data->fname = $request->fname;
        $data->phn = $request->phn;
        $data->section = $request->class;
        $data->status = 'new';
        $data->fee= $request->fee;
        $data->sbform = $request->sbform;
        $data->fcnic = $request->fcnic;
        $data->fjob = $request->fjob;
        $data->ephn = $request->ephn;
        $data->sblood = $request->sblood;
        $data->discount = $request->discount;
        $data->save();
        if($request->inquery_id != null){
            $data = inquery::find($request->inquery_id);
            $data->status = 'done';
            $data->save();
        }

            return Redirect::back()->with('mes','Addmission submitted');

    }
    public function enrollment_list(){
        $data = addmission::all()->reverse()->values();
        return view('SuperAdmin.Addmission.enrollment_list',compact('data'));
    }
    public function addmissionFee(Request $request){
        $data = addmission::find($request->id);



        return view('SuperAdmin.Addmission.admissionFee',compact('data'));
    }
    public function addmissionFeeSubmit(Request $request){
        $data = new AdmissionFee();
        $data->name = $request->name;
        $data->fname = $request->fname;
        $data->phn = $request->phn;
        $data->class = $request->class;
        $data->Afee = $request->Afee;
        $data->uniformFee = $request->uniformFee;
        $data->BookFee = $request->BookFee;
        $data->FirstFee = $request->FirstFee;
        $data->ExamFee = $request->ExamFee;
        $data->cFee = $request->cFee;
        $data->ofee = $request->ofee;
        $data->discount = $request->discount;
        $data->save();
        $data = addmission::find($request->inquery_id);
        $data->status = 'Fee Gentrated';
        $data->save();
        return Redirect::back()->with('mes', 'Addmission Fee generated');

    }
    public function enroll(Request  $request){
        $data = addmission::find($request->id);
        $s = classSection::all();
        return view('SuperAdmin.Addmission.enroll',compact('data','s'));
    }
    public function added_student(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->mail;
        $user->roll = $request->roleno;
        $user->class = $request->code;
        $user->phn = $request->phn;
        $user->password = Hash::make($request->password);
        $user->usertype = 'student';
        $user->save();
        $data = addmission::find($request->inquery_id);
        $data->status = 'Enrolled';
        $data->save();
        return Redirect::back()->with('mes','Student Enrolled');
    }
    public function add__Subject(Request $request){
        $data = classSection::all();
        return view('SuperAdmin.sections.Subject',compact('data'));
    }
    public function SubjectSubmit(Request $request){
        $data = new subject();
        $data->title = $request->name;
        $data->class = $request->code;
        $data->teacher = $request->teacher;
        $data->starttime = $request->stime;
        $data->endtime = $request->etime;

        $data->save();
        return Redirect::back()->with('mes','Subject Added');
    }

    public function show_subjects(){
        $data = subject::all()->reverse()->values();
        return view('SuperAdmin.sections.show_subjects',compact('data'));

    }



    //hr controller
public function NewApplication(){
    $data = staffInquery::all()->reverse()->values();

    return view('SuperAdmin.hr.home',compact('data'));
}
public function applicationForm(){
return view('SuperAdmin.hr.form');
}
public function applicationSubmit(Request $request){
    $data = new staffInquery();
    $data->name = $request->name;
    $data->fname = $request->fname;
    $data->phn = $request->phn;
    $data->role = $request->role;
    $data->status = 'new';
    $data->save();

    return redirect('/NewApplication')->with('mes','Application submitted');

}
public function application_interview(Request $request){
        if ($request->id != null) {
            $data = staffInquery::find($request->id);

            return view('SuperAdmin.hr.applicationForm', compact('data'));
        } else {
            $data = null;
            return view('SuperAdmin.hr.applicationForm', compact('data'));
        }


}
    public function Application_Submit(Request $request)
    {
        $data = new applications();
        $image = $request->img;
        if ($image) {
            $imagename = time() . "." . $image->getClientOriginalExtension();
            $request->img->move('productimage', $imagename);
            $data->img = $imagename;
        }
        $data->name = $request->name;
        $data->fname = $request->fname;
        $data->phn = $request->phn;
        $data->role = $request->role;
        $data->status = 'new';
        $data->pay = $request->pay;
        $data->sbform = $request->sbform;
        $data->fcnic = $request->fcnic;
        $data->fjob = $request->fjob;
        $data->ephn = $request->ephn;
        $data->sblood = $request->sblood;

        $data->save();
        if ($request->inquery_id != null) {
            $data = staffInquery::find($request->inquery_id);
            $data->status = 'done';
            $data->save();
        }

        return Redirect::back()->with('mes', 'Addmission submitted');
    }
public function staff_list(){
    $data = applications::all()->reverse()->values();
    return view('SuperAdmin.hr.hiring-list',compact('data'));
}

    public function hired(Request  $request)
    {
        $data = applications::find($request->id);

        return view('SuperAdmin.hr.hired', compact('data'));
    }
    public function added_staff(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->mail;

        $user->password = Hash::make($request->password);
        $user->usertype = $request->role;
        $user->save();
        $data = applications::find($request->inquery_id);
        $data->status = 'Hired';
        $data->save();
        return Redirect::back()->with('mes', 'Student Enrolled');
    }


    //class controller
    public function Section(){
        $data = classSection::all()->reverse()->values();
        return view('SuperAdmin.sections.home',compact('data'));
    }
    public function ClassForm(){

        return view('SuperAdmin.sections.form');
    }
    public function ClassSubmit(Request $request){
        $data = new classSection();
        $data->name = $request->name;
        $data->code = $request->ccode;
        $data->description = $request->des;
        $data->class_teacher_id = $request->teacher;
        $data->save();
        return Redirect::back()->with('mes','Class Added');
    }

























    public function add_admin(Request $request){
        return view('SuperAdmin.addAdmin');
    }
    public function addAdmin(Request $request){
        $data= new User;
        $data-> name= $request->name;
        $data-> email= $request->email;
        $data-> password= $request->password;
        $data-> password= Hash::make($request->password);
        $data-> usertype = "administator";
        $data-> phn = $request->phn;
        $data->save();
        return redirect()->back();
    }
    public function editAdmin(Request $request,$id){
        $data = User::find($id);
        $data-> name= $request->name;
        $data-> email= $request->email;
        $data-> password= $request->password;
        $data-> password= Hash::make($request->password);
        $data-> usertype = "administator";
        $data-> phn = $request->phn;
        $data->save();
        return redirect()->back();
    }
    public function delAdmin(Request $request,$id){
        $data = User::find($id);
        $data -> delete();
        $data = User::all();
        return view('SuperAdmin.showAdmin',compact('data'));
    }
    public function showAdmin(){
        $data = User::all();
        return view('SuperAdmin.showAdmin',compact('data'));
    }
    public function adminView($id){
        $data = User::find($id);
        return view('SuperAdmin.adminview',compact('data'));
    }
    public function padd_teacher(Request $request){
        return view('SuperAdmin.addTeacher');
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
        return view('SuperAdmin.showTeacher',compact('data'));
    }
    public function pteacherView(Request $request, $id){
        $data = User::find($id);
        return view('SuperAdmin.teacherview',compact('data'));
    }
    public function editTeacher(Request $request,$id){
        $data = User::find($id);
        $data-> name= $request->name;
        $data-> email= $request->email;
        $data-> password= $request->password;
        $data-> password= Hash::make($request->password);
        $data-> usertype = "teacher";
        $data-> phn = $request->phn;
        $data->save();
        return redirect()->back();
    }
    public function delTeacher(Request $request,$id){
        $data = User::find($id);
        $data -> delete();
        $data = User::all();
        return view('SuperAdmin.showAdmin',compact('data'));
    }



// add student

    public function padd_student(Request $request){
        $data = Section::all();
        return view('SuperAdmin.addStudent',compact('data'));
    }
    public function paddStudent(Request $request){
        $data= new User;
        $data-> name= $request->name;
        $data-> email= $request->email;
        $data-> class= $request->class;
        $data-> password= Hash::make($request->password);
        $data-> usertype = "student";
        $data-> roll = $request->roll;
        $data-> phn = $request->phn;
        $data->save();
        return redirect()->back();
    }
    public function pshowStudent(){
        $data = User::all();
        return view('SuperAdmin.showStudent',compact('data'));
    }
    public function pstudentView($id){
        $data = User::find($id);
        return view('SuperAdmin.studentview',compact('data'));
    }
    public function editStudent(Request $request, $id)
    {
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->password = Hash::make($request->password);
        $data->usertype = "student";
        $data->phn = $request->phn;
        $data->save();
        return redirect()->back();
    }
    public function delStudent(Request $request, $id)
    {
        $data = User::find($id);
        $data->delete();
        $data = User::all();
        return view('SuperAdmin.showStudnet', compact('data'));
    }

// add class

public function padd_class(Request $request){
    $data = User::all();

    return view('SuperAdmin.addClass',compact('data'));
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
    return view('SuperAdmin.showClass',compact('data'));
}
public function pclassView($id){
    $data = Section::find($id);
    $data1 = User::all();
    return view('SuperAdmin.classview',compact('data','data1'));
}
    public function editClass(Request $request, $id)
    {
        $data = Section::find($id);
        $data->class = $request->class;
        $data->classTeacher = $request->teacher;

        $data->save();
        return redirect()->back();
    }
    public function delClass(Request $request, $id)
    {
        $data = section::find($id);
        $data->delete();
        $data = User::all();
        return view('SuperAdmin.showClass', compact('data'));
    }

 // add staff

 public function add_staff(Request $request){
    return view('Administrator.addStaff');
}
public function addStaff(Request $request){
    $data= new User;
    $data-> name= $request->name;
    $data-> email= $request->email;
    $data-> password= $request->password;
    $data-> password= Hash::make($request->password);
    $data-> usertype = $request->role;;
    $data-> phn = $request->phn;
    $data->save();
    return redirect()->back();
}
public function showStaff(){
    $data = User::all();
    return view('Administrator.showStaff',compact('data'));
}
public function staffView($id){
    $data = User::find($id);
    return view('Administrator.staffview',compact('data'));
}
public function sseditAdmin(Request $request,$id){
    $data = User::find($id);
    $data-> name= $request->name;
    $data-> email= $request->email;
    $data-> password= $request->password;
    $data-> password= Hash::make($request->password);
    $data-> phn = $request->phn;
    $data->save();
    return redirect()->back();
}
public function ssdelAdmin(Request $request,$id){
    $data = User::find($id);
    $data -> delete();
    $data = User::all();
    return view('Administrator.staffview',compact('data'));
}

// add subject

public function padd_subject(Request $request){
    $data = User::all();
    $data2 = section::all();
    return view('SuperAdmin.addSubject',compact('data','data2'));
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
    return view('SuperAdmin.showSubject',compact('data'));
}
public function psubjectView($id){
    $data = subject::find($id);
    $data1 = User::all();
    $data2 = section::all();
    return view('SuperAdmin.subjectview',compact('data','data2','data1'));
}

    public function editSubject(Request $request, $id)
    {
        $data = subject::find($id);
        $data->class = $request->class;
        $data->title = $request->title;
        $data->starttime = $request->starttime;
        $data->endtime = $request->endtime;
        $data->teacher = $request->teacher;
        $data->save();
        return redirect()->back();
    }
    public function delSubject(Request $request, $id)
    {
        $data = subject::find($id);
        $data->delete();
        $data = subject::all();
        return view('SuperAdmin.subjectview', compact('data'));
    }


// add duty

public function padd_duty(Request $request){
    $data = User::all();
    $data2 = section::all();
    return view('SuperAdmin.addSubject',compact('data','data2'));
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
    return view('SuperAdmin.showSubject',compact('data'));
}
public function pdutyView($id){
    $data = subject::find($id);
    return view('SuperAdmin.subjectview',compact('data'));
}

// add fee

public function padd_fee(Request $request){
    $data = User::all();
    $data2 = section::all();
    return view('SuperAdmin.addFee',compact('data','data2'));
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
    return view('SuperAdmin.ppshowFee',compact('data','sdata'));
}
public function upshowFee(){
    $data = fee::all();
    $sdata = user::all();
    return view('SuperAdmin.upshowFee',compact('data','sdata'));
}
public function pfeeView($id){
    $data = subject::find($id);
    return view('SuperAdmin.feeview',compact('data'));
}



// add notii

public function padd_noti(Request $request){
    $data = User::all();
    $data2 = section::all();
    return view('SuperAdmin.addNotii',compact('data','data2'));
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
    $data = notii::all();

    return view('SuperAdmin.pshowNoti',compact('data'));
}

public function pnotiView($id){
    $data = subject::find($id);
    return view('SuperAdmin.feeview',compact('data'));
}





public function padd_expences(Request $request){
    $data = User::all();
    $data2 = section::all();
    return view('SuperAdmin.addExpences',compact('data','data2'));
}
public function paddExpences(Request $request){

    $data= new expense();
    $data->expense= $request->expe;
    $data-> reason= $request->reason;
    $data->time = date('Y-m-d');
    $data->save();

    return redirect()->back();
}
public function pshowExpences(){
    $data = expense::all();
    $sdata = user::all();
    return view('SuperAdmin.pshowExpences',compact('data','sdata'));
}

public function pexpencesView($id){
    $data = subject::find($id);
    return view('SuperAdmin.feeview',compact('data'));
}





public function padd_salary(Request $request){
    $data = User::all();
    $data2 = section::all();
    return view('SuperAdmin.addsalary',compact('data','data2'));
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
    return view('SuperAdmin.pshowsalary',compact('data','sdata'));
}

public function pSalaryView($id){
    $data = subject::find($id);
    return view('SuperAdmin.feeview',compact('data'));
}

}
