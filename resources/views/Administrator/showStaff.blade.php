<x-app-layout>
    @include('Administrator.header')
</div>    <div class="app-main__outer">

    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">staff list</h5>
                <table class="mb-0 table table-bordered">
                    <thead>
                    <tr>

                        <th>Name</th>
                        <th>phone number</th>
                        <th>email</th>
                        <th>role</th>

                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $i)
                    @if ($i->usertype != "student" && $i->usertype != "admin" && $i->usertype != "administator" )
                    <tr>



                        <td>{{$i->name}}</td>
                        <td>{{$i->phn}}</td>
                        <td>{{$i->usertype}}</td>
                        <td>{{$i->email}}</td>
                        <td><a href="{{url('showStaffView',$i->id)}}">View</a></td>

                    </tr>
                    @endif

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
