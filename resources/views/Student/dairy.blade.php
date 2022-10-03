@include('Student.navbar')
<div class="row">
@foreach ($dairy as $i)
@if ($i->cid == $user->class)
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$i->title}}</h5>

      <p class="card-text">{{$i->des}}</p>

    </div>
  </div>
@endif



@endforeach
</div>
