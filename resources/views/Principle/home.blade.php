<x-app-layout>
@include('Principle.header')
                    </div>


                    <div class="app-main__outer">
                        <div style="padding-left:50px ">
                            <div><h1>Genral notifaction</h1></div>
                            @foreach ($data as $i)
                            @if ($i->forAll == True)
                            <h2>{{$i->title}}</h2>
                            <h3>{{$i->title}}</h3>
                            @if ($i->img)
                                <img src="/public/image/{{$i->img}}" alt="">
                            @endif
                            @endif


                            @endforeach
                            <div style="border:soild black  1px "><h1 >Important notifaction</h1></div>
                            @foreach ($data as $i)
                            @if ($i->forAdmin == True)
                            <h2>{{$i->title}}</h2>
                            <h3>{{$i->title}}</h3>
                            @if ($i->img)
                                <img src="/public/image/{{$i->img}}" alt="">
                            @endif
                            @else
                            <h2>no Notifactions</h2>
                            @endif



                            @endforeach

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
                    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
            </div>
        </div>
    <script type="text/javascript" src="{{asset('/assets/scripts/main.js')}}"></script></body>
    </html>

</x-app-layout>

