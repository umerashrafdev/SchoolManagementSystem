<x-app-layout>
    @include('SuperAdmin.header')

</div>    <div class="app-main__outer">
    <div class="tab-content container">

        <div class="float-right pr-5 pt-5 pb-5">

        </div>
<br>
<br>
<br>
<form action="{{url('application-submit')}}">
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
    <label for="exampleInputPassword1">Role</label>
    <select name="role">
        <option value="">Select Role</option>
        <option value="admin">Admin</option>
        <option value="teacher">Teacher</option>
        <option value="peon">peon</option>
        <option value="hr">HR</option>
        <option value="accountant">accountant</option>


    </select>
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
