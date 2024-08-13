<!DOCTYPE html>
<html>
<head>
    <title>Edit Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .star-rating {
            direction: rtl;
            display: inline-block;
            padding: 20px;
        }
        .star-rating input[type="radio"] {
            display: none;
        }
        .star-rating label {
            color: #bbb;
            font-size: 20px;
            padding: 0;
            cursor: pointer;
        }
        .star-rating label:before {
            content: '★';
        }
        .star-rating input[type="radio"]:checked ~ label {
            color: #f2b600;
        }
        .star-rating input[type="radio"]:checked ~ label ~ label {
            color: #bbb;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Edit Your Review</h1>

        <form action="{{ route('feedback.update', $feedback->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $feedback->title }}" required>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Review</label>
                <textarea class="form-control" id="body" name="body" rows="4" required>{{ $feedback->body }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Rating</label>
                <div class="star-rating">
                    <input type="radio" id="star5" name="rating" value="5" {{ $feedback->rating == 5 ? 'checked' : '' }} required /><label for="star5" title="5 stars">5 stars</label>
                    <input type="radio" id="star4" name="rating" value="4" {{ $feedback->rating == 4 ? 'checked' : '' }} /><label for="star4" title="4 stars">4 stars</label>
                    <input type="radio" id="star3" name="rating" value="3" {{ $feedback->rating == 3 ? 'checked' : '' }} /><label for="star3" title="3 stars">3 stars</label>
                    <input type="radio" id="star2" name="rating" value="2" {{ $feedback->rating == 2 ? 'checked' : '' }} /><label for="star2" title="2 stars">2 stars</label>
                    <input type="radio" id="star1" name="rating" value="1" {{ $feedback->rating == 1 ? 'checked' : '' }} /><label for="star1" title="1 star">1 star</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>
