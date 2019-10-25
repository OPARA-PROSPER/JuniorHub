@extends('layouts.app')

@section('content')
    {{-- {{$user->name}} --}}
    <div id="root" class="container-fluid margin-down">
        <div class="row justify-content-around">
            <profile-detail image="{{ asset("storage/profile_pictures/$user->profile_picture") }}" user="{{ $user }}"></profile-detail>
            <profile-board title="{{ count($user->blogpost) }}"></profile-board>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
@endsection