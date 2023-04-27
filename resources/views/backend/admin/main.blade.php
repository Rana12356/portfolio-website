@extends('backend.master')

@section('title')
    Main Page
@endsection

@section('body')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Main</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Main</li>
            </ol>
            <section class="py-2">
                @include('alert.messages')
                <form action="{{ route('admin.main.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card border-0">
                                    <div class="card-header">
                                        <h3>Background Image</h3>
                                    </div>
                                    <div class="card-body">
                                        <img src="{{ url($main->bg_image) }}" style="height: 30vh" class="img-thumbnail">
                                        <input type="file" name="bg_image" id="bg_image" class="mt-3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card border-0">
                                    <div class="card card-body border-0">
                                        <div class="row mt-3">
                                            <label for="title"><h4>Title</h4></label>
                                            <input type="text" name="title" class="form-control" id="title" value="{{ $main->title }}">
                                        </div>
                                        <div class="row mt-3">
                                            <label for="sub_title"><h4>Sub Title</h4></label>
                                            <input type="text" name="sub_title" class="form-control" id="sub_title" value="{{ $main->sub_title }}">
                                        </div>
                                        <div class="row mt-3">
                                            <label for="sub_title"><h4>Resume</h4></label>
                                            <input type="file" name="resume" class="mt-2" id="resume">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary mt-4">
                    </div>
                </form>
            </section>
        </div>
    </main>
@endsection
