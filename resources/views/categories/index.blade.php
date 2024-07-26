@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-between">
        <div class="col-md-6">
            <h1 class="mb-4">Categories</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Add New Category</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
