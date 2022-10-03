<x-app-layout>
    @include('SuperAdmin.header')
</div>    <div class="app-main__outer">
    <div class="tab-content container">
        @if(Session::has('mes'))
<p class="alert alert-info">{{ Session::get('mes') }}</p>
@endif
<br><br><br>



    <form action="added_staff" method="post" enctype="multipart/form-data">
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
    <label for="exampleInputEmail1">Role</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->role}}" name="role" placeholder="Enter Student name" required>

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Gmail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="mail" placeholder="Enter fee" >

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="Password" placeholder="Enter uniform charges" >

  </div>

  <button type="submit" class="btn btn-primary">Save</button>
    </form>



    </div>
</div>
</x-app-layout>
