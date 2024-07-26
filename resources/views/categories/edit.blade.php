@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Add New Category</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter category name" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('home') }}" class="btn btn-secondary">Back to Dashboard</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
