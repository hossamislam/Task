@extends('tasklayout.master')


@section('title')
    Admin home
@endsection
@section('content')
    <h1 style="display: flex;align-items:center;justify-content: center;text-decoration: underline;">our courses</h1>

    <table class="table">
        <thead>
            <tr>
                <th>title</th>
                <th>description</th>
                <th>start_date</th>
                <th>end_date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Courses as $Course)
                <tr>

                    <td>{{ $Course->title }}</td>
                    <td>{{ $Course->description }}</td>
                    <td>{{ $Course->start_date }}</td>
                    <td>{{ $Course->end_date }}</td>
                    <td>
                        <a href="{{ route('delete', $Course->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                    <td>
                        <a href="{{ route('edit', $Course->id) }}" class="btn btn-primary">Update</a>
                    </td>
                </tr>
        </tbody>
        @endforeach
    </table>
@endsection
