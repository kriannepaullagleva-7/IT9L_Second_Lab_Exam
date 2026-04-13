<!DOCTYPE html>
<html>
<head>
    <title>Students</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-primary px-4">
    <span class="navbar-brand">Student System</span>
    <a href="{{ route('students.index') }}" class="btn btn-light btn-sm">Home</a>
</nav>

<div class="container mt-4">

    <h2 class="mb-3 text-center fw-bold text-primary">
        Student Management System
    </h2>

    <!-- SUCCESS -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('students.create') }}" class="btn btn-primary">
            + Add Student
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th width="180">Actions</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->course }}</td>
                        <td>
                            <a href="{{ route('students.edit', $student->id) }}"
                               class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('students.destroy', $student->id) }}"
                                  method="POST"
                                  style="display:inline;">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Delete this student?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

</div>

</body>
</html>