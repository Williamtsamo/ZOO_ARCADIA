<?php

//include_once("templates/header.php");
require_once  "templates/header.php";
?>


<div>
    <div class="container mt-5 w-50">
        <h4 class="text-center">Laissez votre avis</h4>
        <form id="reviewForm" class="mb-4">
            <div class="form-group">
                <label for="name">Nom:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="review">Avis:</label>
                <textarea class="form-control" id="review" name="review" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>


    </div>

    <script>
        document.getElementById('reviewForm').addEventListener('submit', async function(event) {
            event.preventDefault();
            const name = document.getElementById('name').value;
            const review = document.getElementById('review').value;

            const response = await fetch('/api/reviews', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    name,
                    review
                })
            });

            if (response.ok) {
                const newReview = await response.json();
                document.getElementById('reviews').innerHTML += `<div class="card mt-3"><div class="card-body"><h5 class="card-title">${newReview.name}</h5><p class="card-text">${newReview.review}</p></div></div>`;
            }
        });

        async function loadReviews() {
            const response = await fetch('/api/reviews');
            const reviews = await response.json();
            const reviewsDiv = document.getElementById('reviews');
            reviews.forEach(review => {
                reviewsDiv.innerHTML += `<div class="card mt-3"><div class="card-body"><h5 class="card-title">${review.name}</h5><p class="card-text">${review.review}</p></div></div>`;
            });
        }

        loadReviews();
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div>

</html>