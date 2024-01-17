<x-adminlayout title="SuperVisor| Trash">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between"> 
                        <h4 class="mb-sm-0 font-size-18">Trashed SuperVisors </h4>                       
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li> -->
                                <li class="breadcrumb-item active">Trashed SuperVisors</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">

                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name </th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($visor_trashed as $user)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $user->name  }}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{ $user->phone }}</td>
                                            @if($user->status==1)
                                            @php $col='col_active' @endphp
                                            @else
                                            @php $col='col_inactive' @endphp
                                            @endif
                                            <td class="{{$col}}">{{$user->status == 1 ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <a href="{{route('admin.supervisor.restore',$user->id)}}" onclick="return confirm('Are u sure u wanna Restore this User, click ok to continue')" class="btn btn-light btn-sm">Restore</a>
                                                <a href="{{route('admin.supervisor.delete',$user->id)}}" onclick="return confirm('Are u sure u wanna Delete this User, click ok to continue')" class="btn btn-light btn-sm">Delete</a>                                                
                                                {{-- <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a class="btn btn-outline-secondary btn-sm edit" title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <a class="btn btn-outline-secondary btn-sm edit" title="View">
                                                <i class="fas fa-eye"></i>
                                            </a> --}}
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

        </div> <!-- container-fluid -->
    </div>
</x-adminlayout>