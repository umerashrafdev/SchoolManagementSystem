<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministratorController extends Controller
{
    public function add_teacher(Request $request){
        return view('Administrator.addTeacher');
    }
    public function addTeacher(Request $request){

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
    public function showTeacher(){
        $data = User::all();
        return view('Administrator.showTeacher',compact('data'));
    }
    public function teacherView($id){
        $data = User::find($id);
        return view('Administrator.teacherview',compact('data'));
    }
    public function editAdmin(Request $request,$id){
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
    public function delAdmin(Request $request,$id){
        $data = User::find($id);
        $data -> delete();
        $data = User::all();
        return view('SuperAdmin.showAdmin',compact('data'));
    }



// add student

    public function add_student(Request $request){
        return view('Administrator.addStudent');
    }
    public function addStudent(Request $request){
        $data= new User;
        $data-> name= $request->name;
        $data-> email= $request->email;
        $data-> password= $request->password;
        $data-> password= Hash::make($request->password);
        $data-> usertype = "student";
        $data-> phn = $request->phn;
        $data->save();
        return redirect()->back();
    }
    public function showStudent(){
        $data = User::all();
        return view('Administrator.showStudent',compact('data'));
    }
    public function studentView($id){
        $data = User::find($id);
        return view('Administrator.studentview',compact('data'));
    }
    public function seditAdmin(Request $request,$id){
        $data = User::find($id);
        $data-> name= $request->name;
        $data-> email= $request->email;
        $data-> password= $request->password;
        $data-> password= Hash::make($request->password);
        $data-> usertype = "student";
        $data-> phn = $request->phn;
        $data->save();
        return redirect()->back();
    }
    public function sdelAdmin(Request $request,$id){
        $data = User::find($id);
        $data -> delete();
        $data = User::all();
        return view('SuperAdmin.showStudent',compact('data'));
    }

//account
public function add_account(Request $request){
    return view('Administrator.addAccount');
}
public function addAccount(Request $request){

    $data= new User;
    $data-> name= $request->name;
    $data-> email= $request->email;
    $data-> password= $request->password;
    $data-> password= Hash::make($request->password);
    $data-> usertype = "accountant";
    $data-> phn = $request->phn;
    $data->save();
    return redirect()->back();
}
public function showAccount(){
    $data = User::all();
    return view('Administrator.showAccount',compact('data'));
}
public function accountView($id){
    $data = User::find($id);
    return view('Administrator.accountview',compact('data'));
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


    // add principle

    public function add_principle(Request $request){
        return view('Administrator.addPrinciple');
    }
    public function addPrinciple(Request $request){
        $data= new User;
        $data-> name= $request->name;
        $data-> email= $request->email;
        $data-> password= $request->password;
        $data-> password= Hash::make($request->password);
        $data-> usertype = "principle";
        $data-> phn = $request->phn;
        $data->save();
        return redirect()->back();
    }
    public function showPrinciple(){
        $data = User::all();
        return view('Administrator.showPrinciple',compact('data'));
    }
    public function principleView($id){
        $data = User::find($id);
        return view('Administrator.principleview',compact('data'));
    }

}
