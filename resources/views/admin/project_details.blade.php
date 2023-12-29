@extends('admin.include.main')

@section('main-section')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 col-6">
            <div class="bg-dark shadow-secondary border-radius-lg pt-3 pb-2">
              <h6 class="text-white text-capitalize ps-3">Projects</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center justify-content-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Project</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Client</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Start Date</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Completed Date</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">UV / Association</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Status</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($projects_details as $projects_detail)
                        
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-2">
                            <h6 class="mb-0 text-sm ps-2">
                              {!! Illuminate\Support\Str::limit($projects_detail->project_title, 30, '...') !!}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$projects_detail->client_name}}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$projects_detail->start_date}}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$projects_detail->complete_date}}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$projects_detail->uv_association}}</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">
                            @if($projects_detail->status == 1)
                            Completed
                            @else
                            Ongoing
                            @endif
                        </span>
                      </td>
                      
                      <td class="align-middle">
                        {{-- <a href="javascript:;" class="text-light rounded p-2 bg-success font-weight-bold text-xs me-1" data-toggle="tooltip" data-original-title="View user">
                            View Details
                        </a> --}}
                        <a href="{{ route('edit.project.form', ['id' => $projects_detail->id]) }}" class="text-light rounded p-2 bg-info font-weight-bold text-xs me-1" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                        <a href="{{ route('delete.project', ['id' => $projects_detail->id]) }}" class="text-light rounded p-2 bg-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete user"
                            onclick="return confirm('Are you sure you want to delete this project?');">
                             Delete
                         </a>                         
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
              <div style="margin: 0px 10px">
                {{$projects_details->links('pagination::bootstrap-5')}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection