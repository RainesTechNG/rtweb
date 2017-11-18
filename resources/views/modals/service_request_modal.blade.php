<!-- Large modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="rfs-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="padding-top: 2%;">
        <div class="modal-content">
            <form id="rfs-form" action="{{ route('services.request') }}" method="POST" role="form" data-parsley-validate="">
                {!! csrf_field() !!}
                <input type="hidden" name="rfsService" value="{{ $service }}">
                <div class="modal-header">
                    <h5 class="modal-title">Request for Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="rfsName">Full Name</label>
                                <input type="text" class="form-control" id="rfsName" name="rfsName" aria-describedby="rfsNameHelp" placeholder="Enter your full name">
                            </div>
                            <div class="form-group">
                                <label for="rfsEmail">Email</label>
                                <input type="text" class="form-control" id="rfsEmail" name="rfsEmail" aria-describedby="rfsEmailHelp" placeholder="Enter contact email">
                            </div>
                            <div class="form-group">
                                <label for="rfsPhone">Mobile Number</label>
                                <input type="text" class="form-control" id="rfsPhone" name="rfsPhone" aria-describedby="rfsPhoneHelp" placeholder="Enter phone number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="rfsOrg">Organization's Name</label>
                                <input type="text" class="form-control" id="rfsOrg" name="rfsOrg" placeholder="Enter Company or Business name">
                            </div>
                            <div class="form-group">
                                <label for="rfsOrgAddr">Organization's Address</label>
                                <input type="text" class="form-control" id="rfsOrgAddr" name="rfsOrgAddr" placeholder="Enter Company address">
                            </div>
                            <div class="form-group">
                                <label for="rfsOrgWeb">Organization's Website</label>
                                <input type="text" class="form-control" id="rfsOrgWeb" name="rfsOrgWeb" placeholder="Enter business website">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="form-group">
                                <label for="rfsMsg">Additional Message</label>
                                <textarea rows="5" class="form-control" id="rfsMsg" name="rfsMsg" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="col-lg-5 justify-content-center align-self-center">
                            {!! NoCaptcha::display() !!}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit Request</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>