@extends('layouts.admin')

@section('template_title')
    {{ trans('admin.dashboarddatas.pages.update.title') }}
@endsection

@section('template_description')
    {{ trans('admin.dashboarddatas.pages.update.desc') }}
@endsection

@section('header_title')
    {{ trans('admin.dashboarddatas.pages.update.header') }}
@endsection

@push('head')
@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header ">
                <h5 class="card-title">
                    Update Data
                </h5>
            </div>
            <hr>
            @include('admin.partials.messages')
            {!! Form::open(['method' => 'Post', 'route' => ['updatedata'],  'class' => 'update-dashboarddata-form', 'id' => 'update_dashboarddata_form', 'role' => 'form', 'enctype' => 'multipart/form-data' ]) !!}
                <div class="card-body">
                    <input type="hidden" name="_method" value="post">
                    @include('admin.dashboarddata.partials.dashboarddata-form')
                </div>
                <hr>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-6 mb-3">
                            <button type="submit" class="btn btn-success btn-md btn-block mt-0">
                               Update
                            </button>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection

@push('scripts')

<script type="text/javascript">
    $(function() {
        // Image Uploader
        $('#post_image_trigger').filemanager('image');
    });
</script>

@endpush
