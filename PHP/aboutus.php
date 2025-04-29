<?php 
require("includes/common.php");  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us | Hamro Store</title>

    <!-- Include Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <!-- Include the navigation bar -->
    <?php include 'includes/header.php'; ?>

    <!-- About Us Section -->
    <div class="container py-5" id="content">
        <div class="text-center mb-5">
            <h2 class="fw-bold">About <span style="color: #007bff;">Hamro Store</span></h2>
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/9b/Flag_of_Nepal.svg" alt="Nepal Flag" width="30" style="margin-left: 10px;">
            <p class="text-muted">Bringing style, trust, and value to your doorstep since 2025.</p>
            <hr class="w-25 mx-auto">
        </div>

        <div class="row g-4">
            <!-- WHO WE ARE Section -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <h3 class="card-title text-primary"><i class="bi bi-people-fill me-2"></i><mark>WHO WE ARE</mark></h3>
                        <p class="p1">
                            <strong>Hamro Store</strong> is a dedicated e-commerce platform, launched in 2025 with a simple goal — to make shopping for quality, fixed-price products easy, trustworthy, and affordable. Founded by the visionary young minds <strong>Aastha, Sabina, and Prasikshya</strong>.
                        </p>
                        <p class="p1">
                            At Hamro Store, we offer a thoughtfully curated selection of essential lifestyle products. We don’t sell everything — only what we trust and believe in. Our fixed product range ensures quality, consistency, and value for money.
                        </p>

                        <h4 class="mt-4 text-success"><i class="bi bi-eye-fill me-2"></i><mark>Vision</mark></h4>
                        <p class="p1">
                            To become a trusted name in every household by delivering reliable and stylish products that add value to everyday life.
                        </p>

                        <h4 class="mt-4 text-success"><i class="bi bi-flag-fill me-2"></i><mark>Mission</mark></h4>
                        <p class="p1">
                            To provide high-quality, fixed-price products at unbeatable value with a seamless online shopping experience that prioritizes convenience and customer satisfaction.
                        </p>
                    </div>
                </div>
            </div>

            <!-- BUILDING THE FUTURE Section -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <h3 class="card-title text-info"><i class="bi bi-building me-2"></i><mark>BUILDING THE FUTURE</mark></h3>
                        <p class="p1">
                            At Hamro Store, we aim to create a lasting impact on our customers, communities, and the digital shopping experience. Our team consists of passionate individuals from diverse backgrounds, all committed to continuous innovation and customer-focused growth.
                        </p>
                        <p class="p1">
                            Our growth strategies include:
                        </p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Market Development:</strong> Expanding our reach to new regions and customer segments.</li>
                            <li class="list-group-item"><strong>Market Penetration:</strong> Strengthening our presence in existing markets with improved services and offers.</li>
                            <li class="list-group-item"><strong>Product Development:</strong> Adding new, high-quality products to our fixed inventory based on customer needs.</li>
                            <li class="list-group-item"><strong>Diversification:</strong> Exploring complementary business opportunities to serve our community better.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <?php include 'includes/footer.php'; ?>

    <!-- Include necessary JS files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
