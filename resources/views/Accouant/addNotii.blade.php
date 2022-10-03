<x-app-layout>
    @include('Accouant.header')
</div>    <div class="app-main__outer">
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Add admin</h5>
                    <form class="" action="{{url('pAddNoti')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="position-relative form-group"><label for="name" class="">Title</label><input name="title" id="name" placeholder="enter your name" type="text" class="form-control"></div>
                            </div>
                            <div class="col-md-12">
                                <div class="position-relative form-group"><label for="name" class="">Description</label><br> <textarea name="des" id="" cols="70" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="name" class="">Image</label><br><input type="file" name="img" id=""></div>
                            </div>
                            <div class="col-md-12">
                                <div class="position-relative form-group"><input type="checkbox" name="forall" id=""><label for="name" class="">For All</label></div>
                            </div>
                            <div class="col-md-12">
                                <div class="position-relative form-group"><input type="checkbox" name="fors" id=""><label for="name" class="">For Student</label></div>
                            </div>
                            <div class="col-md-12">
                                <div class="position-relative form-group"><input type="checkbox" name="fort" id=""><label for="name" class="">For Teacher</label></div>
                            </div>
                            <div class="col-md-12">
                                <div class="position-relative form-group"><input type="checkbox" name="fora" id=""><label for="name" class="">For Accountant</label></div>
                            </div>
                            <div class="col-md-12">
                                <div class="position-relative form-group"><input type="checkbox" name="forp" id=""><label for="name" class="">For principle</label></div>
                            </div>
                        </div>

                                </div>


                        <button class="mt-2 btn btn-primary">Add Notifaction</button>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
</x-app-layout>
