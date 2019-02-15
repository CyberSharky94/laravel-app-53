@extends('admin')

@section('content_body')
    <form method="POST" 
    action="{{ action('ProfileController@store') }}" 
    enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="box-body">
        <div class="form-group">
            <label for="avatar" 
            class="col-md-4 control-label">
            Picture
            </label>

            <div class="col-md-6">
                <input type="file" id="picture" 
                name="picture">
            </div>
        </div>    
    </div>

    <div class="box-footer">
        <button type="submit" 
        class="btn btn-primary">Submit</button>
    </div>


    </form>
@endsection