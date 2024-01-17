<x-adminlayout title="Vendor| Create">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Create New</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.vendor.index') }}">Vendor</a></li>
                                <li class="breadcrumb-item active">Create New</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Create New Vendor</h4>
                            <form action="{{ route('admin.vendor.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="formrow-email-input" class="form-label">Name<span class="star">&#42;</span></label>
                                            <input type="text"  name="name" value="{{old('name')}}" class="form-control" id="formrow-email-input" placeholder="Enter Your Name">
                                            <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                @error('name')
                                                        <li class="parsley-required"> {{ $message }}</li>
                                                    @enderror
                                                </ul>
                                        </div>
                                    </div>
                                                
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="formrow-name-input" class="form-label">Email<span class="star">&#42;</span></label>
                                            <input type="email" name="email" value="{{old('email')}}" class="form-control" id="formrow-name-input" placeholder="Enter Your Email ID">
                                            <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">

                                                @error('email')
                                                        <li class="parsley-required"> {{ $message }}</li>
                                                    @enderror
                                                </ul>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="formrow-phone-input" class="form-label">Phone<span class="star">&#42;</span></label>
                                            <input type="text" name="phone" value="{{old('phone')}}" class="form-control" id="formrow-phone-input" placeholder="Enter Your Phone">
                                            <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                @error('phone')
                                                    <li class="parsley-required"> {{ $message }}</li>
                                                @enderror
                                                </ul>
                                        </div>
                                    </div>
                                                
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="formrow-password-input" class="form-label">Password<span class="star">&#42;</span></label>
                                            <input type="password" name="password" class="form-control" id="formrow-password-input" placeholder="Enter Your Password">
                                            <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                @error('password')
                                                    <li class="parsley-required"> {{ $message }}</li>
                                                @enderror
                                                </ul>
                                        </div>
                                    </div>
                                   
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="formrow-address1-input" class="form-label">Address Line 1</label>
                                            <input type="text" name="address_line_1" value="{{old('address_line_1')}}" class="form-control" id="formrow-address1-input" placeholder="Enter Your Address Line 1">
                                            <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                @error('address_line_1')
                                                    <li class="parsley-required"> {{ $message }}</li>
                                                @enderror
                                                </ul>
                                        </div>
                                    </div>
                                                
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="formrow-address2-input" class="form-label">Address Line 2</label>
                                            <input type="text" name="address_line_2" value="{{old('address_line_2')}}" class="form-control" id="formrow-address2-input" placeholder="Enter Your Address Line 2">
                                            <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                @error('address_line_2')
                                                    <li class="parsley-required"> {{ $message }}</li>
                                                @enderror
                                                </ul>
                                        </div>
                                    </div>
                                   
                                </div>   
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="formrow-inputCity" class="form-label">Country</label>
                                            <input type="text" name="country" value="{{old('country')}}" class="form-control" id="formrow-inputCity" placeholder="Enter Your Living Country">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="formrow-inputCity" class="form-label">City</label>
                                            <input type="text" name="city" value="{{old('city')}}" class="form-control" id="formrow-inputCity" placeholder="Enter Your Living City">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="formrow-inputState" class="form-label">State</label>
                                            <input type="text" name="state" value="{{old('state')}}" class="form-control" id="formrow-inputState" name="state" placeholder="Enter Your Living State">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="formrow-inputZip" class="form-label">Zip</label>
                                            <input type="text" name="pin" value="{{old('pin')}}" class="form-control" id="formrow-inputZip" placeholder="Enter Your Zip Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Description</label>
                                    <textarea  class="form-control" name="description" id="formrow-firstname-input" placeholder="Enter Description Of Address" rows="5">{{old('description')}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="status">Status : </label>
                                        <input class="form-check-input" type="radio" value="1" name="status" id="formRadios1" checked="">
                                        <label class="form-check-label" for="formRadios1">
                                            Active
                                        </label>

                                        <input class="form-check-input" type="radio" value="0" name="status" id="formRadios2">
                                        <label class="form-check-label" for="formRadios2">
                                            Inactive
                                        </label>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </form>
                            <!-- <div class="row mb-4">
                                <label class="col-form-label col-lg-2">Attached Files</label>
                                <div class="col-lg-10">
                                    <form action="/" method="post" class="dropzone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
        
                                        <div class="dz-message needsclick">
                                            <div class="mb-3">
                                                <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                            </div>
                                            
                                            <h4>Drop files here or click to upload.</h4>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                            

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
</x-adminlayout>