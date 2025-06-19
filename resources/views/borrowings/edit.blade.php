<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Borrowing</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Edit Borrowing</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('borrowings.update', $borrowing->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="studentname" class="form-label">StudentName:</label>
                        <input type="text" id="studentname" name="studentname" value="{{ $borrowing->studentname }}" class="form-control" placeholder="Enter StudentName" required>
                    </div>

                    <div class="mb-3">
                        <label for="bookname" class="form-label">BookName:</label>
                        <input type="text" id="bookname" name="bookname" value="{{ $borrowing->bookname }}" class="form-control" placeholder="Enter BookName" required>
                    </div>

    

                    <div class="mb-3">
                        <label for="dateborrowed" class="form-label">DateBorrowed:</label>
                        <input type="date" id="dateborrowed" name="dateborrowed" value="{{ $borrowing->dateborrowed }}" class="form-control" required>
                    </div>

                    
                    <div class="mb-3">
                        <label for="datereturn" class="form-label">DateReturn:</label>
                        <input type="date" id="datereturn" name="datereturn" value="{{ $borrowing->datereturn }}" class="form-control" required>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Update Borrowing</button>
                        <a href="{{ route('borrowings.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>