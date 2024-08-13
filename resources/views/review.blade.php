<!DOCTYPE html>
<html>
<head>
    <title>All Reviews</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">All Reviews</h1>

        <a href="{{ route('feedback.create') }}" class="btn btn-primary mb-3">Submit Review</a>

        @foreach ($feedbacks as $feedback)
            <div class="card mb-3">
                <div class="card-header">
                    {{ $feedback->title }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $feedback->user->name ?? 'Anonymous' }}</h5>
                    <p class="card-text">{{ $feedback->body }}</p>
                    <p class="card-text">Rating: {{ $feedback->rating }}</p>
                    <a href="{{ route('feedback.show', $feedback->id) }}" class="btn btn-info">View Details</a>
                    <a href="{{ route('feedback.edit', $feedback->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('feedback.destroy', $feedback->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>
