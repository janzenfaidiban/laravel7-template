
@extends('administrator.layouts.app')
@section('content')
<!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
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
              This is a collapsable card example using Bootstrap's built in collapse functionality. <strong>Click on the card header</strong> to see the card body collapse and expand!
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
@endsection
