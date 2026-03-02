<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us - AK & Co. Collezione</title>
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
					<li><a href="shop.php">Shop</a></li>
					<li><a href="collections.php">Collections</a></li>
					<li><a href="about.php">Our Story</a></li>
					<li><a href="contact.php" class="active">Contact</a></li>
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
		style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80')">
		<div class="container">
			<h2>CONTACT US</h2>
			<div class="breadcrumb">
				<a href="home.php">Home</a> / <span>Contact</span>
			</div>
		</div>
	</section>

	<!-- Contact Section -->
	<section class="contact-page container">
		<div class="contact-container">
			<!-- Contact Information -->
			<div class="contact-info">
				<h3 style="margin-bottom: 2rem;">Get in Touch</h3>

				<div class="info-item">
					<div class="info-icon">
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<div class="info-content">
						<h4>Visit Us</h4>
						<p>123 Fashion Street<br>Makati City, Manila<br>Philippines 1200</p>
					</div>
				</div>

				<div class="info-item">
					<div class="info-icon">
						<i class="fas fa-phone"></i>
					</div>
					<div class="info-content">
						<h4>Call Us</h4>
						<p>+63 (123) 456-7890<br>+63 (123) 456-7891</p>
					</div>
				</div>

				<div class="info-item">
					<div class="info-icon">
						<i class="fas fa-envelope"></i>
					</div>
					<div class="info-content">
						<h4>Email Us</h4>
						<p>hello@akandco.com<br>support@akandco.com</p>
					</div>
				</div>

				<div class="info-item">
					<div class="info-icon">
						<i class="fas fa-clock"></i>
					</div>
					<div class="info-content">
						<h4>Business Hours</h4>
						<p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: Closed</p>
					</div>
				</div>

				<div class="social-links" style="margin-top: 2rem;">
					<a href="https://www.facebook.com/AK-Co-Collezione-106769457793484/"><i
							class="fab fa-facebook-f"></i></a>
					<a href="https://shopee.ph/akandco.collezione"><i class="fas fa-shopping-bag"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
				</div>
			</div>

			<!-- Contact Form -->
			<div class="contact-form">
				<h3 style="margin-bottom: 2rem;">Send Us a Message</h3>

				<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$name = $_POST['name'];
					$email = $_POST['email'];
					$subject = $_POST['subject'];
					$message = $_POST['message'];

					// Here you would add your email sending logic
					// For now, we'll just show a success message
					echo '<div style="background: #d4edda; color: #155724; padding: 1rem; margin-bottom: 1rem; border-radius: 5px;">Thank you for your message! We\'ll get back to you soon.</div>';
				}
				?>

				<form method="POST" action="">
					<div class="form-group">
						<label for="name">Your Name *</label>
						<input type="text" id="name" name="name" required>
					</div>

					<div class="form-group">
						<label for="email">Email Address *</label>
						<input type="email" id="email" name="email" required>
					</div>

					<div class="form-group">
						<label for="subject">Subject</label>
						<input type="text" id="subject" name="subject">
					</div>

					<div class="form-group">
						<label for="message">Message *</label>
						<textarea id="message" name="message" rows="6" required></textarea>
					</div>

					<button type="submit" class="btn" style="width: 100%;">Send Message</button>
				</form>
			</div>
		</div>
	</section>

	<!-- Map Section -->
	<section class="container" style="margin-bottom: 4rem;">
		<iframe
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.773917841843!2d121.02712931534567!3d14.554248589840348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9b5262b3e2f%3A0x1e6b0b9c0c0c0c0c!2sMakati%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1620000000000!5m2!1sen!2sph"
			width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
		</iframe>
	</section>

	<!-- Newsletter Section -->
	<section class="newsletter">
		<div class="container">
			<h2>Subscribe to Our Newsletter</h2>
			<p>Get the latest updates on new collections and exclusive offers</p>

			<form class="newsletter-form" method="POST" action="">
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