@extends('web.master')
@section('title')
    Contact Us
@endsection
@section('slider')
    <div class="breadcrumb_bread py-5 mb-0">
        <div class="container">
            <nav aria-label="breadcrumb" class="flex_center">
                <ol class="breadcrumb my-5">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                </ol>
            </nav>
        </div>
    </div>
@endsection
@section('content')
    <div class="">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13722.098625637098!2d31.251190199999996!3d30.7036477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1649742471054!5m2!1sen!2seg"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="contact_us py-4 my-4">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-md-6">
                    <div class="my-4">
                        <h4 class="fw-bold">Contact Form</h4>
                        <div class="my-4 py-2">
                            <input type="text" placeholder="Name" class="px-5 py-2 shadow border rounded-pill w-100">
                        </div>
                        <div class="my-4 py-2">
                            <input type="text" placeholder="Email" class="px-5 py-2 shadow border rounded-pill w-100">
                        </div>
                        <div class="my-4 py-2">
                            <input type="text" placeholder="Phone" class="px-5 py-2 shadow border rounded-pill w-100">
                        </div>
                        <div class="my-4 py-2">
                            <input type="text" placeholder="Message Subject"
                                class="px-5 py-2 shadow border rounded-pill w-100">
                        </div>
                        <div class="my-4 py-2">
                            <textarea class="p-3 border shadow rounded w-100" rows="6" placeholder="Message"></textarea>
                        </div>
                        <button class="main_bt transition_me rounded-pill shadow w-100 py-3">Send</button>
                    </div>
                </div>
                @foreach ($info as $infos)
                    <div class="col-12 col-md-6">
                        <div class="my-4">
                            <h4 class="fw-bold">Contact Info</h4>
                            <ul class="pt-3">
                                <li class="my-3 flex_start"><i class="icon-mobile main_color h5 mb-0 me-3"></i><span
                                        class="fw-bold main_color">{{ $infos->phone }}</span></li>
                                <hr>
                                <li class="my-3 flex_start"><i
                                        class="icon-mail-envelope-closed1 main_color h5 mb-0 me-3"></i><span
                                        class="fw-bold main_color">{{ $infos->email }}</span></li>
                                <hr>
                                <li class="my-3 flex_start"><i class="icon-location3 main_color h5 mb-0 me-3"></i><span
                                        class="fw-bold main_color">{{ $infos->location }}</span></li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
@endforeach
