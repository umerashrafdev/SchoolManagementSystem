<x-app-layout>
    @include('SuperAdmin.header')
</div>    <div class="app-main__outer">

    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Student list</h5>
                <table class="mb-0 table table-bordered">
                    <thead>
                    <tr>

                        <th>Name</th>
                        <th>month</th>
                        <th>invoice no</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($data as $i)


                    <tr>



                        <td>
                        @foreach ($sdata as $j)
                        @if ($j->id == $i->tid)

                        {{$j->name}}</td>
                        @endif
                        @endforeach
                        <td>{{$i->month}}</td>
                        <td>{{$i->ino}}</td>
                        <td><a href="{{url('showStudentView',$i->id)}}">View</a></td>

                    </tr>


                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
