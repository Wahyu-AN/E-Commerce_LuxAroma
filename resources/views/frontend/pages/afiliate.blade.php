@extends('frontend.layouts.master')

@section('main-content')
<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="javascript:void(0);">Afiliate</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<section class="privacypolicy section">
    <div class="container" style="background: #f9f9f9; padding: 40px 20px;">
        <div class="row">
            <div class="col-12">
                <div class="about-content" style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                    <h3 style="font-size: 28px; font-weight: bold; margin-bottom: 20px; text-align: center; color: #333;">
                        LuxAroma Afiliate
                    </h3>
                    
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                       <center>
                       The affiliate program at "LuxAroma" offers incentives to third parties, such as influencers or active users, 
                        to promote LuxAroma products using referral links or special codes. Each successful transaction made through these links 
                        or codes generates a commission for the affiliate.
                       </center>
                        <br>
                    </p>

                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        Affiliate Process Flow</h4>
                    <!-- 1 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        1. Registration</h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        Sign up on the LuxAroma platform, fill out personal information, and complete the verification process via email.
                        <br>
                    </p>

                    <!-- 2 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        2. Access Dashboard</h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        Log in to the dashboard to obtain a unique referral link or code.
                        <br>
                    </p>

                    <!-- 3 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        3. Promotion</h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        Affiliates promote products using the link or code across various online platforms, such as social media, blogs, or personal websites.
                        <br>
                    </p>

                    <!-- 4 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        4. Commission Tracking and Calculation</h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                    Commissions are calculated based on the number of products sold:
                        <br>
                    </p>
                    <ul style="padding-left: 40px; list-style: disc; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        <li>3% for 1–20 products.</li>
                        <li>5% for 21–60 products.</li>
                        <li>7% for more than 60 products.</li>
                    </ul>

                    <!-- 5 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        5. Commission Payment</h4>
                    <ul style="padding-left: 40px; list-style: disc; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        <li>Commissions accumulate in the affiliate account until reaching the minimum payout threshold (e.g., Rp100,000).</li>
                        <li>Payments are made periodically, such as at the end of each month.</li>
                        <li>Affiliates receive a notification once the payment is successfully processed.</li>
                    </ul>
                    <div class="button">
								<a href="#" class="btn primary">Join Afiliate</a>
							</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modals error -->
<div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="text-warning">Sorry!</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-warning">Something went wrong.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .modal-dialog .modal-content .modal-header {
        position: initial;
        padding: 10px 20px;
        border-bottom: 1px solid #e9ecef;
    }

    .modal-dialog .modal-content .modal-body {
        height: 100px;
        padding: 10px 20px;
    }

    .modal-dialog .modal-content {
        width: 50%;
        border-radius: 0;
        margin: auto;
    }
</style>
@endpush
@push('scripts')
<script src="{{ asset('frontend/js/jquery.form.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/js/contact.js') }}"></script>
@endpush