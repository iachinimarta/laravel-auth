@extends('layouts.app')

@section('content')

    <div class="container">
        <div>Index</div>
        <div class="d-flex justify-content-end mb-3">
            <button type="button" class="btn btn-success">New</button>
        </div>
        
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
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
                            <button type="button" class="btn btn-warning mx-2">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                        
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection