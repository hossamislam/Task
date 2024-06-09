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
        <form action="{{ route('update', $Courses->id) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-3 my-2 ">
                    <label for="">title</label>
                    <input type="text" class="form-control my-2" name="title" required value="{{$Courses->title}}">
                </div>
                <div class="col-3 my-2">
                    <label for="">description</label>
                    <input type="text" class="form-control my-2" autocomplete="off" name="description" required value="{{$Courses->description}}">
                </div>
                <div class="col-3 my-2">
                    <label for="">start date</label>
                    <input type="date" class="form-control my-2" name="start_date" value="{{$Courses->start_date}}">
                </div>
                <div class="col-3 my-2">
                    <label for="">end date</label>
                    <input type="date" class="form-control my-2" autocomplete="off" name="end_date" required value="{{$Courses->end_date}}">
                </div>



                <div class="col-12 my-4">
                    <button class="btn btn-primary m-auto d-flex" type="submit">submit</button>
                </div>
            </div>
        </form>


    </body>

    </html>
@endsection
