@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <ht>Welcome to the Microposts!!!</ht>
            {!! link_to_route('signup.get','Sign up now',[],['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endsection    