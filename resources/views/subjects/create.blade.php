@extends('layouts.layout')


@section('title')
    {{ 'Add Subjects' }}
@endsection
@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action={{ route('subjects.store') }} method="post">
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
                            <label for="teacher_id">Subject Code:</label>
                            <input class="form-control" type="number" name="subject_id" placeholder="Subject Code">
                            <span class="text text-danger"> @error('subject_id')
                                    {{ $message }}
                                @enderror
                            </span>
                            </br>
                            <label for="teacher_firstname">Subject:</label>
                            <input class="form-control" type="text" name="subject" placeholder="Subject">
                            <span class="text text-danger"> @error('subject')
                                    {{ $message }}
                                @enderror
                            </span>
                            </br>

                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Add Subject</button>
          <a class="btn btn-success" href={{ route('subjects.list') }}> View All Subjects</a>
                </form>
            </div>
        </div>
    </div>
@endsection
