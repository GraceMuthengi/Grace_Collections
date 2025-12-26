@extends("layouts.website")
@section("title", "Grace Collections - Shop")



@section("content")


    <section class="collections" id="collections">
        <div class="section-header">
            <h2 class="section-title">Crafted Collections</h2>
            <p class="section-subtitle">Discover our mastered pieces</p>
        </div>
        
        <div class="category-tabs">
            <button class="tab-btn active" data-category="all">All</button>
            <button class="tab-btn" data-category="women">Women</button>
            <button class="tab-btn" data-category="men">Men</button>
            <button class="tab-btn" data-category="accessories">Accessories</button>
            <button class="tab-btn" data-category="limited">Limited Edition</button>
            <button class="tab-btn" data-category="unisex">Unisex</button>

        </div>

        <div class="grid" id="collectionsGrid">
            <div class="collection-card" data-category="women">
                <div class="collection-thumbnail">
                    <img src="{{ asset('website/images/urban-edge.avif') }}" alt="Urban Edge Women's Collection">

                </div>
                <div class="card-content">
                    <span class="card-badge">New Arrival</span>
                    <h3 class="card-title">Summer Wear</h3>
                    <p class="card-subtitle">Ladies' Collection</p>
                    <p class="card-price">From ksh 3299</p>
                </div>
            </div>
            <div class="collection-card" data-category="limited">
                <div class="collection-thumbnail">
                    <img src="{{ asset('website/images/midnight-luxe.avif') }}" alt="Midnight Luxe Limited Edition">

                </div>
                <div class="card-content">
                    <span class="card-badge">Limited</span>
                    <h3 class="card-title">Beach Wear</h3>
                    <p class="card-subtitle">Exclusive Drop</p>
                    <p class="card-price">From ksh.899</p>
                </div>
            </div>
            <div class="collection-card" data-category="men">
                <div class="collection-thumbnail">
                    <img src="{{ asset('website/images/neo-classic.avif') }}" alt="Neo Classic Men's Essentials">
                </div>
                <div class="card-content">
                    <span class="card-badge">Bestseller</span>
                    <h3 class="card-title">Neo Classic</h3>
                    <p class="card-subtitle">Men's Essentials</p>
                    <p class="card-price">From ksh.3459</p>
                </div>
            </div>
            <div class="collection-card" data-category="accessories">
                <div class="collection-thumbnail">
                    <img src="{{ asset('website/images/accent-pieces.avif') }}" alt="Accent Pieces Accessories">
                </div>
                <div class="card-content">
                    <span class="card-badge">Trending</span>
                    <h3 class="card-title">Accent Pieces</h3>
                    <p class="card-subtitle">Accessories</p>
                    <p class="card-price">From ksh149</p>
                </div>
            </div>
            <div class="collection-card" data-category="women">
                <div class="collection-thumbnail">
                    <img src="{{ asset('website/images/spring-bloom.avif') }}" alt="Spring Bloom Women's Spring">
                </div>
                <div class="card-content">
                    <span class="card-badge">Pre-Order</span>
                    <h3 class="card-title">Spring Bloom</h3>
                    <p class="card-subtitle">Women's Spring</p>
                    <p class="card-price">From ksh.249</p>
                </div>
            </div>
              
            <div class="collection-card" data-category="men">
                <div class="collection-thumbnail">
                    <img src="{{ asset('website/images/street-rebel.avif') }}" alt="Street Rebel Men's Streetwear">
                </div>
                <div class="card-content">
                    <span class="card-badge">Hot</span>
                    <h3 class="card-title">Street Rebel</h3>
                    <p class="card-subtitle">Men's Streetwear</p>
                    <p class="card-price">From ksh.199</p>
                </div>
            </div>
            <div class="collection-card" data-category="limited">
                <div class="collection-thumbnail">
                    <img src="{{ asset('website/images/avant-garde.avif') }}" alt="Avant Garde Art Meets Fashion">
                </div>
                <div class="card-content">
                    <span class="card-badge">Exclusive</span>
                    <h3 class="card-title">Avant Garde</h3>
                    <p class="card-subtitle">Art Meets Fashion</p>
                    <p class="card-price">From ksh.1,299</p>
                </div>
            </div>
            <div class="collection-card" data-category="accessories">
                <div class="collection-thumbnail">
                    <img src="{{ asset('website/images/minimal-chic.avif') }}" alt="Minimal Chic Timeless Accessories">
                </div>
                <div class="card-content">
                    <span class="card-badge">Essentials</span>
                    <h3 class="card-title">Minimal Chic</h3>
                    <p class="card-subtitle">Timeless Accessories</p>
                    <p class="card-price">From ksh8955</p>
                </div>
            </div>
                  <div class="collection-card" data-category="women">
                <div class="collection-thumbnail">
                    <img src="{{ asset('website/images/kimono.jpg') }}" alt="Urban Edge Women's Collection">

                </div>
                <div class="card-content">
                    <span class="card-badge">Latest Arrival</span>
                    <h3 class="card-title">Insulated chic</h3>
                    <p class="card-subtitle">Cozy couture</p>
                    <p class="card-price">From ksh 3,499</p>
                </div>
            </div>
               <div class="collection-card" data-category="men">
                <div class="collection-thumbnail">
                    <img src="{{ asset('website/images/khaki.jpg') }}" alt="Street Rebel Men's Streetwear">
                </div>
                <div class="card-content">
                    <span class="card-badge">All time wear</span>
                    <h3 class="card-title">Smart Casual</h3>
                    <p class="card-subtitle">Street Smart</p>
                    <p class="card-price">From ksh.1299</p>
                </div>
            </div>
             <div class="collection-card" data-category="accessories">
                <div class="collection-thumbnail">
                    <img src="{{ asset('website/images/specs.jpg') }}" alt="Accent Pieces Accessories">
                </div>
                <div class="card-content">
                    <span class="card-badge">Trending</span>
                    <h3 class="card-title">Accent Pieces</h3>
                    <p class="card-subtitle">Accessories</p>
                    <p class="card-price">From ksh1249</p>
                </div>
            </div>
             <div class="collection-card" data-category="unisex">
                <div class="collection-thumbnail">
                    <img src="{{ asset('website/images/sneakers.jpg') }}" alt="Sneakers Unisex Collection">
                </div>
                <div class="card-content">
                    <span class="card-badge">Trending</span>
                    <h3 class="card-title">Sneakers</h3>
                    <p class="card-subtitle">Unisex Collection</p>
                    <p class="card-price">From ksh1249</p>
                </div>
            </div>
        </div>
    </section>
    @endsection