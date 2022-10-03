@include('Student.navbar')
<div class="row">
@foreach ($fee as $i)
@if ($i->sid == $user->id)
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$i->fee}}</h5>

      <p class="card-text">{{$i->month}}</p>
      <p class="card-text">{{$i->enddate}}</p>

    </div>
  </div>
@endif



@endforeach
</div>
