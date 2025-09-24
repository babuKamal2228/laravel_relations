@extends('layouts.layout')

@section('title')
    {{ $student->name }}'s Profile
@endsection

@section('main_content')
<div class="container py-5">
    <div class="profile-wrapper bg-white shadow-lg rounded-4 p-4">

        <!-- Top Section -->
        <div class="text-center mb-5">
            <img src="{{ asset('storage/'.$student->photo->image_path) }}"
                 alt="Student Photo"
                 class="rounded-circle border border-3 shadow"
                 width="160" height="160">
            <h2 class="mt-3 fw-bold text-primary">{{ $student->name }}</h2>
            <p class="text-muted mb-0">Student ID: {{ $student->id }}</p>
        </div>

        <!-- Personal Information -->
        <div class="section mb-5">
            <h4 class="section-heading">👤 Personal Information</h4>
            <div class="row">
                <div class="col-md-6"><strong>Father's Name:</strong> {{ $student->father_name }}</div>
                <div class="col-md-6"><strong>Date of Birth:</strong> {{ $student->date_of_birth }}</div>
                <div class="col-md-6"><strong>CNIC:</strong> {{ $student->cnic }}</div>
                <div class="col-md-6"><strong>Religion:</strong> {{ $student->religion }}</div>
                <div class="col-md-6"><strong>Phone:</strong> {{ $student->phone_number }}</div>
                <div class="col-md-6"><strong>City:</strong> {{ $student->city }}</div>
                <div class="col-md-12"><strong>Address:</strong> {{ $student->address }}</div>
            </div>
        </div>

        <!-- Academic Information -->
        <div class="section mb-5">
            <h4 class="section-heading">📘 Academic Information</h4>
            <div class="row">
                <div class="col-md-6"><strong>Class ID:</strong> {{ $student->class_id }}</div>
                <div class="col-md-6"><strong>Class Name:</strong> {{ $student->classi->clasess }}</div>
                <div class="col-md-6"><strong>Class Record ID:</strong> {{ $student->classi->clasess_id }}</div>
            </div>
        </div>

        <!-- Photo Information -->
        <div class="section mb-5 text-center">
            <h4 class="section-heading">🖼️ Uploaded Photo</h4>
            <img src="{{ asset('storage/'.$student->photo->image_path) }}"
                 alt="Student Photo"
                 class="img-thumbnail rounded-3 shadow-sm mt-3"
                 width="280">
            <p class="mt-2">
                <strong>Photo ID:</strong> {{ $student->photo->id }} |
                <strong>Linked Student ID:</strong> {{ $student->photo->student_id }}
            </p>
        </div>

        <!-- Signature + Seal -->
        <div class="d-flex justify-content-between align-items-center mt-5">
            <div class="text-center">
                <div class="signature-line"></div>
                <p class="mt-2 text-muted">Authorized Signature</p>
            </div>
            <div class="text-center">
                <span class="badge bg-primary p-3 rounded-circle shadow">Official Seal</span>
            </div>
        </div>

    </div>
</div>

<style>
    .profile-wrapper {
        max-width: 900px;
        margin: auto;
    }
    .section-heading {
        font-weight: 600;
        color: #2c3e50;
        border-bottom: 2px solid #ddd;
        padding-bottom: 6px;
        margin-bottom: 20px;
    }
    .signature-line {
        border-top: 2px solid #333;
        width: 180px;
        margin: auto;
    }
</style>
@endsection
