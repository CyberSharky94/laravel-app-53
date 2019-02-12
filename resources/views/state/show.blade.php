@extends('layouts.content')

@section('content_body')

    <legend>State Details</legend>
    
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $state->id }}</td>
        </tr>
        <tr>
            <th>State Name</th>
            <td>{{ $state->state_name }}</td>
        </tr>
        <tr>
            <th>State Abbreviation</th>
            <td>{{ $state->state_abbr }}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ $state->created_at }}</td>
        </tr>
        <tr>
            <th>Updated At</th>
            <td>{{ $state->updated_at }}</td>
        </tr>
    </table>

    <div>
        <button class="btn btn-default" type="button" onclick="window.location.href='{{ route('state.index') }}'">Back</button>
    </div>

@endsection