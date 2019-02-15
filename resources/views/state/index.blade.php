@extends('admin')

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

        {{-- get --}}
        <a href="{{ action('StateController@exportPDF') }}" class="btn btn-primary">
           Export PDF
        </a>

        <a href="{{ action('StateController@exportExcel') }}" class="btn btn-primary">
                Export EXCEL
        </a>

        {{-- post
        <form method="POST" action="{{ action('StateController@exportPDF') }}">
        {{ csrf_field() }}
         <button type="submit">
             Export PDF POST
         </button>
        </form> --}}
    </div>
    <br>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>State Name</th>
            <th>State Abbreviation</th>
            <th>Action</th>
        </tr>

        @foreach ($state as $key => $st)
            <tr>
                <td>{{$key+1 }}</td>
                <td>{{ $st->state_name }}</td>
                <td>{{ $st->state_abbr }}</td>
                <td>
                    <form method="POST" action="{{ action('StateController@destroy', $st->id) }}" onsubmit="return confirm('Confirm delete {{ $st->state_name }}?');">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        
                        <a href="{{ action('StateController@show', $st->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ action('StateController@edit', $st->id) }}" class="btn btn-success">Update</a>
                        
                        <button class="btn btn-danger">Delete</button>
                        
                    </form> 
                </td>
            </tr>
        @endforeach
    </table>

    <div class="row">
        <div class="col-sm-5">
            <div class="dataTables_info" id="example2_info" 
            role="status" aria-live="polite">
                Showing 1 to {{count($state)}} of 
                {{count($state)}} entries
            </div>
        </div>
        <div class="col-sm-7">
            <div class="dataTables_paginate paging_simple_numbers" 
            id="example2_paginate">
                {{ $state->links() }}
            </div>
        </div>
    </div>

@endsection