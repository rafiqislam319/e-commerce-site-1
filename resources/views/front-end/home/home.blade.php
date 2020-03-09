@extends('front-end.master')

@section('title')
    Home
@endsection

@section('body')
    <div class="banner-w3">
        <div class="demo-1">
            <div id="example1" class="core-slider core-slider__carousel example_1">
                <div class="core-slider_viewport">
                    <div class="core-slider_list">
                        <div class="core-slider_item">
                            <img src="{{asset('/')}}/front-end/images/b1.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="core-slider_item">
                            <img src="{{asset('/')}}/front-end/images/b2.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="core-slider_item">
                            <img src="{{asset('/')}}/front-end/images/b3.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="core-slider_item">
                            <img src="{{asset('/')}}/front-end/images/b4.jpg" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>
                <div class="core-slider_nav">
                    <div class="core-slider_arrow core-slider_arrow__right"></div>
                    <div class="core-slider_arrow core-slider_arrow__left"></div>
                </div>
                <div class="core-slider_control-nav"></div>
            </div>
        </div>
        <link href="{{asset('/')}}/front-end/css/coreSlider.css" rel="stylesheet" type="text/css">
        <script src="{{asset('/')}}/front-end/js/coreSlider.js"></script>
        <script>
            $('#example1').coreSlider({
                pauseOnHover: false,
                interval: 3000,
                controlNavEnabled: true
            });

        </script>

    </div>
    <!--banner-->
    <!--content-->
    <div class="content">
        <!--banner-bottom-->

        <!--banner-bottom-->
        <!--new-arrivals-->
        <div class="new-arrivals-w3agile">
            <div class="container">
                <h2 class="tittle">New Arrivals</h2>
                <div class="arrivals-grids">
                    @foreach($newProducts as $newProduct)
                    <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                        <div class="grid-arr">
                            <div  class="grid-arrival">
                                <figure>
                                    <a href="{{ route('product-details',['id'=>$newProduct->id, 'name'=>$newProduct->product_name]) }}" class="new-gri">
                                        <div class="grid-img">
                                            <img  src="{{asset($newProduct->product_image)}}" class="img-responsive" alt="">
                                        </div>
                                        <div class="grid-img">
                                            <img  src="{{asset($newProduct->product_image)}}" class="img-responsive"  alt="">
                                        </div>
                                    </a>
                                </figure>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="women">
                                <h6><a href="single.html">{{ ($newProduct->product_name) }}</a></h6>
                                <p ><em class="item_price">TK. {{ ($newProduct->product_price) }}</em></p>
                                <a href="{{ route('product-details',['id'=>$newProduct->id, 'name'=>$newProduct->product_name]) }}" data-text="Add To Cart" class="my-cart-b item_add">See Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach



                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--new-arrivals-->
        <!--accessories-->
        <div class="accessories-w3l">
            <div class="container">
                <h3 class="tittle">20% Discount on</h3>
                <span>TRENDING DESIGNS</span>
                <div class="button">
                    <a href="#" class="button1"> Shop Now</a>
                    <a href="#" class="button1"> Quick View</a>
                </div>
            </div>
        </div>
        <br>
        <br>
        <!--accessories-->
        <!--Products-->

        <!--Products-->


        <!--new-arrivals-->
    </div>
@endsection


















