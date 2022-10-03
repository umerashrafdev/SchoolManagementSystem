@include('Teacher.navbar')
<form action="{{url('uploadd')}}">
    <div class="form-group">
      <label for="exampleFormControlInput1"><h1>Title</h1></label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="Title">
    </div>

    <input type="text" name="id" value="{{$class}}" hidden id="">
    <div class="form-group">
      <label for="exampleFormControlTextarea1"><h1>Description</h1></label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="des" rows="3"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="ADD">
      </div>
  </form>
