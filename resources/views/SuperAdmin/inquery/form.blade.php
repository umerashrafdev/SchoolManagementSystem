<x-app-layout>
    @include('SuperAdmin.header')

</div>    <div class="app-main__outer">
    <div class="tab-content container">

        <div class="float-right pr-5 pt-5 pb-5">

        </div>
<br>
<br>
<br>
<form action="{{url('inquery-submit')}}">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Enter Student name" required>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Father name</label>
    <input type="text" class="form-control" name="fname" id="exampleInputPassword1" placeholder="Enter Father name" required>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Class</label>
    <input type="text" class="form-control" name="class" id="exampleInputPassword1" placeholder="Enter class" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="number" class="form-control" name="phn" id="exampleInputPassword1" placeholder="Enter Phone" required>
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>


    </div>
</div>
</x-app-layout>
