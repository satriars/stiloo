<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stilo - Products</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }
        
        body {
            color: #333;
            line-height: 1.5;
        }
        
        a {
            text-decoration: none;
            color: inherit;
        }
        
        ul {
            list-style: none;
        }
        
        img {
            max-width: 100%;
            height: auto;
            display: block;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Header Styles */
        header {
            background-color: #f5f5f0;
            padding: 20px 0;
            border-bottom: 1px solid #eee;
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 700;
        }
        
        .nav-menu {
            display: flex;
            gap: 20px;
        }
        
        .nav-menu a {
            font-size: 14px;
        }
        
        .nav-menu a:hover {
            color: #666;
        }
        
        .nav-menu a.active {
            font-weight: 600;
        }
        
        .header-icons {
            display: flex;
            gap: 15px;
            align-items: center;
        }
        
        .icon {
            position: relative;
            cursor: pointer;
        }
        
        .icon-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: #000;
            color: #fff;
            font-size: 10px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Page Banner */
        .page-banner {
            background-color: #f5f5f0;
            padding: 40px 0;
        }
        
        .page-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .breadcrumb {
            display: flex;
            gap: 10px;
            font-size: 14px;
            color: #666;
        }
        
        .breadcrumb a:hover {
            text-decoration: underline;
        }
        
        /* Products Content */
        .products-content {
            padding: 40px 0;
        }
        
        /* Category Tabs */
        .category-tabs {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
        }
        
        .category-tab {
            font-size: 16px;
            font-weight: 500;
            padding: 8px 16px;
            cursor: pointer;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        
        .category-tab:hover {
            background-color: #f5f5f5;
        }
        
        .category-tab.active {
            background-color: #000;
            color: #fff;
        }
        
        /* Filter Bar */
        .filter-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .filters {
            display: flex;
            gap: 15px;
            align-items: center;
        }
        
        .filter-item {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 14px;
            cursor: pointer;
            position: relative;
        }
        
        .filter-item::after {
            content: "";
            display: inline-block;
            width: 8px;
            height: 8px;
            border-right: 1.5px solid #333;
            border-bottom: 1.5px solid #333;
            transform: rotate(45deg);
            margin-top: -4px;
        }
        
        .view-options {
            display: flex;
            gap: 10px;
        }
        
        .view-option {
            cursor: pointer;
            padding: 5px;
        }
        
        /* Color Filter Popup */
        .color-filter {
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            border: 1px solid #eee;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            padding: 15px;
            width: 200px;
            z-index: 10;
            display: none; /* Hide by default */
        }
        
        .color-filter.active {
            display: block; /* Show when active class is added */
        }
        
        .color-filter h3 {
            margin-bottom: 10px;
            font-size: 16px;
        }
        
        .color-options {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .color-option {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
        }
        
        .color-dot {
            width: 16px;
            height: 16px;
            border-radius: 50%;
        }
        
        .blue { background-color: #4169E1; }
        .grey { background-color: #808080; }
        .red { background-color: #FF6B6B; }
        .yellow { background-color: #FFD700; }
        .green { background-color: #4CAF50; }
        .purple { background-color: #9C27B0; }
        
        /* Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
        
        .product-card {
            margin-bottom: 30px;
        }
        
        .product-image {
            background-color: #f9f9f9;
            margin-bottom: 10px;
            position: relative;
            overflow: hidden;
            aspect-ratio: 1/1.2;
        }
        
        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .product-image:hover img {
            transform: scale(1.05);
        }
        
        .product-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #000;
            color: #fff;
            font-size: 12px;
            padding: 4px 8px;
            border-radius: 2px;
        }
        
        .product-badge.sale {
            background-color: #FF6B6B;
        }
        
        .product-badge.new {
            background-color: #4CAF50;
        }
        
        .product-title {
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .product-price {
            font-weight: 600;
            margin-bottom: 10px;
            display: flex;
            gap: 10px;
            align-items: center;
        }
        
        .original-price {
            text-decoration: line-through;
            color: #999;
            font-weight: normal;
        }
        
        .product-colors {
            display: flex;
            gap: 5px;
        }
        
        .product-color {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            cursor: pointer;
        }
        
        /* Featured Products Section */
        .featured-section {
            margin-bottom: 60px;
        }
        
        .section-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            text-align: center;
        }
        
        /* New Arrivals Section */
        .new-arrivals-section {
            margin-bottom: 60px;
        }
        
        /* Best Sellers Section */
        .best-sellers-section {
            margin-bottom: 60px;
        }
        
        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 40px 0;
        }
        
        .page-item {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            cursor: pointer;
            font-size: 14px;
        }
        
        .page-item.active {
            background-color: #000;
            color: #fff;
        }
        
        .page-item:hover:not(.active) {
            background-color: #f5f5f5;
        }
        
        /* Footer */
        footer {
            background-color: #1a1a1a;
            color: #fff;
            padding: 50px 0 20px;
        }
        
        .footer-top {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }
        
        .footer-newsletter {
            max-width: 300px;
        }
        
        .footer-newsletter h3 {
            font-size: 16px;
            margin-bottom: 15px;
        }
        
        .discount-highlight {
            color: #ff6b6b;
        }
        
        .newsletter-form {
            display: flex;
            margin-top: 15px;
        }
        
        .newsletter-input {
            flex: 1;
            padding: 10px;
            border: none;
            background-color: #333;
            color: #fff;
        }
        
        .newsletter-button {
            padding: 10px 15px;
            background-color: #fff;
            color: #000;
            border: none;
            cursor: pointer;
        }
        
        .footer-links {
            display: flex;
            gap: 50px;
        }
        
        .footer-column h4 {
            font-size: 14px;
            margin-bottom: 20px;
        }
        
        .footer-column ul {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .footer-column a {
            font-size: 14px;
            color: #aaa;
        }
        
        .footer-column a:hover {
            color: #fff;
        }
        
        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 1px solid #333;
            font-size: 12px;
            color: #aaa;
        }
        
        .payment-methods {
            display: flex;
            gap: 10px;
        }
        
        .payment-icon {
            width: 30px;
            height: 20px;
            background-color: #fff;
            border-radius: 3px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            color: #000;
        }
        
        .language-selector {
            display: flex;
            gap: 15px;
        }
        
        .selector {
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }
        
        .selector::after {
            content: "";
            display: inline-block;
            width: 6px;
            height: 6px;
            border-right: 1px solid #aaa;
            border-bottom: 1px solid #aaa;
            transform: rotate(45deg);
            margin-top: -3px;
        }

        @media (max-width: 992px) {
            .product-grid {
                grid-template-columns: repeat(3, 1fr);
            }
            
            .category-tabs {
                flex-wrap: wrap;
            }
        }
        
        @media (max-width: 768px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .footer-top {
                flex-direction: column;
                gap: 30px;
            }
            
            .footer-links {
                flex-wrap: wrap;
                gap: 30px;
            }
        }
        
        @media (max-width: 576px) {
            .nav-menu {
                display: none;
            }
            
            .product-grid {
                grid-template-columns: 1fr;
            }
            
            .filter-bar {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">Stilo</div>
            <nav class="nav-menu">
                <a href="{{ route('home') }}">Home</a>
                <a href="index.html">Shop</a>
                <a href="products.html" class="active">Products</a>
                <a href="#">Pages</a>
                <a href="#">Blog</a>
                <a href="#">Elements</a>
            </nav>
            <div class="header-icons">
                <div class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
                <div class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                    <span class="icon-badge">0</span>
                </div>
                <div class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                    <span class="icon-badge">0</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Banner -->
    <section class="page-banner">
        <div class="container">
            <h1 class="page-title">Products</h1>
            <div class="breadcrumb">
                <a href="index.html">Home</a>
                <span>/</span>
                <span>Products</span>
            </div>
        </div>
    </section>

    <!-- Products Content -->
    <section class="products-content">
        <div class="container">
            <!-- Category Tabs -->
            <div class="category-tabs">
                <div class="category-tab active">All Products</div>
                <div class="category-tab">Clothing</div>
                <div class="category-tab">Accessories</div>
                <div class="category-tab">Footwear</div>
                <div class="category-tab">Outerwear</div>
                <div class="category-tab">New Arrivals</div>
            </div>

            <!-- Featured Products Section -->
            <div class="featured-section">
                <h2 class="section-title">Featured Products</h2>
                
                <!-- Filter Bar -->
                <div class="filter-bar">
                    <div class="filters">
                        <div class="filter-item">
                            <span>Filter by</span>
                        </div>
                        <div class="filter-item" id="color-filter-toggle">
                            <span>Color</span>
                            <!-- Color Filter Popup -->
                            <div class="color-filter" id="color-filter-popup">
                                <h3>Colors</h3>
                                <div class="color-options">
                                    <div class="color-option">
                                        <span class="color-dot blue"></span>
                                        <span>Blue</span>
                                    </div>
                                    <div class="color-option">
                                        <span class="color-dot grey"></span>
                                        <span>Grey</span>
                                    </div>
                                    <div class="color-option">
                                        <span class="color-dot red"></span>
                                        <span>Red</span>
                                    </div>
                                    <div class="color-option">
                                        <span class="color-dot yellow"></span>
                                        <span>Yellow</span>
                                    </div>
                                    <div class="color-option">
                                        <span class="color-dot green"></span>
                                        <span>Green</span>
                                    </div>
                                    <div class="color-option">
                                        <span class="color-dot purple"></span>
                                        <span>Purple</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item">
                            <span>Size</span>
                        </div>
                        <div class="filter-item">
                            <span>Price</span>
                        </div>
                    </div>
                    <div class="sorting">
                        <div class="filter-item">
                            <span>Default Sorting</span>
                        </div>
                    </div>
                </div>

                <!-- Product Grid -->
                <div class="product-grid">
                    <!-- Product 1 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="/placeholder.svg?height=300&width=250" alt="Premium Jacket">
                            <div class="product-badge sale">SALE</div>
                        </div>
                        <h3 class="product-title">Premium Jacket</h3>
                        <div class="product-price">
                            <span>$89.00</span>
                            <span class="original-price">$120.00</span>
                        </div>
                        <div class="product-colors">
                            <span class="product-color blue"></span>
                            <span class="product-color grey"></span>
                            <span class="product-color red"></span>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="/placeholder.svg?height=300&width=250" alt="Casual Sweater">
                            <div class="product-badge new">NEW</div>
                        </div>
                        <h3 class="product-title">Casual Sweater</h3>
                        <div class="product-price">
                            <span>$65.00</span>
                        </div>
                        <div class="product-colors">
                            <span class="product-color blue"></span>
                            <span class="product-color grey"></span>
                            <span class="product-color green"></span>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="/placeholder.svg?height=300&width=250" alt="Slim Fit Shirt">
                        </div>
                        <h3 class="product-title">Slim Fit Shirt</h3>
                        <div class="product-price">
                            <span>$45.00</span>
                        </div>
                        <div class="product-colors">
                            <span class="product-color blue"></span>
                            <span class="product-color white" style="border: 1px solid #ddd;"></span>
                            <span class="product-color red"></span>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="/placeholder.svg?height=300&width=250" alt="Winter Coat">
                            <div class="product-badge">POPULAR</div>
                        </div>
                        <h3 class="product-title">Winter Coat</h3>
                        <div class="product-price">
                            <span>$135.00</span>
                        </div>
                        <div class="product-colors">
                            <span class="product-color grey"></span>
                            <span class="product-color blue"></span>
                            <span class="product-color red"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- New Arrivals Section -->
            <div class="new-arrivals-section">
                <h2 class="section-title">New Arrivals</h2>
                
                <!-- Product Grid -->
                <div class="product-grid">
                    <!-- Product 1 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="/placeholder.svg?height=300&width=250" alt="Designer Hoodie">
                            <div class="product-badge new">NEW</div>
                        </div>
                        <h3 class="product-title">Designer Hoodie</h3>
                        <div class="product-price">
                            <span>$75.00</span>
                        </div>
                        <div class="product-colors">
                            <span class="product-color blue"></span>
                            <span class="product-color grey"></span>
                            <span class="product-color purple"></span>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="/placeholder.svg?height=300&width=250" alt="Casual Pants">
                            <div class="product-badge new">NEW</div>
                        </div>
                        <h3 class="product-title">Casual Pants</h3>
                        <div class="product-price">
                            <span>$55.00</span>
                        </div>
                        <div class="product-colors">
                            <span class="product-color blue"></span>
                            <span class="product-color grey"></span>
                            <span class="product-color black" style="background-color: #000;"></span>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="/placeholder.svg?height=300&width=250" alt="Summer T-Shirt">
                            <div class="product-badge new">NEW</div>
                        </div>
                        <h3 class="product-title">Summer T-Shirt</h3>
                        <div class="product-price">
                            <span>$29.00</span>
                        </div>
                        <div class="product-colors">
                            <span class="product-color white" style="border: 1px solid #ddd;"></span>
                            <span class="product-color blue"></span>
                            <span class="product-color red"></span>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="/placeholder.svg?height=300&width=250" alt="Denim Jacket">
                            <div class="product-badge new">NEW</div>
                        </div>
                        <h3 class="product-title">Denim Jacket</h3>
                        <div class="product-price">
                            <span>$85.00</span>
                        </div>
                        <div class="product-colors">
                            <span class="product-color blue"></span>
                            <span class="product-color grey"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Best Sellers Section -->
            <div class="best-sellers-section">
                <h2 class="section-title">Best Sellers</h2>
                
                <!-- Product Grid -->
                <div class="product-grid">
                    <!-- Product 1 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="/placeholder.svg?height=300&width=250" alt="Classic Blazer">
                            <div class="product-badge">BEST SELLER</div>
                        </div>
                        <h3 class="product-title">Classic Blazer</h3>
                        <div class="product-price">
                            <span>$120.00</span>
                        </div>
                        <div class="product-colors">
                            <span class="product-color black" style="background-color: #000;"></span>
                            <span class="product-color grey"></span>
                            <span class="product-color blue"></span>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="/placeholder.svg?height=300&width=250" alt="Wool Sweater">
                            <div class="product-badge">BEST SELLER</div>
                        </div>
                        <h3 class="product-title">Wool Sweater</h3>
                        <div class="product-price">
                            <span>$79.00</span>
                        </div>
                        <div class="product-colors">
                            <span class="product-color red"></span>
                            <span class="product-color grey"></span>
                            <span class="product-color blue"></span>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="/placeholder.svg?height=300&width=250" alt="Leather Jacket">
                            <div class="product-badge">BEST SELLER</div>
                        </div>
                        <h3 class="product-title">Leather Jacket</h3>
                        <div class="product-price">
                            <span>$199.00</span>
                        </div>
                        <div class="product-colors">
                            <span class="product-color black" style="background-color: #000;"></span>
                            <span class="product-color brown" style="background-color: #8B4513;"></span>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="/placeholder.svg?height=300&width=250" alt="Casual Shirt">
                            <div class="product-badge">BEST SELLER</div>
                        </div>
                        <h3 class="product-title">Casual Shirt</h3>
                        <div class="product-price">
                            <span>$49.00</span>
                        </div>
                        <div class="product-colors">
                            <span class="product-color blue"></span>
                            <span class="product-color white" style="border: 1px solid #ddd;"></span>
                            <span class="product-color green"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <div class="page-item active">1</div>
                <div class="page-item">2</div>
                <div class="page-item">3</div>
                <div class="page-item">4</div>
                <div class="page-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-top">
                <div class="footer-newsletter">
                    <h3>Receive an exclusive <span class="discount-highlight">20%</span> discount code wh