<x-app-layout>
    @include('SuperAdmin.header')
</div>    <div class="app-main__outer">
    <div class="tab-content container">
        @if(Session::has('mes'))
<p class="alert alert-info">{{ Session::get('mes') }}</p>
@endif

        <div class="float-right pr-5 pt-5 pb-5">
            <a href="{{url('/add/Subject')}}" class="btn btn-primary">New Subject</a>
        </div>
        <table class="table ml-5 mr-5">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">clsss</th>
      <th scope="col">Start Time</th>
      <th scope="col">End time</th>

      <th scope="col">Date</th>

      <th scope="col">Teacher</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tr >

      @foreach ($data as $inquery)
    <tr >



        <td>{{$inquery->title}}</td>
        <td>{{$inquery->class}}</td>
        <td>{{$inquery->starttime}}</td>
        <td>{{$inquery->endtime}}</td>

        <td>{{$inquery->created_at}}</td>

        <td>{{$inquery->teacher}}</td>
        <td>

            <form action="{{url('/add/Subject')}}" >
                @csrf
                <input type="number" hidden='true' value="{{$inquery->id}}" name="id">
                <button type="submit" class="btn btn-primary">Add Subject</button>
            </form>
        </td>
    </tr>
@endforeach

  </tr>
</table>

    </div>
</div>
</x-app-layout>
