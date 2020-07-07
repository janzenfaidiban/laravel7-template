
@extends('administrator.layouts.app')
@section('content')

<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">New Post</h1>
          </div>
          <div class="row">
            <div class="col-lg-12">


              <!-- Collapsable Card Example -->
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                  <div class="card-body">

                    <form class="" action="/administrator/posts/store" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                          <label for="thumbnail">Image</label>
                          <input type="file" class="form-control" name="thumbnail" id="thumbnail" placeholder="">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" id="title" placeholder="" name="title">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                          <label for="title">Body</label>
                          <textarea name="body" class="form-control" rows="8" cols="80"></textarea>
                        </div>
                      </div>

                      <!-- <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                          <label for="title">Category</label>
                          <select name="" class="form-control">
                            <option value="">HTML</option>
                            <option value="">CSS</option>
                            <option value="">PHP</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                          <label for="title">Tags</label>
                          <select name="" class="form-control">
                            <option value="">HTML</option>
                            <option value="">CSS</option>
                            <option value="">PHP</option>
                          </select>
                        </div>
                      </div> -->

                      <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                          <button type="submit" name="button" class="btn btn-primary">Save</button>
                          <button type="reset" name="button" class="btn btn-default">Reset</button>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->



@endsection
