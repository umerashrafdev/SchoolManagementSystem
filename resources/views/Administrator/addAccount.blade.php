<x-app-layout>
    @include('Administrator.header')
</div>    <div class="app-main__outer">
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Add principle</h5>
                    <form class="" action="{{url('AddAccount')}}">
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

                        <button class="mt-2 btn btn-primary">Sign in</button>
                    </form>
                </div>
            </div>

        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Grid</h5>
                    <form class="">

                        <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10"><input name="email" id="exampleEmail" placeholder="with a placeholder" type="email" class="form-control"></div>
                        </div>
                        <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10"><input name="password" id="examplePassword" placeholder="password placeholder" type="password" class="form-control"></div>
                        </div>
                        <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Select</label>
                            <div class="col-sm-10"><select name="select" id="exampleSelect" class="form-control"></select></div>
                        </div>
                        <div class="position-relative row form-group"><label for="exampleSelectMulti" class="col-sm-2 col-form-label">Select Multiple</label>
                            <div class="col-sm-10"><select multiple="" name="selectMulti" id="exampleSelectMulti" class="form-control"></select></div>
                        </div>
                        <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Text Area</label>
                            <div class="col-sm-10"><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                        </div>
                        <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">File</label>
                            <div class="col-sm-10"><input name="file" id="exampleFile" type="file" class="form-control-file">
                                <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                            </div>
                        </div>
                        <fieldset class="position-relative row form-group">
                            <legend class="col-form-label col-sm-2">Radio Buttons</legend>
                            <div class="col-sm-10">
                                <div class="position-relative form-check"><label class="form-check-label"><input name="radio2" type="radio" class="form-check-input"> Option one is this and that—be sure to include why it's great</label></div>
                                <div class="position-relative form-check"><label class="form-check-label"><input name="radio2" type="radio" class="form-check-input"> Option two can be something else and selecting it will deselect option
                                    one</label></div>
                                <div class="position-relative form-check disabled"><label class="form-check-label"><input name="radio2" disabled="" type="radio" class="form-check-input"> Option three is disabled</label></div>
                            </div>
                        </fieldset>
                        <div class="position-relative row form-group"><label for="checkbox2" class="col-sm-2 col-form-label">Checkbox</label>
                            <div class="col-sm-10">
                                <div class="position-relative form-check"><label class="form-check-label"><input id="checkbox2" type="checkbox" class="form-check-input"> Check me out</label></div>
                            </div>
                        </div>
                        <div class="position-relative row form-check">
                            <div class="col-sm-10 offset-sm-2">
                                <button class="btn btn-secondary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
