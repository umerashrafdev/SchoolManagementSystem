<x-app-layout>
    @include('SuperAdmin.header')
</div>    <div class="app-main__outer">

    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Student list</h5>
                <table class="mb-0 table table-bordered">
                    <thead>
                    <tr>

                        <th>Title</th>
                        <th>descripation</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($data as $i)


                    <tr>



                        <td>


                        {{$i->title}}</td>


                        <td>{{$i->des}}</td>



                    </tr>


                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
