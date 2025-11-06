<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">


    <!-- Header with Create Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Posts</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">
            + Create Post
        </a>
    </div>


    <!-- Success Message (flash) -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <!-- Posts Grid (shows created posts) -->
    <div class="row">
        @forelse ($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($post->description, 150) }}</p>
                        @if($post->comment)
                            <p class="text-muted"><small>Comment: {{ $post->comment }}</small></p>
                        @endif
                    </div>
                    
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-muted">No posts yet. Click "Create Post" to add one.</p>
            </div>
        @endforelse
    </div>


</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


