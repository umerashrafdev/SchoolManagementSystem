<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\PrincipleController;
use App\Http\Controllers\AccouantController;
use App\Http\Controllers\TeacherContoller;
use App\Http\Controllers\StudentContoller;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('redirect');
})->name('dashboard');
Route::get('/redirect',[UserController::class,'redirect']);


// superadmin urls

//Inquery urls
Route::get('/inquery',[AdminController::class,'inquery']);
Route::get('/inquery-from',[ AdminController::class, 'inqueryForm']);
Route::get('/inquery-submit', [AdminController::class,'inquerySubmit']);


//Addmission urls
Route::get('/addmisson', [ AdminController::class, 'addmission']);
Route::post('/addmission-submit', [AdminController::class, 'addmissionSubmit']);
Route::get('/AdmissionFee', [AdminController::class, 'addmissionFee']);
Route::post('/addmission-fee-submit', [AdminController::class, 'addmissionFeeSubmit']);
//enrollment urls
Route::get('/enrollment', [AdminController::class, 'enrollment_list']);
Route::get('Enroll', [AdminController::class, 'enroll']);


//class urls
Route::get('add/class', [AdminController::class, 'Section']);
Route::get('/CLass-form', [AdminController::class, 'ClassForm']);
Route::post('/add/class-submit', [AdminController::class, 'ClassSubmit']);
Route::get('/add/Subject', [AdminController::class, 'add__Subject']);
Route::post('/add/subject-submit', [AdminController::class, 'SubjectSubmit']);
Route::get('/show/subjects',[AdminController::class, 'show_subjects']);
Route::post('/add/student', [AdminController::class, 'added_student']);


//hr urls
Route::get('/NewApplication', [AdminController::class, 'NewApplication']);
Route::get('application-from', [AdminController::class, 'applicationForm']);
Route::get('/application-submit', [AdminController::class, 'applicationSubmit']);
Route::get('add/staff', [AdminController::class, 'application_interview']);
Route::post('/add/staff-submit', [AdminController::class, 'application_Submit']);
Route::get('/staff-list', [AdminController::class, 'staff_list']);
Route::get('/Hired', [AdminController::class, 'Hired']);
Route::post('added_staff', [AdminController::class, 'added_staff']);
Route::get('/a/addAdmin',[AdminController::class,'add_admin']);
Route::get('/a/AddAdmin',[AdminController::class,'addAdmin']);
Route::get('/a/AddAdmin/{id}',[AdminController::class,'editAdmin']);
Route::get('/a/delAdmin/{id}',[AdminController::class,'delAdmin']);
Route::get('/a/showAdmin',[AdminController::class,'showAdmin']);
Route::get('/a/showAdminView/{id}',[AdminController::class,'adminView']);

Route::get('/a/paddTeacher',[AdminController::class,'padd_teacher']);
Route::get('/a/pAddTeacher',[AdminController::class,'paddTeacher']);
Route::get('/a/pshowTeacher',[AdminController::class,'pshowTeacher']);
Route::get('/a/showTeacherView/{id}',[AdminController::class,'pteacherView']);
Route::get('/a/AddTeacher/{id}',[AdminController::class,'editTEacher']);
Route::get('/a/delTeacher/{id}',[AdminController::class,'delTeacher']);


Route::get('/a/paddStudent',[AdminController::class,'padd_student']);
Route::get('/a/pAddStudent',[AdminController::class,'paddStudent']);
Route::get('/a/pshowStudent',[AdminController::class,'pshowStudent']);
Route::get('/a/pshowStudentView/{id}',[AdminController::class,'pstudentView']);
Route::get('/ae/AddStudent/{id}', [AdminController::class, 'editStudent']);
Route::get('/ae/delStudent/{id}', [AdminController::class, 'delStudent']);

Route::get('/a/paddclass',[AdminController::class,'padd_class']);
Route::get('/a/pAddClass',[AdminController::class,'paddClass']);
Route::get('/a/pshowClass',[AdminController::class,'pshowClass']);
Route::get('/a/pshowClassView/{id}',[AdminController::class,'pclassView']);
Route::get('/ae/AddClass/{id}', [AdminController::class, 'editClass']);
Route::get('/a/delClass/{id}', [AdminController::class, 'delClass']);



Route::get('/a/paddsubject',[AdminController::class,'padd_subject']);
Route::get('/a/pAddSubject',[AdminController::class,'paddSubject']);
Route::get('/a/pshowSubject',[AdminController::class,'pshowSubject']);
Route::get('/a/pshowSubjectView/{id}',[AdminController::class,'psubjectView']);
Route::get('/a/editSubject/{id}', [AdminController::class, 'editSubject']);
Route::get('/a/delSubject/{id}', [AdminController::class, 'delSubject']);


Route::get('/a/paddduty',[AdminController::class,'padd_duty']);
Route::get('/a/pAddDuty',[AdminController::class,'paddDuty']);
Route::get('/a/pshowDuty',[AdminController::class,'pshowDuty']);
Route::get('/a/pshowDutyView/{id}',[AdminController::class,'pdutyView']);


Route::get('/a/paddfee',[AdminController::class,'padd_fee']);
Route::get('/a/pAddFee',[AdminController::class,'paddFee']);
Route::get('/a/ppshowFee',[AdminController::class,'ppshowFee']);
Route::get('/a/upshowFee',[AdminController::class,'upshowFee']);
Route::get('/a/pshowFeeView/{id}',[AdminController::class,'pFeeView']);





Route::get('/a/paddnoti',[AdminController::class,'padd_noti']);
Route::post('/a/pAddNoti',[AdminController::class,'paddNoti']);
Route::get('/a/pshowNoti',[AdminController::class,'pshowNoti']);
Route::get('/a/pshowNotiiView/{id}',[AdminController::class,'pNotiView']);




Route::get('/a/paddexpences',[AdminController::class,'padd_expences']);
Route::get('/a/pAddExpences',[AdminController::class,'paddExpences']);
Route::get('/a/pshowExpences',[AdminController::class,'pshowExpences']);
Route::get('/a/pshowExpencesView/{id}',[AdminController::class,'pExpencesView']);


Route::get('/a/paddsalary',[AdminController::class,'padd_salary']);
Route::get('/a/pAddSalary',[AdminController::class,'paddSalary']);
Route::get('/a/pshowSalary',[AdminController::class,'pshowSalary']);
Route::get('/a/pshowSalaryView/{id}',[AdminController::class,'pSalaryView']);


Route::get('/a/addStaff',[AdminController::class,'add_staff']);
Route::get('/a/AddStaff',[AdminController::class,'addStaff']);
Route::get('/a/showStaff',[AdminController::class,'showStaff']);
Route::get('/a/showStaffView/{id}',[AdminController::class,'staffView']);
Route::get('/a/ss/AddAdmin/{id}',[AdminController::class,'sseditAdmin']);
Route::get('/a/ss/delAdmin/{id}',[AdminController::class,'ssdelAdmin']);
// administrator urls
Route::get('/addTeacher',[AdministratorController::class,'add_teacher']);
Route::get('/AddTeacher',[AdministratorController::class,'addTeacher']);
Route::get('/showTeacher',[AdministratorController::class,'showTeacher']);
Route::get('/showTeacherView/{id}',[AdministratorController::class,'teacherView']);
Route::get('/aa/AddAdmin/{id}',[AdministratorController::class,'editAdmin']);
Route::get('/aa/delAdmin/{id}',[AdministratorController::class,'delAdmin']);

Route::get('/addStudent',[AdministratorController::class,'add_student']);
Route::get('/AddStudent',[AdministratorController::class,'addStudent']);
Route::get('/showStudent',[AdministratorController::class,'showStudent']);
Route::get('/showStudentView/{id}',[AdministratorController::class,'studentView']);
Route::get('/sa/AddAdmin/{id}',[AdministratorController::class,'seditAdmin']);
Route::get('/sa/delAdmin/{id}',[AdministratorController::class,'sdelAdmin']);



Route::get('/addAccount',[AdministratorController::class,'add_account']);
Route::get('/AddAccount',[AdministratorController::class,'addAccount']);
Route::get('/showAccount',[AdministratorController::class,'showAccount']);
Route::get('/showAccountView/{id}',[AdministratorController::class,'accountView']);
Route::get('/ss/AddAdmin/{id}',[AdministratorController::class,'sseditAdmin']);
Route::get('/ss/delAdmin/{id}',[AdministratorController::class,'ssdelAdmin']);

Route::get('/addPrinciple',[AdministratorController::class,'add_principle']);
Route::get('/AddPrinciple',[AdministratorController::class,'addPrinciple']);
Route::get('/showPrinciple',[AdministratorController::class,'showPrinciple']);
Route::get('/showPrincipleView/{id}',[AdministratorController::class,'principleView']);



// Principle urls
Route::get('/paddTeacher',[PrincipleController::class,'padd_teacher']);
Route::get('/pAddTeacher',[PrincipleController::class,'paddTeacher']);
Route::get('/pshowTeacher',[PrincipleController::class,'pshowTeacher']);
Route::get('/pshowTeacherView/{id}',[PrincipleController::class,'pteacherView']);

Route::get('/paddStudent',[PrincipleController::class,'padd_student']);
Route::get('/pAddStudent',[PrincipleController::class,'paddStudent']);
Route::get('/pshowStudent',[PrincipleController::class,'pshowStudent']);
Route::get('/pshowStudentView/{id}',[PrincipleController::class,'pstudentView']);


Route::get('/paddclass',[PrincipleController::class,'padd_class']);
Route::get('/pAddClass',[PrincipleController::class,'paddClass']);
Route::get('/pshowClass',[PrincipleController::class,'pshowClass']);
Route::get('/pshowClassView/{id}',[PrincipleController::class,'pclassView']);




Route::get('/paddsubject',[PrincipleController::class,'padd_subject']);
Route::get('/pAddSubject',[PrincipleController::class,'paddSubject']);
Route::get('/pshowSubject',[PrincipleController::class,'pshowSubject']);
Route::get('/pshowSubjectView/{id}',[PrincipleController::class,'psubjectView']);



Route::get('/paddduty',[PrincipleController::class,'padd_duty']);
Route::get('/pAddDuty',[PrincipleController::class,'paddDuty']);
Route::get('/pshowDuty',[PrincipleController::class,'pshowDuty']);
Route::get('/pshowDutyView/{id}',[PrincipleController::class,'pdutyView']);


Route::get('/paddfee',[PrincipleController::class,'padd_fee']);
Route::get('/pAddFee',[PrincipleController::class,'paddFee']);
Route::get('/ppshowFee',[PrincipleController::class,'ppshowFee']);
Route::get('/upshowFee',[PrincipleController::class,'upshowFee']);
Route::get('/pshowFeeView/{id}',[PrincipleController::class,'pFeeView']);





//teacher urls

Route::get('/attdances',[TeacherContoller::class,'attdance']);
Route::get('/Dairy',[TeacherContoller::class,'Dairy']);
Route::get('/dairy/{id}',[TeacherContoller::class,'adddairy']);
Route::get('/attdance',[TeacherContoller::class,'attdances']);
Route::get('/uploadd',[TeacherContoller::class,'uploadd']);

// student urls
Route::get('s/Dairy',[StudentController::class,'Dairy']);
Route::get('s/attdances',[StudentController::class,'attdances']);
Route::get('s/fee',[StudentController::class,'fee']);



Route::get('/paddnoti',[PrincipleController::class,'padd_noti']);
Route::post('/pAddNoti',[PrincipleController::class,'paddNoti']);
Route::get('/pshowNoti',[PrincipleController::class,'pshowNoti']);
Route::get('/pshowNotiiView/{id}',[PrincipleController::class,'pNotiView']);




Route::get('/paddexpences',[PrincipleController::class,'padd_expences']);
Route::get('/pAddExpences',[PrincipleController::class,'paddExpences']);
Route::get('/pshowExpences',[PrincipleController::class,'pshowExpences']);
Route::get('/pshowExpencesView/{id}',[PrincipleController::class,'pExpencesView']);


Route::get('/paddsalary',[PrincipleController::class,'padd_salary']);
Route::get('/pAddSalary',[PrincipleController::class,'paddSalary']);
Route::get('/pshowSalary',[PrincipleController::class,'pshowSalary']);
Route::get('/pshowSalaryView/{id}',[PrincipleController::class,'pSalaryView']);




//accouant url









Route::get('/apaddfee',[AccouantController::class,'padd_fee']);
Route::get('/apAddFee',[AccouantController::class,'paddFee']);
Route::get('/appshowFee',[AccouantController::class,'ppshowFee']);
Route::get('/aupshowFee',[AccouantController::class,'upshowFee']);
Route::get('/apshowFeeView/{id}',[AccouantController::class,'pFeeView']);












Route::get('/apaddexpences',[AccouantController::class,'padd_expences']);
Route::get('/apAddExpences',[AccouantController::class,'paddExpences']);
Route::get('/apshowExpences',[AccouantController::class,'pshowExpences']);
Route::get('/apshowExpencesView/{id}',[AccouantController::class,'pExpencesView']);


Route::get('/apaddsalary',[AccouantController::class,'padd_salary']);
Route::get('/apAddSalary',[AccouantController::class,'paddSalary']);
Route::get('/apshowSalary',[AccouantController::class,'pshowSalary']);
Route::get('/apshowSalaryView/{id}',[AccouantController::class,'pSalaryView']);
