@extends('layouts.index')

@section('content')
    <section class="main-caro-sec">
        <div id="carousel slide" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{ asset('/custom/images/22-1.jpg') }}" class="img-responsive" alt="Chania"
                         style="width:100%; height:95vh">
                </div>

                <div class="item">
                    <img src="{{ asset('/custom/images/online-banking-in-Ghana.jpg') }}" class="img-responsive"
                         alt="Chania" style="width:100%; height:95vh">
                </div>
                <div class="item">
                    <img src="{{ asset('/custom/images/article-4305-robo-advice-banking-platform-header.jpg') }}" class="img-responsive" alt="Flower"
                         style="width:100%; height:95vh">
                </div>
                <div class="item">
                    <img src="{{ asset('/custom/images/INDUSTRYFORUM-BANKING-FINANCE-AND-INSURANCE.jpg') }}" class="img-responsive" alt="Flower"
                         style="width:100%; height:95vh">
                </div>
                <div class="item">
                    <img src="{{ asset('/custom/images/4k-bank-worker-at-service-desk-taking-cash-deposit-from-a-customer_rez1oujhkl_thumbnail-full01.png') }}" class="img-responsive" alt="Flower"
                         style="width:100%; height:95vh">
                </div>
                <div class="item">
                    <img src="{{ asset('/custom/images/smart-banking-brochure.jpg') }}" class="img-responsive" alt="Flower"
                         style="width:100%; height:95vh">
                </div>
            </div>
        </div>
    </section>
@endsection