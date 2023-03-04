@extends('master')
@section('styles')
    <style>
        #first {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            opacity: 0.5;
            background-color: #000;
            color: #fff;
            z-index: 1;
        }



        .load {
            height: 600px;
            width: 600px;
            background-image: url('https://3.bp.blogspot.com/-McqgscdbKQQ/Vq3jmL1geRI/AAAAAAAAAZU/uXtD1KfQ6pM/s200/loader%2B%25281%2529.gif');
            background-repeat: no-repeat;
            margin: 240px 723px;

        }

        .bi-plus-lg {
            display: none !important;
        }
    </style>
@endsection
@section('contents')
    <section id="slider" class="" style="background-image:url(front_asset/images/images.jpeg)">
        <div class="swiper-container no-slider animation slider-h-auto alt">

            <div class="swiper-wrapper">
            
                <!-- Item 1 -->
                <div class="swiper-slide slide-center">

                    <!-- Media -->
                    <div class="parallax-y-bg" style="background-image:url(front_asset/images/images.jpeg)"></div>

                    <div class="slide-content row">
                        <!-- Grid column -->
                        <div class="col-md-12 mb-4">
                            
                        </div>
                        <!-- Grid column -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
