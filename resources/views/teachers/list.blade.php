@extends('layouts.layout')


@section('title')
    {{ 'All Students' }}
@endsection
@section('main_content')
<div class="container-fluid mt-5">
<table class="table table-striped bordered ">
    <thead>
        <tr>
            <th>License No</th>
            <th>First Name</th>
            <th>Last-Name</th>
            <th>Designation</th>
            <th>Gender</th>
            <th>Email</th>




        </tr>
    </thead>
   {{-- teacher_id, teacher_firstname, teacher_lastname, teacher_designation, Gender, email --}}
    @foreach ($teacher as $value)
        <tr>
            <td>{{ $value->teacher_id }}</td>
            <td>{{ $value->teacher_firstname }}</td>
            <td>{{ $value->teacher_lastname }}</td>
            <td>{{ $value->teacher_designation }}</td>
              <td>{{ $value->cnic }}</td>
            <td>{{ $value->Gender }}</td>
              <td>{{ $value->email }}</td>

            <td><a class="btn btn-primary"href={{ route('teachers.show',$value->id ) }}>View</a></td>
             <td><a class="btn btn-primary"href={{ route('teachers.edit',$value->id ) }}>Update</a></td>
             {{-- <td>
                <form action={{ route('student.edit',$value->id) }} method="post">
                    @method('PUT')
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
             </td> --}}
             <td>
                <form action={{ route('teachers.destroy', $value->id) }} method="post">
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
