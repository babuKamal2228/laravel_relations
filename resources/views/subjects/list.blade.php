@extends('layouts.layout')


@section('title')
    {{ 'All Subjects' }}
@endsection
@section('main_content')
<div class="container-fluid mt-5">
      <a class="btn btn-primary"href={{ route('subjects.create',) }}>Add Subject</a>
<table class="table table-striped bordered ">
    <thead>
        <tr>
            <th>Id</th>
            <th>Subject-Code</th>

            <th>Subject</th>
            <th>Add</th>
            <th>Update</th>
            <th>Delete</th>





        </tr>
    </thead>
    {{-- // name	father_name	date_of_birth	cnic	address	city	religion	phone_number --}}
    @foreach ($sub as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->subject }}</td>
            <td>{{ $value->subject_id }}</td>

            <td><a class="btn btn-primary"href={{ route('subjects.create',$value->id ) }}>Add</a></td>
             <td><a class="btn btn-primary"href={{ route('subjects.edit',$value->id ) }}>Update</a></td>
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
