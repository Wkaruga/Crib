<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Listings — CRIB</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CRIB Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand" href="index.php">
            CRIB<span>.</span>
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navMenu"
                aria-controls="navMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Nav Links -->
        <div class="collapse navbar-collapse" id="navMenu">

            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="property-listings.php">Properties</a>
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

<!-- LISTINGS HEADER + SEARCH BAR-->
<div class="listings-header">
    <div class="container">
        <h2>Property Listings</h2>
        <p class="text-muted mt-1" style="font-size:14px;">Showing verified properties across Kenya</p>
    </div>
</div>

<!-- Search Bar-->
<div class="container mt-4">
    <div class="listings-search-bar">
        <form method="GET" action="property-listings.php">
            <div class="row g-3 align-items-end">

                <!-- Location -->
                <div class="col-md-3">
                    <label class="form-label" style="font-size:13px;font-weight:600;color:#666;">Location</label>
                    <input
                        type="text"
                        name="location"
                        class="form-control"
                        placeholder="e.g. Westlands"
                        value="<?php echo htmlspecialchars($_GET['location'] ?? ''); ?>"
                    >
                </div>

                <!-- Property Type -->
                <div class="col-md-2">
                    <label class="form-label" style="font-size:13px;font-weight:600;color:#666;">Property Type</label>
                    <select name="type" class="form-select">
                        <option value="">Any Type</option>
                        <option value="apartment" <?php echo (($_GET['type'] ?? '') === 'apartment') ? 'selected' : ''; ?>>Apartment</option>
                        <option value="house"     <?php echo (($_GET['type'] ?? '') === 'house')     ? 'selected' : ''; ?>>House</option>
                        <option value="studio"    <?php echo (($_GET['type'] ?? '') === 'studio')    ? 'selected' : ''; ?>>Studio</option>
                        <option value="bedsitter" <?php echo (($_GET['type'] ?? '') === 'bedsitter') ? 'selected' : ''; ?>>Bedsitter</option>
                        <option value="townhouse" <?php echo (($_GET['type'] ?? '') === 'townhouse') ? 'selected' : ''; ?>>Townhouse</option>
                    </select>
                </div>

                <!-- Min Price -->
                <div class="col-md-2">
                    <label class="form-label" style="font-size:13px;font-weight:600;color:#666;">Min Price (KES)</label>
                    <input
                        type="number"
                        name="min_price"
                        class="form-control"
                        placeholder="0"
                        min="0"
                        value="<?php echo htmlspecialchars($_GET['min_price'] ?? ''); ?>"
                    >
                </div>

                <!-- Max Price -->
                <div class="col-md-2">
                    <label class="form-label" style="font-size:13px;font-weight:600;color:#666;">Max Price (KES)</label>
                    <input
                        type="number"
                        name="max_price"
                        class="form-control"
                        placeholder="Any"
                        min="0"
                        value="<?php echo htmlspecialchars($_GET['max_price'] ?? ''); ?>"
                    >
                </div>

                <!-- Search Button -->
                <div class="col-md-3">
                    <button type="submit" class="btn-search" style="margin-top:0;padding:10px 24px;width:auto;">
                        <i class="bi bi-search me-2"></i> Search
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>

<!--LISTINGS SECTION-->
<section class="listings-section">
    <div class="container">
        <div class="row g-4">

            <!--FILTERS-->
            <div class="col-lg-3">
                <div class="filters-sidebar">
                    <h5><i class="bi bi-funnel me-2"></i>Filters</h5>

                    <form method="GET" action="property-listings.php">

                        <!-- Location -->
                        <div class="filter-group">
                            <label>Location</label>
                            <input
                                type="text"
                                name="location"
                                class="form-control"
                                placeholder="e.g. Westlands"
                                value="<?php echo htmlspecialchars($_GET['location'] ?? ''); ?>"
                            >
                        </div>

                        <!-- Property Type -->
                        <div class="filter-group">
                            <label>Property Type</label>
                            <select name="type" class="form-select">
                                <option value="">Any Type</option>
                                <option value="apartment">Apartment</option>
                                <option value="house">House</option>
                                <option value="studio">Studio</option>
                                <option value="bedsitter">Bedsitter</option>
                                <option value="townhouse">Townhouse</option>
                            </select>
                        </div>

                        <!-- Min Price -->
                        <div class="filter-group">
                            <label>Min Price (KES)</label>
                            <input
                                type="number"
                                name="min_price"
                                class="form-control"
                                placeholder="0"
                                min="0"
                                value="<?php echo htmlspecialchars($_GET['min_price'] ?? ''); ?>"
                            >
                        </div>

                        <!-- Max Price -->
                        <div class="filter-group">
                            <label>Max Price (KES)</label>
                            <input
                                type="number"
                                name="max_price"
                                class="form-control"
                                placeholder="Any"
                                min="0"
                                value="<?php echo htmlspecialchars($_GET['max_price'] ?? ''); ?>"
                            >
                        </div>

                        <!-- Bedrooms -->
                        <div class="filter-group">
                            <label>Bedrooms</label>
                            <select name="bedrooms" class="form-select">
                                <option value="">Any</option>
                                <option value="1">1 Bedroom</option>
                                <option value="2">2 Bedrooms</option>
                                <option value="3">3 Bedrooms</option>
                                <option value="4">4+ Bedrooms</option>
                            </select>
                        </div>

                        <!-- Amenities -->
                        <div class="filter-group">
                            <label>Amenities</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="parking" id="chk-parking">
                                <label class="form-check-label" for="chk-parking">Parking</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="wifi" id="chk-wifi">
                                <label class="form-check-label" for="chk-wifi">WiFi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="security" id="chk-security">
                                <label class="form-check-label" for="chk-security">Security</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="borehole" id="chk-borehole">
                                <label class="form-check-label" for="chk-borehole">Borehole</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="gym" id="chk-gym">
                                <label class="form-check-label" for="chk-gym">Gym</label>
                            </div>
                        </div>

                        <button type="submit" class="btn-apply-filters">
                            Apply Filters
                        </button>

                    </form>
                </div>
            </div>
            <!-- /Sidebar -->

            <!--PROPERTY GRID-->
            <div class="col-lg-9">

                <p class="results-info">Showing <strong>8</strong> properties</p>

                <div class="row g-4 listings-grid">

                    <!-- Card 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="property-card">
                            <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=400&q=80" alt="2 Bedroom Apartment">
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
                                    <div class="property-price">KES 25,000 <span>/mo</span></div>
                                    <a href="#" class="btn-view-details">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="property-card">
                            <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=400&q=80" alt="3 Bedroom House">
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
                                    <div class="property-price">KES 65,000 <span>/mo</span></div>
                                    <a href="#" class="btn-view-details">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="property-card">
                            <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?w=400&q=80" alt="Studio Apartment">
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
                                    <div class="property-price">KES 18,000 <span>/mo</span></div>
                                    <a href="#" class="btn-view-details">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="property-card">
                            <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?w=400&q=80" alt="4 Bedroom Townhouse">
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
                                    <div class="property-price">KES 120,000 <span>/mo</span></div>
                                    <a href="#" class="btn-view-details">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="property-card">
                            <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?w=400&q=80" alt="1 Bedroom Apartment">
                            <div class="property-content">
                                <p class="property-name">1 Bedroom Apartment</p>
                                <div class="property-details">
                                    <span><i class="bi bi-door-open"></i> 1 Bed</span>
                                    <span><i class="bi bi-droplet"></i> 1 Bath</span>
                                </div>
                                <p class="property-location">
                                    <i class="bi bi-geo-alt-fill"></i> Parklands, Nairobi
                                </p>
                                <div class="property-footer">
                                    <div class="property-price">KES 22,000 <span>/mo</span></div>
                                    <a href="#" class="btn-view-details">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="property-card">
                            <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=400&q=80" alt="5 Bedroom Villa">
                            <div class="property-content">
                                <p class="property-name">5 Bedroom Villa</p>
                                <div class="property-details">
                                    <span><i class="bi bi-door-open"></i> 5 Beds</span>
                                    <span><i class="bi bi-droplet"></i> 4 Baths</span>
                                </div>
                                <p class="property-location">
                                    <i class="bi bi-geo-alt-fill"></i> Runda, Nairobi
                                </p>
                                <div class="property-footer">
                                    <div class="property-price">KES 250,000 <span>/mo</span></div>
                                    <a href="#" class="btn-view-details">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 7 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="property-card">
                            <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=400&q=80" alt="Bedsitter">
                            <div class="property-content">
                                <p class="property-name">Bedsitter Unit</p>
                                <div class="property-details">
                                    <span><i class="bi bi-door-open"></i> Bedsitter</span>
                                    <span><i class="bi bi-droplet"></i> 1 Bath</span>
                                </div>
                                <p class="property-location">
                                    <i class="bi bi-geo-alt-fill"></i> Roysambu, Nairobi
                                </p>
                                <div class="property-footer">
                                    <div class="property-price">KES 9,000 <span>/mo</span></div>
                                    <a href="#" class="btn-view-details">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 8 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="property-card">
                            <img src="https://images.unsplash.com/photo-1582407947304-fd86f028f716?w=400&q=80" alt="2 Bedroom Townhouse">
                            <div class="property-content">
                                <p class="property-name">2 Bedroom Townhouse</p>
                                <div class="property-details">
                                    <span><i class="bi bi-door-open"></i> 2 Beds</span>
                                    <span><i class="bi bi-droplet"></i> 2 Baths</span>
                                </div>
                                <p class="property-location">
                                    <i class="bi bi-geo-alt-fill"></i> Syokimau, Nairobi
                                </p>
                                <div class="property-footer">
                                    <div class="property-price">KES 35,000 <span>/mo</span></div>
                                    <a href="#" class="btn-view-details">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /Grid -->
                <div class="pagination-wrap">
                    <button class="page-btn active">1</button>
                    <button class="page-btn">2</button>
                    <button class="page-btn">3</button>
                    <button class="page-btn">
                        Next <i class="bi bi-chevron-right"></i>
                    </button>
                </div>

            </div>
            <!-- /Grid Column -->

        </div>
    </div>
</section>

<!--FOOTER-->
<footer class="footer">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> CRIB. All rights reserved.</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>