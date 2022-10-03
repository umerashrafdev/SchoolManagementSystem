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


                                    <li class="app-sidebar__heading">Fee</li>
                                    <li>
                                        <a href="{{url('apaddfee')}}">
                                            <i class="metismenu-icon pe-7s-add-user">
                                            </i>Add Fee
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('appshowFee')}}">
                                            <i class="metismenu-icon pe-7s-drawer">
                                            </i>Paid Fee list
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('aupshowFee')}}">
                                            <i class="metismenu-icon pe-7s-drawer">
                                            </i>Unpaid Fee list
                                        </a>
                                    </li>
                                    <li class="app-sidebar__heading">Expences</li>
                                    <li>
                                        <a href="{{url('apaddexpences')}}">
                                            <i class="metismenu-icon pe-7s-add-user">
                                            </i>Add Expences
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('apshowExpences')}}">
                                            <i class="metismenu-icon pe-7s-drawer">
                                            </i>Expences's list
                                        </a>
                                    </li>
                                    <li class="app-sidebar__heading">Staff salary</li>
                                    <li>
                                        <a href="{{url('apaddsalary')}}">
                                            <i class="metismenu-icon pe-7s-add-user">
                                            </i>Add salary
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('apshowSalary')}}">
                                            <i class="metismenu-icon pe-7s-drawer">
                                            </i>salary's list
                                        </a>
                                    </li>



                                </ul>
                            </div>
                        </div>
