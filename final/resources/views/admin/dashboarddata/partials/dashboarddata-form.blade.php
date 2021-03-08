{!! csrf_field() !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<meta name="_token" content="{!! csrf_token() !!}" />

<div class="row">
    <div class="col-md-8">
        <div class="form-group has-feedback row {{ $errors->has('fied1') ? ' has-error ' : '' }}">
            {!! Form::label('BUSINESS DEVELOPMENT DIVISION', trans('BUSINESS DEVELOPMENT DIVISION'), ['class' => 'col-12 control-label']); !!}
            <input type="hidden" name="id" value="{{$dashboarddata->id}}">
            <div class="col-12">
                {!! Form::number('fied1', $dashboarddata->fied1, [
                    'id' => 'fied1',
                    'class' => 'form-control',
                    'placeholder' => trans('BUSINESS DEVELOPMENT DIVISION')
                ]) !!}
            </div>
            @if ($errors->has('band_name'))
                <div class="col-12">
                    <span class="help-block">
                        <strong>{{ $errors->first('fied1') }}</strong>
                    </span>
                </div>
            @endif
        </div>

        <div class="form-group has-feedback row {{ $errors->has('fied1') ? ' has-error ' : '' }}">
            {!! Form::label('BUSINESS DEVELOPMENT DIVISION', trans('BUSINESS DEVELOPMENT DIVISION'), ['class' => 'col-12 control-label']); !!}
            <div class="col-12">
                {!! Form::number('fied2', $dashboarddata->fied2, [
                    'id' => 'fied2',
                    'class' => 'form-control',
                    'placeholder' => trans('BUSINESS DEVELOPMENT DIVISION')
                ]) !!}
            </div>
            @if ($errors->has('band_name'))
                <div class="col-12">
                    <span class="help-block">
                        <strong>{{ $errors->first('fied2') }}</strong>
                    </span>
                </div>
            @endif
        </div>

        <div class="form-group has-feedback row {{ $errors->has('fied1') ? ' has-error ' : '' }}">
            {!! Form::label('BUSINESS DEVELOPMENT DIVISION', trans('BUSINESS DEVELOPMENT DIVISION'), ['class' => 'col-12 control-label']); !!}
            <div class="col-12">
                {!! Form::number('fied3', $dashboarddata->fied3, [
                    'id' => 'fied3',
                    'class' => 'form-control',
                    'placeholder' => trans('BUSINESS DEVELOPMENT DIVISION')
                ]) !!}
            </div>
            @if ($errors->has('band_name'))
                <div class="col-12">
                    <span class="help-block">
                        <strong>{{ $errors->first('fied3') }}</strong>
                    </span>
                </div>
            @endif
        </div>
        <div class="form-group has-feedback row {{ $errors->has('fied1') ? ' has-error ' : '' }}">
            {!! Form::label('BUSINESS DEVELOPMENT DIVISION', trans('BUSINESS DEVELOPMENT DIVISION'), ['class' => 'col-12 control-label']); !!}
            <div class="col-12">
                {!! Form::number('fied5', $dashboarddata->fied5, [
                    'id' => 'fied5',
                    'class' => 'form-control',
                    'placeholder' => trans('BUSINESS DEVELOPMENT DIVISION')
                ]) !!}
            </div>
            @if ($errors->has('band_name'))
                <div class="col-12">
                    <span class="help-block">
                        <strong>{{ $errors->first('fied3') }}</strong>
                    </span>
                </div>
            @endif
        </div>


    </div>
</div>
