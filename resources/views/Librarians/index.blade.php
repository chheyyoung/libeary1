@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Librarian List</h2>
    <a href="{{ route('librarians.create') }}" class="btn btn-primary mb-3">Add Librarian</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($librarians as $librarian)
                <tr>
                    <td>{{ $librarian->name }}</td>
                    <td>{{ $librarian->email }}</td>
                    <td>{{ $librarian->phone }}</td>
                    
                    
                    <td>
                        <a href="{{ route('librarians.edit', $librarian->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('librarians.destroy', $librarian->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection