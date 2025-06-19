@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Add Student</h2>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="studentname">StudentName</label>
            <input type="text" name="studentname" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-success mt-3">Save</button>
    </form>
</div>
@endsection