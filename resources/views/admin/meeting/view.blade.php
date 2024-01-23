<x-adminlayout title="Project">
    @foreach($pro_meeting as $meet)
        <div class="page-content">
            <div class="container-fluid">
    
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Project Overview</h4>
    
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="#">Project</a></li>
                                    <li class="breadcrumb-item active">Project Overview</li>
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
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-4">
                                        <img src="/admin/assets/images/companies/img-1.png" alt="" class="avatar-sm">
                                    </div>
    
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="text-truncate font-size-15">{{$meet->title}}</h5>
                                        <p class="text-muted">Registration Number: {{$meet->registration_number}} </p>
                                    </div>
                                </div>
    
                                <h5 class="font-size-15 mt-4">Project Details :</h5>
    
                                <p class="text-muted"></p>
    
                                <div class="text-muted mt-4">
                                    <p><i class="mdi mdi-chevron-right text-primary me-1"></i> Type: {{$meet->type}}</p>
                                    <p><i class="mdi mdi-chevron-right text-primary me-1"></i> Amenities: {{$meet->amenities}}</p>
                                    <p><i class="mdi mdi-chevron-right text-primary me-1"></i> Price: {{$meet->price}}</p>
                                </div>
                                
                                <div class="row task-dates">
                                    <div class="col-sm-4 col-6">
                                        <div class="mt-4">
                                            <h5 class="font-size-14"><i class="bx bx-calendar me-1 text-primary"></i> Delivery</h5>
                                            <p class="text-muted mb-0">{{$meet->delivery_date}}</p>
                                        </div>
                                    </div>
    
                                    <div class="col-sm-4 col-6">
                                        <div class="mt-4">
                                            <h5 class="font-size-14"><i class="bx bx-euro me-1 text-primary"></i> Price</h5>
                                            <p class="text-muted mb-0">{{$meet->price}}</p>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row task-dates">
                                    <div class="col-sm-4 col-6">
                                        <div class="mt-4">
                                            <h5 class="font-size-14"></i>SuperVisor </h5>
                                               
                                                @foreach($user as $superVisor)
                                                @if($superVisor->id==$meet->superVisor_id)
                                                <p class="text-muted mb-0">{{$superVisor->name}}</p>
                                                <p class="text-muted mb-0">{{$superVisor->email}}</p>
                                                <p class="text-muted mb-0">{{$superVisor->phone}}</p>
                                                @endif
                                                @endforeach
                                                                                         
                                        </div>
                                    </div>
    
                                    <div class="col-sm-4 col-6">
                                        <div class="mt-4">
                                            <h5 class="font-size-14"> Vendor</h5>
                                            
                                            @foreach($user as $vendor)
                                            @if($vendor->id==$meet->vendor_id)
                                            <p class="text-muted mb-0">{{$vendor->name}}</p>
                                            <p class="text-muted mb-0">{{$vendor->email}}</p>
                                            <p class="text-muted mb-0">{{$vendor->phone}}</p>
                                            @endif
                                            @endforeach
                                                
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mt-4">
                                    <h2>Project Images</h2>
                                    @foreach($meet->image as $pro_img)
                                    <img src="{{asset('storage/images/'.$pro_img->file_name)}}" alt="images" width="50px" height="50px">
                                    </div>
                                    @endforeach
                                    </div>
                               
                            <h2>Conclusion</h2>
                        <hr>
                    </div>
                </div>
                    </div>
                    </div>
                    <!-- end col -->
                    <!-- end col -->
                </div>
    
            </div> <!-- container-fluid -->
        </div>
        @endforeach
    </x-adminlayout>