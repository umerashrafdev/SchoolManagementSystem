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
                                        <a href="{{url('addTeacher')}}">
                                            <i class="metismenu-icon pe-7s-add-user">
                                            </i>Add Teacher
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('showTeacher')}}">
                                            <i class="metismenu-icon pe-7s-drawer">
                                            </i>Teacher's list
                                        </a>
                                    </li>

                                    <li class="app-sidebar__heading">Account</li>
                                    <li>
                                        <a href="{{url('addAccount')}}">
                                            <i class="metismenu-icon pe-7s-add-user">
                                            </i>Add Accountant
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('showAccount')}}">
                                            <i class="metismenu-icon pe-7s-drawer">
                                            </i>Accountant's list
                                        </a>
                                    </li>

                                    <li class="app-sidebar__heading">Student</li>
                                    <li>
                                        <a href="{{url('addStudent')}}">
                                            <i class="metismenu-icon pe-7s-add-user">
                                            </i>Add Student
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('showStudent')}}">
                                            <i class="metismenu-icon pe-7s-drawer">
                                            </i>Student's list
                                        </a>
                                    </li>



                                    <li class="app-sidebar__heading">Staff</li>
                                    <li>
                                        <a href="{{url('addStaff')}}">
                                            <i class="metismenu-icon pe-7s-add-user">
                                            </i>Add Staff
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('showStaff')}}">
                                            <i class="metismenu-icon pe-7s-drawer">
                                            </i>Staff's list
                                        </a>
                                    </li>

                                    <li class="app-sidebar__heading">Principle</li>
                                    <li>
                                        <a href="{{url('addPrinciple')}}">
                                            <i class="metismenu-icon pe-7s-add-user">
                                            </i>Add Principle
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('showPrinciple')}}">
                                            <i class="metismenu-icon pe-7s-drawer">
                                            </i>Principle's list
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </div>
