@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>All Categories</h4>
                </div>
                <div class="card-body">

                    @if (session()->has('success'))
                        
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        {{ session()->get('success') }}
                    </div>
                    
                    @endif
                    @if (session()->has('danger'))
                        
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        {{ session()->get('danger') }}
                    </div>
                    
                    @endif
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sr no.</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $i=>$category)
                                <tr>
                                    @if ($loop->first)
                                        <td class="text-success">{{ $loop->iteration }}</td>
                                    @else
                                        <td>{{ $loop->iteration }}</td>
                                    @endif
                                    
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="/category/edit/{{ $category->id }}" class="btn btn-warning">Edit</a>
                                        <a href="/category/delete/{{ $category->id }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
