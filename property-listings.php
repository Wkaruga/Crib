<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Listings — CRIB</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">

        
        <a class="navbar-brand" href="index.php">
            CRIB<span>.</span>
        </a>

        
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navMenu"
                aria-controls="navMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        
        <div class="collapse navbar-collapse" id="navMenu">

            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="property-listings.php">Properties</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>

            <div class="d-flex gap-2">
                <a href="auth/login.php" class="nav-link btn-login">Login</a>
                <a href="auth/register.php" class="nav-link btn-register">Register</a>
            </div>

        </div>
    </div>
</nav>

<div class="container-fluid mt-4">

    <div class="row">

        <div class="col-lg-3">

            <!-- Filters -->

        </div>

        <div class="col-lg-9">

            <!-- Search -->

            <!-- Property Cards -->

        </div>

    </div>

</div>
<div class="filter-box">

    <h4>Filters</h4>

    <label>Location</label>
    <select class="form-select mb-3">
        <option>Select location</option>
    </select>

    <label>Property Type</label>
    <select class="form-select mb-3">
        <option>Select type</option>
    </select>

    <label>Price Range</label>

    <input
        type="number"
        class="form-control mb-2"
        placeholder="Min price">

    <input
        type="number"
        class="form-control mb-3"
        placeholder="Max price">

    <label>Bedrooms</label>

    <select class="form-select mb-3">
        <option>Any</option>
    </select>

    <label>Amenities</label>

    <div class="form-check">
        <input class="form-check-input" type="checkbox">
        <label class="form-check-label">Wi-Fi</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox">
        <label class="form-check-label">Parking</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox">
        <label class="form-check-label">Water</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox">
        <label class="form-check-label">Balcony</label>
    </div>

    <button class="btn btn-dark mt-3 w-100">
        Apply Filters
    </button>

</div>
<div class="d-flex justify-content-between mb-4">

    <input
        type="text"
        class="form-control me-2"
        placeholder="Search location, estate or property..."
    >

    <button class="btn btn-dark">
        Search
    </button>

</div>
<div class="row">
</div>
<nav class="mt-4">

    <ul class="pagination justify-content-center">

        <li class="page-item">
            <a class="page-link">Previous</a>
        </li>

        <li class="page-item active">
            <a class="page-link">1</a>
        </li>

        <li class="page-item">
            <a class="page-link">2</a>
        </li>

        <li class="page-item">
            <a class="page-link">3</a>
        </li>

        <li class="page-item">
            <a class="page-link">Next</a>
        </li>

    </ul>

</nav>

            
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>