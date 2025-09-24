@extends('layouts.layout')


@section('title')
    {{ 'Form' }}
@endsection
@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
        <form action={{ route('student.store') }} method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="image">Upload Images:</label>
                            <input class="form-control" type="file" name="image" accept="image/*" >
                            <span class="text text-danger"> @error('image')
                                    {{ $message }}
                                @enderror
                            </span>
                            </br>

                            <label for="name">First Name:</label>
                            <input class="form-control" type="text" name="name" placeholder="FirstName">
                            <span class="text text-danger"> @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                            </br>
                            <label for="father_name">Father Name:</label>
                            <input class="form-control" type="text" name="father_name" placeholder="Father-Name">
                            <span class="text text-danger"> @error('father_name')
                                    {{ $message }}
                                @enderror
                            </span>
                            </br>
                            <label for="date_of_name">Date of Birth:</label>
                            <input class="form-control" type="text" name="date_of_birth" placeholder="YYYY-MM-DD">
                            <span class="text text-danger"> @error('date_of_birth')
                                    {{ $message }}
                                @enderror
                            </span>
                            </br>

                            <label for="class">Class:</label>
                            <input class="form-control" type="number" name="class" placeholder="class">
                            <span class="text text-danger"> @error('class')
                                    {{ $message }}
                                @enderror
                            </span>
                            </br>

                            <label for="cnic">CNIC:</label>
                            <input class="form-control" type="text" name="cnic" placeholder="CNIC">
                            <span class="text text-danger"> @error('cnic')
                                    {{ $message }}
                                @enderror
                            </span>
                            </br>
                        </div>
                        {{-- // name	father_name	date_of_birth	cnic	address	city	religion	phone_number --}}
                        <div class="col-md-6">
                            <label for="address">Address:</label>
                            <input class="form-control" type="text" name="address" placeholder="Address">
                            <span class="text text-danger"> @error('address')
                                    {{ $message }}
                                @enderror
                            </span>
                            </br>
                            <label for="city">City:</label>
                            <input class="form-control" type="text" name="city" placeholder="City">
                            <span class="text text-danger"> @error('city')
                                    {{ $message }}
                                @enderror
                            </span>
                            </br>
                            <label for="religion">Religion:</label>
                            <input class="form-control" type="text" name="religion" placeholder="Religion">
                            <span class="text text-danger"> @error('religion')
                                    {{ $message }}
                                @enderror
                            </span>
                            </br>
                            <label for="phone_number">Phone-Number:</label>
                            <input class="form-control" type="text" name="phone_number" placeholder="Phone-Number">
                            <span class="text text-danger"> @error('phone_number')
                                    {{ $message }}
                                @enderror
                            </span>
                            </br>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
