@extends('layouts.app')

@section('template_title')
    {{ $weight->name ?? 'Show Weight' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Weight</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('weights.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Peso:</strong>
                            {{ $weight->peso }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $weight->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
