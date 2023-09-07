@extends('user.include.main')
@section('main-section')

    <div class="container mt-5" style="width:70%;margin:auto">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 py-4 px-5 rounded shadow" style="background-color: #fff;"  >
                <div class="col-md-12 col-lg-12 col-sm-12 h2 text-center mb-4 fw-bold">Ongoing <span class="" style="color: #3566c2;">PROJECTS</span></div>
                <div class="table-responsive">
                <table class="table" id="json-table">
                    <thead style="text-align: center;vertical-align: top; ">
                        <tr data-category="Water Resources Engineering(Water Supply and Irrigation)">

                            <th scope="col">Project No.</th>
                            <th scope="col">Projects</th>
                            <th scope="col">Client</th>
                            <th scope="col">Starting Date</th>
                            <th scope="col">Completion Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody data-category="Transportation Sector" id="transportation-sector-tbody" data-project-number="1">
                        @foreach ($ongoingProjects as $ongoingProject)
                        <tr>
                            <td scope="row">{{$loop->iteration}}</td>
                            <td>{{$ongoingProject->project_title}}</td>
                            <td>{{$ongoingProject->client_name}}</td>
                            <td>{{$ongoingProject->start_date}}</td>
                            <td>{{$ongoingProject->complete_date}}</td>
                            <td>
                                <a style="text-decoration: none" href="{{route('details.news',['id'=>$ongoingProject->id])}}">View</a>
                                </td>
                        </tr>

                        @endforeach
                    </tbody>

                </table>
                </div>
            </div>
        </div>
    </div>
    <style>

    @media (max-width: 768px) {
        .table-responsive {
            overflow-x: auto;
        }
    }
</style>

@endsection
