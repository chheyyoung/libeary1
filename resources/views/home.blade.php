<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for Banner */
        .banner {
            background: url('{{ asset("image/b2.jpg") }}') no-repeat center center;
            background-size: cover;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Library Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/books') }}">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/students') }}">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/librarians') }}">Librarians</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/borrowings') }}">Borrowings</a>
                    </li>
                </ul>
                <div>
                    <a href="{{ route('logout') }}" class="btn btn-outline-light"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </nav>

    

    <!-- Banner Section -->
    <div class="banner">
        
    </div>

    <!-- Cards Section -->
    <div class="container card-container mt-4">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card">
                <img src="{{ asset('image/b6.jpg') }}" class="card-img-top" alt="Card 1">

                    <div class="card-body">
                        <h5 class="card-title">Books</h5>
                        <p class="card-text">Manage all book information efficiently and with ease.</p>
                        <a href="{{ url('/books') }}" class="btn btn-primary">Add Book</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('image/b3.jpg') }}" class="card-img-top" alt="Card 2">
                    <div class="card-body">
                        <h5 class="card-title">Students</h5>
                        <p class="card-text">Browse and manage students offered by your organization.</p>
                        <a href="{{ url('/students') }}" class="btn btn-primary">Add Student</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('image/b5.jpg') }}" class="card-img-top" alt="Card 3">
                    <div class="card-body">
                        <h5 class="card-title">Librarians</h5>
                        <p class="card-text">Manage all librarian information efficiently with ease.</p>
                        <a href="{{ url('/librarians') }}" class="btn btn-primary">Add Librarian</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mt-5">
        <h2 class="text-center">Explore Our Features</h2>
        <p class="text-center">Use the navigation menu to explore Students, Books, and Librarians.</p>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0">© 2025 School Library</p>
    </footer>


    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>