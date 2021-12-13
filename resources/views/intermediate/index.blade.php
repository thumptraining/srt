@extends('layouts.app')

@section('template_title')
    Intermediate
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Intermediate') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('intermediates.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Week</th>
										<th>Day</th>
										<th>Stages</th>
										<th>Categories</th>
										<th>Warm</th>
										<th>Whours</th>
										<th>Wminute</th>
										<th>Wseconds</th>
										<th>Wzone</th>
										<th>Rep</th>
										<th>Workout</th>
										<th>Thours</th>
										<th>Tminute</th>
										<th>Tseconds</th>
										<th>Tzone</th>
										<th>Cool</th>
										<th>Chours</th>
										<th>Cminute</th>
										<th>Cseconds</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($intermediates as $intermediate)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $intermediate->week }}</td>
											<td>{{ $intermediate->day }}</td>
											<td>{{ $intermediate->stages }}</td>
											<td>{{ $intermediate->categories }}</td>
											<td>{{ $intermediate->warm }}</td>
											<td>{{ $intermediate->whours }}</td>
											<td>{{ $intermediate->wminute }}</td>
											<td>{{ $intermediate->wseconds }}</td>
											<td>{{ $intermediate->wzone }}</td>
											<td>{{ $intermediate->rep }}</td>
											<td>{{ $intermediate->workout }}</td>
											<td>{{ $intermediate->thours }}</td>
											<td>{{ $intermediate->tminute }}</td>
											<td>{{ $intermediate->tseconds }}</td>
											<td>{{ $intermediate->tzone }}</td>
											<td>{{ $intermediate->cool }}</td>
											<td>{{ $intermediate->chours }}</td>
											<td>{{ $intermediate->cminute }}</td>
											<td>{{ $intermediate->cseconds }}</td>

                                            <td>
                                                <form action="{{ route('intermediates.destroy',$intermediate->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('intermediates.show',$intermediate->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('intermediates.edit',$intermediate->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $intermediates->links() !!}
            </div>
        </div>
    </div>
@endsection
