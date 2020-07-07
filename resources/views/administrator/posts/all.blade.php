
@extends('administrator.layouts.app')
@section('content')

<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">All Posts</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-left">
              <!-- <h6 class="font-weight-bold text-primary">DataTables Example</h6> -->
              <a href="/administrator/posts/new" class="m-1 btn btn-sm btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
              <a href="/administrator/posts/export" class="m-1 btn btn-sm btn-primary"><i class="fa fa-arrow-down"></i> Export</a>
              <a href="/administrator/posts/import" class="m-1 btn btn-sm btn-primary"><i class="fa fa-arrow-up"></i> Import</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Created at</th>
                      <th>Updated at</th>
                      <th>Status</th>
                      <th>Views</th>
                      <th>Comments</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Title</th>
                      <th>Created at</th>
                      <th>Updated at</th>
                      <th>Status</th>
                      <th>Views</th>
                      <th>Comments</th>
                      <th></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @if (count($data) > 0)
                      @foreach($data as $a)

                    <tr>
                      <td>{{ $a->title }}</td>
                      <td>{{ $a->created_at->format("d F, Y") }}</td>
                      <td>{{ $a->updated_at->format("d F, Y") }}</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>2011/04/25</td>
                      <td>
                        <div class="dropdown mb-4">
                          <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                          </button>
                          <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton" style="">
                            <a class="dropdown-item" href="#"><i class="fas fa-flag"></i> View</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-check"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#postsDelete1"><i class="fas fa-trash"></i> Delete</a>

                          </div>
                        </div>
                      </td>
                    </tr>
                      @endforeach
                    @else
                    <p>There is no data . . .</p>
                    @endif

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Logout Modal-->
        <div class="modal fade" id="postsDelete2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are You sure want to delete?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                <a class="btn btn-primary" href="login.html">Yes</a>
              </div>
            </div>
          </div>
        </div>




@endsection
