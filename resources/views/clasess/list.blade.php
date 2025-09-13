@extends('layouts.layout')


@section('title')
    {{ 'All Class' }}
@endsection
@section('main_content')
    <div class="container-fluid mt-5">
        <a class="btn btn-primary"href={{ route('clasess.create',) }}>Add Class</a>
        <table class="table table-striped bordered ">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Class-Code</th>

                    <th>Clasess</th>
                    <th>Add</th>
                    <th>Update</th>
                    <th>Delete</th>





                </tr>
            </thead>

            @foreach ($clas as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->clasess }}</td>
                    <td>{{ $value->clasess_id }}</td>

                    <td><a class="btn btn-primary"href={{ route('clasess.create', $value->id) }}>Add</a></td>
                    <td><a class="btn btn-primary"href={{ route('clasess.edit', $value->id) }}>Update</a></td>

                    <td>
                        <form action={{ route('clasess.destroy', $value->id) }} method="post">
                            @csrf
                            @method('DELETE')
                            <button type="clasess" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection
{{-- @include('layout.footer') --}}
