@extends('backend.layout.master')
@section('title')
    Edit Blog
@endsection
@section('css')

@endsection
@section('content')
    <div class="app-content">
        <div class="side-app">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Edit Blog</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Blog</li>
                    </ol>
                </div>
                <div class="ms-auto pageheader-btn">

                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('update_blog', encrypt($blog->id)) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="{{asset('upload/blog/'.$blog->image)}}" alt="" style="height: 200px">
                                    <label for="">Blog Image</label>
                                    <input type="file" class="form-control" name="image" >
                                </div>
                                <div class="col-md-12">
                                    <label for="">Blog Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$blog->name}}">
                                </div>
                                <div class="col-md-12">
                                    <label for="">Blog Notes</label>
                                    <textarea name="notes" class="form-control" id=""  rows="10">{{$blog->notes}}</textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Edit Blog</button>
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
