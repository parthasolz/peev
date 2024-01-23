<x-adminlayout title="Meetings">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between"> 
                        <h4 class="mb-sm-0 font-size-18">Meetings </h4>                       
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li> -->
                                <li class="breadcrumb-item active">Meetings</li>
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
                                            <th>Title</th>
                                            <th>Purpose</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($project_meetings as $pro)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $pro->title  }}</td>
                                            <td>{{$pro->purpose}}</td>
                                            <td>{{ $pro->meeting_date }}</td>
                                            @if($pro->status==1)
                                            @php $col='col_active' @endphp
                                            @else
                                            @php $col='col_inactive' @endphp
                                            @endif
                                            <td class="{{$col}}">{{$pro->status == 1 ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <a href="{{route('admin.meeting.edit',$pro->id)}}"  class="btn btn-light btn-sm">Edit</a>
                                                <a href="{{route('admin.meeting.delete',$pro->id)}}" onclick="return confirm('Are u sure u wanna delete this meeting, click ok to continue')" class="btn btn-light btn-sm">Delete</a>
                                                <a href="{{route('admin.meeting.show',$pro->projectable_id)}}" class="btn btn-light btn-sm">View</a>
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