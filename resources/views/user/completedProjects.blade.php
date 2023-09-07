@extends('user.include.main')
@section('main-section')

<div class="container mt-5" style="width: 70%;">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 py-4 px-5 rounded shadow" style="background-color: #fff;"  >
            <div class="col-md-12 col-lg-12 col-sm-12 h2 text-center mb-4 fw-bold">Completed <span class="" style="color: #3566c2;">PROJECTS</span></div>
            <div class="table-responsive">
            <select id="categorySelect" class="form-select form-select-sm" aria-label=".form-select-sm example" style="width:50%;">
                <option value="0">Display All</option>
                <option value="1">Transportation Sector</option>
                <option value="2">Hydropower Sector</option>
                <option value="3">Water Resource Engineering (Water Supply and Irrigation)</option>
                <option value="4">Other Engineer including Urban Infrastructure Works</option>
            </select>

            <div id="displayAll" class="table-responsive">
                <table  class="table  mt-4">
                    <thead>
                        <tr class="">
                            <th scope="col">Project No.</th>
                            <th scope="col">Project Name</th>
                            <th scope="col">Client</th>
                            <th scope="col">Starting Date</th>
                            <th scope="col">Completion Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr>
                            <th class="text-center" scope="row">{{$loop->iteration}}</th>
                            <td>{{$project->project_title}}</td>
                            <td>{{$project->client_name}}</td>
                            <td>{{$project->start_date}}</td>
                            <td>{{$project->complete_date}}</td>
                            <td>
                            <a style="text-decoration: none" href="{{route('details.news',['id'=>$project->id])}}">View</a>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
        {{-- Transportation --}}

        <div id="transportation" class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="">
                        <th scope="col">Project No.</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Client</th>
                        <th scope="col">Starting Date</th>
                        <th scope="col">Completion Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transProj as $project)
                    <tr>
                        <th class="text-center" scope="row">{{$loop->iteration}}</th>
                        <td>{{$project->project_title}}</td>
                        <td>{{$project->client_name}}</td>
                        <td>{{$project->start_date}}</td>
                        <td>{{$project->complete_date}}</td>
                        <td>
                        <a style="text-decoration: none" href="{{route("details.news",['id'=>$project->id])}}">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        {{-- Hrdro --}}
        <div id="hydroProj" class="table-responsive">

            <table class="table " >
            <thead>
                <tr class="">
                    <th scope="col">Project No.</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Client</th>
                    <th scope="col">Starting Date</th>
                    <th scope="col">Completion Date</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($hydroProj as $project)
                    <tr>
                        <th class="text-center" scope="row">{{$loop->iteration}}</th>
                        <td>{{$project->project_title}}</td>
                        <td>{{$project->client_name}}</td>
                        <td>{{$project->start_date}}</td>
                        <td>{{$project->complete_date}}</td>
                        <td>
                            <a style="text-decoration: none" href="{{route("details.news",['id'=>$project->id])}}">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

                {{-- Water --}}
        <div id="waterProj" class="table-responsive">
            <table class="table " >
                <thead>
                    <tr class="">
                        <th scope="col">Project No.</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Client</th>
                        <th scope="col">Starting Date</th>
                        <th scope="col">Completion Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($waterProj as $project)
                    <tr>
                        <th class="text-center" scope="row">{{$loop->iteration}}</th>
                        <td>{{$project->project_title}}</td>
                        <td>{{$project->client_name}}</td>
                        <td>{{$project->start_date}}</td>
                        <td>{{$project->complete_date}}</td>
                        <td>
                        <a style="text-decoration: none" href="{{route("details.news",['id'=>$project->id])}}">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
            {{-- Other --}}
        <div id="otherProj" class="table-responsive">
            <table class="table" >
                <thead>
                    <tr class="">
                        <th scope="col">Project No.</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Client</th>
                        <th scope="col">Starting Date</th>
                        <th scope="col">Completion Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($otherProj as $project)
                    <tr>
                        <th class="text-center" scope="row">{{$loop->iteration}}</th>
                            <td>{{$project->project_title}}</td>
                            <td>{{$project->client_name}}</td>
                            <td>{{$project->start_date}}</td>
                            <td>{{$project->complete_date}}</td>
                            <td>
                            <a style="text-decoration: none" href="{{route('details.news',['id'=>$project->id])}}">View</a>
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
<style>

    @media (max-width: 768px) {
        .table-responsive {
            overflow-x: auto;
        }
    }
</style>

@endsection
