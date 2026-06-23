<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRIB — Find Verified Homes You Can Trust</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/style.css">
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
                    <a class="nav-link" href="pages\property-listings.php">Properties</a>
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


<section class="hero-section">
    <div class="container">
        <div class="row align-items-center g-5">

            
            <div class="col-lg-6">

                <div class="hero-text">
                    <h1>Find Verified Homes<br><span>You Can Trust</span></h1>
                    <p>Browse verified listings, compare properties and make informed housing decisions with confidence.</p>
                </div>

                
                <div class="search-box">
                    <form action="pages\property-listings.php" method="GET">

                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label">Location</label>
                                <input
                                    type="text"
                                    name="location"
                                    class="form-control"
                                    placeholder="e.g. Westlands, Nairobi"
                                >
                            </div>

                            
                            <div class="col-md-6">
                                <label class="form-label">Property Type</label>
                                <select name="type" class="form-select">
                                    <option value="">Any Type</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="house">House</option>
                                    <option value="studio">Studio</option>
                                    <option value="bedsitter">Bedsitter</option>
                                    <option value="townhouse">Townhouse</option>
                                </select>
                            </div>

                            
                            <div class="col-md-6">
                                <label class="form-label">Min Price (KES)</label>
                                <input
                                    type="number"
                                    name="min_price"
                                    class="form-control"
                                    placeholder="e.g. 10,000"
                                    min="0"
                                >
                            </div>

                            
                            <div class="col-md-6">
                                <label class="form-label">Max Price (KES)</label>
                                <input
                                    type="number"
                                    name="max_price"
                                    class="form-control"
                                    placeholder="e.g. 50,000"
                                    min="0"
                                >
                            </div>

                        </div>

                        <button type="submit" class="btn-search mt-3">
                            <i class="bi bi-search me-2"></i> Search Properties
                        </button>

                    </form>
                </div>
                

            </div>
            

            <div class="col-lg-6">
                <div class="hero-image-wrap">
                    <img
                        src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?w=800&q=80"
                        alt="Modern home exterior"
                        class="hero-image"
                    >
                </div>
            </div>
            

        </div>
    </div>
</section>


<!--FEATURED PROPERTIES -->
<section class="featured-section">
    <div class="container">

        
        <div class="section-header">
            <h2 class="section-title">Featured Properties</h2>
            <a href="pages\property-listings.php" class="btn-view-all">View All Properties</a>
        </div>

        
        <div class="row g-4">

            
            <div class="col-md-6 col-lg-3">
                <div class="property-card">
                    <img
                        src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=400&q=80"
                        alt="2 Bedroom Apartment"
                    >
                    <div class="property-content">
                        <p class="property-name">2 Bedroom Apartment</p>
                        <div class="property-details">
                            <span><i class="bi bi-door-open"></i> 2 Beds</span>
                            <span><i class="bi bi-droplet"></i> 1 Bath</span>
                        </div>
                        <p class="property-location">
                            <i class="bi bi-geo-alt-fill"></i> Westlands, Nairobi
                        </p>
                        <div class="property-footer">
                            <div class="property-price">
                                KES 25,000 <span>/mo</span>
                            </div>
                            <a href="pages\property-details.php" class="btn btn-outline-dark">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="property-card">
                    <img
                        src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=400&q=80"
                        alt="3 Bedroom House"
                    >
                    <div class="property-content">
                        <p class="property-name">3 Bedroom House</p>
                        <div class="property-details">
                            <span><i class="bi bi-door-open"></i> 3 Beds</span>
                            <span><i class="bi bi-droplet"></i> 2 Baths</span>
                        </div>
                        <p class="property-location">
                            <i class="bi bi-geo-alt-fill"></i> Karen, Nairobi
                        </p>
                        <div class="property-footer">
                            <div class="property-price">
                                KES 65,000 <span>/mo</span>
                            </div>
                            <a href="pages\property-details.php" class="btn btn-outline-dark">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="property-card">
                    <img
                        src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?w=400&q=80"
                        alt="Studio Apartment"
                    >
                    <div class="property-content">
                        <p class="property-name">Studio Apartment</p>
                        <div class="property-details">
                            <span><i class="bi bi-door-open"></i> Studio</span>
                            <span><i class="bi bi-droplet"></i> 1 Bath</span>
                        </div>
                        <p class="property-location">
                            <i class="bi bi-geo-alt-fill"></i> Kilimani, Nairobi
                        </p>
                        <div class="property-footer">
                            <div class="property-price">
                                KES 18,000 <span>/mo</span>
                            </div>
                            <a href="pages\property-details.php" class="btn btn-outline-dark">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="property-card">
                    <img
                        src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?w=400&q=80"
                        alt="4 Bedroom Townhouse"
                    >
                    <div class="property-content">
                        <p class="property-name">4 Bedroom Townhouse</p>
                        <div class="property-details">
                            <span><i class="bi bi-door-open"></i> 4 Beds</span>
                            <span><i class="bi bi-droplet"></i> 3 Baths</span>
                        </div>
                        <p class="property-location">
                            <i class="bi bi-geo-alt-fill"></i> Lavington, Nairobi
                        </p>
                        <div class="property-footer">
                            <div class="property-price">
                                KES 120,000 <span>/mo</span>
                            </div>
                            <a href="pages\property-details.php" class="btn btn-outline-dark">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Cards -->

    </div>
</section>

<footer class="footer">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> CRIB. All rights reserved.</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
