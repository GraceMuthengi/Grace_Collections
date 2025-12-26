@extends("layouts.website")
@section("title", "Grace Collections - About Us")



@section("content")



    <section class="featured" id="featured">
        <div class="featured-container">
            <div class="featured-hero">
                <div class="featured-content">
                    <span class="label">Crafted with love and passion </span>
                    <h2>The Art of Fashion</h2>
                    <p>Where heritage elegance fuses with visionary style. Grace Collections' artisan experts merge timeless traditions with bold, sustainable innovation to create pieces that defy eras and redefine luxury. Available with countrywide delivery across Kenya. Discover your signature grace today</p>
                    
                    <div class="feature-highlights">
                        <div class="highlight-item">
                            <div class="highlight-icon">👑</div>
                            <div class="highlight-title"> Quality</div>
                            <div class="highlight-desc">Only the finest materials and fabrics make it into our collections</div>
                        </div>
                        <div class="highlight-item">
                            <div class="highlight-icon">🌱</div>
                            <div class="highlight-title">Stylish</div>
                            <div class="highlight-desc">Elevate your style with our contemporary designs</div>
                        </div>
                        <div class="highlight-item">
                            <div class="highlight-icon">✨</div>
                            <div class="highlight-title">Knitted</div>
                            <div class="highlight-desc">Each piece is meticulously knitted by skilled artisans</div>
                        </div>
                    </div>

                    <a href="#collections" class="feature-cta">Grace your body with our collections</a>
                </div>
                
                <div class="featured-image-section">
                    <div class="featured-image-grid">
                        <div class="featured-img">
                            <img src="{{ asset('website/images/art-of-fashion-01.avif') }}" alt="Fashion Collection Showcase">
                        </div>
                        <div class="featured-img">
                            <img src="{{ asset('website/images/art-of-fashion-02.avif') }}" alt="Luxury Fashion Details">
                        </div>
                        <div class="featured-img">
                            <img src="{{ asset('website/images/art-of-fashion-03.avif') }}" alt="Artisan Craftsmanship">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="testimonials">
                <div class="testimonials-header">
                    <h3>Customers' Feedback</h3>
                    <p class="section-subtitle">Real stories from fashion lovers</p>
                </div>
                
                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">★★★★★</div>
                        <div class="testimonial-quote">
"Grace Collections has utterly redefined my style. The luxurious quality and exquisite craftsmanship are unparalleled. Each piece is a timeless masterpiece of sustainable elegance"                       </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">E</div>
                            <div class="author-info">
                                <h4>Elsa Kamau</h4>
                                <p>Fashion enthusiast</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <div class="testimonial-rating">★★★★★</div>
                        <div class="testimonial-quote">
"The stylish approach, seamlessly fused with bold luxury design and effortlessly chic silhouettes, is exactly what I was searching for in my wardrobe evolution.."                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">M</div>
                            <div class="author-info">
                                <h4>Mark Kinyajui</h4>
                                <p>Creative Director</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <div class="testimonial-rating">★★★★★</div>
                        <div class="testimonial-quote">
"I've been loyal for three years, and every new knitted line surpasses my wildest hopes. The impeccable tailoring, premium quality, and masterful knitted details remain flawless every time."                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">A</div>
                            <div class="author-info">
                                <h4>Hassan Ali</h4>
                                <p>Media</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection