@extends('layouts.template')
@section('title', 'CateringApp')
@section('css')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
{{-- Tambahkan link CSS Swiper jika belum ada di layouts.template --}}
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<style>
    /* Tambahkan styling dasar untuk carousel */
    .hero {
        position: relative; /* Penting untuk posisi absolut carousel */
        overflow: hidden; /* Sembunyikan overflow */
    }

    .hero-carousel {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1; /* Pastikan di belakang konten hero */
    }

    .hero-carousel .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Pastikan gambar mengisi area slide */
        filter: brightness(60%); /* Beri sedikit kegelapan agar teks di atasnya terlihat */
    }

    .hero-content {
        position: relative;
        z-index: 1; /* Pastikan konten di atas carousel */
        color: white; /* Pastikan teks terlihat di atas background gelap */
        text-align: center;
        padding-top: 100px; /* Sesuaikan padding agar konten tidak terlalu ke atas */
        padding-bottom: 100px;
    }

    .hero-content h1,
    .hero-content p {
        color: white;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5); /* Tambahkan shadow untuk visibilitas */
    }

    /* Style untuk pagination dots (optional, bisa disesuaikan) */
    .hero-carousel .swiper-pagination-bullet {
        background-color: #fff;
        opacity: 0.8;
    }
    .hero-carousel .swiper-pagination-bullet-active {
        background-color: var(--primary-color, #007bff); /* Sesuaikan dengan warna primer Anda */
        opacity: 1;
    }
</style>
@endsection
@section('content')

<section class="hero">
    {{-- Carousel Gambar Makanan --}}
    <div class="swiper hero-carousel">
        <div class="swiper-wrapper">
            {{-- Ganti URL placeholder ini dengan URL gambar makanan Anda yang sebenarnya --}}
            <div class="swiper-slide"><img src="https://images.everydayhealth.com/images/diet-nutrition/what-is-a-vegan-diet-benefits-food-list-beginners-guide-alt-1440x810.jpg" alt="Delicious Food 1"></div>
            <div class="swiper-slide"><img src="https://images.everydayhealth.com/images/2025/vegan-diet-reduces-hot-flashes-menopausal-women-1440x810.jpg?sfvrsn=d9c61d94_3" alt="Delicious Food 2"></div>
            <div class="swiper-slide"><img src="https://oldspitalfieldsmarket.com/cms/2017/09/27255416747_8729410e78_o-1440x810.jpg" alt="Delicious Food 3"></div>
            {{-- Tambahkan slide lain dengan URL gambar yang berbeda --}}
        </div>
        <div class="swiper-pagination hero-pagination"></div>
    </div>

    <div class="container">
        <div class="hero-content">
            <h1>parabot</h1>
            <p class="slogan">Healthy Meals, Anytime, Anywhere</p>
            <p class="hero-text">Pusat Antar Rasa & Box Otomatis Terjadwal</p>
            <a href="/subscription" class="btn-primary">Start Your Plan</a>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <h2>Welcome to parabot</h2>
        <div class="about-content">
            <div class="about-text">
                <p>Pusat Antar Rasa & Box Otomatis Terjadwal</p>
                <p>What started as a small business has quickly grown into a nationwide sensation, delivering nutritious and delicious meals to doorsteps across Indonesia.</p>
                <p>Our mission is simple: make healthy eating accessible, convenient, and enjoyable for everyone.</p>
            </div>
            <div class="about-image">
                <img src="{{ asset('/img/sea.png')}}" alt="SEA Catering meals">
            </div>
        </div>
    </div>
</section>

<section class="features">
    <div class="container">
        <h2>Why Choose SEA Catering?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🥗</div>
                <h3>Customizable Meals</h3>
                <p>Tailor your meals to match your dietary preferences, allergies, and nutritional goals.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🚚</div>
                <h3>Nationwide Delivery</h3>
                <p>We deliver to major cities across Indonesia, bringing healthy meals right to your doorstep.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>Nutritional Information</h3>
                <p>Detailed nutritional breakdown for each meal to help you track your health goals.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔄</div>
                <h3>Flexible Subscriptions</h3>
                <p>Choose the frequency, days, and meal types that work best for your lifestyle.</p>
                </div>
            </div>
        </div>
</section>

<section class="plans-preview">
    <div class="container">
        <h2>Our Meal Plans</h2>
        <div class="plans-grid">
            <div class="plan-card">
                <h3>Diet Plan</h3>
                <p class="price">Rp30.000 per meal</p>
                <p>Calorie-controlled meals designed to support weight management goals.</p>
                <a href="menu.html" class="btn-secondary">Learn More</a>
            </div>
            <div class="plan-card featured">
                <div class="featured-tag">Most Popular</div>
                <h3>Protein Plan</h3>
                <p class="price">Rp40.000 per meal</p>
                <p>High-protein meals perfect for active lifestyles and muscle recovery.</p>
                <a href="menu.html" class="btn-secondary">Learn More</a>
            </div>
            <div class="plan-card">
                <h3>Royal Plan</h3>
                <p class="price">Rp60.000 per meal</p>
                <p>Premium gourmet meals with exotic ingredients and chef-inspired recipes.</p>
                <a href="menu.html" class="btn-secondary">Learn More</a>
            </div>
        </div>
    </div>
</section>
<section class="testimonials">
    <div class="container">
        <h2>What Our Customers Say</h2>
        <div class="testimonial-slider swiper">
            <div class="swiper-wrapper">
                @forelse($testimonials as $testimonial)
                    <div class="testimonial-card swiper-slide">
                        <div class="rating">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $testimonial->star)
                                    ★
                                @else
                                    ☆
                                @endif
                            @endfor
                        </div>
                        <p class="testimonial-text">"{{ $testimonial->review }}"</p>
                        <p class="customer-name">- {{ $testimonial->name }}</p>
                    </div>
                @empty
                    <div class="testimonial-card swiper-slide">
                        <div class="rating">★★★★★</div>
                        <p class="testimonial-text">"SEA Catering has transformed my busy workweeks. Healthy, delicious meals without the hassle of cooking!"</p>
                        <p class="customer-name">- Anita S.</p>
                    </div>
                    <div class="testimonial-card swiper-slide">
                        <div class="rating">★★★★★</div>
                        <p class="testimonial-text">"The variety of meals keeps things interesting, and the nutritional information helps me stay on track with my fitness goals."</p>
                        <p class="customer-name">- Budi W.</p>
                    </div>
                    <div class="testimonial-card swiper-slide">
                        <div class="rating">★★★★☆</div>
                        <p class="testimonial-text">"Great service and the meals are always fresh. I appreciate the flexibility to change my subscription when needed."</p>
                        <p class="customer-name">- Diana P.</p>
                    </div>
                @endforelse
            </div>
            <div class="swiper-pagination testimonial-dots"></div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <h2>Ready to Start Your Healthy Meal Journey?</h2>
        <p>Join thousands of satisfied customers across Indonesia and experience the convenience of healthy, delicious meals delivered to your door.</p>
        <a href="/subscription" class="btn-primary">Subscribe Now</a>
    </div>
</section>

@endsection
@section('javascript')
<script src="{{ asset('js/script.js') }}"></script>
{{-- Tambahkan Swiper JS jika belum ada di layouts.template --}}
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
// Initialize Swiper for testimonials
document.addEventListener("DOMContentLoaded", function() {
    const testimonialSwiper = new Swiper('.testimonial-slider', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        // Pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + ' dot"></span>';
            },
        },
        // Navigation arrows (optional)
        // navigation: {
        //   nextEl: '.swiper-button-next',
        //   prevEl: '.swiper-button-prev',
        // },
    });

    // Initialize Swiper for Hero Carousel
    const heroSwiper = new Swiper('.hero-carousel', {
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 7000, // Durasi lebih panjang untuk carousel hero
            disableOnInteraction: false,
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        pagination: {
            el: '.hero-pagination', // Pastikan menggunakan class pagination yang berbeda
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + ' dot"></span>';
            },
        },
        // Anda bisa menambahkan navigation arrows juga jika diinginkan
        // navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        // },
    });
});
</script>
@endsection