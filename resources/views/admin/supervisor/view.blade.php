<x-adminlayout title="SuperVisor| View">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-4">
                                    <img src="/admin/assets/images/companies/img-1.png" alt="" class="avatar-sm">
                                </div>                                   
                                <div class="flex-grow-1 overflow-hidden">                                      
                                    <h5 class="text-truncate font-size-15">{{ $visor_detail->name }}</h5>
                                    <p>{{ $visor_detail->email }}<br>
                                    {{ $visor_detail->phone }}
                                </div>
                                <div class="page-title-right">
                                    <a href="{{ route('admin.supervisor.edit',$visor_detail->id) }}" class="btn btn-outline-secondary btn-sm">Update</a>
                                    @if($visor_detail->status==1)
                                    <a href="{{ route('admin.project.create',['sup_id'=>$visor_detail->id]) }}" class="btn btn-outline-secondary btn-sm">Create Project</a>
                                    @endif
                            </div>
                            </div>
                            <h5 class="font-size-15 mt-4">Address :</h5>
                            @if($visor_detail->address->count()>0)
                            @foreach ($visor_detail->address as $add)
                            <p class="text-muted">Address Line 1 :{{$add->address_line_1 ? $add->address_line_1 : 'Not available' }}</p>
                            <p class="text-muted">Address Line 2 :{{$add->address_line_2 ? $add->address_line_2 : 'Not available'}}</p>
                            <p class="text-muted">Country :{{$add->country ? $add->country : 'Not available'}}</p>
                            <p class="text-muted">State :{{$add->state ? $add->state : 'Not available'}}</p>
                            <p class="text-muted">City :{{$add->city ? $add->city : 'Not available'}}</p>
                            <p class="text-muted"> Zip :{{$add->zip ? $add->pin : 'Not available'}}</p>
                            @endforeach
                            @else
                            <p class="text-muted">Address Not Added</p>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Today's Meeting</h4>
                            <p class="card-title-desc">Meeting Detail:</p>
                            
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <h5>{{ $visor_detail->name }}&nbsp;Projects</h5>
                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Registration Number </th>
                                            <th>Project Name</th>
                                            <th>Type</th>
                                            <th>Delivery Date</th>
                                            <th>Status</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($visor_project as $project_user)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $project_user->registration_number  }}</td>
                                            <td><a href="{{ route('admin.project.show', $project_user['id']) }}">{{ $project_user->title }}</a></td>
                                            <td>{{ $project_user->type }}</td>
                                            <td>{{ $project_user->delivery_date }}</td>
                                            @if($project_user->status==1)
                                            @php $col='col_active' @endphp
                                            @else
                                            @php $col='col_inactive' @endphp
                                            @endif
                                            <td class="{{$col}}">{{$project_user->status == 1 ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <a href="#"  class="btn btn-light btn-sm">Edit</a>
                                                <a href="{{route('admin.project.show',$project_user->id)}}"  class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                
                
            </div> 
            
        </div>

        </div> <!-- container-fluid -->
    </div>
</x-adminlayout>