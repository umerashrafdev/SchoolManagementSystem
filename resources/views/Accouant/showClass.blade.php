<x-app-layout>
    @include('Accouant.header')
</div>    <div class="app-main__outer">

    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Student list</h5>
                <table class="mb-0 table table-bordered">
                    <thead>
                    <tr>

                        <th>Class</th>

                        <th>Class Teacher</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $i)

                    <tr>



                        <td>{{$i->class}}</td>
                        <td>{{$i->classTeacher}}</td>

                        <td><a href="{{url('pshowClassView',$i->id)}}">View</a></td>

                    </tr>


                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
