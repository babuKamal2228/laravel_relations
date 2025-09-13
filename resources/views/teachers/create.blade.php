@extends('layouts.layout')


@section('title')
    {{ 'Form' }}
@endsection
@section('main_content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action={{ route('teachers.store') }} method="post">
                @csrf
                <div class="row">
                    {{-- teacher_id, teacher_firstname, teacher_lastname, teacher_designation, Gender, email --}}
                    <div class="col-md-6">
                        <label for="teacher_id">License No:</label>
                        <input class="form-control" type="number" name="teacher_id" placeholder="License No">
                       <span class="text text-danger"> @error('teacher_id'){{ $message }}@enderror
                         </span>
                        </br>
                        <label for="teacher_firstname">First Name:</label>
                        <input class="form-control" type="text" name="teacher_firstname" placeholder="First-Name">
                        <span class="text text-danger"> @error('teacher_firstname'){{ $message }}@enderror</span>
                        </br>
                        <label for="teacher_lastname">Last Name:</label>
                        <input class="form-control" type="text" name="teacher_lastname" placeholder="LastName">
                       <span class="text text-danger"> @error('teacher_lastname'){{ $message }}@enderror</span>
                        </br>
                        <label for="teacher_designation">Designation:</label>
                        <input class="form-control" type="text" name="teacher_designation" placeholder="Designation">
                        <span class="text text-danger"> @error('teacher_designation'){{ $message }}@enderror</span>
                        </br>
                    </div>
                    {{-- teacher_id, teacher_firstname, teacher_lastname, teacher_designation, Gender, email --}}
                    <div class="col-md-6">
                        <label for="address">Gender:</label>
                        <input class="form-control" type="text" name="Gender" placeholder="Gender">
                         <span class="text text-danger"> @error('Gender'){{ $message }}@enderror</span>
                        </br>
                        <label for="email">Email:</label>
                        <input class="form-control" type="email" name="email" placeholder="Email">
                         <span class="text text-danger"> @error('email'){{ $message }}@enderror</span>
                        </br>
                        {{-- <label for="religion">Religion:</label>
                        <input class="form-control" type="text" name="religion" placeholder="Religion">
                        <span class="text text-danger"> @error('religion'){{ $message }}@enderror</span>
                        </br>
                        <label for="phone_number">Phone-Number:</label>
                        <input class="form-control" type="text" name="phone_number" placeholder="Phone-Number">
                        <span class="text text-danger"> @error('phone_number'){{ $message }}@enderror</span> --}}
                        </br>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
