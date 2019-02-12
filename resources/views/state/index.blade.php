@extends('layouts.content')

@section('content_body')

    @if (Session::has('success'))
        <div class="alert alert-success fade in">
            <p>
                {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">
                    &times;
                </span></button>
            </p>
        </div>
    @endif

    @if (Session::has('error'))
        <div class="alert alert-danger fade in">
            <p>
                {{ Session::get('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </p>
        </div>
    @endif 

    <legend>State List</legend>

    <div>
        <a href="{{ action('StateController@create') }}" class="btn btn-primary">
            Add State
        </a>
    </div><br>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>State Name</th>
            <th>State Abbreviation</th>
            <th>Action</th>
        </tr>

        @foreach ($state as $st)
            <tr>
                <td>{{ $st->id }}</td>
                <td>{{ $st->state_name }}</td>
                <td>{{ $st->state_abbr }}</td>
                <td>
                    <a href="{{ action('StateController@show', $st->id) }}" class="btn btn-primary">View</a>
                    <a href="{{ action('StateController@edit', $st->id) }}" class="btn btn-success">Update</a>

<form method="POST" action="{{ action('StateController@destroy', $st->id) }}" onsubmit="return confirm('Confirm delete {{ $st->state_name }}?');">

    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    
    <button class="btn btn-danger">Delete</button>
    
</form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection