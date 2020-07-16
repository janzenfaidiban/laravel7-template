
@extends('administrator.layouts.app')
@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <div class="card-header py-3 d-flex justify-content-left">
              <h1>Add New</h1>
            </div>
            <div class="card-body">
              {!! Form::open(array('url' => '/administrator/posts/store','files'=>'true', 'id' => 'formValidate','class'=>'formValidate')) !!}
                @csrf
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="title">Title</label>
                    {!! Form::text('title',null,['maxlength'=>'255','id'=>'title','class'=>'form-control','placeholder'=>'Type title here...']) !!}
                      @error('title')
                        <div class="text-danger mt-2">
                          {{ $message }}
                        </div>
                      @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="category">Category</label>
                    {!! Form::select('category', $categories, null, ['class' => 'form-control', 'id'=>'category','placeholder'=> 'Choose category here...']) !!}
                      @error('category')
                        <div class="text-danger mt-2">
                          {{ $message }}
                        </div>
                      @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="body">Body</label>
                    {!! Form::textarea('body',old('body'),['row'=>'10','cols'=>'80','id'=>'body','class'=>'form-control editor','placeholder'=>'Write your content here...']) !!}
                    @error('body')
                      <div class="text-danger mt-2">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="tags">Tag</label>
                    {!! Form::select('tags[]', $tags, null, ['class' => 'form-control select2', 'id'=>'tags','placeholder'=> 'Choose tags here...', 'multiple'=>'multiple']) !!}
                      @error('tags')
                        <div class="text-danger mt-2">
                          {{ $message }}
                        </div>
                      @enderror
                  </div>
                </div>

                {{-- <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="tags">Tags</label>
                      <select name="tags[]" id="tags" class="form-control select2" multiple>
                          @foreach ($tags as $tag)
                              <option value="{{ $tag->id }}">{{ $tag->name }}</option>   
                          @endforeach
                      </select>
                      @error('tags')
                        <div class="text-danger mt-2">
                          {{ $message }}
                        </div>
                      @enderror
                  </div>
                </div> --}}

                <hr class="mt-4">

                <div class="form-group row mt-4">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    {!! Form::button('Save', ['type'=>'submit','class'=>'btn btn-primary']); !!}
                    {!! Form::button('Reset', ['type'=>'reset','class'=>'btn btn-default']); !!}
                  </div>
                </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
@endsection
