@extends('layouts.app')

@section('template_title')
    {{ $speed->name ?? 'Show Speed' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Speed</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('speeds.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Distance:</strong>
                            {{ $speed->distance }}
                        </div>
                        <div class="form-group">
                            <strong>Hours:</strong>
                            {{ $speed->hours }}
                        </div>
                        <div class="form-group">
                            <strong>Minute:</strong>
                            {{ $speed->minute }}
                        </div>
                        <div class="form-group">
                            <strong>Seconds:</strong>
                            {{ $speed->seconds }}
                        </div>
                        <div class="form-group">
                            <strong>Pminute:</strong>
                            {{ $speed->pminute }}
                        </div>
                        <div class="form-group">
                            <strong>Pseconds:</strong>
                            {{ $speed->pseconds }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $speed->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
