@extends('admin.include.main')

@section('main-section')
<div class="container my-5">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 mx-auto opacity-9">
        <div class="card z-index-0 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 w-50">
                <div class="bg-gradient-dark shadow-secondary border-radius-lg pt-3 pb-2">
                  <h6 class="text-white text-capitalize ps-3">ADD PROJECT</h6>
                </div>
            </div>
          <div class="card-body">
            <form  class="text-start row" action="{{route('add.project')}}" method="post"  enctype="multipart/form-data">
                @csrf
              <input type="hidden" id="hdnprojId" value="" />

              <div class="col-lg-12 col-md-12 col-sm-12 form-inp mb-3">
                  <label class="form-label" for="pname" id="email">Project Name</label>
                  <input type="text" class="" placeholder="" name="projectName">
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 form-inp mb-3">
                  <label class="form-label" for="pname" id="email">Client</label>
                  <input type="text" class="" placeholder="" name="client">
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 form-inp mb-3">
                  <label class="form-label" for="pname" id="email">UV / Association</label>
                  <input type="text" class="" placeholder="" name="uv">
              </div>

              <div class="col-lg-4 col-md-6 col-sm-12 form-inp mb-3">
                  <label class="form-label" for="startdate" id="email">Start Date</label>
                  <input type="date" name="startingDate" id="date" />
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12 form-inp mb-3">
                  <label class="form-label" for="completedate" id="email">Completed Date</label>
                  <input type="date" id="date" name="completionDate" />
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12 form-inp mb-3">
                  <label class="form-label" for="status" id="email" >Status</label>
                  <select name="status">
                      <option value="0">Ongoing</option>
                      <option value="1">Completed</option>
                  </select>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12 form-inp mb-3">
                <label class="form-label" for="status" id="email" >Sectors</label>
                <select name="sectors">
                  <option value="1">Transportation Sector</option>
                  <option value="2">Hydropower Sector</option>
                  <option value="3">Water Resource Engineering (Water Supply and Irrigation)</option>
                  <option value="4">Other Engineer including Urban Infrastructure Works</option>
                </select>
            </div>
              <div class="col-lg-4 col-md-6 col-sm-12 form-inp mb-3">
                  <label class="form-label" for="addimage" id="email">Add Poject Image</label>
                  <input type="file" id="image" name="image" value=""  />
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 form-inp mb-3">
                <label class="form-label" for="addimage" id="email">Project Description</label>
                <textarea name="description" cols="30" rows="5" id="projectDesc"></textarea>
            </div>
              <div class="text-center col-lg-12 col-md-12 col-sm-12 form-inp mb-3">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">ADD</button>
              </div>

          </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
