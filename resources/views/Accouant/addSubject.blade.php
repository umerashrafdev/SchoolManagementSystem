<x-app-layout>
    @include('Accouant.header')
</div>    <div class="app-main__outer">
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Add admin</h5>
                    <form class="" action="{{url('pAddSubject')}}">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="name" class="">Subject title</label><input name="title" id="name" placeholder="enter your name" type="text" class="form-control"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="teacher" class="">Class</label><select name="class" id="">

                                @foreach ($data2 as $i)

                                <option value="{{$i->class}}">{{$i->class}}</option>


                                @endforeach

                                </select></div>
                                </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="teacher" class="">Class Teachers</label><select name="teacher" id="">

                                @foreach ($data as $i)
                                @if ($i->usertype=='teacher')
                                <option value="{{$i->name}}">{{$i->name}}</option>
                                @endif

                                @endforeach

                                </select></div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Start time</label>
                                    <input type="time" name="starttime" id="">
                                </div>
                                <div class="col-md-6">
                                    <label for="">end time</label>
                                    <input type="time" name="endtime" id="">
                                </div>

                        <button class="mt-2 btn btn-primary">Add Class</button>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
</x-app-layout>
