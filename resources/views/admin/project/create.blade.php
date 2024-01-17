<x-adminlayout title="Project">
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
                            <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <label for="projectname" class="col-form-label col-lg-2">Project Name</label>
                                    <div class="col-lg-10">
                                        <input id="projectname" name="title" type="text" class="form-control" placeholder="Enter Project Name...">
                                        <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                            @error('title')
                                            <li class="parsley-required"> {{ $message }}</li>
                                            @enderror
                                        </ul>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="projectdesc" class="col-form-label col-lg-2">Project Description</label>
                                    <div class="col-lg-10">
                                        <textarea name="details" class="form-control" id="projectdesc" rows="3" placeholder="Enter Project Description..."></textarea>
                                        <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                            @error('details')
                                            <li class="parsley-required"> {{ $message }}</li>
                                            @enderror
                                        </ul>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-form-label col-lg-2">Delivery Date</label>
                                    <div class="col-lg-10">
                                        <div class="input-daterange input-group" id="project-date-inputgroup" data-provide="datepicker" data-date-format="dd M, yyyy"  data-date-container='#project-date-inputgroup' data-date-autoclose="true">
                                            <input type="text" class="form-control" placeholder="Date" name="delivery_date" />
                                            <!-- <input type="text" class="form-control" placeholder="End Date" name="end" /> -->
                                           <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                @error('delivery_date')
                                                <li class="parsley-required"> {{ $message }}</li>
                                                @enderror
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="projectbudget" class="col-form-label col-lg-2">Price</label>
                                    <div class="col-lg-10">
                                        <input id="projectbudget" name="price" type="text" placeholder="Enter Project Budget..." class="form-control">
                                        <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                            @error('price')
                                            <li class="parsley-required"> {{ $message }}</li>
                                            @enderror
                                        </ul>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="projectlocation" class="col-form-label col-lg-2">Location</label>
                                    <div class="col-lg-10">
                                        <input id="projectlocation" name="projectlocation" type="text" placeholder="Enter Project Location..." class="form-control">
                                        <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                            @error('projectlocation')
                                            <li class="parsley-required"> {{ $message }}</li>
                                            @enderror
                                        </ul>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="projecttype" class="col-form-label col-lg-2">Type</label>
                                    <div class="col-lg-10">
                                        <input id="projecttype" name="type" type="text" placeholder="Enter Project type..." class="form-control">
                                        <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                            @error('type')
                                            <li class="parsley-required"> {{ $message }}</li>
                                            @enderror
                                        </ul>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="registration" class="col-form-label col-lg-2">Registration</label>
                                    <div class="col-lg-10">
                                        <input id="registration" name="registration_number" type="text" placeholder="Enter Project registration..." class="form-control">
                                        <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                            @error('registration_number')
                                            <li class="parsley-required"> {{ $message }}</li>
                                            @enderror
                                        </ul>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="amenities" class="col-from-label col-lg-2">Amenities</label>
                                    <div class="col-lg-10">
                                        <input id="amenities" name="amenities" type="text" placeholder="Enter Project Amenities" class="form-control">
                                        <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                            @error('amenities')
                                            <li class="parsley-required"> {{ $message }}</li>
                                            @enderror
                                        </ul>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="supervisor" class="col-from-label col-lg-2">Assign supervisor</label>
                                    <div class="col-lg-10">
                                        <input id="supervisor" name="supervisor" type="text" placeholder="supervisor" class="form-control">
                                        <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                            @error('supervisor')
                                            <li class="parsley-required"> {{ $message }}</li>
                                            @enderror
                                        </ul>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="images" class="col-from-label col-lg-2">Project Image</label>
                                    <div class="col-lg-10">
                                        <input name="images[]" type="file" placeholder="" class="form-control" multiple id="images" accept="image/*">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="status" class="col-from-label col-lg-2">Status</label>
                                    <div class="col-lg-10">
                                        <input class="form-check-input" type="radio" value="1" name="status" id="formRadios1" checked="">
                                        <label class="form-check-label" for="formRadios1">
                                            Publish
                                        </label>

                                        <input class="form-check-input" type="radio" value="0" name="status" id="formRadios2">
                                        <label class="form-check-label" for="formRadios2">
                                            Draft
                                        </label>
                                    </div>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-lg-10">
                                        <button type="submit" class="btn btn-primary">Create Project</button>
                                    </div>
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