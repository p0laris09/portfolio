<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Footwear Collection - AK & Co. Collezione</title>
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
			margin: 0 auto;
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
			height: 250px;
			object-fit: cover;
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

		.product-details .price {
			font-size: 1.1rem;
			color: var(--accent-color);
			font-weight: 600;
			margin-bottom: 1rem;
		}

		.back-link {
			display: inline-block;
			margin: 2rem 0;
			color: var(--accent-color);
			text-decoration: none;
		}

		.back-link:hover {
			text-decoration: underline;
		}

		@media screen and (max-width: 768px) {
			.product-grid {
				grid-template-columns: repeat(2, 1fr);
			}
		}

		@media screen and (max-width: 480px) {
			.product-grid {
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

	<!-- Category Header -->
	<section class="category-header">
		<div class="container">
			<h1>Footwear Collection</h1>
			<p>Step into style with our collection of comfortable and trendy footwear. From casual sneakers to elegant
				heels.</p>
			<a href="collections.php" class="back-link">← Back to Collections</a>
		</div>
	</section>

	<!-- Products Grid -->
	<section class="container">
		<div class="product-grid">
			<!-- Product 1 -->
			<div class="product-item">
				<img src="https://images.unsplash.com/photo-1603487742131-4160ec999306?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
					alt="Comfy Slippers">
				<div class="product-details">
					<h3>Comfy Slippers</h3>
					<p class="price">₱199.00</p>
				</div>
			</div>

			<!-- Product 2 -->
			<div class="product-item">
				<img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
					alt="Casual Sneakers">
				<div class="product-details">
					<h3>Casual Sneakers</h3>
					<p class="price">₱1,299.00</p>
				</div>
			</div>

			<!-- Product 3 -->
			<div class="product-item">
				<img src="https://images.unsplash.com/photo-1562183241-b937e95585b6?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
					alt="Summer Sandals">
				<div class="product-details">
					<h3>Summer Sandals</h3>
					<p class="price">₱899.00</p>
				</div>
			</div>

			<!-- Product 4 -->
			<div class="product-item">
				<img src="https://images.unsplash.com/photo-1543163521-1bf539c55dd2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
					alt="Elegant Heels">
				<div class="product-details">
					<h3>Elegant Heels</h3>
					<p class="price">₱1,599.00</p>
				</div>
			</div>

			<!-- Product 5 -->
			<div class="product-item">
				<img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
					alt="Sporty Sneakers">
				<div class="product-details">
					<h3>Sporty Sneakers</h3>
					<p class="price">₱1,199.00</p>
				</div>
			</div>

			<!-- Product 6 -->
			<div class="product-item">
				<img src="https://images.unsplash.com/photo-1603808033192-082d6919d3e1?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
					alt="Beach Flip Flops">
				<div class="product-details">
					<h3>Beach Flip Flops</h3>
					<p class="price">₱299.00</p>
				</div>
			</div>

			<!-- Product 7 -->
			<div class="product-item">
				<img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
					alt="Leather Sandals">
				<div class="product-details">
					<h3>Leather Sandals</h3>
					<p class="price">₱999.00</p>
				</div>
			</div>

			<!-- Product 8 -->
			<div class="product-item">
				<img src="https://images.unsplash.com/photo-1560343090-f0409e92791a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
					alt="Summer Wedges">
				<div class="product-details">
					<h3>Summer Wedges</h3>
					<p class="price">₱1,299.00</p>
				</div>
			</div>

			<!-- Product 9 -->
			<div class="product-item">
				<img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
					alt="Classic Sneakers">
				<div class="product-details">
					<h3>Classic Sneakers</h3>
					<p class="price">₱1,399.00</p>
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
				<p>&copy; 2024 AK & Co. Collezione. All rights reserved. | "BE BOLD, BE YOU!"</p>
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