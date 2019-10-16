@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Game {{ $game->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/games') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/games/' . $game->id . '/edit') }}" title="Edit Game"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('games' . '/' . $game->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Game" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $game->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Photo</th><td><img src="{{ asset('storage') . '/' . $game->photo }}" class="img-thumbnail img-fluid" alt="" width="100"></td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $game->name }} </td></tr><tr><th> Category </th><td> {{ $game->category }} </td></tr><tr><th> Platform </th><td> {{ $game->platform }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
