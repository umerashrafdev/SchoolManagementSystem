<x-app-layout>
    @include('SuperAdmin.header')
</div>    <div class="app-main__outer">
    <div class="tab-content container">
        @if(Session::has('mes'))
<p class="alert alert-info">{{ Session::get('mes') }}</p>
@endif
<br><br><br>
@if ($data !=null)


    <form action="addmission-fee-submit" method="post" enctype="multipart/form-data">
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
    <label for="exampleInputEmail1">Class</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->section}}" name="class" placeholder="Enter Student name" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Addmission Fee</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="Afee" placeholder="Enter fee" >

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Uniform Fee</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="uniformFee" placeholder="Enter uniform charges" >

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Course/books Fee</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="BookFee" placeholder="Enter Books Fee" >

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">First aid fee</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="FirstFee" placeholder="Enter Fairst Aid Fee" >

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Exam Fee</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="ExamFee" placeholder="Exam Fee" >

  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Copies Fee</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="cFee" placeholder="Copies Fee" >

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Other Fee</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="ofee" placeholder="Other charges" >

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Discount</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="discount" placeholder="Discount">

  </div>
  <button type="submit" class="btn btn-primary">Save</button>
    </form>
@else
       <form action="addmission-fee-submit" method="post" enctype="multipart/form-data">
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
    <label for="exampleInputEmail1">Class</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->section}}" name="class" placeholder="Enter Student name" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Addmission Fee</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="Afee" placeholder="Enter fee" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Uniform Fee</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="uniformFee" placeholder="Enter uniform charges" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Course/books Fee</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="BookFee" placeholder="Enter Books fee" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">First aid fee</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="FirstFee" placeholder="Enter First Aid Fee" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Exam Fee</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="ExamFee" placeholder="Exam Fee" required>

  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Copies Fee</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="cFee" placeholder="Copies Fee" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Other Charges</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="ofee" placeholder="Other Charges" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Discount</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="discount" placeholder="Discount" required>

  </div>
  <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endif


    </div>
</div>
</x-app-layout>
