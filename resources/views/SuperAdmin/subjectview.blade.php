<x-app-layout>
    @include('SuperAdmin.header')

</div>    <div class="app-main__outer">

    <div>
        <h1>Name: {{$data->title}}</h1>
    </div>

    <div>
        <h1>teacher: {{$data->teacher}}</h1>
    </div>
    <div>
        <h1>class: {{$data->class}}</h1>
    </div>
    <div>
        <h1>start time: {{$data->starttime}}</h1>
    </div>
    <div>
        <h1>end time: {{$data->endtime}}</h1>
    </div>
<a href="{{url('a/delSubject',$data->id)}}"> <button class="btn btn-danger">Delete</button></a>

    <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Add admin</h5>
                    <form class="" action="{{url('a/editSubject')}}">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="name" class="">Subject title</label><input name="title" id="name" placeholder="enter your name" type="text" class="form-control"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="teacher" class="">Class</label><select name="class" id="">

                                @foreach ($data2 as $i)

                                <option value="{{$i->class}}">{{$i->class}}</option>


                                @endforeach

                                </select></div>
                                </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="teacher" class="">Class Teachers</label><select name="teacher" id="">

                                @foreach ($data1 as $i)
                                @if ($i->usertype=='teacher')
                                <option value="{{$i->name}}">{{$i->name}}</option>
                                @endif

                                @endforeach

                                </select></div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Start time</label>
                                    <input type="time" name="starttime" id="">
                                </div>
                                <div class="col-md-6">
                                    <label for="">end time</label>
                                    <input type="time" name="endtime" id="">
                                </div>

                        <button class="mt-2 btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>


</x-app-layout>
