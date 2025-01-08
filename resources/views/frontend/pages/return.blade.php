@extends('frontend.layouts.master')

@section('title', 'LuxAroma || Return Policy')

@section('main-content')

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Beranda<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="{{route('return')}}">Return Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Return Policy Section -->
<section class="return-policy section">
    <div class="container" style="background: #f9f9f9; padding: 40px 20px;">
        <div class="row">
            <div class="col-12">
                <div class="about-content" style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                    <h3 style="font-size: 28px; font-weight: bold; margin-bottom: 20px; text-align: center; color: #333;">
                        LuxAroma Return Policy
                    </h3>

                    <!-- Return Policy Details -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        1. Overview</h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        At LuxAroma, we prioritize customer satisfaction and offer a transparent and hassle-free return policy. Below are the guidelines for returning items:
                    </p>

                    <!-- How to Return -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        2. How to Return</h4>
                    <ol style="padding-left: 40px; list-style: decimal; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        <li>Contact our customer service team with your order details and reason for the return.</li>
                        <li>Ensure the item is securely packed to prevent any damage during shipping.</li>
                        <li>Ship the item to our return address provided by our support team.</li>
                        <li>Once we receive and verify the returned item, a refund or exchange will be processed within 5-7 business days.</li>
                    </ol>

                    <!-- Return Eligibility -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        3. Return Eligibility</h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        To be eligible for a return, please ensure the following conditions are met:
                    </p>
                    <ul style="padding-left: 40px; list-style: disc; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        <li>The item is unused, unopened, and in its original packaging.</li>
                        <li>A return request is submitted within 14 days of receiving the product.</li>
                        <li>Proof of purchase (order ID or receipt) is provided.</li>
                    </ul>

                    <!-- Exceptions -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        4. Exceptions</h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        Returns or refunds will not be accepted under the following conditions:
                    </p>
                    <ul style="padding-left: 40px; list-style: disc; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        <li>Items damaged due to misuse or improper handling by the customer.</li>
                        <li>Items purchased during clearance sales or marked as non-returnable.</li>
                        <li>Personalized or custom-made items.</li>
                    </ul>

                    <!-- Contact Information -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        5. Contact Us</h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        If you have any questions or need further assistance with your return, please contact our support team via email at <strong>support@luxaroma.com</strong> or call us at <strong>(+62) 123-456-7890</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.layouts.newsletter')
@endsection
