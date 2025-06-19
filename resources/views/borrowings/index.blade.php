@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Borrowing List</h2>
    <a href="{{ route('borrowings.create') }}" class="btn btn-primary mb-3">Add Borrowing</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>StudentName</th>
                <th>BookName</th>
                <th>DateBorrowed</th>
                <th>DateReturn</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($borrowings as $borrowing)
                <tr>
                    <td>{{ $borrowing->studentname }}</td>
                    <td>{{ $borrowing->bookname }}</td>
                    <td>{{ $borrowing->dateborrowed }}</td>
                    <td>{{ $borrowing->datereturn }}</td>
                    
                    
                    <td>
                        <a href="{{ route('borrowings.edit', $borrowing->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('borrowings.destroy', $borrowing->id) }}" method="POST" style="display:inline;">
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