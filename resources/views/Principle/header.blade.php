<!doctype html>
    <html lang="en">
        <base href="/public">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="This is an example dashboard created using build-in elements and components.">
        <meta name="msapplication-tap-highlight" content="no">

    <link href="./main.css" rel="stylesheet"></head>
    <body>



                  <div class="app-main">
                    <div class="app-sidebar sidebar-shadow">
                        <div class="app-header__logo">
                            <div class="logo-src"></div>
                            <div class="header__pane ml-auto">
                                <div>
                                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="app-header__mobile-menu">
                            <div>
                                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="app-header__menu">
                            <span>
                                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                    <span class="btn-icon-wrapper">
                                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                                    </span>
                                </button>
                            </span>
                        </div>    <div class="scrollbar-sidebar">
                            <div class="app-sidebar__inner">
                                <ul class="vertical-nav-menu">
                                    <li class="app-sidebar__heading">Dashboards</li>
                                    <li>
                                        <a href="{{url('dashboard')}}" class="mm-active">
                                            <i class="metismenu-icon pe-7s-rocket"></i>
                                            Dashboard
                                        </a>
                                    </li>

                                    <li class="app-sidebar__heading">Teacher</li>
                                    <li>
                                        <a href="{{url('paddTeacher')}}">
                                            <i class="metismenu-icon pe-7s-add-user">
                                            </i>Add Teacher
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('pshowTeacher')}}">
                                            <i class="metismenu-icon pe-7s-drawer">
                                            </i>Teacher's list
                                        </a>
                                    </li>



                                    <li class="app-sidebar__heading">Student</li>
                                    <li>
                                        <a href="{{url('paddStudent')}}">
                                            <i class="metismenu-icon pe-7s-add-user">
                                            </i>Add Student
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('pshowStudent')}}">
                                            <i class="metismenu-icon pe-7s-drawer">
                                            </i>Student's list
                                        </a>
                                    </li>


                                    <li class="app-sidebar__heading">Classes</li>
                                    <li>
                                        <a href="{{url('paddclass')}}">
                                            <i class="metismenu-icon pe-7s-add-user">
                                            </i>Add Class
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('pshowClass')}}">
                                            <i class="metismenu-icon pe-7s-drawer">
                                            </i>Class's list
                                        </a>
                                    </li>

                                    <li class="app-sidebar__heading">Notifactions</li>
                                    <li>
                                        <a href="{{url('paddnoti')}}">
                                            <i class="metismenu-icon pe-7s-add-user">
                                            </i>Add Notifactions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('pshowNoti')}}">
                                            <i class="metismenu-icon pe-7s-drawer">
                                            </i>Notifaction's list
                                        </a>
                                    </li>


                                    <li class="app-sidebar__heading">Subject</li>
                                    <li>
                                        <a href="{{url('paddsubject')}}">
                                            <i class="metismenu-icon pe-7s-add-user">
                                            </i>Add Subject
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('pshowSubject')}}">
                                            <i class="metismenu-icon pe-7s-drawer">
                                            </i>Subject's list
                                        </a>
                                    </li>
                                    <li class="app-sidebar__heading">Fee</li>
                                    <li>
                                        <a href="{{url('paddfee')}}">
                                            <i class="metismenu-icon pe-7s-add-user">
                                            </i>Add Fee
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('ppshowFee')}}">
                                            <i class="metismenu-icon pe-7s-drawer">
                                            </i>Paid Fee list
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('upshowFee')}}">
                                            <i class="metismenu-icon pe-7s-drawer">
                                            </i>Unpaid Fee list
                                        </a>
                                    </li>
                                    <li class="app-sidebar__heading">Expences</li>
                                    <li>
                                        <a href="{{url('paddexpences')}}">
                                            <i class="metismenu-icon pe-7s-add-user">
                                            </i>Add Expences
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('pshowExpences')}}">
                                            <i class="metismenu-icon pe-7s-drawer">
                                            </i>Expences's list
                                        </a>
                                    </li>
                                    <li class="app-sidebar__heading">Staff salary</li>
                                    <li>
                                        <a href="{{url('paddsalary')}}">
                                            <i class="metismenu-icon pe-7s-add-user">
                                            </i>Add salary
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('pshowSalary')}}">
                                            <i class="metismenu-icon pe-7s-drawer">
                                            </i>salary's list
                                        </a>
                                    </li>



                                </ul>
                            </div>
                        </div>
