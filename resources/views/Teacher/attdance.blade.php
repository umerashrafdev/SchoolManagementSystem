@include('Teacher.navbar')

<form action="{{url('attdance')}}" method="GET">
    @csrf
    <table class="table">
        <thead>
          <tr>

            <th scope="col">First</th>
            <th scope="col">roll</th>
            <th scope="col">action</th>
          </tr>
        </thead>
@foreach ($class as $class )
@if ($class->classTeacher == $user->name )
@foreach ($data as $i)
@if ($class->class == $i->class)

    <tbody>
      <tr>

        <td>

            <div class="form-group">
                <input type="text" class="form-control" name="name[]" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$i->name}}" hidden>
                <h3>{{$i->name}}</h3>
              </div>
        </td>
        <td><input type="text" name="roll[]" value="{{$i->roll}}" hidden id=""><h3>{{$i->roll}}</h3></td>
        <td>
            <div class="form-group">
                <select name="attdance[]" id="">
                    <option value="present">present</option>
                    <option value="absent">absent</option>
                    <option value="leave">on leave</option>
                </select>
              </div>

        </td>
      </tr>








@endif
@endforeach
@endif
@endforeach

</tbody>
</table>

<button type="submit" class="btn btn-primary">Submit</button>
  </form>


<h1>Today's Attddance</h1>
  <table class="table">
    <thead>
      <tr>

        <th scope="col">First</th>
        <th scope="col">roll</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($tatta as $i)
        <tr>

            <td>{{$i->name}}</td>
            <td>{{$i->roll}}</td>
            <td>{{$i->attdance}}</td>
        </tr>
        @endforeach

    </tbody>


</body>
</html>
