@extends('frontend.layouts.master')

@section('title', 'LuxAroma || Privacy Policy')

@section('main-content')

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Beranda<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="{{route('privacypolicy')}}">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Privacy Policy -->
<section class="privacypolicy section">
    <div class="container" style="background: #f9f9f9; padding: 40px 20px;">
        <div class="row">
            <div class="col-12">
                <div class="about-content" style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                    <h3 style="font-size: 28px; font-weight: bold; margin-bottom: 20px; text-align: center; color: #333;">
                        LuxAroma Privacy Policy
                    </h3>
                    <!-- 1 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        1. Introduction</h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        Welcome to LuxAroma's e-commerce website ("we" or "LuxAroma"), a platform providing perfume sales services. We are fully responsible for your privacy and are committed to protecting your personal data in accordance with applicable laws and regulations on personal data protection ("Privacy Laws").
                        <br>
                        This Privacy Policy ("Privacy Policy" or "Policy") aims to help you understand how we collect, use, disclose, and/or process your personal data when you use our services. By accessing our website and using our services, you agree to the practices outlined in this Privacy Policy. If you do not agree, please refrain from using our services.
                        <br>
                    </p>
                    
                    <!-- 2 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        2. Collection of Personal Data</h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        2.1 We may collect your personal data in various situations, including but not limited to:
                    </p>
                    <ul style="padding-left: 40px; list-style: disc; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        <li>When you register an account on the LuxAroma website.</li>
                        <li>When you place an order for perfume products through our platform.</li>
                        <li>When you contact our customer service via phone, email, or social media.</li>
                        <li>When you participate in surveys, provide product reviews, or join our promotions.</li>
                        <li>When you interact with us through location-based features, cookies, or similar technologies on our website.</li>
                    </ul>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        2.2 The personal data we collect may include:
                    </p>
                    <ul style="padding-left: 40px; list-style: disc; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        <li>Name, email address, phone number, and other contact information.</li>
                        <li>Payment information, including credit card or bank account details.</li>
                        <li>Shipping and billing addresses.</li>
                        <li>Purchase history and product preferences.</li>
                        <li>Information about the devices you use to access our website (e.g., IP address, operating system, and browser type).</li>
                    </ul>

                    <!-- 3 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        3. Use of Personal Data
                    </h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        We may collect your personal data in various situations, including but not limited to:
                    </p>
                    <ul style="padding-left: 40px; list-style: disc; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        <li>Processing and managing your orders.</li>
                        <li>Contacting you regarding our services or products, including important notifications about your account.</li>
                        <li>Providing product recommendations tailored to your preferences.</li>
                        <li>Improving user experience through data analysis and customer surveys.</li>
                        <li>Protecting the rights, property, or safety of LuxAroma, our users, or third parties.</li>
                    </ul>

                    <!-- 4 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        4. Security of Personal Data
                    </h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        We use appropriate technical and organizational measures to protect your personal data from unauthorized access, use, or disclosure.
                        Please note that while we have implemented adequate security measures, no system is completely secure. Therefore, you are also responsible for maintaining the confidentiality of your account information.
                    </p>
                    
                    <!-- 5 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        5. Your Right Regarding Personal Data
                    </h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        You have the right to:
                    </p>
                    <ul style="padding-left: 40px; list-style: disc; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        <li>Request access to your personal data.</li>
                        <li>Update or correct inaccurate personal data.</li>
                        <li>Withdraw your consent for the collection or use of your personal data (however, this may affect the services we provide).</li>
                    </ul>

                    <!-- 6 -->
                    <h4 style="font-size: 1.3em; font-weight: bold; color: #333; margin-bottom: 10px;">
                        6. Contact Us
                    </h4>
                    <p style="padding-left: 20px; font-size: 1em; line-height: 1.8; color: #555; margin-bottom: 10px;">
                        6.1 If you have any questions or concerns regarding this Privacy Policy, please contact us at:
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
