<x-adminlayout title="Project">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Projects </h4>

                        <div class="page-title-right">
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
                            <h4 class="card-title">Basic example</h4>
                            <p class="card-title-desc">For basic styling—light padding and
                                    only horizontal dividers—add the base class <code>.table</code> to any
                                    <code>&lt;table&gt;</code>.
                            </p>    
                            
                            <div class="table-responsive">
                                <table class="table mb-0">

                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Registration Number </th>
                                            <th>Project Name</th>
                                            <th>Type</th>
                                            <th>Delivery Date</th>
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
                                            <td>
                                                
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