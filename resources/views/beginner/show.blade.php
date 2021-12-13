@extends('layouts.app')

@section('template_title')
    {{ $beginner->name ?? 'Show Beginner' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Beginner</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('beginners.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Week:</strong>
                            {{ $beginner->week }}
                        </div>
                        <div class="form-group">
                            <strong>Day:</strong>
                            {{ $beginner->day }}
                        </div>
                        <div class="form-group">
                            <strong>Stages:</strong>
                            {{ $beginner->stages }}
                        </div>
                        <div class="form-group">
                            <strong>Categories:</strong>
                            {{ $beginner->categories }}
                        </div>
                        <div class="form-group">
                            <strong>Warm:</strong>
                            {{ $beginner->warm }}
                        </div>
                        <div class="form-group">
                            <strong>Whours:</strong>
                            {{ $beginner->whours }}
                        </div>
                        <div class="form-group">
                            <strong>Wminute:</strong>
                            {{ $beginner->wminute }}
                        </div>
                        <div class="form-group">
                            <strong>Wseconds:</strong>
                            {{ $beginner->wseconds }}
                        </div>
                        <div class="form-group">
                            <strong>Wzone:</strong>
                            {{ $beginner->wzone }}
                        </div>
                        <div class="form-group">
                            <strong>Rep:</strong>
                            {{ $beginner->rep }}
                        </div>
                        <div class="form-group">
                            <strong>Workout:</strong>
                            {{ $beginner->workout }}
                        </div>
                        <div class="form-group">
                            <strong>Thours:</strong>
                            {{ $beginner->thours }}
                        </div>
                        <div class="form-group">
                            <strong>Tminute:</strong>
                            {{ $beginner->tminute }}
                        </div>
                        <div class="form-group">
                            <strong>Tseconds:</strong>
                            {{ $beginner->tseconds }}
                        </div>
                        <div class="form-group">
                            <strong>Tzone:</strong>
                            {{ $beginner->tzone }}
                        </div>
                        <div class="form-group">
                            <strong>Cool:</strong>
                            {{ $beginner->cool }}
                        </div>
                        <div class="form-group">
                            <strong>Chours:</strong>
                            {{ $beginner->chours }}
                        </div>
                        <div class="form-group">
                            <strong>Cminute:</strong>
                            {{ $beginner->cminute }}
                        </div>
                        <div class="form-group">
                            <strong>Cseconds:</strong>
                            {{ $beginner->cseconds }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
