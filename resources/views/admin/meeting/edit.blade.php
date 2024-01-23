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
                                <h4 class="card-title mb-4">Update Meeting</h4>
                                <form action="{{ route('admin.meeting.update',$meeting->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="formrow-email-input" class="form-label">Title<span class="star">&#42;</span></label>
                                                <input id="projectname" name="title" value="{{old('title',$meeting->title)}}" type="text" class="form-control" placeholder="Enter Meeting title...">
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
                                                        <input type="text" class="form-control" placeholder="Date" name="meeting_date"  value="{{old('meeting_date',$meeting->meeting_date)}}"/>
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
                                            <textarea name="purpose" class="form-control" id="projectdesc" rows="3" placeholder="Enter purpose ...">{{old('purpose',$meeting->purpose)}}</textarea>
                                            <ul class="parsley-errors-list filled" id="parsley-id-25" aria-hidden="false">
                                                @error('purpose')
                                                <li class="parsley-required"> {{ $message }}</li>
                                                @enderror
                                            </ul>
                                    </div>
    
                                                                     
                                    <div class="mb-3">
                                        <label for="status" class="from-label">Status : </label>
                                            <input class="form-check-input" type="radio" value="1" name="status" id="formRadios1" {{$meeting->status==1 ? 'checked' :''}}>
                                            <label class="form-check-label" for="formRadios1">
                                                Publish
                                            </label>
    
                                            <input class="form-check-input" type="radio" value="0" name="status" id="formRadios2" {{$meeting->status==0 ? 'checked' :''}}>
                                            <label class="form-check-label" for="formRadios2">
                                                Draft
                                            </label>
                                    </div>
    
                                    <div class="mb-3">
                                            <button type="submit" class="btn btn-primary">Update</button>
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