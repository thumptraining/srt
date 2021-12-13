@extends('layouts.app')

@section('template_title')
    {{ $advance->name ?? 'Show Advance' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Advance</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('advances.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Week:</strong>
                            {{ $advance->week }}
                        </div>
                        <div class="form-group">
                            <strong>Day:</strong>
                            {{ $advance->day }}
                        </div>
                        <div class="form-group">
                            <strong>Stages:</strong>
                            {{ $advance->stages }}
                        </div>
                        <div class="form-group">
                            <strong>Categories:</strong>
                            {{ $advance->categories }}
                        </div>
                        <div class="form-group">
                            <strong>Warm:</strong>
                            {{ $advance->warm }}
                        </div>
                        <div class="form-group">
                            <strong>Whours:</strong>
                            {{ $advance->whours }}
                        </div>
                        <div class="form-group">
                            <strong>Wminute:</strong>
                            {{ $advance->wminute }}
                        </div>
                        <div class="form-group">
                            <strong>Wseconds:</strong>
                            {{ $advance->wseconds }}
                        </div>
                        <div class="form-group">
                            <strong>Wzone:</strong>
                            {{ $advance->wzone }}
                        </div>
                        <div class="form-group">
                            <strong>Rep:</strong>
                            {{ $advance->rep }}
                        </div>
                        <div class="form-group">
                            <strong>Workout:</strong>
                            {{ $advance->workout }}
                        </div>
                        <div class="form-group">
                            <strong>Thours:</strong>
                            {{ $advance->thours }}
                        </div>
                        <div class="form-group">
                            <strong>Tminute:</strong>
                            {{ $advance->tminute }}
                        </div>
                        <div class="form-group">
                            <strong>Tseconds:</strong>
                            {{ $advance->tseconds }}
                        </div>
                        <div class="form-group">
                            <strong>Tzone:</strong>
                            {{ $advance->tzone }}
                        </div>
                        <div class="form-group">
                            <strong>Cool:</strong>
                            {{ $advance->cool }}
                        </div>
                        <div class="form-group">
                            <strong>Chours:</strong>
                            {{ $advance->chours }}
                        </div>
                        <div class="form-group">
                            <strong>Cminute:</strong>
                            {{ $advance->cminute }}
                        </div>
                        <div class="form-group">
                            <strong>Cseconds:</strong>
                            {{ $advance->cseconds }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
