@extends('admin')

@section('content_body')

<a href="{{ action('EmailController@sent_email')}}">
    <button type="button" class="btn-primary">
        Sent Email
    </button>
    </a>

    <a href="{{ action('EmailController@sent_email_attach')}}">
            <button type="button" class="btn-primary">
                Sent Email With Attach
            </button>
            </a>
@endsection