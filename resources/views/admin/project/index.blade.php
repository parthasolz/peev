<x-adminlayout title="Project">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Projects </h4>

                        <div class="page-title-right">
                            <div class="page-title-right">
                                <a href="{{ route('admin.project.create') }}" class="btn btn-outline-secondary btn-sm">Add New</a>
                            </div>
                            <ol class="breadcrumb m-0">
                                <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li> -->
                                <li class="breadcrumb-item active">Projects</li>
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
                                            <th>Registration Number </th>
                                            <th>Project Name</th>
                                            <th>Type</th>
                                            <th>Delivery Date</th>
                                            <th>Status</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($projects as $project)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $project->registration_number  }}</td>
                                            <td><a href="{{ route('admin.project.show', $project['id']) }}">{{ $project->title }}</a></td>
                                            <td>{{ $project->type }}</td>
                                            <td>{{ $project->delivery_date }}</td>
                                            @if($project->status==1)
                                            @php $col='col_active' @endphp
                                            @else
                                            @php $col='col_inactive' @endphp
                                            @endif
                                            <td class="{{$col}}">{{$project->status == 1 ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <a href="#"  class="btn btn-light btn-sm">Edit</a>
                                                <a href="#" onclick="return confirm('Are u sure u wanna Trash this User, click ok to continue')" class="btn btn-light btn-sm">Delete</a>
                                                <a class="btn btn-light btn-sm">View</a>
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