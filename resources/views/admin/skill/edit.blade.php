@extends('layouts.admin')

@section('template_title')
    {{ trans('admin.tags.pages.update.title') }}
@endsection

@section('template_description')
    {{ trans('admin.tags.pages.update.desc') }}
@endsection

@section('header_title')
    {{ trans('admin.tags.pages.update.header') }}
@endsection

@push('head')
@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header ">
                <h5 class="card-title">
                   Updating skill
                </h5>
            </div>
            <hr>
            @include('admin.partials.messages')
            {!! Form::open(['method' => 'Post', 'route' => ['updateskill'],  'class' => 'update-tag-form', 'id' => 'update_tag_form', 'role' => 'form', 'enctype' => 'multipart/form-data' ]) !!}
                <div class="card-body">
                    <input type="hidden" name="_method" value="post">
                    <input type="hidden" name="id" value="{{$skill->id}}">
                    @include('admin.skill.partials.skill-form')
                </div>
                <hr>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-6 mb-3">
                            <button type="submit" class="btn btn-success btn-md btn-block mt-0">
                                Update Skill
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
