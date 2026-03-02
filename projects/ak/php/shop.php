<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shop - AK & Co. Collezione</title>
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
					<li><a href="shop.php" class="active">Shop</a></li>
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

	<!-- Page Header -->
	<section class="page-header"
		style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1441984904996-1380e1745dec?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80')">
		<div class="container">
			<h2>SHOP COLLECTION</h2>
			<div class="breadcrumb">
				<a href="home.php">Home</a> / <span>Shop</span>
			</div>
		</div>
	</section>

	<!-- Shop Content -->
	<section class="shop-layout container">
		<!-- Sidebar Filters -->
		<aside class="sidebar">
			<div class="filter-section">
				<h3>Categories</h3>
				<ul>
					<li><a href="#" class="active">All Products <span>(24)</span></a></li>
					<li><a href="shoes.php">Footwear <span>(12)</span></a></li>
					<li><a href="swimwear.php">Swimwear <span>(8)</span></a></li>
					<li><a href="accessories.php">Accessories <span>(4)</span></a></li>
				</ul>
			</div>

			<div class="filter-section">
				<h3>Price Range</h3>
				<input type="range" min="0" max="5000" value="2500" class="price-range">
				<div class="price-range">
					<input type="number" placeholder="Min" value="0">
					<input type="number" placeholder="Max" value="5000">
				</div>
			</div>

			<div class="filter-section">
				<h3>Size</h3>
				<ul>
					<li><a href="#">Small <span>(10)</span></a></li>
					<li><a href="#">Medium <span>(15)</span></a></li>
					<li><a href="#">Large <span>(8)</span></a></li>
					<li><a href="#">XL <span>(5)</span></a></li>
				</ul>
			</div>

			<div class="filter-section">
				<h3>Color</h3>
				<ul>
					<li><a href="#">Black <span>(12)</span></a></li>
					<li><a href="#">White <span>(8)</span></a></li>
					<li><a href="#">Brown <span>(6)</span></a></li>
					<li><a href="#">Blue <span>(4)</span></a></li>
				</ul>
			</div>
		</aside>

		<!-- Products Grid -->
		<main class="products-grid">
			<div class="products-header">
				<p class="products-count">Showing 1-12 of 24 products</p>
				<div class="products-sort">
					<select>
						<option>Sort by: Latest</option>
						<option>Price: Low to High</option>
						<option>Price: High to Low</option>
						<option>Popularity</option>
					</select>
				</div>
			</div>

			<div class="product-grid">
				<!-- Product 1 -->
				<div class="product-card">
					<div class="product-badge">New</div>
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
						<a href="product-detail.php?id=1" class="btn" style="width: 100%;">View Details</a>
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
						<a href="product-detail.php?id=2" class="btn" style="width: 100%;">View Details</a>
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
						<a href="product-detail.php?id=3" class="btn" style="width: 100%;">View Details</a>
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
						<a href="product-detail.php?id=4" class="btn" style="width: 100%;">View Details</a>
					</div>
				</div>

				<!-- Product 5 -->
				<div class="product-card">
					<div class="product-badge">Sale</div>
					<div class="product-image">
						<img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
							alt="Sporty Sneakers">
						<div class="product-actions">
							<button class="product-action-btn"><i class="far fa-heart"></i></button>
							<button class="product-action-btn"><i class="fas fa-shopping-bag"></i></button>
							<button class="product-action-btn"><i class="far fa-eye"></i></button>
						</div>
					</div>
					<div class="product-info">
						<p class="product-category">Footwear</p>
						<h3 class="product-name">Sporty Sneakers</h3>
						<p class="product-price"><span
								style="text-decoration: line-through; color: #999; margin-right: 10px;">₱1,499.00</span>
							₱1,199.00</p>
						<a href="product-detail.php?id=5" class="btn" style="width: 100%;">View Details</a>
					</div>
				</div>

				<!-- Product 6 -->
				<div class="product-card">
					<div class="product-image">
						<img src="https://images.unsplash.com/photo-1603808033192-082d6919d3e1?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
							alt="Beach Flip Flops">
						<div class="product-actions">
							<button class="product-action-btn"><i class="far fa-heart"></i></button>
							<button class="product-action-btn"><i class="fas fa-shopping-bag"></i></button>
							<button class="product-action-btn"><i class="far fa-eye"></i></button>
						</div>
					</div>
					<div class="product-info">
						<p class="product-category">Footwear</p>
						<h3 class="product-name">Beach Flip Flops</h3>
						<p class="product-price">₱299.00</p>
						<a href="product-detail.php?id=6" class="btn" style="width: 100%;">View Details</a>
					</div>
				</div>
			</div>

			<!-- Pagination -->
			<div class="pagination" style="text-align: center; margin-top: 3rem;">
				<a href="#" class="btn" style="margin: 0 5px; padding: 0.5rem 1rem;">1</a>
				<a href="#" class="btn"
					style="margin: 0 5px; padding: 0.5rem 1rem; background: var(--accent-color);">2</a>
				<a href="#" class="btn" style="margin: 0 5px; padding: 0.5rem 1rem;">3</a>
				<a href="#" class="btn" style="margin: 0 5px; padding: 0.5rem 1rem;">4</a>
				<a href="#" class="btn" style="margin: 0 5px; padding: 0.5rem 1rem;"><i
						class="fas fa-chevron-right"></i></a>
			</div>
		</main>
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
						<li><a href="products.php">Collections</a></li>
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