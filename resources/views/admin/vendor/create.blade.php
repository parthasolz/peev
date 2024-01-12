<x-adminlayout title="Vendor">
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
                            <form action="{{ route('admin.vendor.store') }}" method="post">
                                @csrf
                                <div class="row mb-4">
                                    <label for="name" class="col-form-label col-lg-2">Name</label>
                                    <div class="col-lg-10">
                                        <input id="name" name="name" type="text" class="form-control" placeholder="Enter Your Name...">
                                        <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                        @error('name')
                                            <li class="parsley-required"> {{ $message }}</li>
                                        @enderror
                                        </ul>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="email" class="col-form-label col-lg-2">Email</label>
                                    <div class="col-lg-10">
                                        <input id="email" name="email" type="email" placeholder="Enter Your Email..." class="form-control">
                                        <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                        @error('email')
                                            <li class="parsley-required"> {{ $message }}</li>
                                        @enderror
                                        </ul>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="phone" class="col-form-label col-lg-2">Phone</label>
                                    <div class="col-lg-10">
                                        <input id="phone" name="phone" type="text" placeholder="Enter Your Phone No..." class="form-control">
                                        <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                        @error('phone')
                                            <li class="parsley-required"> {{ $message }}</li>
                                        @enderror
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label">Type</label>
                                    <div class="col-md-10">
                                        <select class="form-select" name="userrole">
                                            <option>Select</option>
                                            <option value="2">Vendor</option>
                                            <option value="3">Site Supervisor</option>
                                        </select>
                                    </div>
                                    <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                        @error('userrole')
                                            <li class="parsley-required"> {{ $message }}</li>
                                        @enderror
                                    </ul>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label">Assigned Project</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>Select</option>
                                            <option>Large select</option>
                                            <option>Small select</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-sm-10">

                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" id="horizontalLayout-Check" name="status">
                                            <label class="form-check-label" for="horizontalLayout-Check">
                                               Status
                                            </label>
                                        </div>

                                        <div>
                                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                                        </div>
                                    </div>
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