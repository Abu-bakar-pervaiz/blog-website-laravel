@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Category</h4>
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
                    
                    <form action="/category/update" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $category->id }}">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" value="{{ $category->name }}" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
