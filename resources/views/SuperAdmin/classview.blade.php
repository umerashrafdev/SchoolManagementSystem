<x-app-layout>
    @include('SuperAdmin.header')

</div>    <div class="app-main__outer">


    <div>
        <h1>class: {{$data->class}}</h1>
    </div>
    <div>
        <h1>Class Teacher: {{$data->classTeacher}}</h1>
    </div>
<a href="{{url('a/delClass',$data->id)}}"> <button class="btn btn-danger">Delete</button></a>

    <div class="card-body"><h5 class="card-title">Edit admin</h5>
        <form class="" action="{{url('ae/AddClass',$data->id)}}">
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="name" class="">Class</label><input name="class" id="name" placeholder="enter your name" value="{{$data->name}}" type="text" class="form-control"></div>
                </div>
                <div class="col-md-6">


                <div class="col-md-6">
                                <div class="position-relative form-group"><label for="teacher" class="">Class Teachers</label><select name="teacher" id="">

                                @foreach ($data1 as $i)
                                @if ($i->usertype=='teacher')
                                <option value="{{$i->name}}">{{$i->name}}</option>
                                @endif

                                @endforeach

                                </select></div>
                                </div>

            </div>




            <button class="mt-2 btn btn-primary">edit</button>
        </form>
    </div>


</x-app-layout>
