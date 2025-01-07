@extends('frontend.layouts.master')

@section('title', 'LuxAroma || Term & Conditions')

@section('main-content')

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Beranda<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="{{route('termconditions')}}">Term & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Term & Conditions -->
<section class="privacypolicy section">
    <div class="container" style="background: #f9f9f9; padding: 40px 20px;">
        <div class="row">
            <div class="col-12">
                <div class="about-content" style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                    <h3 style="font-size: 28px; font-weight: bold; margin-bottom: 20px; text-align: center; color: #333;">
                        LuxAroma Term & Conditions
                    </h3>
                    <!-- 1 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        1. Account Registration</h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        Users are required to create an account to place orders.
                        <br>
                        You are responsible for maintaining the confidentiality of your account credentials and for all activities conducted under your account.
                        <br>
                        LuxAroma reserves the right to suspend or terminate accounts in case of unauthorized or suspicious activities.
                    </p>
                    
                    <!-- 2 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        2. Orders and Payments</h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        All orders placed on the Platform are subject to availability and acceptance by LuxAroma.
                        <br>
                        Prices listed on the Platform include applicable taxes but exclude shipping fees, which will be calculated during checkout.
                        <br>
                        Prices listed on the Platform include applicable taxes but exclude shipping fees, which will be calculated during checkout.
                        <br>
                        LuxAroma reserves the right to cancel any order for reasons including, but not limited to, fraud detection or stock unavailability.
                        <br>
                    </p>

                    <!-- 3 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        3. Shipping and Delivery
                    </h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        Shipping times may vary depending on your location. Estimated delivery dates will be provided during checkout.
                        <br>
                        LuxAroma is not responsible for delays caused by courier services or unforeseen circumstances.
                        <br>
                        Any shipping fees are non-refundable unless otherwise stated.
                        <br>
                    </p>
            
                    <!-- 4 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        4. Returns and Refunds
                    </h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        Returns are accepted for defective or incorrect items only. The product must be returned within 7 days of delivery.
                        <br>
                        Refunds will be processed after the returned product passes quality inspection.
                        <br>
                        LuxAroma reserves the right to reject returns that do not meet our conditions.
                    </p>
                    
                    <!-- 5 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        5. Contact Us
                    </h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        If you have any questions or concerns regarding this Privacy Policy, please contact us at:
                    </p>
                    <ul style="padding-left: 40px; list-style: disc; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        <li>Email: support@luxaroma.com</li>
                        <li>Phone: +62-123-456-7890</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>


@include('frontend.layouts.newsletter')
@endsection
