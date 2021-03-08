{!! csrf_field() !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<meta name="_token" content="{!! csrf_token() !!}" />

<div class="row">
    <div class="col-md-8">
        <div class="form-group has-feedback row {{ $errors->has('fied1') ? ' has-error ' : '' }}">
            {!! Form::label('BUSINESS DEVELOPMENT DIVISION', trans('BUSINESS DEVELOPMENT DIVISION'), ['class' => 'col-12 control-label']); !!}
            <input type="hidden" name="id" value="{{$dashboarddata->id}}">
            <div class="col-12">
                {!! Form::number('fied1', $dashboarddata->Business_Development_Division, [
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
            {!! Form::label('CEO OFFICE', trans('CEO OFFICE'), ['class' => 'col-12 control-label']); !!}
            <div class="col-12">
                {!! Form::number('fied2', $dashboarddata->CEO_Office, [
                    'id' => 'fied2',
                    'class' => 'form-control',
                    'placeholder' => trans('CEO OFFICE')
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
            {!! Form::label('COMMERCIAL DIVISION', trans('COMMERCIAL DIVISION'), ['class' => 'col-12 control-label']); !!}
            <div class="col-12">
                {!! Form::number('fied3', $dashboarddata->Commercial_Division, [
                    'id' => 'fied3',
                    'class' => 'form-control',
                    'placeholder' => trans('COMMERCIAL DIVISION')
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
            {!! Form::label('CORPORATE AFFAIRS DIVISION', trans('CORPORATE AFFAIRS DIVISION'), ['class' => 'col-12 control-label']); !!}
            <div class="col-12">
                {!! Form::number('fied4', $dashboarddata->Corporate_Affairs_Division, [
                    'id' => 'fied4',
                    'class' => 'form-control',
                    'placeholder' => trans('CORPORATE AFFAIRS DIVISION')
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
            {!! Form::label('CORPORATE SECURITY DIVISION', trans('CORPORATE SECURITY DIVISION'), ['class' => 'col-12 control-label']); !!}
            <div class="col-12">
                {!! Form::number('fied5', $dashboarddata->Corporate_Security_Division, [
                    'id' => 'fied5',
                    'class' => 'form-control',
                    'placeholder' => trans('CORPORATE SECURITY DIVISION')
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
            {!! Form::label('ENTERPRISE BUSINESS UNIT DIVISION', trans('ENTERPRISE BUSINESS UNIT DIVISION'), ['class' => 'col-12 control-label']); !!}
            <div class="col-12">
                {!! Form::number('fied6', $dashboarddata->EBUD, [
                    'id' => 'fied6',
                    'class' => 'form-control',
                    'placeholder' => trans('ENTERPRISE BUSINESS UNIT DIVISION')
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
            {!! Form::label('FINANCE DIVISION', trans('FINANCE DIVISION'), ['class' => 'col-12 control-label']); !!}
            <div class="col-12">
                {!! Form::number('fied7', $dashboarddata->Finance_Division, [
                    'id' => 'fied7',
                    'class' => 'form-control',
                    'placeholder' => trans('FINANCE DIVISION')
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
            {!! Form::label('FINANCIAL SERVICES DIVISION', trans('FINANCIAL SERVICES DIVISION'), ['class' => 'col-12 control-label']); !!}
            <div class="col-12">
                {!! Form::number('fied8', $dashboarddata->Financial_Services_Division,[
                    'id' => 'fied8',
                    'class' => 'form-control',
                    'placeholder' => trans('FINANCIAL SERVICES DIVISION')
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
            {!! Form::label('RESOURCE DIVISION', trans('RESOURCE DIVISION'), ['class' => 'col-12 control-label']); !!}
            <div class="col-12">
                {!! Form::number('fied9', $dashboarddata->Resource_Division, [
                    'id' => 'fied9',
                    'class' => 'form-control',
                    'placeholder' => trans('RESOURCE DIVISION')
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
            {!! Form::label('TECHNOLOGY DIVISION', trans('TECHNOLOGY DIVISION'), ['class' => 'col-12 control-label']); !!}
            <div class="col-12">
                {!! Form::number('fied10', $dashboarddata->Technology_Division, [
                    'id' => 'fied10',
                    'class' => 'form-control',
                    'placeholder' => trans('TECHNOLOGY DIVISION')
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
            {!! Form::label('VGE AFRICA', trans('VGE AFRICA'), ['class' => 'col-12 control-label']); !!}
            <div class="col-12">
                {!! Form::number('fied11', $dashboarddata->VGE_Division, [
                    'id' => 'fied11',
                    'class' => 'form-control',
                    'placeholder' => trans('VGE AFRICA')
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
