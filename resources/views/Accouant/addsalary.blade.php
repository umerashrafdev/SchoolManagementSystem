<x-app-layout>
    @include('Accouant.header')
</div>    <div class="app-main__outer">
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Add Fee</h5>
                    <form class="" action="{{url('pAddSalary')}}">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="name" class="">Invoice no</label><input name="no" id="name" placeholder="enter Invoice no" type="text" class="form-control"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="name" class="">Fee</label><input name="fee" id="name" placeholder="enter Fee" type="text" class="form-control"></div>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="student" class="">Student</label><select name="student" id="">

                                @foreach ($data as $i)
                                @if ($i->usertype!='student'&&$i->usertype!='principle')
                                <option value="{{$i->id}}">{{$i->name}} ( {{$i->usertype}} )</option>
                                @endif

                                @endforeach

                                </select></div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Month</label>
                                    <input type="month" name="month" id="">
                                </div>
                                <div class="col-md-6">
                                    <label for="">paid date</label>
                                    <input type="date" name="date" id="">
                                </div>


                                <div class="col-md-6 mt-5">
                                    <div class="position-relative form-group"><label for="student" class="">Status</label><select name="status" id="">

                                    <option value="paid">paid</option>
                                    <option value="unpaid">unpaid</option>

                                    </select></div>
                                </div>
                        <button class="mt-5 btn btn-primary">Add salary</button>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
</x-app-layout>
