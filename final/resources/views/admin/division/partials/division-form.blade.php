{!! csrf_field() !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<meta name="_token" content="{!! csrf_token() !!}" />

<div class="row">
    <div class="col-md-8">
        <div class="form-group has-feedback row {{ $errors->has('tag') ? ' has-error ' : '' }}">
            {!! Form::label('Division', trans('Division'), ['class' => 'col-12 control-label']); !!}
            <div class="col-12">
                {!! Form::text('name', $tag, [
                    'id' => 'division_name',
                    'class' => 'form-control',
                    'placeholder' => trans('Division  Name')
                ]) !!}
            </div>
            @if ($errors->has('division_name'))
                <div class="col-12">
                    <span class="help-block">
                        <strong>{{ $errors->first('division_name') }}</strong>
                    </span>
                </div>
            @endif
        </div>

        <div class="form-group has-feedback row {{ $errors->has('title') ? ' has-error ' : '' }}">
            {!! Form::label('slug', trans('Slug'), ['class' => 'col-12 control-label']); !!}
            <div class="col-12">
                {!! Form::text('slug', $title, [
                    'id' => 'slug',
                    'class' => 'form-control',
                    'placeholder' => trans('slug')
                ]) !!}
            </div>
            @if ($errors->has('slug'))
                <div class="col-12">
                    <span class="help-block">
                        <strong>{{ $errors->first('slug') }}</strong>
                    </span>
                </div>
            @endif
        </div>


        <div class="form-group has-feedback row {{ $errors->has('title') ? ' has-error ' : '' }}">
            {!! Form::label('Status', trans('Status'), ['class' => 'col-12 control-label']); !!}
            <div class="col-12">

                <select name="active" id="active" class="form-control">
                <option value="">Select Status</option>
                 <option value="0">No</option>
                 <option value="1">Yes</option>
                </select>
            </div>
        </div>


    </div>
</div>
