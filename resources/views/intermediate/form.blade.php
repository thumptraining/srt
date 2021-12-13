<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('week') }}
            {{ Form::text('week', $intermediate->week, ['class' => 'form-control' . ($errors->has('week') ? ' is-invalid' : ''), 'placeholder' => 'Week']) }}
            {!! $errors->first('week', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('day') }}
            {{ Form::text('day', $intermediate->day, ['class' => 'form-control' . ($errors->has('day') ? ' is-invalid' : ''), 'placeholder' => 'Day']) }}
            {!! $errors->first('day', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('stages') }}
            {{ Form::text('stages', $intermediate->stages, ['class' => 'form-control' . ($errors->has('stages') ? ' is-invalid' : ''), 'placeholder' => 'Stages']) }}
            {!! $errors->first('stages', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categories') }}
            {{ Form::text('categories', $intermediate->categories, ['class' => 'form-control' . ($errors->has('categories') ? ' is-invalid' : ''), 'placeholder' => 'Categories']) }}
            {!! $errors->first('categories', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('warm') }}
            {{ Form::text('warm', $intermediate->warm, ['class' => 'form-control' . ($errors->has('warm') ? ' is-invalid' : ''), 'placeholder' => 'Warm']) }}
            {!! $errors->first('warm', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('whours') }}
            {{ Form::text('whours', $intermediate->whours, ['class' => 'form-control' . ($errors->has('whours') ? ' is-invalid' : ''), 'placeholder' => 'Whours']) }}
            {!! $errors->first('whours', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('wminute') }}
            {{ Form::text('wminute', $intermediate->wminute, ['class' => 'form-control' . ($errors->has('wminute') ? ' is-invalid' : ''), 'placeholder' => 'Wminute']) }}
            {!! $errors->first('wminute', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('wseconds') }}
            {{ Form::text('wseconds', $intermediate->wseconds, ['class' => 'form-control' . ($errors->has('wseconds') ? ' is-invalid' : ''), 'placeholder' => 'Wseconds']) }}
            {!! $errors->first('wseconds', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('wzone') }}
            {{ Form::text('wzone', $intermediate->wzone, ['class' => 'form-control' . ($errors->has('wzone') ? ' is-invalid' : ''), 'placeholder' => 'Wzone']) }}
            {!! $errors->first('wzone', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rep') }}
            {{ Form::text('rep', $intermediate->rep, ['class' => 'form-control' . ($errors->has('rep') ? ' is-invalid' : ''), 'placeholder' => 'Rep']) }}
            {!! $errors->first('rep', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('workout') }}
            {{ Form::text('workout', $intermediate->workout, ['class' => 'form-control' . ($errors->has('workout') ? ' is-invalid' : ''), 'placeholder' => 'Workout']) }}
            {!! $errors->first('workout', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('thours') }}
            {{ Form::text('thours', $intermediate->thours, ['class' => 'form-control' . ($errors->has('thours') ? ' is-invalid' : ''), 'placeholder' => 'Thours']) }}
            {!! $errors->first('thours', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tminute') }}
            {{ Form::text('tminute', $intermediate->tminute, ['class' => 'form-control' . ($errors->has('tminute') ? ' is-invalid' : ''), 'placeholder' => 'Tminute']) }}
            {!! $errors->first('tminute', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tseconds') }}
            {{ Form::text('tseconds', $intermediate->tseconds, ['class' => 'form-control' . ($errors->has('tseconds') ? ' is-invalid' : ''), 'placeholder' => 'Tseconds']) }}
            {!! $errors->first('tseconds', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tzone') }}
            {{ Form::text('tzone', $intermediate->tzone, ['class' => 'form-control' . ($errors->has('tzone') ? ' is-invalid' : ''), 'placeholder' => 'Tzone']) }}
            {!! $errors->first('tzone', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cool') }}
            {{ Form::text('cool', $intermediate->cool, ['class' => 'form-control' . ($errors->has('cool') ? ' is-invalid' : ''), 'placeholder' => 'Cool']) }}
            {!! $errors->first('cool', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('chours') }}
            {{ Form::text('chours', $intermediate->chours, ['class' => 'form-control' . ($errors->has('chours') ? ' is-invalid' : ''), 'placeholder' => 'Chours']) }}
            {!! $errors->first('chours', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cminute') }}
            {{ Form::text('cminute', $intermediate->cminute, ['class' => 'form-control' . ($errors->has('cminute') ? ' is-invalid' : ''), 'placeholder' => 'Cminute']) }}
            {!! $errors->first('cminute', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cseconds') }}
            {{ Form::text('cseconds', $intermediate->cseconds, ['class' => 'form-control' . ($errors->has('cseconds') ? ' is-invalid' : ''), 'placeholder' => 'Cseconds']) }}
            {!! $errors->first('cseconds', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>