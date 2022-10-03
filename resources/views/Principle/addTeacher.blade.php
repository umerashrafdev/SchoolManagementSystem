<x-app-layout>
    @include('Principle.header')
</div>    <div class="app-main__outer">
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Add Teacher</h5>
                    <form class="" action="{{url('pAddTeacher')}}">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="name" class="">First name</label><input name="name" id="name" placeholder="enter your name" type="text" class="form-control"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="fname" class="">Last name</label><input name="fname" id="fname" placeholder="enter your last name" type="text"
                                                                                                                                         class="form-control"></div>
                                                                                                                                        </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="phone" class="">Phone no</label><input name="phn" id="phone" placeholder="enter your phone no" type="text"
                                                                                                                                         class="form-control"></div>
                            </div>

                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="exampleEmail11" class="">Email</label><input name="email" id="exampleEmail11" placeholder="with a placeholder" type="email" class="form-control"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="examplePassword11" class="">Password</label><input name="password" id="examplePassword11" placeholder="password placeholder" type="password"
                                                                                                                                         class="form-control"></div>
                            </div>
                        </div>

                        <button class="mt-2 btn btn-primary">Add Teacher</button>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
</x-app-layout>
