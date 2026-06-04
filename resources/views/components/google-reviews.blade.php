<!DOCTYPE html>
<html>
<head>
    <title>Google Reviews</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">

    <div class="text-center mb-5">
        <h2>{{ $place['name'] ?? '' }}</h2>

        <h3>
            ⭐ {{ $place['rating'] ?? 0}}
        </h3>

        <p>
            {{ $place['user_ratings_total'] ?? 0 }}
            Google Reviews
        </p>
    </div>

    <div class="row">

        @foreach(($place['reviews'] ?? []) as $review)

            <div class="col-md-6 mb-4">

                <div class="card h-100 shadow-sm">

                    <div class="card-body">

                        <h5>
                            {{ $review['author_name'] }}
                        </h5>

                        <p>
                            ⭐ {{ $review['rating'] }}/5
                        </p>

                        <p>
                            {{ $review['text'] }}
                        </p>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

</div>

</body>
</html>