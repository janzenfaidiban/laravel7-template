{{-- Post Alert > Success  --}}
@if(session()->has('success'))
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session()->get('success') }}
                </div>
            </div>
        </div>
    </div>
@endif
{{-- Post Alert > Error  --}}
@if(session()->has('error'))
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session()->get('error') }}
                </div>
            </div>
        </div>
    </div>
@endif
{{-- Post Alert > Info  --}}
@if(session()->has('info'))
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
                <div class="alert alert-info alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session()->get('info') }}
                </div>
            </div>
        </div>
    </div>
@endif