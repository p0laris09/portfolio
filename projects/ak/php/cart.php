<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - AK & Co. Collezione</title>
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
        .cart-header {
            text-align: center;
            padding: 3rem 0;
            background: var(--bg-light);
        }

        .cart-header h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .cart-header p {
            color: #666;
        }

        .cart-container {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
            margin: 3rem 0;
        }

        .cart-items {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: var(--shadow);
        }

        .cart-item {
            display: grid;
            grid-template-columns: 120px 1fr auto;
            gap: 1.5rem;
            padding: 1.5rem 0;
            border-bottom: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item-image {
            width: 120px;
            height: 120px;
            overflow: hidden;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .cart-item-image:hover {
            transform: scale(1.05);
        }

        .cart-item-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cart-item-details h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }

        .cart-item-category {
            font-size: 0.85rem;
            color: var(--accent-color);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
        }

        .cart-item-price {
            font-size: 1.1rem;
            color: var(--accent-color);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .cart-item-subtotal {
            font-size: 0.9rem;
            color: #666;
        }

        .cart-item-quantity {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 0.5rem;
        }

        .quantity-btn {
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            background: white;
            cursor: pointer;
            transition: var(--transition);
            border-radius: 5px;
        }

        .quantity-btn:hover {
            background: var(--accent-color);
            color: white;
            border-color: var(--accent-color);
        }

        .quantity-btn:active {
            transform: scale(0.95);
        }

        .quantity-input {
            width: 50px;
            height: 30px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-weight: 600;
        }

        .cart-item-actions {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            align-items: flex-end;
        }

        .remove-item {
            color: #ff4444;
            cursor: pointer;
            background: none;
            border: none;
            font-size: 0.9rem;
            padding: 0.5rem;
            transition: all 0.3s ease;
            border-radius: 5px;
        }

        .remove-item:hover {
            background: #ffeeee;
            color: #cc0000;
        }

        .wishlist-btn {
            color: #666;
            cursor: pointer;
            background: none;
            border: none;
            font-size: 0.9rem;
            padding: 0.5rem;
            transition: all 0.3s ease;
            border-radius: 5px;
        }

        .wishlist-btn:hover {
            background: #fff5f5;
            color: var(--accent-color);
        }

        .cart-summary {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: var(--shadow);
            height: fit-content;
            position: sticky;
            top: 100px;
        }

        .summary-title {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--accent-color);
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #eee;
        }

        .summary-row.total {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--primary-color);
            border-bottom: none;
            margin-top: 1rem;
        }

        .summary-row.grand-total {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--accent-color);
            border-top: 2px solid var(--accent-color);
            padding-top: 1rem;
            margin-top: 1rem;
        }

        .summary-row.discount {
            color: #28a745;
        }

        .checkout-btn {
            display: block;
            width: 100%;
            padding: 1rem;
            background: var(--accent-color);
            color: white;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: var(--transition);
            margin: 1.5rem 0;
        }

        .checkout-btn:hover {
            background: var(--primary-color);
            transform: translateY(-2px);
        }

        .checkout-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
        }

        .continue-shopping {
            display: block;
            text-align: center;
            color: var(--accent-color);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .continue-shopping:hover {
            text-decoration: underline;
        }

        .empty-cart {
            text-align: center;
            padding: 4rem;
            background: white;
            border-radius: 10px;
            box-shadow: var(--shadow);
        }

        .empty-cart i {
            font-size: 4rem;
            color: #ddd;
            margin-bottom: 1rem;
        }

        .empty-cart h2 {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .empty-cart p {
            color: #666;
            margin-bottom: 2rem;
        }

        .promo-code {
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid #eee;
        }

        .promo-input {
            display: flex;
            gap: 0.5rem;
        }

        .promo-input input {
            flex: 1;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }

        .promo-input input:focus {
            border-color: var(--accent-color);
            outline: none;
        }

        .promo-input input.valid {
            border-color: #28a745;
        }

        .promo-input input.invalid {
            border-color: #dc3545;
        }

        .promo-input button {
            padding: 0.75rem 1.5rem;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: var(--transition);
        }

        .promo-input button:hover {
            background: var(--accent-color);
        }

        .promo-message {
            margin-top: 0.5rem;
            font-size: 0.85rem;
            display: none;
        }

        .promo-message.success {
            color: #28a745;
            display: block;
        }

        .promo-message.error {
            color: #dc3545;
            display: block;
        }

        .applied-promo {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #e8f5e9;
            padding: 0.75rem;
            border-radius: 5px;
            margin-top: 0.5rem;
        }

        .applied-promo span {
            color: #28a745;
            font-weight: 500;
        }

        .remove-promo {
            background: none;
            border: none;
            color: #666;
            cursor: pointer;
            font-size: 1rem;
        }

        .remove-promo:hover {
            color: #dc3545;
        }

        /* Modal Styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .modal {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            max-width: 500px;
            width: 90%;
            transform: scale(0.8) translateY(-50px);
            transition: all 0.3s ease;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .modal-overlay.active .modal {
            transform: scale(1) translateY(0);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--accent-color);
        }

        .modal-header h2 {
            color: var(--primary-color);
            font-size: 1.5rem;
            margin: 0;
        }

        .modal-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #666;
            transition: color 0.3s ease;
        }

        .modal-close:hover {
            color: var(--accent-color);
        }

        .modal-body {
            margin-bottom: 1.5rem;
        }

        .modal-footer {
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
        }

        .modal-btn {
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .modal-btn-primary {
            background: var(--accent-color);
            color: white;
            border: none;
        }

        .modal-btn-primary:hover {
            background: var(--primary-color);
        }

        .modal-btn-secondary {
            background: white;
            color: #666;
            border: 1px solid #ddd;
        }

        .modal-btn-secondary:hover {
            background: #f5f5f5;
        }

        .modal-btn-danger {
            background: #dc3545;
            color: white;
            border: none;
        }

        .modal-btn-danger:hover {
            background: #c82333;
        }

        /* Checkout Modal Specific */
        .checkout-form .form-group {
            margin-bottom: 1rem;
        }

        .checkout-form label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--primary-color);
        }

        .checkout-form input,
        .checkout-form select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: inherit;
            transition: border-color 0.3s ease;
        }

        .checkout-form input:focus,
        .checkout-form select:focus {
            border-color: var(--accent-color);
            outline: none;
        }

        .checkout-form .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        /* Success Modal */
        .success-modal .modal-body {
            text-align: center;
        }

        .success-icon {
            font-size: 4rem;
            color: #28a745;
            margin-bottom: 1rem;
        }

        .success-modal h3 {
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .success-modal p {
            color: #666;
        }

        .order-number {
            background: #f5f5f5;
            padding: 1rem;
            border-radius: 5px;
            margin-top: 1rem;
            font-family: monospace;
            font-size: 1.2rem;
            color: var(--accent-color);
        }

        /* Toast Notifications */
        .toast-container {
            position: fixed;
            top: 100px;
            right: 20px;
            z-index: 1001;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .toast {
            background: white;
            padding: 1rem 1.5rem;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
            display: flex;
            align-items: center;
            gap: 1rem;
            min-width: 300px;
            transform: translateX(120%);
            transition: transform 0.3s ease;
        }

        .toast.show {
            transform: translateX(0);
        }

        .toast.success {
            border-left: 4px solid #28a745;
        }

        .toast.error {
            border-left: 4px solid #dc3545;
        }

        .toast.info {
            border-left: 4px solid var(--accent-color);
        }

        .toast-icon {
            font-size: 1.5rem;
        }

        .toast.success .toast-icon {
            color: #28a745;
        }

        .toast.error .toast-icon {
            color: #dc3545;
        }

        .toast.info .toast-icon {
            color: var(--accent-color);
        }

        .toast-content h4 {
            margin-bottom: 0.25rem;
            color: var(--primary-color);
        }

        .toast-content p {
            color: #666;
            font-size: 0.9rem;
            margin: 0;
        }

        .toast-close {
            background: none;
            border: none;
            color: #999;
            cursor: pointer;
            margin-left: auto;
        }

        /* Product Quick View Modal */
        .quick-view-modal .product-view {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }

        .quick-view-modal .product-image {
            border-radius: 10px;
            overflow: hidden;
        }

        .quick-view-modal .product-image img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .quick-view-modal .product-details h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }

        .quick-view-modal .product-category {
            color: var(--accent-color);
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
            margin-bottom: 1rem;
        }

        .quick-view-modal .product-price {
            font-size: 1.5rem;
            color: var(--accent-color);
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .quick-view-modal .product-description {
            color: #666;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .quick-view-modal .add-to-cart-btn {
            width: 100%;
            padding: 1rem;
            background: var(--accent-color);
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .quick-view-modal .add-to-cart-btn:hover {
            background: var(--primary-color);
        }

        /* Responsive Styles */
        @media screen and (max-width: 768px) {
            .cart-container {
                grid-template-columns: 1fr;
            }

            .cart-item {
                grid-template-columns: 80px 1fr;
            }

            .cart-item-image {
                width: 80px;
                height: 80px;
            }

            .cart-item-actions {
                grid-column: 1 / -1;
                flex-direction: row;
                justify-content: flex-start;
                margin-top: 1rem;
            }

            .modal {
                max-width: 95%;
                padding: 1.5rem;
            }

            .checkout-form .form-row {
                grid-template-columns: 1fr;
            }

            .quick-view-modal .product-view {
                grid-template-columns: 1fr;
            }

            .toast-container {
                left: 10px;
                right: 10px;
            }

            .toast {
                min-width: auto;
            }
        }

        /* Animations */
        @keyframes fadeOut {
            from {
                opacity: 1;
                transform: translateX(0);
            }

            to {
                opacity: 0;
                transform: translateX(-20px);
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-5px);
            }

            75% {
                transform: translateX(5px);
            }
        }

        .cart-count.updated {
            animation: pulse 0.3s ease;
        }
    </style>
</head>

<body>
    <!-- Toast Container -->
    <div class="toast-container" id="toastContainer"></div>

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
                    <li><a href="contact.php">Contact</a></li>
                    <li class="cart-icon">
                        <a href="cart.php" class="active">
                            <i class="fas fa-shopping-bag"></i>
                            <span class="cart-count" id="cartCount">3</span>
                        </a>
                    </li>
                </ul>
                <div class="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Cart Header -->
    <section class="cart-header">
        <div class="container">
            <h1>Shopping Cart</h1>
            <p>Review and manage your items before checkout</p>
        </div>
    </section>

    <!-- Cart Content -->
    <section class="container" id="cartSection">
        <!-- Cart with Items -->
        <div class="cart-container" id="cartContainer">
            <!-- Cart Items -->
            <div class="cart-items" id="cartItems">
                <h3 style="margin-bottom: 1.5rem; color: var(--primary-color);" id="cartTitle">Cart Items (<span
                        id="itemCount">3</span>)</h3>

                <!-- Cart Item 1 -->
                <div class="cart-item" id="item1" data-price="199" data-name="Comfy Slippers" data-category="Footwear">
                    <div class="cart-item-image" onclick="showQuickView('item1')">
                        <img src="https://images.unsplash.com/photo-1603487742131-4160ec999306?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Comfy Slippers">
                    </div>
                    <div class="cart-item-details">
                        <p class="cart-item-category">Footwear</p>
                        <h3>Comfy Slippers</h3>
                        <p class="cart-item-price" data-unit-price="199">₱199.00</p>
                        <p class="cart-item-subtotal">Subtotal: <span>₱398.00</span></p>
                        <div class="cart-item-quantity">
                            <button class="quantity-btn" onclick="updateQuantity('item1', -1)">-</button>
                            <input type="text" class="quantity-input" value="2" readonly>
                            <button class="quantity-btn" onclick="updateQuantity('item1', 1)">+</button>
                        </div>
                    </div>
                    <div class="cart-item-actions">
                        <button class="wishlist-btn" onclick="moveToWishlist('item1')">
                            <i class="far fa-heart"></i> Save
                        </button>
                        <button class="remove-item" onclick="confirmRemove('item1')">
                            <i class="fas fa-trash"></i> Remove
                        </button>
                    </div>
                </div>

                <!-- Cart Item 2 -->
                <div class="cart-item" id="item2" data-price="899" data-name="Tropical Print Bikini"
                    data-category="Swimwear">
                    <div class="cart-item-image" onclick="showQuickView('item2')">
                        <img src="https://images.unsplash.com/photo-1570976447640-ac859083963f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Tropical Bikini">
                    </div>
                    <div class="cart-item-details">
                        <p class="cart-item-category">Swimwear</p>
                        <h3>Tropical Print Bikini</h3>
                        <p class="cart-item-price" data-unit-price="899">₱899.00</p>
                        <p class="cart-item-subtotal">Subtotal: <span>₱899.00</span></p>
                        <div class="cart-item-quantity">
                            <button class="quantity-btn" onclick="updateQuantity('item2', -1)">-</button>
                            <input type="text" class="quantity-input" value="1" readonly>
                            <button class="quantity-btn" onclick="updateQuantity('item2', 1)">+</button>
                        </div>
                    </div>
                    <div class="cart-item-actions">
                        <button class="wishlist-btn" onclick="moveToWishlist('item2')">
                            <i class="far fa-heart"></i> Save
                        </button>
                        <button class="remove-item" onclick="confirmRemove('item2')">
                            <i class="fas fa-trash"></i> Remove
                        </button>
                    </div>
                </div>

                <!-- Cart Item 3 -->
                <div class="cart-item" id="item3" data-price="1299" data-name="Leather Tote Bag"
                    data-category="Accessories">
                    <div class="cart-item-image" onclick="showQuickView('item3')">
                        <img src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Leather Tote">
                    </div>
                    <div class="cart-item-details">
                        <p class="cart-item-category">Accessories</p>
                        <h3>Leather Tote Bag</h3>
                        <p class="cart-item-price" data-unit-price="1299">₱1,299.00</p>
                        <p class="cart-item-subtotal">Subtotal: <span>₱1,299.00</span></p>
                        <div class="cart-item-quantity">
                            <button class="quantity-btn" onclick="updateQuantity('item3', -1)">-</button>
                            <input type="text" class="quantity-input" value="1" readonly>
                            <button class="quantity-btn" onclick="updateQuantity('item3', 1)">+</button>
                        </div>
                    </div>
                    <div class="cart-item-actions">
                        <button class="wishlist-btn" onclick="moveToWishlist('item3')">
                            <i class="far fa-heart"></i> Save
                        </button>
                        <button class="remove-item" onclick="confirmRemove('item3')">
                            <i class="fas fa-trash"></i> Remove
                        </button>
                    </div>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="cart-summary">
                <h3 class="summary-title">Order Summary</h3>

                <div class="summary-row">
                    <span>Subtotal (<span id="summaryItemCount">4</span> items)</span>
                    <span id="subtotal">₱2,596.00</span>
                </div>

                <div class="summary-row discount" id="discountRow" style="display: none;">
                    <span>Discount (<span id="discountLabel">0%</span>)</span>
                    <span id="discountAmount">-₱0.00</span>
                </div>

                <div class="summary-row">
                    <span>Shipping</span>
                    <span id="shipping">₱100.00</span>
                </div>

                <div class="summary-row">
                    <span>Tax (12%)</span>
                    <span id="tax">₱311.52</span>
                </div>

                <div class="summary-row total grand-total">
                    <span>Total</span>
                    <span id="total">₱3,007.52</span>
                </div>

                <!-- Promo Code -->
                <div class="promo-code" id="promoSection">
                    <h4 style="margin-bottom: 1rem;">Promo Code</h4>
                    <div class="promo-input" id="promoInputSection">
                        <input type="text" placeholder="Enter promo code" id="promoInput">
                        <button onclick="applyPromo()">Apply</button>
                    </div>
                    <p class="promo-message" id="promoMessage"></p>
                    <div class="applied-promo" id="appliedPromo" style="display: none;">
                        <span><i class="fas fa-check-circle"></i> <span id="appliedCode">WELCOME10</span> applied</span>
                        <button class="remove-promo" onclick="removePromo()"><i class="fas fa-times"></i></button>
                    </div>
                </div>

                <button class="checkout-btn" id="checkoutBtn" onclick="openCheckoutModal()">
                    <i class="fas fa-lock"></i> Proceed to Checkout
                </button>
                <a href="shop.php" class="continue-shopping">
                    <i class="fas fa-arrow-left"></i> Continue Shopping
                </a>
            </div>
        </div>

        <!-- Empty Cart (Hidden by default) -->
        <div class="empty-cart" id="emptyCart" style="display: none;">
            <i class="fas fa-shopping-bag"></i>
            <h2>Your cart is empty</h2>
            <p>Looks like you haven't added anything to your cart yet.</p>
            <a href="shop.php" class="btn">Continue Shopping</a>
        </div>
    </section>

    <!-- You May Also Like -->
    <section class="featured-products" style="background: var(--bg-light); margin-top: 4rem;">
        <div class="container">
            <h2 class="section-title">You May Also Like</h2>
            <div class="product-grid">
                <!-- Recommended Product 1 -->
                <div class="product-card" data-product-id="rec1" data-name="Casual Sneakers" data-price="1299"
                    data-category="Footwear"
                    data-image="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                    data-description="Stylish and comfortable sneakers perfect for everyday wear. Features breathable material and cushioned insoles.">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Casual Sneakers">
                        <div class="product-actions">
                            <button class="product-action-btn" onclick="addToWishlist('rec1')"><i
                                    class="far fa-heart"></i></button>
                            <button class="product-action-btn" onclick="quickAddToCart('rec1')"><i
                                    class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="product-info" onclick="showProductQuickView('rec1')">
                        <p class="product-category">Footwear</p>
                        <h3 class="product-name">Casual Sneakers</h3>
                        <p class="product-price">₱1,299.00</p>
                    </div>
                </div>

                <!-- Recommended Product 2 -->
                <div class="product-card" data-product-id="rec2" data-name="Classic One Piece" data-price="1199"
                    data-category="Swimwear"
                    data-image="https://images.unsplash.com/photo-1570976447640-ac859083963f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                    data-description="Elegant one-piece swimsuit with a flattering silhouette. Perfect for beach vacations or poolside lounging.">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1570976447640-ac859083963f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Classic One Piece">
                        <div class="product-actions">
                            <button class="product-action-btn" onclick="addToWishlist('rec2')"><i
                                    class="far fa-heart"></i></button>
                            <button class="product-action-btn" onclick="quickAddToCart('rec2')"><i
                                    class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="product-info" onclick="showProductQuickView('rec2')">
                        <p class="product-category">Swimwear</p>
                        <h3 class="product-name">Classic One Piece</h3>
                        <p class="product-price">₱1,199.00</p>
                    </div>
                </div>

                <!-- Recommended Product 3 -->
                <div class="product-card" data-product-id="rec3" data-name="Gold Layered Necklace" data-price="599"
                    data-category="Accessories"
                    data-image="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                    data-description="Delicate gold-plated layered necklace that adds elegance to any outfit. Hypoallergenic and tarnish-resistant.">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Gold Necklace">
                        <div class="product-actions">
                            <button class="product-action-btn" onclick="addToWishlist('rec3')"><i
                                    class="far fa-heart"></i></button>
                            <button class="product-action-btn" onclick="quickAddToCart('rec3')"><i
                                    class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="product-info" onclick="showProductQuickView('rec3')">
                        <p class="product-category">Accessories</p>
                        <h3 class="product-name">Gold Layered Necklace</h3>
                        <p class="product-price">₱599.00</p>
                    </div>
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

    <!-- Remove Confirmation Modal -->
    <div class="modal-overlay" id="removeModal">
        <div class="modal">
            <div class="modal-header">
                <h2>Remove Item</h2>
                <button class="modal-close" onclick="closeModal('removeModal')">&times;</button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to remove <strong id="removeItemName"></strong> from your cart?</p>
            </div>
            <div class="modal-footer">
                <button class="modal-btn modal-btn-secondary" onclick="closeModal('removeModal')">Cancel</button>
                <button class="modal-btn modal-btn-danger" id="confirmRemoveBtn">Remove Item</button>
            </div>
        </div>
    </div>

    <!-- Checkout Modal -->
    <div class="modal-overlay" id="checkoutModal">
        <div class="modal" style="max-width: 600px;">
            <div class="modal-header">
                <h2><i class="fas fa-lock"></i> Secure Checkout</h2>
                <button class="modal-close" onclick="closeModal('checkoutModal')">&times;</button>
            </div>
            <div class="modal-body">
                <form class="checkout-form" id="checkoutForm" onsubmit="processCheckout(event)">
                    <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Contact Information</h4>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" placeholder="your@email.com" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" placeholder="+63 XXX XXX XXXX" required>
                    </div>

                    <h4 style="margin: 1.5rem 0 1rem; color: var(--primary-color);">Shipping Address</h4>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" id="firstName" placeholder="Juan" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" id="lastName" placeholder="Dela Cruz" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Street Address</label>
                        <input type="text" id="address" placeholder="123 Main Street" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" id="city" placeholder="Manila" required>
                        </div>
                        <div class="form-group">
                            <label for="postalCode">Postal Code</label>
                            <input type="text" id="postalCode" placeholder="1000" required>
                        </div>
                    </div>

                    <h4 style="margin: 1.5rem 0 1rem; color: var(--primary-color);">Payment Method</h4>
                    <div class="form-group">
                        <select id="paymentMethod" required>
                            <option value="">Select Payment Method</option>
                            <option value="cod">Cash on Delivery (COD)</option>
                            <option value="gcash">GCash</option>
                            <option value="bank">Bank Transfer</option>
                            <option value="card">Credit/Debit Card</option>
                        </select>
                    </div>

                    <div style="background: #f5f5f5; padding: 1rem; border-radius: 5px; margin-top: 1rem;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span>Order Total:</span>
                            <strong id="checkoutTotal">₱3,007.52</strong>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="modal-btn modal-btn-secondary" onclick="closeModal('checkoutModal')">Back to
                    Cart</button>
                <button class="modal-btn modal-btn-primary"
                    onclick="document.getElementById('checkoutForm').requestSubmit()">
                    <i class="fas fa-check"></i> Place Order
                </button>
            </div>
        </div>
    </div>

    <!-- Order Success Modal -->
    <div class="modal-overlay" id="successModal">
        <div class="modal success-modal">
            <div class="modal-header">
                <h2>Order Confirmed!</h2>
                <button class="modal-close" onclick="closeSuccessAndReset()">&times;</button>
            </div>
            <div class="modal-body">
                <div class="success-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3>Thank you for your order!</h3>
                <p>Your order has been placed successfully. We'll send you a confirmation email shortly.</p>
                <div class="order-number">
                    Order #<span id="orderNumber">AK-2026-XXXX</span>
                </div>
            </div>
            <div class="modal-footer" style="justify-content: center;">
                <button class="modal-btn modal-btn-primary" onclick="closeSuccessAndReset()">Continue Shopping</button>
            </div>
        </div>
    </div>

    <!-- Quick View Modal -->
    <div class="modal-overlay" id="quickViewModal">
        <div class="modal quick-view-modal" style="max-width: 700px;">
            <div class="modal-header">
                <h2>Quick View</h2>
                <button class="modal-close" onclick="closeModal('quickViewModal')">&times;</button>
            </div>
            <div class="modal-body">
                <div class="product-view">
                    <div class="product-image">
                        <img id="quickViewImage" src="" alt="">
                    </div>
                    <div class="product-details">
                        <p class="product-category" id="quickViewCategory"></p>
                        <h3 id="quickViewName"></h3>
                        <p class="product-price" id="quickViewPrice"></p>
                        <p class="product-description" id="quickViewDescription"></p>
                        <button class="add-to-cart-btn" id="quickViewAddBtn" onclick="quickViewAddToCart()">
                            <i class="fas fa-shopping-bag"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart JavaScript -->
    <script>
        // ================== GLOBAL STATE ==================
        let cartDiscount = 0;
        let appliedPromoCode = null;
        let currentQuickViewProduct = null;
        let itemToRemove = null;

        // ================== INITIALIZATION ==================
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelector('.mobile-toggle').addEventListener('click', function () {
                document.querySelector('.nav-menu').classList.toggle('active');
            });

            updateCartTotals();
        });

        // ================== TOAST NOTIFICATIONS ==================
        function showToast(type, title, message) {
            const container = document.getElementById('toastContainer');
            const toast = document.createElement('div');
            toast.className = `toast ${type}`;

            const icons = {
                success: 'fa-check-circle',
                error: 'fa-exclamation-circle',
                info: 'fa-info-circle'
            };

            toast.innerHTML = `
                <i class="toast-icon fas ${icons[type]}"></i>
                <div class="toast-content">
                    <h4>${title}</h4>
                    <p>${message}</p>
                </div>
                <button class="toast-close" onclick="this.parentElement.remove()">
                    <i class="fas fa-times"></i>
                </button>
            `;

            container.appendChild(toast);

            // Trigger animation
            setTimeout(() => toast.classList.add('show'), 10);

            // Auto remove after 4 seconds
            setTimeout(() => {
                toast.classList.remove('show');
                setTimeout(() => toast.remove(), 300);
            }, 4000);
        }

        // ================== QUANTITY MANAGEMENT ==================
        function updateQuantity(itemId, change) {
            const item = document.getElementById(itemId);
            const qtyInput = item.querySelector('.quantity-input');
            let currentQty = parseInt(qtyInput.value);
            let newQty = currentQty + change;

            if (newQty >= 1 && newQty <= 10) {
                qtyInput.value = newQty;

                // Update item subtotal
                const unitPrice = parseFloat(item.dataset.price);
                const subtotal = unitPrice * newQty;
                item.querySelector('.cart-item-subtotal span').textContent = formatCurrency(subtotal);

                updateCartTotals();
                showToast('info', 'Cart Updated', `Quantity updated to ${newQty}`);
            } else if (newQty < 1) {
                confirmRemove(itemId);
            } else {
                showToast('error', 'Maximum Quantity', 'Maximum 10 items per product');
            }
        }

        // ================== REMOVE ITEM ==================
        function confirmRemove(itemId) {
            itemToRemove = itemId;
            const item = document.getElementById(itemId);
            const itemName = item.dataset.name;
            document.getElementById('removeItemName').textContent = itemName;

            document.getElementById('confirmRemoveBtn').onclick = function () {
                removeItem(itemToRemove);
                closeModal('removeModal');
            };

            openModal('removeModal');
        }

        function removeItem(itemId) {
            const item = document.getElementById(itemId);
            const itemName = item.dataset.name;

            item.style.animation = 'fadeOut 0.3s ease';
            setTimeout(() => {
                item.remove();
                updateCartTotals();
                checkEmptyCart();
                showToast('success', 'Item Removed', `${itemName} has been removed from your cart`);
            }, 300);
        }

        function checkEmptyCart() {
            const cartItems = document.querySelectorAll('.cart-item');
            if (cartItems.length === 0) {
                document.getElementById('cartContainer').style.display = 'none';
                document.getElementById('emptyCart').style.display = 'block';
            }
        }

        // ================== WISHLIST ==================
        function moveToWishlist(itemId) {
            const item = document.getElementById(itemId);
            const itemName = item.dataset.name;
            showToast('success', 'Added to Wishlist', `${itemName} has been saved for later`);

            // Update heart icon to filled
            const wishlistBtn = item.querySelector('.wishlist-btn');
            wishlistBtn.innerHTML = '<i class="fas fa-heart"></i> Saved';
            wishlistBtn.style.color = 'var(--accent-color)';
        }

        function addToWishlist(productId) {
            const product = document.querySelector(`[data-product-id="${productId}"]`);
            const productName = product.dataset.name;
            showToast('success', 'Added to Wishlist', `${productName} has been saved`);

            // Update heart icon
            const btn = product.querySelector('.product-action-btn');
            btn.innerHTML = '<i class="fas fa-heart"></i>';
            btn.style.color = 'var(--accent-color)';
        }

        // ================== CART TOTALS ==================
        function updateCartTotals() {
            let subtotal = 0;
            let itemCount = 0;
            const items = document.querySelectorAll('.cart-item');

            items.forEach(item => {
                const price = parseFloat(item.dataset.price);
                const qty = parseInt(item.querySelector('.quantity-input').value);
                subtotal += price * qty;
                itemCount += qty;
            });

            // Update displays
            document.getElementById('subtotal').textContent = formatCurrency(subtotal);
            document.getElementById('itemCount').textContent = items.length;
            document.getElementById('summaryItemCount').textContent = itemCount;

            // Apply discount if any
            let discountAmount = 0;
            if (cartDiscount > 0) {
                discountAmount = subtotal * (cartDiscount / 100);
                document.getElementById('discountAmount').textContent = '-' + formatCurrency(discountAmount);
            }

            const discountedSubtotal = subtotal - discountAmount;

            // Calculate tax (12%)
            const tax = discountedSubtotal * 0.12;
            document.getElementById('tax').textContent = formatCurrency(tax);

            // Calculate total with shipping
            const shipping = items.length > 0 ? 100 : 0;
            document.getElementById('shipping').textContent = formatCurrency(shipping);

            const total = discountedSubtotal + tax + shipping;
            document.getElementById('total').textContent = formatCurrency(total);
            document.getElementById('checkoutTotal').textContent = formatCurrency(total);

            // Update cart count in header
            const cartCount = document.getElementById('cartCount');
            cartCount.textContent = itemCount;
            cartCount.classList.add('updated');
            setTimeout(() => cartCount.classList.remove('updated'), 300);
        }

        function formatCurrency(amount) {
            return '₱' + amount.toLocaleString('en-PH', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
        }

        // ================== PROMO CODE ==================
        function applyPromo() {
            const promoInput = document.getElementById('promoInput');
            const promoMessage = document.getElementById('promoMessage');
            const promo = promoInput.value.toUpperCase().trim();

            const promoCodes = {
                'WELCOME10': { discount: 10, message: '10% discount applied!' },
                'SUMMER20': { discount: 20, message: '20% summer discount applied!' },
                'PORTFOLIO': { discount: 15, message: '15% portfolio special discount!' },
                'AKCO25': { discount: 25, message: '25% exclusive discount applied!' }
            };

            if (promoCodes[promo]) {
                cartDiscount = promoCodes[promo].discount;
                appliedPromoCode = promo;

                // Show applied promo
                document.getElementById('promoInputSection').style.display = 'none';
                document.getElementById('appliedPromo').style.display = 'flex';
                document.getElementById('appliedCode').textContent = promo;

                // Show discount row
                document.getElementById('discountRow').style.display = 'flex';
                document.getElementById('discountLabel').textContent = cartDiscount + '%';

                promoInput.classList.remove('invalid');
                promoInput.classList.add('valid');

                updateCartTotals();
                showToast('success', 'Promo Applied!', promoCodes[promo].message);
            } else if (promo === '') {
                promoMessage.textContent = 'Please enter a promo code';
                promoMessage.className = 'promo-message error';
                promoInput.classList.add('invalid');
            } else {
                promoMessage.textContent = 'Invalid promo code. Try: WELCOME10, SUMMER20, or AKCO25';
                promoMessage.className = 'promo-message error';
                promoInput.classList.add('invalid');
                promoInput.style.animation = 'shake 0.3s ease';
                setTimeout(() => promoInput.style.animation = '', 300);
            }
        }

        function removePromo() {
            cartDiscount = 0;
            appliedPromoCode = null;

            document.getElementById('promoInputSection').style.display = 'flex';
            document.getElementById('appliedPromo').style.display = 'none';
            document.getElementById('promoInput').value = '';
            document.getElementById('promoInput').classList.remove('valid');
            document.getElementById('promoMessage').className = 'promo-message';
            document.getElementById('discountRow').style.display = 'none';

            updateCartTotals();
            showToast('info', 'Promo Removed', 'Discount has been removed');
        }

        // ================== MODAL MANAGEMENT ==================
        function openModal(modalId) {
            document.getElementById(modalId).classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.remove('active');
            document.body.style.overflow = '';
        }

        // Close modal when clicking overlay
        document.querySelectorAll('.modal-overlay').forEach(overlay => {
            overlay.addEventListener('click', function (e) {
                if (e.target === this) {
                    this.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        });

        // ================== CHECKOUT ==================
        function openCheckoutModal() {
            const items = document.querySelectorAll('.cart-item');
            if (items.length === 0) {
                showToast('error', 'Cart Empty', 'Please add items to your cart first');
                return;
            }
            openModal('checkoutModal');
        }

        function processCheckout(event) {
            event.preventDefault();

            // Simulate processing
            const checkoutBtn = document.querySelector('#checkoutModal .modal-btn-primary');
            checkoutBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
            checkoutBtn.disabled = true;

            setTimeout(() => {
                closeModal('checkoutModal');
                checkoutBtn.innerHTML = '<i class="fas fa-check"></i> Place Order';
                checkoutBtn.disabled = false;

                // Generate order number
                const orderNum = 'AK-2026-' + Math.random().toString(36).substring(2, 6).toUpperCase();
                document.getElementById('orderNumber').textContent = orderNum;

                openModal('successModal');
            }, 2000);
        }

        function closeSuccessAndReset() {
            closeModal('successModal');

            // Clear cart
            document.querySelectorAll('.cart-item').forEach(item => item.remove());
            checkEmptyCart();

            // Reset promo
            if (appliedPromoCode) {
                removePromo();
            }

            // Redirect to shop
            setTimeout(() => {
                window.location.href = 'shop.php';
            }, 500);
        }

        // ================== QUICK VIEW & ADD TO CART ==================
        function showQuickView(itemId) {
            const item = document.getElementById(itemId);
            const img = item.querySelector('.cart-item-image img');

            document.getElementById('quickViewImage').src = img.src;
            document.getElementById('quickViewName').textContent = item.dataset.name;
            document.getElementById('quickViewCategory').textContent = item.dataset.category;
            document.getElementById('quickViewPrice').textContent = formatCurrency(parseFloat(item.dataset.price));
            document.getElementById('quickViewDescription').textContent = 'Premium quality product from our exclusive collection.';

            currentQuickViewProduct = null; // It's already in cart
            document.getElementById('quickViewAddBtn').textContent = 'Already in Cart';
            document.getElementById('quickViewAddBtn').disabled = true;

            openModal('quickViewModal');
        }

        function showProductQuickView(productId) {
            const product = document.querySelector(`[data-product-id="${productId}"]`);

            document.getElementById('quickViewImage').src = product.dataset.image;
            document.getElementById('quickViewName').textContent = product.dataset.name;
            document.getElementById('quickViewCategory').textContent = product.dataset.category;
            document.getElementById('quickViewPrice').textContent = formatCurrency(parseFloat(product.dataset.price));
            document.getElementById('quickViewDescription').textContent = product.dataset.description;

            currentQuickViewProduct = productId;
            const btn = document.getElementById('quickViewAddBtn');
            btn.innerHTML = '<i class="fas fa-shopping-bag"></i> Add to Cart';
            btn.disabled = false;

            openModal('quickViewModal');
        }

        function quickViewAddToCart() {
            if (currentQuickViewProduct) {
                quickAddToCart(currentQuickViewProduct);
                closeModal('quickViewModal');
            }
        }

        function quickAddToCart(productId) {
            const product = document.querySelector(`[data-product-id="${productId}"]`);
            const name = product.dataset.name;
            const price = product.dataset.price;
            const category = product.dataset.category;
            const image = product.dataset.image;

            // Create new item ID
            const newId = 'item' + Date.now();

            // Add new item to cart
            const cartItemsContainer = document.getElementById('cartItems');
            const newItem = document.createElement('div');
            newItem.className = 'cart-item';
            newItem.id = newId;
            newItem.dataset.price = price;
            newItem.dataset.name = name;
            newItem.dataset.category = category;

            newItem.innerHTML = `
                <div class="cart-item-image" onclick="showQuickView('${newId}')">
                    <img src="${image}" alt="${name}">
                </div>
                <div class="cart-item-details">
                    <p class="cart-item-category">${category}</p>
                    <h3>${name}</h3>
                    <p class="cart-item-price" data-unit-price="${price}">${formatCurrency(parseFloat(price))}</p>
                    <p class="cart-item-subtotal">Subtotal: <span>${formatCurrency(parseFloat(price))}</span></p>
                    <div class="cart-item-quantity">
                        <button class="quantity-btn" onclick="updateQuantity('${newId}', -1)">-</button>
                        <input type="text" class="quantity-input" value="1" readonly>
                        <button class="quantity-btn" onclick="updateQuantity('${newId}', 1)">+</button>
                    </div>
                </div>
                <div class="cart-item-actions">
                    <button class="wishlist-btn" onclick="moveToWishlist('${newId}')">
                        <i class="far fa-heart"></i> Save
                    </button>
                    <button class="remove-item" onclick="confirmRemove('${newId}')">
                        <i class="fas fa-trash"></i> Remove
                    </button>
                </div>
            `;

            cartItemsContainer.appendChild(newItem);

            // Show cart container if it was hidden
            document.getElementById('cartContainer').style.display = 'grid';
            document.getElementById('emptyCart').style.display = 'none';

            updateCartTotals();
            showToast('success', 'Added to Cart', `${name} has been added to your cart`);

            // Scroll to cart
            cartItemsContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    </script>
</body>

</html>