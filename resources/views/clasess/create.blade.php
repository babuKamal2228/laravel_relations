@extends('layouts.layout')


@section('title')
    {{ 'Add Subjects' }}
@endsection
@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action={{ route('clasess.store') }} method="post">
                    @csrf
                    <div class="row">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        {{-- teacher_id, teacher_firstname, teacher_lastname, teacher_designation, Gender, email --}}
                        <div class="col-md-6">
                            <label for="teacher_id">Class Code:</label>
                            <input class="form-control" type="number" name="clasess_id" placeholder="Class Code">
                            <span class="text text-danger"> @error('clasess_id')
                                    {{ $message }}
                                @enderror
                            </span>
                            </br>
                            <label for="clasess">Add Class:</label>
                            <input class="form-control" type="text" name="clasess" placeholder="clasess">
                            <span class="text text-danger"> @error('clasess')
                                    {{ $message }}
                                @enderror
                            </span>
                            </br>

                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Add Clasess</button>
          <a class="btn btn-success" href={{ route('clasess.list') }}> View All Clasess</a>
                </form>
            </div>
        </div>
    </div>
@endsection
