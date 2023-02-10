@extends('backend.layout.master')
@section('title')
    Dashboard
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
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                    <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">#</th>
                                        <th class="wd-15p border-bottom-0">Blog Image</th>
                                        <th class="wd-20p border-bottom-0">Blog Name</th>
                                        <th class="wd-15p border-bottom-0">Blog Notes</th>
                                        <th class="wd-10p border-bottom-0">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td><img src="{{asset('upload/blog/'.$blog->image)}}" alt="" style="width: 30px;height: 30px;border-radius: 50%"></td>
                                        <td>{{$blog->name}}</td>
                                        <td>{{Str::limit($blog->notes, 30)}}</td>
                                        <td>
                                            <a href="{{ route('edit_blog', encrypt($blog->id)) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$blog->id}}">
                                                <i class="fa fa-trash-o"></i>
                                            </button>

                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$blog->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{$blog->name}}</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <i class="fa fa-info-circle text-danger" style="font-size: 50px"></i>
                                                    <p>Are You Sure Delete {{$blog->name}}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                    <a href="{{ route('delete_blog', encrypt($blog->id)) }}" class="btn btn-primary">Yes, Sure</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection
