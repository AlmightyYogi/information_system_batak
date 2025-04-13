@extends('layouts.apps')

@section('title', 'Review Kuis')

@section('body-class', 'bg-review')

@section('content')

<div class="dashboard">
    <div class="dashboard-header">
        <img src="{{ asset('images/header-image.png') }}" alt="Rumah Adat Batak Toba">
    </div>
</div>

<div class="container mt-4">
    <h2 class="text-center">Review Kuis Aksara Batak Toba</h2>

    <div class="card">
        <div class="card-body">
            <h5>Grading method: <strong>Highest grade</strong></h5>
            <table class="table table-bordered mt-3">
                <thead class="table-success">
                    <tr>
                        <th>Attempt</th>
                        <th>State</th>
                        <th>Marks / 10</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Finished</td>
                        <td>{{ session('score', 0) }} / 10</td>
                    </tr>
                </tbody>
            </table>
            <h5>Highest grade: <strong>{{ session('score', 0) * 10 }} / 100</strong></h5>
        </div>
    </div>

    <div class="text-center mt-3">
        <a href="{{ url('/dashboard') }}" class="btn btn-secondary">Kembali ke Beranda</a>
    </div>
</div>

@endsection
