@extends('layouts.layout')


@section('title')
    {{ 'All Students' }}
@endsection
@section('main_content')
<div class="container-fluid mt-5">
@if(session('Deleted'))
    <div class="alert alert-danger">
        {{ session('Deleted') }}
    </div>
@endif
<table class="table table-striped bordered ">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Father-Name</th>
            <th>DOB</th>
            <th>CNIC</th>
            <th>Address</th>
            <th>City</th>
            <th>Religion</th>
            <th>Contact</th>




        </tr>
    </thead>
    {{-- // name	father_name	date_of_birth	cnic	address	city	religion	phone_number --}}
    @foreach ($student as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->father_name }}</td>
            <td>{{ $value->date_of_birth }}</td>
              <td>{{ $value->cnic }}</td>
            <td>{{ $value->address }}</td>
              <td>{{ $value->city }}</td>
            <td>{{ $value->religion }}</td>
            <td>{{ $value->phone_number }}</td>
            <td><a class="btn btn-primary"href={{ route('student.show',$value->id ) }}>View</a></td>
             <td><a class="btn btn-primary"href={{ route('student.edit',$value->id ) }}>Update</a></td>
             {{-- <td>
                <form action={{ route('student.edit',$value->id) }} method="post">
                    @method('PUT')
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
             </td> --}}
             <td>
                <form action={{ route('subjects.destroy', $value->id) }} method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
             </td>
        </tr>
    @endforeach

</table>
</div>
@endsection
{{-- @include('layout.footer') --}}
