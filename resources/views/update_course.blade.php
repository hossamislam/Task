<!-- resources/views/update_course.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Update Course</h2>
        <form action="{{ route('course.update', $Course->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $course->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ $course->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="date" name="start_date" id="start_date" class="form-control"
                    value="{{ $course->start_date }}" required>
            </div>
            <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="date" name="end_date" id="end_date" class="form-control" value="{{ $course->end_date }}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Update Course</button>
        </form>
    </div>
@endsection
