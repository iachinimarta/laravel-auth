@extends('layouts.app')

@section('content')

    <div class="container">
        <div>Index</div>
        <div class="d-flex justify-content-end mb-3">
            <button type="button" class="btn btn-success">
                <a href="{{route('admin.posts.create')}}">New</a>
            </button>
        </div>
        
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach ($postRecuperati as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->slug}}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-info">
                                <a href="{{route('admin.posts.show', ['post' => $post->id])}}">Info</a>
                            </button>
                            <button type="button" class="btn btn-warning mx-2">
                                <a href="{{route('admin.posts.edit', ['post' => $post->id])}}">Edit</a>
                            </button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                        
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection