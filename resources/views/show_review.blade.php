<!DOCTYPE html>
<html>
<head>
    <title>View Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Review Details</h1>

        <div class="card">
            <div class="card-header">
                {{ $feedback->title }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $feedback->user->name ?? 'Anonymous' }}</h5>
                <p class="card-text">{{ $feedback->body }}</p>
                <p class="card-text">Rating: {{ $feedback->rating }}</p>
                <a href="{{ route('feedback.index') }}" class="btn btn-primary">Back to Reviews</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>
