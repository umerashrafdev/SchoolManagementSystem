@include('Student.navbar')


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

  </table>

  <h1>Last month Attddance</h1>
  <table class="table">
    <thead>
      <tr>

        <th scope="col">First</th>
        <th scope="col">roll</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($lastma as $i)
        <tr>

            <td>{{$i->name}}</td>
            <td>{{$i->roll}}</td>
            <td>{{$i->attdance}}</td>
        </tr>
        @endforeach

    </tbody>

  </table>
</body>
</html>
