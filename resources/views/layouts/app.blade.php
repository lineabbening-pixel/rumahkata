<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan Mini</title>
    <style>
        /* Reset & font */
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; background: #f0f4f8; }
        a { text-decoration: none; color: #ffffff; }

        /* Header */
        header { background-color: #4a90e2; color: #fff; padding: 15px; text-align: center; }
        header nav a { margin: 0 10px; padding: 5px 10px; background-color: #357ABD; border-radius: 4px; }

        /* Footer */
        footer { background-color: #4a90e2; color: #fff; text-align: center; padding: 10px; margin-top: 20px; }

        /* Container */
        .container { max-width: 900px; margin: 20px auto; padding: 20px; background: #ffffff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }

        /* Table */
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #4a90e2; color: #fff; }
        tr:nth-child(even) { background-color: #f9f9f9; }

        /* Buttons */
        .btn { padding: 6px 12px; border-radius: 4px; border: none; cursor: pointer; color: #fff; }
        .btn-edit { background-color: #f39c12; }
        .btn-delete { background-color: #e74c3c; }
        .btn-add { background-color: #2ecc71; margin-bottom: 10px; display: inline-block; }

        /* Form */
        form div { margin-bottom: 10px; }
        input[type="text"], select { padding: 6px; width: 100%; border-radius: 4px; border: 1px solid #ccc; }

        /* Success message */
        .success { color: #27ae60; background-color: #ecf9f1; padding: 10px; border-radius: 4px; margin-bottom: 10px; }

    </style>
</head>
<body>
    <header>
        <h1>Perpustakaan Mini Rumah Kata</h1>
        <nav>
            <a href="{{ url('/books') }}">Buku</a>
            <a href="{{ url('/categories') }}">Kategori</a>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        &copy; Perpustakaan Mini Rumah Kata 2026
    </footer>
</body>
</html>
