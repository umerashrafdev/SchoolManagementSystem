<x-app-layout>
    @include('SuperAdmin.header')

</div>    <div class="app-main__outer">
    <div class="tab-content container">
 @if(Session::has('mes'))
<p class="alert alert-info">{{ Session::get('mes') }}</p>
@endif
        <div class="float-right pr-5 pt-5 pb-5">

        </div>
<br>
<br>
<br>
<form action="{{url('add/subject-submit')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Subject Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Enter Class title" required>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">CLass code</label>
    <select name="code">
        <option value="">Select Class Code</option>
        @foreach ( $data as $i)
            <option value="{{$i->id}}">{{$i->name}}</option>
        @endforeach
    </select>


  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Teacher</label>
    <input type="number" class="form-control" name="teacher" id="exampleInputPassword1" placeholder="Enter teacher" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" class="form-control" name="des" id="exampleInputPassword1" placeholder="Enter description" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Start time</label>
    <input type="time" class="form-control" name="stime" id="exampleInputPassword1" placeholder="Enter description" required>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">End Time</label>
    <input type="time" class="form-control" name="etime" id="exampleInputPassword1" placeholder="Enter description" required>
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>


    </div>
</div>
</x-app-layout>
