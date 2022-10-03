<x-app-layout>
    @include('SuperAdmin.header')
</div>    <div class="app-main__outer">
    <div class="tab-content container">
        @if(Session::has('mes'))
<p class="alert alert-info">{{ Session::get('mes') }}</p>
@endif

        <div class="float-right pr-5 pt-5 pb-5">
            <a href="{{url('/CLass-form')}}" class="btn btn-primary">New Class</a>
        </div>
        <table class="table ml-5 mr-5">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Code</th>

      <th scope="col">Date</th>

      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tr >

      @foreach ($data as $inquery)
    <tr >



        <td>{{$inquery->name}}</td>
        <td>{{$inquery->code}}</td>

        <td>{{$inquery->created_at}}</td>

        <td>{{$inquery->class_teacher_id}}</td>
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
