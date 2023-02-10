@extends('backend.layout.master')
@section('title')
    Create Blog
@endsection
@section('css')
@endsection
@section('content')
    <div class="app-content">
        <div class="side-app">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Create Blog</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Blog</li>
                    </ol>
                </div>
                <div class="ms-auto pageheader-btn">

                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('store_blog') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Blog Image</label>
                                    <input type="file" class="form-control" name="image" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="">Blog Arabic Name</label>
                                    <input type="text" class="form-control" name="name_ar" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="">Blog English Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="">Blog Arabic Notes</label>
                                    <textarea name="notes_ar" class="form-control" id="" rows="10"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="">Blog English Notes</label>
                                    <textarea name="notes" class="form-control" id="" rows="10"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Add Blog</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
