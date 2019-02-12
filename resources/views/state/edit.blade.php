@extends('layouts.content')

@section('content_body')
    
    <form class="form-horizontal" method="POST" action="{{ action('StateController@update', $state->id) }}">
      
      {{-- url('URI') --}}
      {{-- action('ControllerName@function') --}}
      {{-- route('route_name') --}}
      {{-- NOTE: refer php artisan route:list --}}

        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <fieldset>
        
        <!-- Form Name -->
        <legend>Add New State</legend>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="state_name">State Name</label>  
          <div class="col-md-4">
          <input id="state_name" name="state_name" type="text" placeholder="State Name" class="form-control input-md" required="" value="{{ $state->state_name }}">
            
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="state_abbr">State Abbreviation</label>  
          <div class="col-md-4">
          <input id="state_abbr" name="state_abbr" type="text" placeholder="State Abbreviation" class="form-control input-md" required="" value="{{ $state->state_abbr }}">
            
          </div>
        </div>
        
        <!-- Button (Double) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="submit"></label>
          <div class="col-md-8">
            <button id="submit" name="submit" class="btn btn-primary">Submit</button>
            <button type="reset" id="reset" name="reset" class="btn btn-danger">Reset</button>
            <button class="btn btn-default" type="button" onclick="window.location.href='{{ route('state.index') }}'">Back</button>
          </div>
        </div>
        
        </fieldset>
      </form>
        

@endsection