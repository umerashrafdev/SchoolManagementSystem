<x-app-layout>
@include('SuperAdmin.header')
                    </div>    <div class="app-main__outer">
                        <div class="app-main__inner">
                            <div class="app-page-title">
                                         <div class="row">
                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content bg-midnight-bloom">
                                        <div class="widget-content-wrapper text-white">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Total Expense</div>
                                                <div class="widget-subheading">over all expenses</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-white"><span>PKR. {{$total}}</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content bg-arielle-smile">
                                        <div class="widget-content-wrapper text-white">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Students</div>
                                                <div class="widget-subheading">Total Students</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-white"><span>{{$count}}</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content bg-grow-early">
                                        <div class="widget-content-wrapper text-white">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Credit</div>
                                                <div class="widget-subheading">Pending fee</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-white"><span>{{$credit}}</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Total Orders</div>
                                                    <div class="widget-subheading">Last Month expenses</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-success">{{$mtotal}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Income</div>
                                                    <div class="widget-subheading">Expected totals</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-focus">$147</div>
                                                </div>
                                            </div>
                                            <div class="widget-progress-wrapper">
                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                                                </div>
                                                <div class="progress-sub-label">
                                                    <div class="sub-label-left">Last Month Expenses</div>
                                                    <div class="sub-label-right">{{$mtotal}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-header">Active students
                                            <div class="btn-actions-pane-right">

                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                <thead>
                                                <tr>

                                                    <th class="text-center">Name</th>
                                                    <th class="text-center">Class</th>
                                                    <th class="text-center">roll no</th>
                                                    <th class="text-center">Phone NO</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($sdata as $i)
                                                    @if ($i->usertype == 'student')



                                                <tr>


                                                    <td class="text-center">{{$i->name}}</td>
                                                    <td class="text-center">
                                                        <div class="badge badge-warning">{{$i->class}}</div>
                                                    </td>
                                                    <td class="text-center">{{$i->roll}}</td>
                                                    <td class="text-center">
                                                       {{$i->phn}}
                                                    </td>
                                                </tr>
                                                @endif
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                           </div>
                    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
            </div>
        </div>
    <script type="text/javascript" src="{{asset('/assets/scripts/main.js')}}"></script></body>
    </html>

</x-app-layout>

