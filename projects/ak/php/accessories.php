<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessories Collection - AK & Co. Collezione</title>
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
            background: var(--bg-light);
        }

        .category-header h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .category-header p {
            font-size: 1.1rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto 2rem;
        }

        .back-link {
            display: inline-block;
            color: var(--accent-color);
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
            margin: 2rem 0;
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
            height: 280px;
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
            <h1>Accessories Collection</h1>
            <p>Complete your look with our elegant accessories. From bags to jewelry, find the perfect finishing touches
                for any outfit.</p>
            <a href="collections.php" class="back-link">← Back to Collections</a>
        </div>
    </section>

    <!-- Category Introduction -->
    <div class="container">
        <div class="category-intro">
            <h3>The Perfect Finishing Touch</h3>
            <p>Every outfit tells a story, and the right accessories make it unforgettable. Our carefully curated
                collection features timeless pieces that elevate your style from ordinary to extraordinary. Whether
                you're looking for a statement bag or delicate jewelry, we have something special for you.</p>
        </div>
    </div>

    <!-- Products Grid -->
    <section class="container">
        <h2 class="section-title">Bags & Purses</h2>
        <div class="product-grid">
            <!-- Product 1 -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/1152077/pexels-photo-1152077.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Leather Tote Bag">
                <div class="product-details">
                    <p class="category-tag">Bags</p>
                    <h3>Leather Tote Bag</h3>
                    <p class="price">₱1,299.00</p>
                    <a href="#" class="view-btn">View Details</a>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/1204464/pexels-photo-1204464.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Crossbody Bag">
                <div class="product-details">
                    <p class="category-tag">Bags</p>
                    <h3>Mini Crossbody Bag</h3>
                    <p class="price">₱899.00</p>
                    <a href="#" class="view-btn">View Details</a>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/904350/pexels-photo-904350.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Shoulder Bag">
                <div class="product-details">
                    <p class="category-tag">Bags</p>
                    <h3>Elegant Shoulder Bag</h3>
                    <p class="price">₱1,099.00</p>
                    <a href="#" class="view-btn">View Details</a>
                </div>
            </div>
        </div>

        <h2 class="section-title" style="margin-top: 4rem;">Jewelry</h2>
        <div class="product-grid">
            <!-- Product 4 -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/1191531/pexels-photo-1191531.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Gold Necklace">
                <div class="product-details">
                    <p class="category-tag">Necklaces</p>
                    <h3>Gold Layered Necklace</h3>
                    <p class="price">₱599.00</p>
                    <a href="#" class="view-btn">View Details</a>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/1413420/pexels-photo-1413420.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Pearl Earrings">
                <div class="product-details">
                    <p class="category-tag">Earrings</p>
                    <h3>Pearl Drop Earrings</h3>
                    <p class="price">₱399.00</p>
                    <a href="#" class="view-btn">View Details</a>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/1395306/pexels-photo-1395306.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Bracelet Set">
                <div class="product-details">
                    <p class="category-tag">Bracelets</p>
                    <h3>Gold Bracelet Set</h3>
                    <p class="price">₱499.00</p>
                    <a href="#" class="view-btn">View Details</a>
                </div>
            </div>
        </div>

        <h2 class="section-title" style="margin-top: 4rem;">Sunglasses</h2>
        <div class="product-grid">
            <!-- Product 7 -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/701877/pexels-photo-701877.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Classic Sunglasses">
                <div class="product-details">
                    <p class="category-tag">Sunglasses</p>
                    <h3>Classic Aviator</h3>
                    <p class="price">₱499.00</p>
                    <a href="#" class="view-btn">View Details</a>
                </div>
            </div>

            <!-- Product 8 -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/46710/pexels-photo-46710.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Cat Eye Sunglasses">
                <div class="product-details">
                    <p class="category-tag">Sunglasses</p>
                    <h3>Cat Eye Sunglasses</h3>
                    <p class="price">₱449.00</p>
                    <a href="#" class="view-btn">View Details</a>
                </div>
            </div>

            <!-- Product 9 -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/1362558/pexels-photo-1362558.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Round Sunglasses">
                <div class="product-details">
                    <p class="category-tag">Sunglasses</p>
                    <h3>Retro Round Sunglasses</h3>
                    <p class="price">₱399.00</p>
                    <a href="#" class="view-btn">View Details</a>
                </div>
            </div>
        </div>

        <h2 class="section-title" style="margin-top: 4rem;">Hair Accessories</h2>
        <div class="product-grid">
            <!-- Product 10 -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/1183266/pexels-photo-1183266.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Silk Scarf">
                <div class="product-details">
                    <p class="category-tag">Scarves</p>
                    <h3>Silk Printed Scarf</h3>
                    <p class="price">₱299.00</p>
                    <a href="#" class="view-btn">View Details</a>
                </div>
            </div>

            <!-- Product 11 -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/1028930/pexels-photo-1028930.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Hair Clips">
                <div class="product-details">
                    <p class="category-tag">Hair Clips</p>
                    <h3>Pearl Hair Clips (Set of 3)</h3>
                    <p class="price">₱199.00</p>
                    <a href="#" class="view-btn">View Details</a>
                </div>
            </div>

            <!-- Product 12 -->
            <div class="product-item">
                <img src="https://images.pexels.com/photos/322207/pexels-photo-322207.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Headband">
                <div class="product-details">
                    <p class="category-tag">Headbands</p>
                    <h3>Pearl Embellished Headband</h3>
                    <p class="price">₱249.00</p>
                    <a href="#" class="view-btn">View Details</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Styling Tips -->
    <section style="background: var(--bg-light); padding: 4rem 0; margin: 4rem 0;">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
                <div>
                    <h2 style="font-size: 2rem; margin-bottom: 1.5rem; color: var(--primary-color);">How to Style Your
                        Accessories</h2>
                    <p style="margin-bottom: 1rem; color: #666;">Accessories have the power to transform any outfit.
                        Here are some tips:</p>
                    <ul style="list-style: none;">
                        <li style="margin-bottom: 1rem;"><i class="fas fa-check"
                                style="color: var(--accent-color); margin-right: 1rem;"></i> Mix metals for a modern
                            look</li>
                        <li style="margin-bottom: 1rem;"><i class="fas fa-check"
                                style="color: var(--accent-color); margin-right: 1rem;"></i> Let one piece be the
                            statement</li>
                        <li style="margin-bottom: 1rem;"><i class="fas fa-check"
                                style="color: var(--accent-color); margin-right: 1rem;"></i> Consider your neckline when
                            choosing necklaces</li>
                        <li style="margin-bottom: 1rem;"><i class="fas fa-check"
                                style="color: var(--accent-color); margin-right: 1rem;"></i> Match your bag to your
                            shoes for a polished look</li>
                    </ul>
                </div>
                <div>
                    <img src="https://images.pexels.com/photos/1536619/pexels-photo-1536619.jpeg?auto=compress&cs=tinysrgb&w=800"
                        alt="Styling Tips" style="width: 100%; border-radius: 10px;">
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
    </script>
</body>

</html>