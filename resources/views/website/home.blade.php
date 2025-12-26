@extends("layouts.website")
@section("title", "Grace Collections - Home")



@section("content")




   <section class="hero" id="home">
        <div class="hero-bg"></div>
        <div class="hero-container">
            <div class="hero-left">
                <div class="hero-badge">Stylish Collection 2025</div>
                <h1 class="hero-title">
                    <span class="line"><span>Elevate</span></span>
                    <span class="line"><span>Your <span class="accent">Elegance</span></span></span>
                    <span class="line"><span>With Us</span></span>
                </h1>
                <p class="hero-description">
                   Explore our exquisite knitted collection where timeless style intertwines with unparalleled quality. Each piece weaves a narrative of superior craftsmanship, luxurious comfort, and enduring sophistication.
                </p>
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Exclusive Pieces</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">48H</span>
                        <span class="stat-label">Fast Delivery</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Sustainable</span>
                    </div>
                </div>
                <div class="cta-group">
                    <a href="#collections" class="cta-button primary">Explore Collection</a>
                    <a href="#featured" class="cta-button outline">Watch Runway</a>
                </div>
            </div>
            <div class="hero-right">
                <div class="hero-image-wrapper">
                    <div class="hero-carousel">
                        <div class="carousel-slide active">
                            <img src="{{ asset('website/images/necklace.jpg') }}" alt="Fashion Model 1">
                        </div>
                        <div class="carousel-slide">
                            <img src="{{ asset('website/images/kimono.jpg') }}" alt="Fashion Model 2">
                        </div>
                        <div class="carousel-slide">
                            <img src="{{ asset('website/images/sneakers.jpg') }}" alt="Fashion Model 3">
                        </div>
                        <div class="carousel-overlay"></div>
                        <div class="carousel-indicators">
                            <span class="indicator active" data-slide="0"></span>
                            <span class="indicator" data-slide="1"></span>
                            <span class="indicator" data-slide="2"></span>
                        </div>
                    </div>
                    <div class="floating-tags">
                        <div class="tag">Limited Edition</div>
                        <div class="tag">Handcrafted</div>
                        <div class="tag">Premium Quality</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <span></span>
        </div>
</section>

@endsection


