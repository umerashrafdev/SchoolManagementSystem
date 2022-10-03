<x-app-layout>
    @include('Administrator.header')

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
    <a href="{{url('aa/delAdmin',$data->id)}}"> <button class="btn btn-danger">Delete</button></a>

    <div class="card-body"><h5 class="card-title">Edit admin</h5>
        <form class="" action="{{url('aa/AddAdmin',$data->id)}}">
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="name" class="">First name</label><input name="name" id="name" placeholder="enter your name" value="{{$data->name}}" type="text" class="form-control"></div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="fname" class="">Last name</label><input name="fname" id="fname" placeholder="enter your last name" type="text"
                                                                                                                             class="form-control"></div>
                                                                                                                            </div>
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="phone" class="">Phone no</label><input name="phn" id="phone" placeholder="enter your phone no"value="{{$data->phn}}" type="text"
                                                                                                                             class="form-control"></div>
                </div>

                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Email</label><input name="email" id="exampleEmail11" placeholder="with a placeholder" value="{{$data->email}}" type="email" class="form-control"></div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="examplePassword11" class="">Password</label><input name="password" id="examplePassword11" placeholder="password placeholder" type="password" value="{{$data->password}}"
                                                                                                                             class="form-control"></div>
                </div>
            </div>



            <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Check me out</label></div>
            <button class="mt-2 btn btn-primary">edit</button>
        </form>
    </div>

</x-app-layout>
