<x-adminlayout title="Vendor| Edit">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Update</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Update</li>
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
                            <h4 class="card-title mb-4">Update Vendor</h4>
                            <form action="{{ route('admin.vendor.update',$vendor_edit->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                        <div class="mb-3">
                                            <label for="formrow-email-input" class="form-label">Name<span class="star">&#42;</span></label>
                                            <input type="text" class="form-control" value="{{old('name',$vendor_edit->name)}}" id="formrow-email-input" placeholder="Enter Your Name" name="name">
                                            <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                @error('name')
                                                        <li class="parsley-required"> {{ $message }}</li>
                                                    @enderror
                                                </ul>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="formrow-name-input" class="form-label">Email<span class="star">&#42;</span></label>
                                            <input type="email" name="email" value="{{old('email',$vendor_edit->email)}}" class="form-control" id="formrow-name-input" placeholder="Enter Your Email ID">
                                            <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">

                                                @error('email')
                                                        <li class="parsley-required"> {{ $message }}</li>
                                                    @enderror
                                                </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="formrow-phone-input" class="form-label">Phone<span class="star">&#42;</span></label>
                                            <input type="text" name="phone" value="{{old('phone',$vendor_edit->phone)}}" class="form-control" id="formrow-phone-input" placeholder="Enter Your Phone">
                                            <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                @error('phone')
                                                    <li class="parsley-required"> {{ $message }}</li>
                                                @enderror
                                                </ul>
                                        </div>
                                    </div>
                                                
                                </div> 
                                @foreach($vendor_edit->address as $address)
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="formrow-address1-input" class="form-label">Address Line 1</label>
                                            <input type="text" value="{{old('address_line_1',$address->address_line_1)}}" name="address_line_1" class="form-control" id="formrow-address1-input" placeholder="Enter Your Address Line 1">
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
                                            <input type="text" value="{{old('address_line_1',$address->address_line_2)}}" name="address_line_2" class="form-control" id="formrow-address2-input" placeholder="Enter Your Address Line 2">
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
                                            <input type="text" name="country" value="{{old('country',$address->$address->country)}}" class="form-control" id="formrow-inputCity" placeholder="Enter Your Living Country">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="formrow-inputCity" class="form-label">City</label>
                                            <input type="text" name="city" value="{{old('city',$address->city)}}" class="form-control" id="formrow-inputCity" placeholder="Enter Your Living City">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="formrow-inputState" class="form-label">State</label>
                                            <input type="text" name="state" value="{{old('state',$address->state)}}" class="form-control" id="formrow-inputState" name="state" placeholder="Enter Your Living State">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="formrow-inputZip" class="form-label">Zip</label>
                                            <input type="text" name="pin" value="{{old('pin',$address->pin)}}" class="form-control" id="formrow-inputZip" placeholder="Enter Your Zip Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Description</label>
                                    <textarea  class="form-control" name="description" id="formrow-firstname-input" placeholder="Enter Description Of Address" rows="5">{{old('description',$address->description)}}</textarea>
                                </div>
                                @endforeach

                                @if(count($vendor_edit->address) === 0)
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
                                            <input type="text" name="city" value="{{old('city')}}"  class="form-control" id="formrow-inputCity" placeholder="Enter Your Living City">
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
                                @endif
                                <div class="mb-3">
                                    <label for="status">Status : </label>
                                        <input class="form-check-input" type="radio" value="1" name="status" id="formRadios1"  {{$vendor_edit->status== 1 ? 'checked': ''}}>
                                        <label class="form-check-label" for="formRadios1">
                                            Active
                                        </label>

                                        <input class="form-check-input" type="radio" value="0" name="status" id="formRadios2" {{$vendor_edit->status== 0 ? 'checked': ''}}>
                                        <label class="form-check-label" for="formRadios2">
                                            Inactive
                                        </label>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update</button>
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