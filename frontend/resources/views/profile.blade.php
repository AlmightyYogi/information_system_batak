@extends('layouts.apps')

@section('title', 'Profile')

@section('body-class', 'bg-profile')

@section('content')
<div class="container profile-container">
    <div class="profile-card">
        <div class="profile-header">
            {{-- <img id="profile-avatar" src="{{ asset('images/default-avatar.png') }}" alt="Profile Picture"> --}}
            <h2 id="profile-fullname">Loading...</h2>
            <p id="profile-username">@username</p>
        </div>
        <div class="profile-body">
            <ul>
                <li><strong>Full Name:</strong> <span id="info-fullname">Loading...</span></li>
                <li><strong>Username:</strong> <span id="info-username">Loading...</span></li>
                {{-- <li><strong>Email:</strong> <span id="info-email">Loading...</span></li> --}}
                {{-- <li><strong>Joined:</strong> <span id="info-joined">Loading...</span></li> --}}
            </ul>
        </div>
        <button class="btn btn-danger" id="logout-btn">Logout</button>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/profile.js') }}" defer></script>
@endsection
