{{-- Pagina che si vede dopo il login --}}

@extends('layouts.app')

@section('content')
    <div class="container">
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
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-info">
                                <a href="#">Info</a>
                            </button>
                            <button type="button" class="btn btn-warning mx-2">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                        
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
@endsection