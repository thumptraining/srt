@extends('layouts.app')

@section('template_title')
    Advance
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Advance') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('advances.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    @foreach ($advances as $advance)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $advance->week }}</td>
											<td>{{ $advance->day }}</td>
											<td>{{ $advance->stages }}</td>
											<td>{{ $advance->categories }}</td>
											<td>{{ $advance->warm }}</td>
											<td>{{ $advance->whours }}</td>
											<td>{{ $advance->wminute }}</td>
											<td>{{ $advance->wseconds }}</td>
											<td>{{ $advance->wzone }}</td>
											<td>{{ $advance->rep }}</td>
											<td>{{ $advance->workout }}</td>
											<td>{{ $advance->thours }}</td>
											<td>{{ $advance->tminute }}</td>
											<td>{{ $advance->tseconds }}</td>
											<td>{{ $advance->tzone }}</td>
											<td>{{ $advance->cool }}</td>
											<td>{{ $advance->chours }}</td>
											<td>{{ $advance->cminute }}</td>
											<td>{{ $advance->cseconds }}</td>

                                            <td>
                                                <form action="{{ route('advances.destroy',$advance->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('advances.show',$advance->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('advances.edit',$advance->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $advances->links() !!}
            </div>
        </div>
    </div>
@endsection
