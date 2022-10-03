<x-app-layout>
    @include('SuperAdmin.header')
</div>    <div class="app-main__outer">

    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Teacher's list</h5>
                <table class="mb-0 table table-bordered">
                    <thead>
                    <tr>

                        <th>Name</th>
                        <th>phone number</th>
                        <th>email</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $i)
                    @if ($i->usertype == "teacher")
                    <tr>



                        <td>{{$i->name}}</td>
                        <td>{{$i->phn}}</td>
                        <td>{{$i->email}}</td>
                        <td><a href="{{url('a/showTeacherView',$i->id)}}">View</a></td>

                    </tr>
                    @endif

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
