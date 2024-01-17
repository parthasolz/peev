<x-adminlayout title="SuperVisor">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between"> 
                        <h4 class="mb-sm-0 font-size-18">SuperVisors </h4>                       
                        <div class="page-title-right">
                            <div class="page-title-right">
                                <a href="{{ route('admin.supervisor.create') }}" class="btn btn-outline-secondary btn-sm">Add New</a>
                            </div>
                            <ol class="breadcrumb m-0">
                                <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li> -->
                                <li class="breadcrumb-item active">SuperVisor</li>
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
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($visor as $user)
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
                                                <a href="{{route('admin.supervisor.edit',$user->id)}}"  class="btn btn-light btn-sm">Edit</a>
                                                <a href="{{route('admin.supervisor.trash',$user->id)}}" onclick="return confirm('Are u sure u wanna Trash this User, click ok to continue')" class="btn btn-light btn-sm">Delete</a>
                                                <a href="{{route('admin.supervisor.show',$user->id)}}" class="btn btn-light btn-sm">View</a>
                                                
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