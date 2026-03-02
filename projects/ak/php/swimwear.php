<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swimwear Collection - AK & Co. Collezione</title>
    <link rel="icon" type="image/svg+xml"
        href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><circle cx='16' cy='16' r='16' fill='%231a1a1a'/><text x='16' y='22' font-family='serif' font-size='14' font-weight='bold' fill='%23c9a45c' text-anchor='middle'>AK</text></svg>">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="../css/styles.css">

    <style>
        .category-header {
            text-align: center;
            padding: 3rem 0;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            color: white;
        }

        .category-header h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: white;
        }

        .category-header p {
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto 2rem;
            opacity: 0.9;
        }

        .back-link {
            display: inline-block;
            color: white;
            text-decoration: none;
            font-weight: 500;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .category-intro {
            background: white;
            padding: 3rem;
            border-radius: 10px;
            margin: 3rem 0;
            text-align: center;
            box-shadow: var(--shadow);
        }

        .category-intro h3 {
            font-size: 1.8rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .category-intro p {
            max-width: 700px;
            margin: 0 auto;
            color: #666;
            line-height: 1.8;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin: 3rem 0;
        }

        .product-item {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .product-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .product-item img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            transition: var(--transition);
        }

        .product-item:hover img {
            transform: scale(1.05);
        }

        .product-details {
            padding: 1.5rem;
            text-align: center;
        }

        .product-details h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }

        .product-details .category-tag {
            font-size: 0.85rem;
            color: var(--accent-color);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
        }

        .product-details .price {
            font-size: 1.1rem;
            color: var(--accent-color);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .view-btn {
            display: inline-block;
            padding: 0.5rem 1.5rem;
            background: var(--primary-color);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: var(--transition);
            font-size: 0.9rem;
        }

        .view-btn:hover {
            background: var(--accent-color);
        }

        .size-guide {
            background: var(--bg-light);
            padding: 4rem 0;
            margin: 4rem 0;
        }

        .size-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            margin-top: 2rem;
            text-align: center;
        }

        .size-item {
            background: white;
            padding: 1rem;
            border-radius: 5px;
            box-shadow: var(--shadow);
        }

        .size-item h4 {
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        @media screen and (max-width: 992px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media screen and (max-width: 576px) {
            .product-grid {
                grid-template-columns: 1fr;
            }

            .category-header h1 {
                font-size: 2rem;
            }

            .size-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="site-header">
        <div class="container header-content">
            <div class="logo">
                <h1>AK & Co.</h1>
                <span>Collezione</span>
            </div>

            <nav>
                <ul class="nav-menu">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="collections.php" class="active">Collections</a></li>
                    <li><a href="about.php">Our Story</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li class="cart-icon">
                        <a href="cart.php">
                            <i class="fas fa-shopping-bag"></i>
                            <span class="cart-count">4</span>
                        </a>
                    </li>
                </ul>
                <div class="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Category Header -->
    <section class="category-header">
        <div class="container">
            <h1>Swimwear Collection</h1>
            <p>Make a splash with our stylish swimwear collection. Designed for comfort and confidence, perfect for your
                beach adventures.</p>
            <a href="collections.php" class="back-link">← Back to Collections</a>
        </div>
    </section>

    <!-- Category Introduction -->
    <div class="container">
        <div class="category-intro">
            <h3>Beach Ready, Confidence Ready</h3>
            <p>From tropical getaways to poolside lounging, our swimwear collection is designed to make you feel
                beautiful and confident. Each piece is crafted with high-quality materials that offer both style and
                comfort. Whether you prefer classic one-pieces or trendy bikinis, we have the perfect swimsuit for your
                next adventure.</p>
        </div>
    </div>

    <!-- Women's Swimwear -->
    <section class="container">
        <h2 class="section-title">Women's Swimwear</h2>
        <div class="product-grid">
            <!-- Product 1 - Two Piece -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/1030946/pexels-photo-1030946.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Tropical Two Piece">
                <div class="product-details">
                    <p class="category-tag">Two Piece</p>
                    <h3>Tropical Print Bikini</h3>
                    <p class="price">₱899.00</p>
                    <a href="#" class="view-btn" onclick="addToCart('Tropical Print Bikini', 899)">Add to Cart</a>
                </div>
            </div>

            <!-- Product 2 - One Piece -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/1620760/pexels-photo-1620760.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Classic One Piece">
                <div class="product-details">
                    <p class="category-tag">One Piece</p>
                    <h3>Classic Black One Piece</h3>
                    <p class="price">₱1,199.00</p>
                    <a href="#" class="view-btn" onclick="addToCart('Classic Black One Piece', 1199)">Add to Cart</a>
                </div>
            </div>

            <!-- Product 3 - High Waist -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/1721558/pexels-photo-1721558.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="High Waist Bikini">
                <div class="product-details">
                    <p class="category-tag">High Waist</p>
                    <h3>Retro High Waist Bikini</h3>
                    <p class="price">₱999.00</p>
                    <a href="#" class="view-btn" onclick="addToCart('Retro High Waist Bikini', 999)">Add to Cart</a>
                </div>
            </div>

            <!-- Product 4 - Triangle Bikini -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/1631181/pexels-photo-1631181.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Triangle Bikini">
                <div class="product-details">
                    <p class="category-tag">Triangle Bikini</p>
                    <h3>Floral Triangle Bikini</h3>
                    <p class="price">₱849.00</p>
                    <a href="#" class="view-btn" onclick="addToCart('Floral Triangle Bikini', 849)">Add to Cart</a>
                </div>
            </div>

            <!-- Product 5 - Sporty -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/6311652/pexels-photo-6311652.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Sporty Bikini">
                <div class="product-details">
                    <p class="category-tag">Sport</p>
                    <h3>Sporty Athletic Bikini</h3>
                    <p class="price">₱1,099.00</p>
                    <a href="#" class="view-btn" onclick="addToCart('Sporty Athletic Bikini', 1099)">Add to Cart</a>
                </div>
            </div>

            <!-- Product 6 - Ruffled -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/1374064/pexels-photo-1374064.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Ruffled Bikini">
                <div class="product-details">
                    <p class="category-tag">Ruffled</p>
                    <h3>Ruffled Edge Bikini</h3>
                    <p class="price">₱949.00</p>
                    <a href="#" class="view-btn" onclick="addToCart('Ruffled Edge Bikini', 949)">Add to Cart</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Men's Swimwear -->
    <section class="container">
        <h2 class="section-title">Men's Swimwear</h2>
        <div class="product-grid">
            <!-- Product 7 - Swim Trunks -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/1656684/pexels-photo-1656684.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Swim Trunks">
                <div class="product-details">
                    <p class="category-tag">Swim Trunks</p>
                    <h3>Classic Swim Trunks</h3>
                    <p class="price">₱799.00</p>
                    <a href="#" class="view-btn" onclick="addToCart('Classic Swim Trunks', 799)">Add to Cart</a>
                </div>
            </div>

            <!-- Product 8 - Board Shorts -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/1032110/pexels-photo-1032110.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Board Shorts">
                <div class="product-details">
                    <p class="category-tag">Board Shorts</p>
                    <h3>Tropical Board Shorts</h3>
                    <p class="price">₱899.00</p>
                    <a href="#" class="view-btn" onclick="addToCart('Tropical Board Shorts', 899)">Add to Cart</a>
                </div>
            </div>

            <!-- Product 9 - Swim Brief -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/1040880/pexels-photo-1040880.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Swim Brief">
                <div class="product-details">
                    <p class="category-tag">Swim Brief</p>
                    <h3>Solid Swim Brief</h3>
                    <p class="price">₱699.00</p>
                    <a href="#" class="view-btn" onclick="addToCart('Solid Swim Brief', 699)">Add to Cart</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Cover Ups & Accessories -->
    <section class="container">
        <h2 class="section-title">Cover Ups & Accessories</h2>
        <div class="product-grid">
            <!-- Product 10 - Cover Up -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/1436135/pexels-photo-1436135.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Beach Cover Up">
                <div class="product-details">
                    <p class="category-tag">Cover Up</p>
                    <h3>Sheer Beach Cover Up</h3>
                    <p class="price">₱699.00</p>
                    <a href="#" class="view-btn" onclick="addToCart('Sheer Beach Cover Up', 699)">Add to Cart</a>
                </div>
            </div>

            <!-- Product 11 - Sarong -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/1536619/pexels-photo-1536619.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Beach Sarong">
                <div class="product-details">
                    <p class="category-tag">Sarong</p>
                    <h3>Printed Beach Sarong</h3>
                    <p class="price">₱399.00</p>
                    <a href="#" class="view-btn" onclick="addToCart('Printed Beach Sarong', 399)">Add to Cart</a>
                </div>
            </div>

            <!-- Product 12 - Beach Hat -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/1078973/pexels-photo-1078973.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Beach Hat">
                <div class="product-details">
                    <p class="category-tag">Hat</p>
                    <h3>Wide Brim Beach Hat</h3>
                    <p class="price">₱499.00</p>
                    <a href="#" class="view-btn" onclick="addToCart('Wide Brim Beach Hat', 499)">Add to Cart</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Size Guide -->
    <section class="size-guide">
        <div class="container">
            <h2 class="section-title">Swimwear Size Guide</h2>
            <div class="size-grid">
                <div class="size-item">
                    <h4>XS</h4>
                    <p>Bust: 30-32"</p>
                    <p>Waist: 23-25"</p>
                    <p>Hips: 33-35"</p>
                </div>
                <div class="size-item">
                    <h4>S</h4>
                    <p>Bust: 32-34"</p>
                    <p>Waist: 25-27"</p>
                    <p>Hips: 35-37"</p>
                </div>
                <div class="size-item">
                    <h4>M</h4>
                    <p>Bust: 34-36"</p>
                    <p>Waist: 27-29"</p>
                    <p>Hips: 37-39"</p>
                </div>
                <div class="size-item">
                    <h4>L</h4>
                    <p>Bust: 36-38"</p>
                    <p>Waist: 29-31"</p>
                    <p>Hips: 39-41"</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>AK & Co. Collezione</h3>
                    <p>Elegant and timeless silhouettes handcrafted with quality and artisan craftsmanship. Being trendy
                        doesn't have to be too costly.</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/AK-Co-Collezione-106769457793484/"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://shopee.ph/akandco.collezione"><i class="fas fa-shopping-bag"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="collections.php">Collections</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Customer Service</h3>
                    <ul>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Returns & Exchanges</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Size Guide</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Contact Info</h3>
                    <ul>
                        <li><i class="fas fa-phone"></i> +63 123 456 7890</li>
                        <li><i class="fas fa-envelope"></i> hello@akandco.com</li>
                        <li><i class="fas fa-map-marker-alt"></i> Manila, Philippines</li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2021 AK & Co. Collezione. All rights reserved. | "BE BOLD, BE YOU!"</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu JavaScript -->
    <script>
        document.querySelector('.mobile-toggle').addEventListener('click', function () {
            document.querySelector('.nav-menu').classList.toggle('active');
        });

        // Simple add to cart function
        function addToCart(productName, price) {
            alert(productName + ' added to cart! ₱' + price);
            // Update cart count
            let cartCount = document.querySelector('.cart-count');
            let currentCount = parseInt(cartCount.textContent);
            cartCount.textContent = currentCount + 1;
        }
    </script>
</body>

</html>