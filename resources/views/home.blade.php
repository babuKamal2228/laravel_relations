{{-- @include('layout.header') --}}
@extends('layouts.layout')
@section('title')
    {{ 'home' }}
@endsection


@section('main_content')


    <div class="contianer ">
        <div class="row hero_section">
            <div class="col-md-4 hero_first_coloumn">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card_first_row bordered">
                            <div class="card-header">
                                <div class="card-title">
                                    <h6>All Student</h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Here you can check all students</p>

                            </div>
                            <div class="card-footer">
                              <a href= {{ route('student.list') }} class="btn btn-primary">All Students</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hero_second_coloumn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card_first_row bordered">
                            <div class="card-header">
                                <div class="card-title">
                                    <h6>All Student</h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Here you can check all students</p>

                            </div>
                            <div class="card-footer">
                              <a href={{ route('student.create') }} class="btn btn-success">Add Student</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hero_third_coloumn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card_first_row bordered">
                            <div class="card-header">
                                <div class="card-title">
                                    <h6>All Student</h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Here you can check all students</p>

                            </div>
                            <div class="card-footer">
                                   <a href={{ route('teachers.create') }} class="btn btn-success">Add Teacher</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- second row of cards --}}
        <div class="row hero_section">
            <div class="col-md-4 hero_first_coloumn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card_first_row bordered">
                            <div class="card-header">
                                <div class="card-title">
                                    <h6>All Student</h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Here you can check all students</p>

                            </div>
                            <div class="card-footer">
                              <a href={{ route('teachers.list') }} class="btn btn-success">All Teacher</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hero_second_coloumn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card_first_row bordered">
                            <div class="card-header">
                                <div class="card-title">
                                    <h6>All Student</h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Here you can Add All Subjects</p>

                            </div>
                            <div class="card-footer">
                             <a href={{ route('subjects.list') }} class="btn btn-success">All Subjects</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hero_third_coloumn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card_first_row bordered">
                            <div class="card-header">
                                <div class="card-title">
                                    <h6>All Student</h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Here you can check all students</p>

                            </div>
                            <div class="card-footer">
                               <a href={{ route('clasess.list') }} class="btn btn-success">All clasess</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="card card_first_row bordered">
                            <div class="card-header">
                                <div class="card-title">
                                    <h6>All Student</h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Here you can check all students</p>

                            </div>
                            <div class="card-footer">
                               <a href={{ route('jsondata.index') }} class="btn btn-success">Json Data</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    @endsection
    {{-- @include('layout.footer') --}}
