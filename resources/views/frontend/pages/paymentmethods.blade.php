@extends('frontend.layouts.master')

@section('title', 'LuxAroma || Payment Methods')

@section('main-content')

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Beranda<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="{{route('paymentmethods')}}">Payment Methods</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Payment Methods -->
<section class="payment-methods section">
    <div class="container" style="background: #f9f9f9; padding: 40px 20px;">
        <div class="row">
            <div class="col-12">
                <div class="about-content" style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                    <h3 style="font-size: 28px; font-weight: bold; margin-bottom: 20px; text-align: center; color: #333;">
                        LuxAroma Payment Methods
                    </h3>

                    <!-- 1 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        1. Introduction</h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        At LuxAroma, we offer various payment methods to ensure a smooth and secure shopping experience. Please find the details of our payment options below.
                    </p>

                    <!-- 2 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        2. Available Payment Methods</h4>
                    <ul style="padding-left: 40px; list-style: disc; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        <li><strong>Cash on Delivery (COD):</strong> For select areas, we offer a COD option. Please check availability during checkout.</li>
                    </ul>

                    <!-- 3 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        3. Payment Security
                    </h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        LuxAroma prioritizes your payment security. All online transactions are encrypted using SSL technology to protect your personal and financial information.
                    </p>

                    <!-- 4 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.layouts.newsletter')
@endsection