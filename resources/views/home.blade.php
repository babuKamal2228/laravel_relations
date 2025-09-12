@include('layout.header')
@section('title')
    {{ 'home' }}
@endsection



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
                              <a href="{{ route('student.list')}}" class="btn btn-primary">All Students</a>
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
                              <a href="{{ route('student.create')}}" class="btn btn-success">Add Student</a>
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
                               <a href="" class="btn btn-primary">All Students</a>
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
                              <a href="" class="btn btn-primary">All Students</a>
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
                             <a href="" class="btn btn-primary">All Students</a>
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
                              <a href="" class="btn btn-primary">All Students</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('layout.footer')
