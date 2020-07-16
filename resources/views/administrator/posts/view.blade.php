
@extends('administrator.layouts.app')
@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
              <div>
                <h1>{{ $data->title }}</h1>
              </div>
              <div>
                <div class="dropdown mb-4">
                  <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                  </button>
                  <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton" style="">
                    <a class="dropdown-item disabled" href="/administrator/posts/view/{{ $data->id }}"><i class="fas fa-flag"></i> View</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-check"></i> Edit</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#postsDelete{{ $data->id }}"><i class="fas fa-trash"></i> Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
                {!! html_entity_decode($data->body) !!}
            </div>
            <div class="card-footer">
                <div class="text-secondary">
                    Category : <span class="badge badge-primary">{{ $data->category->name }}</span>
                    Tags : 
                    @foreach ($data->tags as $tag)
                        <span class="badge badge-primary">{{ $tag->name }}</span>
                    @endforeach    
                    
                </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
@endsection
