<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Our Collections - AK & Co. Collezione</title>
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
		.collections-hero {
			text-align: center;
			padding: 4rem 0;
			background: var(--bg-light);
		}

		.collections-hero h1 {
			font-size: 2.5rem;
			margin-bottom: 1rem;
			color: var(--primary-color);
		}

		.collections-hero p {
			font-size: 1.1rem;
			color: #666;
			max-width: 600px;
			margin: 0 auto;
		}

		.collections-grid {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			gap: 2rem;
			margin: 3rem 0;
		}

		.collection-item {
			background: white;
			border-radius: 10px;
			overflow: hidden;
			box-shadow: var(--shadow);
			transition: var(--transition);
		}

		.collection-item:hover {
			transform: translateY(-5px);
			box-shadow: var(--shadow-hover);
		}

		.collection-item img {
			width: 100%;
			height: 300px;
			object-fit: cover;
		}

		.collection-info {
			padding: 1.5rem;
			text-align: center;
		}

		.collection-info h2 {
			font-size: 1.5rem;
			margin-bottom: 0.5rem;
			color: var(--primary-color);
		}

		.collection-info p {
			color: #666;
			margin-bottom: 1.5rem;
			line-height: 1.6;
		}

		.collection-link {
			display: inline-block;
			padding: 0.75rem 2rem;
			background: var(--accent-color);
			color: white;
			text-decoration: none;
			border-radius: 5px;
			transition: var(--transition);
		}

		.collection-link:hover {
			background: var(--primary-color);
		}

		@media screen and (max-width: 768px) {
			.collections-grid {
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

	<!-- Collections Hero -->
	<section class="collections-hero">
		<div class="container">
			<h1>Our Collections</h1>
			<p>Discover carefully curated pieces designed to express your unique style. From casual footwear to elegant
				accessories.</p>
		</div>
	</section>

	<!-- Collections Grid -->
	<section class="container">
		<div class="collections-grid">
			<!-- Footwear Collection -->
			<div class="collection-item">
				<img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
					alt="Footwear Collection">
				<div class="collection-info">
					<h2>Footwear</h2>
					<p>Step into style with our collection of comfortable and trendy footwear. From casual sneakers to
						elegant heels, find your perfect pair.</p>
					<a href="footwear.php" class="collection-link">View Collection</a>
				</div>
			</div>

			<!-- Swimwear Collection -->
			<div class="collection-item">
				<img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
					alt="Swimwear Collection">
				<div class="collection-info">
					<h2>Swimwear</h2>
					<p>Make a splash with our stylish swimwear collection. Designed for comfort and confidence, perfect
						for your beach adventures.</p>
					<a href="swimwear.php" class="collection-link">View Collection</a>
				</div>
			</div>

			<!-- Accessories Collection -->
			<div class="collection-item">
				<img src="https://images.unsplash.com/photo-1539008835657-9e8e9680c956?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
					alt="Accessories Collection">
				<div class="collection-info">
					<h2>Accessories</h2>
					<p>Complete your look with our elegant accessories. From bags to jewelry, find the perfect finishing
						touches for any outfit.</p>
					<a href="accessories.php" class="collection-link">View Collection</a>
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