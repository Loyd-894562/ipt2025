<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Create Post</h2>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
    </div>


    <!-- Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <!-- Create Form -->
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf


                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                </div>


                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="6" required>{{ old('description') }}</textarea>
                </div>


                <div class="mb-3">
                    <label for="comment" class="form-label">Comment (optional)</label>
                    <input type="text" name="comment" id="comment" class="form-control" value="{{ old('comment') }}">
                </div>


                <button type="submit" class="btn btn-success">Create Post</button>
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
