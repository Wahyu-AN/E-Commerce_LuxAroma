@extends('frontend.layouts.master')

@section('title','LuxAroma || FAQ')

@section('main-content')

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Beranda<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="{{route('faq')}}">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- FAQ Section -->
<section class="faq section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="faq-content">
                    <h3>Pertanyaan yang Sering Diajukan</h3>
                    <div class="accordion" id="faqAccordion">

                        <!-- Question 1 -->
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Apa saja bahan yang digunakan dalam parfum LuxAroma?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                                <div class="card-body">
                                    Parfum LuxAroma dibuat menggunakan minyak esensial berkualitas tinggi, ekstrak alami, dan bahan sintetis yang aman untuk menciptakan aroma yang unik dan tahan lama.
                                </div>
                            </div>
                        </div>

                        <!-- Question 2 -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Bagaimana cara menyimpan parfum dengan benar?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                                <div class="card-body">
                                    Simpan parfum Anda di tempat yang sejuk dan kering, jauh dari sinar matahari langsung dan panas untuk menjaga kualitas dan ketahanannya.
                                </div>
                            </div>
                        </div>

                        <!-- Question 3 -->
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Apakah parfum LuxAroma diuji pada hewan?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                                <div class="card-body">
                                    Tidak, LuxAroma berkomitmen pada praktik bebas kekejaman dan tidak menguji produk apa pun pada hewan.
                                </div>
                            </div>
                        </div>

                        <!-- Question 4 -->
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Berapa lama aroma parfum dapat bertahan?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqAccordion">
                                <div class="card-body">
                                    Ketahanan parfum kami tergantung pada jenis kulit individu, tetapi sebagian besar parfum LuxAroma bertahan antara 6 hingga 12 jam.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End FAQ Section -->

@include('frontend.layouts.newsletter')
@endsection
