@extends('tasklayout.master')


@section('title')
    Courses
@endsection
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <form action="{{ route('Add_course') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-3 my-2">
                    <label for="title">Title</label>
                    <input type="text" class="form-control my-2 @error('title') is-invalid @enderror" name="title"
                        value="{{ old('title') }}" required>
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-3 my-2">
                    <label for="description">Description</label>
                    <input type="text" class="form-control my-2 @error('description') is-invalid @enderror"
                        name="description" value="{{ old('description') }}" autocomplete="off" required>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-3 my-2">
                    <label for="start_date">Start Date</label>
                    <input type="date" class="form-control my-2 @error('start_date') is-invalid @enderror"
                        name="start_date" value="{{ old('start_date') }}">
                    @error('start_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-3 my-2">
                    <label for="end_date">End Date</label>
                    <input type="date" class="form-control my-2 @error('end_date') is-invalid @enderror" name="end_date"
                        value="{{ old('end_date') }}" autocomplete="off" required>
                    @error('end_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12 my-4">
                    <button class="btn btn-primary m-auto d-flex" type="submit">Submit</button>
                </div>
            </div>
        </form>



    </body>

    </html>
@endsection
