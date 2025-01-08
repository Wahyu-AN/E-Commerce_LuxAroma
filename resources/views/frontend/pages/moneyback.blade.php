@extends('frontend.layouts.master')

@section('title', 'LuxAroma || Money Back Guarantee')

@section('main-content')

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Beranda<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="{{route('moneyback')}}">Money Back Guarantee</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Money Back Guarantee -->
<section class="money-back section">
    <div class="container" style="background: #f9f9f9; padding: 40px 20px;">
        <div class="row">
            <div class="col-12">
                <div class="about-content" style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                    <h3 style="font-size: 28px; font-weight: bold; margin-bottom: 20px; text-align: center; color: #333;">
                        LuxAroma Money Back Guarantee
                    </h3>

                    <!-- 1 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        1. Introduction</h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        LuxAroma is committed to your satisfaction. If you are not fully satisfied with your purchase, our Money Back Guarantee policy ensures a straightforward return and refund process.
                    </p>

                    <!-- 2 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        2. Eligibility for Refund</h4>
                    <ul style="padding-left: 40px; list-style: disc; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        <li>Products must be returned within 14 days of delivery.</li>
                        <li>Items must be in their original condition, unopened, and unused.</li>
                        <li>Proof of purchase (order ID or receipt) is required.</li>
                    </ul>

                    <!-- 3 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        3. How to Request a Refund
                    </h4>
                    <ol style="padding-left: 40px; list-style: decimal; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        <li>Contact our customer service team with your order details and reason for return.</li>
                        <li>Ship the product back to our warehouse at the provided address.</li>
                        <li>Once received and verified, refunds will be processed within 5-7 business days.</li>
                    </ol>

                    <!-- 4 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        4. Exceptions</h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        Refunds are not applicable for products damaged due to misuse, clearance sale items, or personalized products.
                    </p>

                    <!-- 5 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        5. Contact Us</h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        If you have questions about our Money Back Guarantee, please contact us at:
                    </p>
                    <ul style="padding-left: 40px; list-style: none; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        <li><strong>Email:</strong> <a href="mailto:support@luxaroma.com">support@luxaroma.com</a></li>
                        <li><strong>Phone:</strong> +62-812-3456-7890</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.layouts.newsletter')
@endsection
