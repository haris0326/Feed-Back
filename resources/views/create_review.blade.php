<!DOCTYPE html>
<html>
<head>
    <title>Submit Review</title>
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
        <h1 class="mb-4 text-center">Submit Your Review</h1>

        <form action="{{ route('feedback.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Review</label>
                <textarea class="form-control" id="body" name="body" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Rating</label>
                <div class="star-rating">
                    <input type="radio" id="star5" name="rating" value="5" required /><label for="star5" title="5 stars">5 stars</label>
                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 stars">4 stars</label>
                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 stars">3 stars</label>
                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 stars">2 stars</label>
                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star">1 star</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>
