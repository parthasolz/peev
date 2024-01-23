<x-adminlayout title="Meeting| Create">
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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.project.index') }}">Meeting</a></li>
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
                                <h4 class="card-title mb-4">Create Meeting</h4>
                                <form action="{{ route('admin.meeting.store',['id' => $id]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="formrow-email-input" class="form-label">Title<span class="star">&#42;</span></label>
                                                <input id="projectname" name="title" value="{{old('title')}}" type="text" class="form-control" placeholder="Enter Meeting title...">
                                            <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                @error('title')
                                                <li class="parsley-required"> {{ $message }}</li>
                                                @enderror
                                            </ul>
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Meeting Date<span class="star">&#42;</span></label>
                                                    <div class="input-daterange input-group" id="project-date-inputgroup" data-provide="datepicker" data-date-format="dd M, yyyy"  data-date-container='#project-date-inputgroup' data-date-autoclose="true">
                                                        <input type="text" class="form-control" placeholder="Date" name="meeting_date"  value="{{old('meeting_date')}}"/>
                                                        <!-- <input type="text" class="form-control" placeholder="End Date" name="end" /> -->
                                                    <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                            @error('meeting_date')
                                                            <li class="parsley-required"> {{ $message }}</li>
                                                            @enderror
                                                        </ul>
                                                </div>
                                            </div>
                                        </div>  
                                           
                                     <div class="mb-3">
                                        <label for="projectdesc" class="col-form-label col-lg-2">Purpose<span class="star">&#42;</span></label>
                                            <textarea name="purpose" class="form-control" id="projectdesc" rows="3" placeholder="Enter purpose ...">{{old('purpose')}}</textarea>
                                            <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                @error('purpose')
                                                <li class="parsley-required"> {{ $message }}</li>
                                                @enderror
                                            </ul>
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
                                            <button type="submit" class="btn btn-primary">Create</button>
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