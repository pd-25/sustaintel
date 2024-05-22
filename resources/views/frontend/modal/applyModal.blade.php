<div class="modal fade @if ($errors->any()) show @endif" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" @if ($errors->any()) style="display: block;" @endif>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Please fill up the form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="{{ route('frontend.apply') }}" method="post" id="job-form"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="application_type" id="applicationtype" value="{{old('application_type')}}">
                    <input type="hidden" name="job_post_id" id="jobpostid" value="{{old('job_post_id')}}">
                    @error('application_type')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" required="required" placeholder="First Name"
                                        class="form-control" name="first_name" id="first_name" value="{{old('first_name')}}">
                                    @error('first_name')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" required="required" placeholder="Last Name"
                                        class="form-control" name="last_name" id="last_name" value="{{old('last_name')}}">
                                    @error('last_name')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" required="required" placeholder="Phone" class="form-control"
                                        name="form_Phone" id="form_Phone" value="{{old('form_Phone')}}">
                                    @error('form_Phone')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" required="required" placeholder="Email" class="form-control"
                                        name="form_Email" id="form_Email" value="{{old('form_Email')}}">
                                    @error('form_Email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea data-error="Please,leave us a message." required="required" rows="4" placeholder="Message..."
                                        class="form-control" name="form_message" id="form_message">{{old('form_Email')}}</textarea>
                                    @error('form_message')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><b>Upload CV:</b></label>
                                    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" accept=".pdf">
                                    @error('fileToUpload')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="col-md-12 mt-3">
                                <input type="submit" value="Submit Now" class="banner-btn">
                            </div>
                        </div>


                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
