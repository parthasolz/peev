<x-adminlayout title="Project">
@foreach ($project_detail as $detail)
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Project Overview</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.project.index') }}">Project</a></li>
                                <li class="breadcrumb-item active">Project Overview</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-4">
                                    <img src="/admin/assets/images/companies/img-1.png" alt="" class="avatar-sm">
                                </div>

                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="text-truncate font-size-15">{{ $detail->title }}</h5>
                                    <p class="text-muted">Registration Number: {{ $detail->registration_number }}</p>
                                </div>
                            </div>

                            <h5 class="font-size-15 mt-4">Project Details :</h5>

                            <p class="text-muted">{{ $detail->details }}</p>

                            <div class="text-muted mt-4">
                                <p><i class="mdi mdi-chevron-right text-primary me-1"></i> Type: {{ $detail->type }}</p>
                                <p><i class="mdi mdi-chevron-right text-primary me-1"></i> Amenities: {{ $detail->amenities }}</p>
                                <p><i class="mdi mdi-chevron-right text-primary me-1"></i> Price: {{ $detail->price }}</p>
                            </div>
                            
                            <div class="row task-dates">
                                <div class="col-sm-4 col-6">
                                    <div class="mt-4">
                                        <h5 class="font-size-14"><i class="bx bx-calendar me-1 text-primary"></i> Delivery </h5>
                                        <p class="text-muted mb-0">{{ $detail->delivery_date }}</p>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-6">
                                    <div class="mt-4">
                                        <h5 class="font-size-14"><i class="bx bx-euro me-1 text-primary"></i> Price</h5>
                                        <p class="text-muted mb-0">{{ $detail->price }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row task-dates">
                                <div class="col-sm-4 col-6">
                                    <div class="mt-4">
                                        <h5 class="font-size-14"></i>SuperVisor </h5>
                                            @foreach($users as $sup_vendor)
                                            @if($sup_vendor->id===$detail->superVisor_id)
                                            <p class="text-muted mb-0">{{$sup_vendor->name}}</p>
                                            <p class="text-muted mb-0">{{$sup_vendor->email}}</p>
                                            <p class="text-muted mb-0">{{$sup_vendor->phone}}</p>
                                            @endif
                                            @endforeach                                          
                                    </div>
                                </div>

                                <div class="col-sm-4 col-6">
                                    <div class="mt-4">
                                        <h5 class="font-size-14"> Vendor</h5>
                                        @foreach($users as $vendor)
                                            @if($vendor->id===$detail->vendor_id)
                                            <p class="text-muted mb-0">{{$vendor->name}}</p>
                                            <p class="text-muted mb-0">{{$vendor->email}}</p>
                                            <p class="text-muted mb-0">{{$vendor->phone}}</p>
                                            @endif
                                            @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Project Images</h4>
                            <p class="card-title-desc">Adding in the previous and next controls:</p>
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    @foreach($detail->image as $images)
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid" src="{{ asset('storage/images/'.$images->file_name) }}" alt="Image">
                                        </div>
                                    @endforeach
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="/admin/assets/images/small/img-4.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="/admin/assets/images/small/img-5.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="/admin/assets/images/small/img-6.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Team Members</h4>

                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap">
                                    <tbody>
                                        <tr>
                                            <td style="width: 50px;"><img src="/admin/assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt=""></td>
                                            <td><h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Daniel Canales</a></h5></td>
                                            <td>
                                                <div>
                                                    <a href="javascript: void(0);" class="badge bg-primary bg-soft text-primary font-size-11">Frontend</a>
                                                    <a href="javascript: void(0);" class="badge bg-primary bg-soft text-primary font-size-11">UI</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="/admin/assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xs" alt=""></td>
                                            <td><h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Jennifer Walker</a></h5></td>
                                            <td>
                                                <div>
                                                    <a href="javascript: void(0);" class="badge bg-primary bg-soft text-primary font-size-11">UI / UX</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                                        C
                                                    </span>
                                                </div>
                                            </td>
                                            <td><h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Carl Mackay</a></h5></td>
                                            <td>
                                                <div>
                                                    <a href="javascript: void(0);" class="badge bg-primary bg-soft text-primary font-size-11">Backend</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="/admin/assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt=""></td>
                                            <td><h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Janice Cole</a></h5></td>
                                            <td>
                                                <div>
                                                    <a href="javascript: void(0);" class="badge bg-primary bg-soft text-primary font-size-11">Frontend</a>
                                                    <a href="javascript: void(0);" class="badge bg-primary bg-soft text-primary font-size-11">UI</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                                        T
                                                    </span>
                                                </div>
                                            </td>
                                            <td><h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Tony Brafford</a></h5></td>
                                            <td>
                                                <div>
                                                    <a href="javascript: void(0);" class="badge bg-primary bg-soft text-primary font-size-11">Backend</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- end col -->
            </div>

        </div> <!-- container-fluid -->
    </div>
@endforeach
</x-adminlayout>