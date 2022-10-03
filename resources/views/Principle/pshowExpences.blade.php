<x-app-layout>
    @include('Principle.header')
</div>    <div class="app-main__outer">

    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Student list</h5>
                <table class="mb-0 table table-bordered">
                    <thead>
                    <tr>

                        <th>expense</th>
                        <th>date</th>
                        <th>reason</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($data as $i)


                    <tr>



                        <td>


                        {{$i->expense}}</td>


                        <td>{{$i->time}}</td>
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
