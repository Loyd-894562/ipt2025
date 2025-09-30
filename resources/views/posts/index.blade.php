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
        <h2 class="mb-4">Posts</h2>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($post->description, 100) }}</p>
                        @if($post->comment)
                        <p class="text-muted"><small>Comment: {{ $post->comment }}</small></p>
                        @endif
                    </div>
                    <div class="card-footer text-muted">
                        Posted by {{ $post->user->name ?? 'Unknown' }} <br>
                        {{ $post->created_at->format('M d, Y') }}
                    </div>
                </div>
        </div>
        @endforeach
    </div>   
</div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
