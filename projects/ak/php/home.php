<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AK & Co. Collezione | Elegant & Timeless Fashion</title>
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
		/* Additional styles for home page */
		.brand-story {
			padding: 4rem 0;
			background: white;
			text-align: center;
		}

		.brand-story h2 {
			font-size: 2rem;
			margin-bottom: 1.5rem;
			color: var(--primary-color);
		}

		.brand-story p {
			max-width: 800px;
			margin: 0 auto 2rem;
			color: #666;
			line-height: 1.8;
		}

		.story-stats {
			display: flex;
			justify-content: center;
			gap: 4rem;
			margin-top: 3rem;
		}

		.stat {
			text-align: center;
		}

		.stat .number {
			font-size: 2.5rem;
			font-weight: 700;
			color: var(--accent-color);
		}

		.stat .label {
			font-size: 0.9rem;
			color: #666;
			text-transform: uppercase;
			letter-spacing: 1px;
		}

		.instagram-feed {
			padding: 4rem 0;
			background: var(--bg-light);
		}

		.feed-grid {
			display: grid;
			grid-template-columns: repeat(4, 1fr);
			gap: 1rem;
			margin-top: 2rem;
		}

		.feed-item {
			position: relative;
			overflow: hidden;
			border-radius: 10px;
		}

		.feed-item img {
			width: 100%;
			height: 250px;
			object-fit: cover;
			transition: var(--transition);
		}

		.feed-item:hover img {
			transform: scale(1.1);
		}

		.feed-overlay {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: rgba(0, 0, 0, 0.3);
			display: flex;
			align-items: center;
			justify-content: center;
			opacity: 0;
			transition: var(--transition);
		}

		.feed-item:hover .feed-overlay {
			opacity: 1;
		}

		.feed-overlay i {
			color: white;
			font-size: 2rem;
		}

		@media screen and (max-width: 768px) {
			.story-stats {
				flex-direction: column;
				gap: 2rem;
			}

			.feed-grid {
				grid-template-columns: repeat(2, 1fr);
			}
		}

		@media screen and (max-width: 480px) {
			.feed-grid {
				grid-template-columns: 1fr;
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
					<li><a href="home.php" class="active">Home</a></li>
					<li><a href="shop.php">Shop</a></li>
					<li><a href="collections.php">Collections</a></li>
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

	<!-- Hero Section -->
	<section class="hero"
		style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('https://images.unsplash.com/photo-1460353581641-37baddab0fa2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80')">
		<div class="hero-content">
			<h2>BE BOLD, BE YOU</h2>
			<p>Discover our collection of elegant and timeless silhouettes, crafted with passion and designed for the
				modern individual.</p>
			<a href="shop.php" class="btn">Shop Now</a>
			<a href="about.php" class="btn btn-outline">Our Story</a>
		</div>
	</section>

	<!-- Featured Categories -->
	<section class="categories">
		<div class="container">
			<h2 class="section-title">Shop by Category</h2>
			<div class="category-grid">
				<div class="category-card large">
					<img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
						alt="Footwear" class="category-image">
					<div class="category-overlay">
						<h3>Footwear Collection</h3>
						<p>Step into style with our latest shoe designs</p>
						<a href="footwear.php" class="btn btn-outline">Explore</a>
					</div>
				</div>
				<div class="category-card">
					<img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
						alt="Swimwear" class="category-image">
					<div class="category-overlay">
						<h3>Swimwear</h3>
						<p>Make a splash with our beach essentials</p>
						<a href="swimwear.php" class="btn btn-outline">Explore</a>
					</div>
				</div>
				<div class="category-card">
					<img src="https://images.unsplash.com/photo-1539008835657-9e8e9680c956?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
						alt="Accessories" class="category-image">
					<div class="category-overlay">
						<h3>Accessories</h3>
						<p>Complete the look with our elegant pieces</p>
						<a href="accessories.php" class="btn btn-outline">Explore</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Featured Products -->
	<section class="featured-products">
		<div class="container">
			<h2 class="section-title">Bestsellers</h2>
			<div class="product-grid">
				<!-- Product 1 -->
				<div class="product-card">
					<div class="product-badge">Best Seller</div>
					<div class="product-image">
						<img src="https://images.unsplash.com/photo-1603487742131-4160ec999306?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
							alt="Comfy Slippers">
						<div class="product-actions">
							<button class="product-action-btn"><i class="far fa-heart"></i></button>
							<button class="product-action-btn"><i class="fas fa-shopping-bag"></i></button>
							<button class="product-action-btn"><i class="far fa-eye"></i></button>
						</div>
					</div>
					<div class="product-info">
						<p class="product-category">Footwear</p>
						<h3 class="product-name">Comfy Slippers</h3>
						<p class="product-price">₱199.00</p>
						<a href="product-detail.php?id=1" class="btn" style="width: 100%; margin-top: 1rem;">View
							Details</a>
					</div>
				</div>

				<!-- Product 2 -->
				<div class="product-card">
					<div class="product-image">
						<img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
							alt="Casual Sneakers">
						<div class="product-actions">
							<button class="product-action-btn"><i class="far fa-heart"></i></button>
							<button class="product-action-btn"><i class="fas fa-shopping-bag"></i></button>
							<button class="product-action-btn"><i class="far fa-eye"></i></button>
						</div>
					</div>
					<div class="product-info">
						<p class="product-category">Footwear</p>
						<h3 class="product-name">Casual Sneakers</h3>
						<p class="product-price">₱1,299.00</p>
						<a href="product-detail.php?id=2" class="btn" style="width: 100%; margin-top: 1rem;">View
							Details</a>
					</div>
				</div>

				<!-- Product 3 -->
				<div class="product-card">
					<div class="product-image">
						<img src="https://images.unsplash.com/photo-1562183241-b937e95585b6?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
							alt="Summer Sandals">
						<div class="product-actions">
							<button class="product-action-btn"><i class="far fa-heart"></i></button>
							<button class="product-action-btn"><i class="fas fa-shopping-bag"></i></button>
							<button class="product-action-btn"><i class="far fa-eye"></i></button>
						</div>
					</div>
					<div class="product-info">
						<p class="product-category">Footwear</p>
						<h3 class="product-name">Summer Sandals</h3>
						<p class="product-price">₱899.00</p>
						<a href="product-detail.php?id=3" class="btn" style="width: 100%; margin-top: 1rem;">View
							Details</a>
					</div>
				</div>

				<!-- Product 4 -->
				<div class="product-card">
					<div class="product-image">
						<img src="https://images.unsplash.com/photo-1543163521-1bf539c55dd2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
							alt="Elegant Heels">
						<div class="product-actions">
							<button class="product-action-btn"><i class="far fa-heart"></i></button>
							<button class="product-action-btn"><i class="fas fa-shopping-bag"></i></button>
							<button class="product-action-btn"><i class="far fa-eye"></i></button>
						</div>
					</div>
					<div class="product-info">
						<p class="product-category">Footwear</p>
						<h3 class="product-name">Elegant Heels</h3>
						<p class="product-price">₱1,599.00</p>
						<a href="product-detail.php?id=4" class="btn" style="width: 100%; margin-top: 1rem;">View
							Details</a>
					</div>
				</div>
			</div>

			<div style="text-align: center; margin-top: 3rem;">
				<a href="shop.php" class="btn">View All Products</a>
			</div>
		</div>
	</section>

	<!-- Brand Story -->
	<section class="brand-story">
		<div class="container">
			<h2>Our Story</h2>
			<p>AK & Co. Collezione is a collection of elegant and timeless silhouettes handcrafted with quality and
				artisan craftsmanship. A business born out of the pandemic to support local artisans, we offer
				high-quality products with the best value for money because being trendy doesn't have to be too costly.
			</p>
			<p style="font-style: italic; color: var(--accent-color); font-size: 1.2rem;">Established in 2019</p>

			<div class="story-stats">
				<div class="stat">
					<div class="number">2019</div>
					<div class="label">Year Established</div>
				</div>
				<div class="stat">
					<div class="number">50+</div>
					<div class="label">Products</div>
				</div>
				<div class="stat">
					<div class="number">1000+</div>
					<div class="label">Happy Customers</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Instagram Feed -->
	<section class="instagram-feed">
		<div class="container">
			<h2 class="section-title">Follow Us @akandco.collezione</h2>
			<div class="feed-grid">
				<div class="feed-item">
					<img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
						alt="Instagram Post">
					<div class="feed-overlay">
						<i class="fab fa-instagram"></i>
					</div>
				</div>
				<div class="feed-item">
					<img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
						alt="Instagram Post">
					<div class="feed-overlay">
						<i class="fab fa-instagram"></i>
					</div>
				</div>
				<div class="feed-item">
					<img src="https://images.unsplash.com/photo-1539008835657-9e8e9680c956?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
						alt="Instagram Post">
					<div class="feed-overlay">
						<i class="fab fa-instagram"></i>
					</div>
				</div>
				<div class="feed-item">
					<img src="https://images.unsplash.com/photo-1460353581641-37baddab0fa2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
						alt="Instagram Post">
					<div class="feed-overlay">
						<i class="fab fa-instagram"></i>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Newsletter -->
	<section class="newsletter">
		<div class="container">
			<h2>Join Our Newsletter</h2>
			<p>Be the first to know about new collections and exclusive offers</p>
			<form class="newsletter-form">
				<input type="email" placeholder="Your email address" required>
				<button type="submit">Subscribe</button>
			</form>
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