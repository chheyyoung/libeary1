<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Edit Book</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('books.update', $book->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="bookname" class="form-label">BookName:</label>
                        <input type="text" id="bookname" name="bookname" value="{{ $book->bookname }}" class="form-control" placeholder="Enter BookName" required>
                    </div>

                    <div class="mb-3">
                        <label for="author" class="form-label">Author:</label>
                        <input type="text" id="author" name="author" value="{{ $book->author }}" class="form-control" placeholder="Enter Author" required>
                    </div>

                    <div class="mb-3">
                        <label for="publisher" class="form-label">Publisher:</label>
                        <input type="text" id="publisher" name="publisher" value="{{ $book->publisher }}" class="form-control" placeholder="Enter Publisher" required>
                    </div>

                    

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Update Book</button>
                        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>