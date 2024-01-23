<x-adminlayout title="Project Edit">
    <link href="/admin/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    
    <!-- dropzone css -->
    <link href="/admin/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
        <div class="page-content">
            <div class="container-fluid">
    
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Create New</h4>
    
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.project.index') }}">Project</a></li>
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
                                <h4 class="card-title mb-4">Create New Project</h4>
                                <form action="{{ route('admin.project.update', $project_detail->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="formrow-email-input" class="form-label">Name<span class="star">&#42;</span></label>
                                            <input id="projectname" name="title" type="text" value="{{ $project_detail->title }}" class="form-control" placeholder="Enter Project Name...">
                                            <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                @error('title')
                                                <li class="parsley-required"> {{ $message }}</li>
                                                @enderror
                                            </ul>
                                        </div>
                                    <div class="mb-3">
                                        <label for="projectdesc" class="col-form-label col-lg-2">Description<span class="star">&#42;</span></label>
                                        <textarea name="details" class="form-control" id="projectdesc" rows="3" placeholder="Enter Project Description...">{{ $project_detail->details }}</textarea>
                                        <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                            @error('details')
                                            <li class="parsley-required"> {{ $message }}</li>
                                            @enderror
                                        </ul>
                                    </div>
    
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label">Delivery Date<span class="star">&#42;</span></label>
                                            <div class="input-daterange input-group" id="project-date-inputgroup" data-provide="datepicker" data-date-format="dd M, yyyy"  data-date-container='#project-date-inputgroup' data-date-autoclose="true">
                                                <input type="text" class="form-control" placeholder="Date" value="{{ $project_detail->delivery_date }}" name="delivery_date" />
                                                <!-- <input type="text" class="form-control" placeholder="End Date" name="end" /> -->
                                                <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                    @error('delivery_date')
                                                    <li class="parsley-required"> {{ $message }}</li>
                                                    @enderror
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="projectbudget" class="form-label">Price<span class="star">&#42;</span></label>
                                            <input id="projectbudget" name="price" type="text" value="{{ $project_detail->price }}" placeholder="Enter Project Budget..." class="form-control">
                                            <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                @error('price')
                                                <li class="parsley-required"> {{ $message }}</li>
                                                @enderror
                                            </ul>
                                        </div>
                                    </div>
    
                                    {{-- <div class="row mb-4">
                                        <label for="projectlocation" class="col-form-label col-lg-2">Location</label>
                                        <div class="col-lg-10">
                                            <input id="projectlocation" name="projectlocation" type="text" placeholder="Enter Project Location..." class="form-control">
                                            <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                @error('projectlocation')
                                                <li class="parsley-required"> {{ $message }}</li>
                                                @enderror
                                            </ul>
                                        </div>
                                    </div> --}}
    
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="projecttype" class="form-label">Type<span class="star">&#42;</span></label>
                                            <input id="projecttype" name="type" value="{{ $project_detail->type }}" type="text" placeholder="Enter Project type..." class="form-control">
                                            <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                @error('type')
                                                <li class="parsley-required"> {{ $message }}</li>
                                                @enderror
                                            </ul>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                        <label for="registration" class="form-label">Registration<span class="star">&#42;</span></label>
                                            <input id="registration" name="registration_number" value="{{ $project_detail->registration_number }}" type="text" placeholder="Enter Project registration..." class="form-control">
                                            <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                @error('registration_number')
                                                <li class="parsley-required"> {{ $message }}</li>
                                                @enderror
                                            </ul>
                                        </div>
                                    </div>
    
                                        <div class="mb-3">
                                            <label for="amenities" class="from-label">Amenities<span class="star">&#42;</span></label>
                                            <input id="amenities" name="amenities" value="{{ $project_detail->amenities }}" type="text" placeholder="Enter Project Amenities" class="form-control">
                                            <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                @error('amenities')
                                                <li class="parsley-required"> {{ $message }}</li>
                                                @enderror
                                            </ul>
                                        </div>
    
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="from-label">Choose Vendor<span class="star">&#42;</span></label>
                                            <select name="vendor_id" class="form-control select2">
                                                <option>Select</option>
                                                @foreach ($vendo as $vender)
                                                
                                                <option @selected($vender->id == $project_detail->vendor_id ) value="{{ $vender->id }}">
                                                {{ $vender->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                @error('vendor_id')
                                                <li class="parsley-required"> {{ $message }}</li>
                                                @enderror
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="from-label">Choose SuperVisor<span class="star">&#42;</span></label>
                                            <select name="superVisor_id" class="form-control select2">
                                                <option>Select</option>
                                                @foreach ($svisors as $viser)
                                                   
                                                    <option @selected($viser->id == $project_detail->superVisor_id ) value="{{ $viser->id}}" > {{$viser->name}} </option>  
                                                @endforeach
                                            </select>
                                            <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                @error('superVisor_id')
                                                <li class="parsley-required"> {{ $message }}</li>
                                                @enderror
                                            </ul>
                                        </div>
                                    </div>
                                    @foreach($project_detail->address as $address)
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formrow-address1-input" class="form-label">Address Line 1<span class="star">&#42;</span></label>
                                                <input type="text" name="address_line_1" value="{{ $address->address_line_1 }}" class="form-control" id="formrow-address1-input" placeholder="Enter Project's Address Line 1">
                                                <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                    @error('address_line_1')
                                                        <li class="parsley-required"> {{ $message }}</li>
                                                    @enderror
                                                </ul>
                                            </div>
                                        </div>
                                                    
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formrow-address2-input" class="form-label">Address Line 2<span class="star">&#42;</span></label>
                                                <input type="text" name="address_line_2" value="{{ $address->address_line_2 }}" class="form-control" id="formrow-address2-input" placeholder="Enter Project's Address Line 2">
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
                                                <label for="formrow-inputCity" class="form-label">Country<span class="star">&#42;</span></label>
                                                <input type="text" name="country" value="{{ $address->country }}" class="form-control" id="formrow-inputCity" placeholder="Enter Project's Country">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="formrow-inputCity" class="form-label">City<span class="star">&#42;</span></label>
                                                <input type="text" name="city" value="{{ $address->city }}" class="form-control" id="formrow-inputCity" placeholder="Enter Project's City">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="formrow-inputState" class="form-label">State<span class="star">&#42;</span></label>
                                                <input type="text" name="state" value="{{ $address->state }}" class="form-control" id="formrow-inputState" name="state" placeholder="Enter  Project's State">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="formrow-inputZip" class="form-label">Zip<span class="star">&#42;</span></label>
                                                <input type="text" name="pin" value="{{ $address->pin }}" class="form-control" id="formrow-inputZip" placeholder="Enter Project's Code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Additional info</label>
                                        <textarea  class="form-control" name="description" value="{{ $address->description }}" id="formrow-firstname-input" placeholder="Enter Description Of Address" rows="5"></textarea>
                                    </div>
                                    @endforeach
                                    
                                    <div class="mb-3">
                                        <label for="images" class="from-label">Project Image</label>
                                            <input name="images[]" type="file" placeholder="" class="form-control" multiple id="images" accept="image/*">
                                    </div>
    
                                    

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title mb-4">Uploaded Images </h4>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                            @foreach($project_detail->image as $images)
                                                                <div class="col-lg-4">
                                                                    <div>
                                                                        <img src="{{ asset('storage/images/'.$images->file_name) }}" alt="" class="rounded avatar-lg">
                                                                        <p class="mt-2 mb-lg-0"><code>.avatar-lg</code></p>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="status" class="from-label">Status : </label>
                                        <input class="form-check-input" type="radio" value="1" name="status" id="formRadios1" checked="">
                                        <label class="form-check-label" for="formRadios1">
                                            Publish
                                        </label>

                                        <input class="form-check-input" type="radio" value="0" name="status" id="formRadios2">
                                        <label class="form-check-label" for="formRadios2">
                                            Draft
                                        </label>
                                    </div>
    
                                    <div class="mb-3">
                                            <button type="submit" class="btn btn-primary">Update Project</button>
                                    </div>
                                </form>
    
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
    
            </div> <!-- container-fluid -->
        </div>
    
    </x-adminlayout>
    <script src="/admin/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script> 
    <script src="/admin/assets/libs/dropzone/min/dropzone.min.js"></script>   