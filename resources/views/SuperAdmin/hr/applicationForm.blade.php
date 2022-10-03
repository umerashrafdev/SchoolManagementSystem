<x-app-layout>
    @include('SuperAdmin.header')
</div>    <div class="app-main__outer">
    <div class="tab-content container">
        @if(Session::has('mes'))
<p class="alert alert-info">{{ Session::get('mes') }}</p>
@endif
<br><br><br>
@if ($data !=null)


    <form action="/add/staff-submit" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->name}}" name="name" placeholder="Enter Student name" required>

  </div>
  <input name="inquery_id" type="number" hidden value="{{$data->id}}"/>
  <div class="form-group">
    <label for="exampleInputEmail1">Father Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->fname}}" name="fname" placeholder="Enter Student name" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone no</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->phn}}" name="phn" placeholder="Enter Student name" required>

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
    <label for="exampleInputEmail1">salary</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="pay" placeholder="Enter fee" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Student b-form/cnic</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="sbform" placeholder="Enter Student b-form/cnic" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Father/Mother cnic</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="fcnic" placeholder="Enter Father/Mother cnic" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Father Ocupation</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="fjob" placeholder="Enter Father Ocupation" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Emergance no</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="ephn" placeholder="Emergance" required>

  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Student Blood Group</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="sblood" placeholder="Blood Group" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Student Picture</label>
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="img" placeholder="image" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Discount</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="discount" placeholder="Discount" required>

  </div>
  <button type="submit" class="btn btn-primary">Save</button>
    </form>
@else
       <form action="addmission-submit" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="name" placeholder="Enter Student name" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Father Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fname" placeholder="Enter Student name" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone no</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="phn" placeholder="Enter Student name" required>

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
    <label for="exampleInputEmail1">salary</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="pay" placeholder="Enter fee" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Student b-form/cnic</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="sbform" placeholder="Enter Student b-form/cnic" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Father/Mother cnic</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="fcnic" placeholder="Enter Father/Mother cnic" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Father Ocupation</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="fjob" placeholder="Enter Father Ocupation" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Emergance no</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="ephn" placeholder="Emergance" required>

  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Student Blood Group</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="sblood" placeholder="Blood Group" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Student Picture</label>
    <input type="file[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="img" placeholder="image" required>

  </div>

  <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endif


    </div>
</div>
</x-app-layout>
