<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('website/templatemo-noir-fashion.css') }}">

    
<!-- 
TemplateMo 599 Noir Fashion
https://templatemo.com/tm-599-noir-fashion
-->
</head>
<body>
    <nav id="navbar">
        <div class="nav-container">
            <a href="/" class="logo-link">
                <svg class="logo-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="logoGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="40%" style="stop-color:#fff;stop-opacity:1" />
                            <stop offset="60%" style="stop-color:#011205;stop-opacity:1" />

                        </linearGradient>
                    </defs>
                    <polygon points="50,10 20,50 50,90 80,50" fill="none" stroke="url(#logoGrad)" stroke-width="3"/>
                    <circle cx="50" cy="50" r="5" fill="url(#logoGrad)"/>
                </svg>
                <span class="logo-text">Grace Collections </span>
            </a>
            <ul class="nav-links">
                <li><a href="/" class="nav-link active">Home</a></li>
                <li><a href="/about-us" class="nav-link">About Us</a></li>
                <li><a href="/shop" class="nav-link">Shop</a></li>
                <li><a href="/contact-us" class="nav-link">Contact Us</a></li>
            </ul>
            <div class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <div class="mobile-nav" id="mobileNav">
        <ul class="mobile-nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#collections">Collections</a></li>
            <li><a href="#featured">Featured</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>

@yield("content")





      <footer>
        <div class="footer-content">
            <div class="footer-brand">
                <h3>GRACE COLLECTIONS</h3>
                <p>Elevate every moment with opulent sustainability, daring grace, and the finest materials—where luxury meets conscious innovation in every meticulously crafted piece.</p>
                <div class="social-links">
<a href="https://www.linkedin.com/in/grace-nzambi-0a866820a/" class="social-link" target="_blank">Li</a> 
                   <a href="https://www.instagram.com/muthengigrace/?hl=en" class="social-link">Ig</a>
             
                </div>
            </div>
            <div class="footer-column">
                <h4>Shop</h4>
                <ul>
                    <li><a href="#">New Arrivals</a></li>
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Men</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Sale</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Support</h4>
                <ul>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Size Guide</a></li>
                    <li><a href="#">Shipping Info</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">Sustainability</a></li>
                    <li><a href="#">Terms</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy; 2025 Grace Collections. All rights reserved</p>
            <div class="payment-methods">
                <div class="payment-icon">VISA</div>
                <div class="payment-icon">MPESA</div>               
                <div class="payment-icon">CASH</div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('website/templatemo-noir-scripts.js') }}"></script>
</body>
</html>