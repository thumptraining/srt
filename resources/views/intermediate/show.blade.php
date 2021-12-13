@extends('layouts.app')

@section('template_title')
    {{ $intermediate->name ?? 'Show Intermediate' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Intermediate</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('intermediates.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Week:</strong>
                            {{ $intermediate->week }}
                        </div>
                        <div class="form-group">
                            <strong>Day:</strong>
                            {{ $intermediate->day }}
                        </div>
                        <div class="form-group">
                            <strong>Stages:</strong>
                            {{ $intermediate->stages }}
                        </div>
                        <div class="form-group">
                            <strong>Categories:</strong>
                            {{ $intermediate->categories }}
                        </div>
                        <div class="form-group">
                            <strong>Warm:</strong>
                            {{ $intermediate->warm }}
                        </div>
                        <div class="form-group">
                            <strong>Whours:</strong>
                            {{ $intermediate->whours }}
                        </div>
                        <div class="form-group">
                            <strong>Wminute:</strong>
                            {{ $intermediate->wminute }}
                        </div>
                        <div class="form-group">
                            <strong>Wseconds:</strong>
                            {{ $intermediate->wseconds }}
                        </div>
                        <div class="form-group">
                            <strong>Wzone:</strong>
                            {{ $intermediate->wzone }}
                        </div>
                        <div class="form-group">
                            <strong>Rep:</strong>
                            {{ $intermediate->rep }}
                        </div>
                        <div class="form-group">
                            <strong>Workout:</strong>
                            {{ $intermediate->workout }}
                        </div>
                        <div class="form-group">
                            <strong>Thours:</strong>
                            {{ $intermediate->thours }}
                        </div>
                        <div class="form-group">
                            <strong>Tminute:</strong>
                            {{ $intermediate->tminute }}
                        </div>
                        <div class="form-group">
                            <strong>Tseconds:</strong>
                            {{ $intermediate->tseconds }}
                        </div>
                        <div class="form-group">
                            <strong>Tzone:</strong>
                            {{ $intermediate->tzone }}
                        </div>
                        <div class="form-group">
                            <strong>Cool:</strong>
                            {{ $intermediate->cool }}
                        </div>
                        <div class="form-group">
                            <strong>Chours:</strong>
                            {{ $intermediate->chours }}
                        </div>
                        <div class="form-group">
                            <strong>Cminute:</strong>
                            {{ $intermediate->cminute }}
                        </div>
                        <div class="form-group">
                            <strong>Cseconds:</strong>
                            {{ $intermediate->cseconds }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
