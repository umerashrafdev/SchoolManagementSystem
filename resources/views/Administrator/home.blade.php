<x-app-layout>
@include('Administrator.header')
                    </div>
                    <div style="padding-left:50px ">
                        <div><h1>Genral notifaction</h1></div>
                        @foreach ($data as $i)
                        @if ($i->forAll == True)
                        <h2>{{$i->title}}</h2>
                        <h3>{{$i->title}}</h3>
                        @if ($i->img)
                            <img src="/public/image/{{$i->img}}" alt="">
                        @endif
                        @endif


                        @endforeach
                        <div style="border:soild black  1px "><h1 >Important notifaction</h1></div>
                        @foreach ($data as $i)
                        @if ($i->forAdmin == True)
                        <h2>{{$i->title}}</h2>
                        <h3>{{$i->title}}</h3>
                        @if ($i->img)
                            <img src="/public/image/{{$i->img}}" alt="">
                        @endif
                        @else
                        <h2>no Notifactions</h2>
                        @endif



                        @endforeach

                    </div>
    <script type="text/javascript" src="{{asset('/assets/scripts/main.js')}}"></script></body>
    </html>

</x-app-layout>

