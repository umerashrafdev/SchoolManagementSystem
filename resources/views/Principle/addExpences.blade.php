<x-app-layout>
    @include('Principle.header')
</div>    <div class="app-main__outer">
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Add Fee</h5>
                    <form class="" action="{{url('pAddExpences')}}">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="name" class="">Expences</label><input name="expe" id="name" placeholder="enter expence" type="text" class="form-control"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="name" class="">Reason</label><br><textarea name="reason" id="" cols="80" rows="10"></textarea></div>
                            </div>
                        </div>
                        <div class="form-row">







                        <button class="mt-5 btn btn-primary">Add Expence</button>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
</x-app-layout>
