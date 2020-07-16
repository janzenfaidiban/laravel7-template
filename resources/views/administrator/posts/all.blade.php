
@extends('administrator.layouts.app')
@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
              <div>
                <h1>All Posts</h1>
              </div>
              <div>
                <a href="/administrator/posts/new" class="m-1 btn btn-sm btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Category</th>
                      <th>Tags</th>
                      <th>Created at</th>
                      <th>Updated at</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Title</th>
                      <th>Category</th>
                      <th>Tags</th>
                      <th>Created at</th>
                      <th>Updated at</th>
                      <th></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    {{-- @if (count($posts) > 0) --}}
                    @foreach($data as $a)
                    <tr>
                      <td>{{ $a->title }}</td>
                      <td><span class="badge badge-primary">{{ $a->category['name'] }}</span></td>
                      <td> @foreach ($a->tags as $tag) <span class="badge badge-primary">{{ $tag->name }}</span> @endforeach </td>
                      <td><span class="badge badge-primary">{{ $a->created_at->format("d F, Y") }}</span></td>
                      <td><span class="badge badge-primary">{{ $a->updated_at->format("d F, Y") }}</span> </td>
                      <td>
                        <div class="dropdown mb-4">
                          <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                          </button>
                          <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton" style="">
                            <a class="dropdown-item" href="/administrator/posts/view/{{ $a->id }}"><i class="fas fa-flag"></i> View</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-check"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#postsDelete{{ $a->id }}"><i class="fas fa-trash"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!-- Modal-->
                    <div class="modal fade" id="postsDelete{{ $a->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Are You sure want to delete?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <form class="" action="/administrator/posts/{{ $a->id }}/delete" method="post">
                            @csrf
                            @method("delete")
                            <div class="modal-body">{{ $a->title }}</div>
                            <div class="modal-footer">
                              <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                              <button type="submit" class="btn btn-danger">Yes</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
@endsection
