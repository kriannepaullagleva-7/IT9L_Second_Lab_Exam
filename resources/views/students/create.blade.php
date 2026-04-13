<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-primary px-4">
    <span class="navbar-brand">Student System</span>
    <a href="{{ route('students.index') }}" class="btn btn-light btn-sm">Home</a>
</nav>

<div class="container mt-4">

    <h2 class="text-primary mb-3">Add Student</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow">
        <div class="card-body">

            <form action="{{ route('students.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Course</label>
                    <input type="text" name="course" class="form-control">
                </div>

                <button class="btn btn-success">Save</button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>

            </form>

        </div>
    </div>

</div>

</body>
</html>