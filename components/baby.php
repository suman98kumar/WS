<div class="modal fade" id="babyModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Rice Ceremony Enquiry</h4>
                <button type="button btn-primary" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" style="text-align:left; background-color :#f3f1f1;border: 1px solid darkred">
                <form id="frmBaby" class="form-horizontal">
                    <!-- <label class="control-label font-weight-bold">Name</label> -->
                    <div class="form-group required-field-block">

                        <div>
                            <input type="text" class="form-control input-lg" name="name" value="" placeholder="Name" required>
                        </div>
                        <div class="required-icon">
                            <div class="text">*</div>
                        </div>
                    </div>
                    <!-- <label class="control-label font-weight-bold">Email</label> -->
                    <div class="form-group required-field-block">
                        <div>
                            <input type="email" class="form-control input-lg" name="email" placeholder="Email" required>
                        </div>
                        <div class="required-icon">
                            <div class="text">*</div>
                        </div>
                    </div>
                    <!-- <label class="control-label font-weight-bold">Contact Number</label> -->
                    <div class="form-group required-field-block">
                        <div>
                            <input type="text" class="form-control input-lg" name="contact" placeholder="Contact Number (Optional)">
                        </div>
                    </div>
                    <!-- <label class="control-label font-weight-bold">Details</label> -->
                    <div class="form-group required-field-block">
                        <div>
                            <textarea class="form-control" rows="5" placeholder="Your Enquiry" name="message"></textarea>
                        </div>
                    </div>

                    <h6>Choose our services</h6>
                    <hr>
                    <div class="form-group row ">
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="Photo" id="BabyPhoto" checked>
                                <label class="custom-control-label" for="BabyPhoto">Photo</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="Video" id="BabyVideo" checked>
                                <label class="custom-control-label" for="BabyVideo">Video</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="Drone" id="BabyDrone">
                                <label class="custom-control-label" for="BabyDrone">Drone</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="Album" id="BabyAlbum" checked>
                                <label class="custom-control-label" for="BabyAlbum">Album</label>
                            </div>
                        </div>
                    </div>

                    <div id="frmBaby_Msg" class="col-12 text-center alert alert-success" style="display:none">
                        <strong>Success!</strong> successfully notified to our team.
                    </div>

                    <div class="modal-footer" style="border-top:0px !important;">
                        <button type="submit" class="btn btn-secondary">Send Query</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>