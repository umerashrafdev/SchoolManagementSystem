@include('Teacher.navbar')

@foreach ($class as $i)
    @if ($i->teacher == $user->name)

    <a href="{{url('dairy',$i->id)}}"><h1>{{$i->title}} ({{$i->class}})</h1></a>

    @endif
@endforeach
