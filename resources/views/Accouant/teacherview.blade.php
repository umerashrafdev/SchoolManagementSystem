<x-app-layout>
    @include('Accouant.header')

</div>    <div class="app-main__outer">

    <div>
        <h1>Name: {{$data->name}}</h1>
    </div>
    <div>
        <h1>father name: {{$data->fname}}</h1>
    </div>
    <div>
        <h1>email: {{$data->email}}</h1>
    </div>
    <div>
        <h1>role: {{$data->usertype}}</h1>
    </div>
    <div>
        <h1>phone: {{$data->phn}}</h1>
    </div>

</x-app-layout>
