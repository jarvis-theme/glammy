<!-- HOME -->
<section id="home" class="padbot0 margbot40">
        
    <!-- TOP SLIDER -->
    <div class="flexslider top_slider sale_page">
        <ul class="slides">
            @foreach ($slideshow as $val)
            <li class="slide1" style="background-image:{{URL::to(getPrefixDomain().'/galeri/'.$val->gambar)}}">
                <!-- CONTAINER -->
                <div class="container" style="position: absolute;width: 75.5%;height: 90.2%;margin-left: 6%;">
                    <div class="sale_caption1">
                        @if($val->text)
                        <div class="flex-caption">
                            <p class="title2 captionDelay2 FromTop">{{ $val->text }}</p>
                        </div>
                        @endif
                        <p class="title1 captionDelay2 FromTop">DRESS DAY</p>
                        <p class="title2 FromTop">last week of sales</p>
                        <a class="flex_btn" href="javascript:void(0);" >Buy now and get 25% discount</a>
                    </div>
                </div><!-- //CONTAINER -->
                <img src="{{URL::to(getPrefixDomain().'/galeri/'.$val->gambar)}}" />
            </li>
            @endforeach
            
            <!-- <li class="slide2">]
                <div class="container">
                    <div class="sale_caption1">
                        <p class="title1 captionDelay2 FromTop">DRESS DAY</p>
                        <p class="title2 FromTop">last week of sales</p>
                        <a class="flex_btn" href="javascript:void(0);" >Buy now and get 25% discount</a>
                    </div>
                </div>
            </li> -->
        </ul>
    </div><!-- //TOP SLIDER -->
</section><!-- //HOME -->
<!-- BANNER SECTION -->
<section class="banner_section">
    
    <!-- CONTAINER -->
    <div class="container">
    
        <!-- ROW -->
        <div class="row">
            <div class="top_sale_banners center">
                @foreach(getBanner(1) as $banner)
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-ss-12"><a class="banner nobord margbot30" href="{{URL::to($banner->url)}}" ><img src="{{URL::to(getPrefixDomain().'/galeri/'.$banner->gambar)}}" alt="{{$banner->gambar}}" /></a></div>
                @endforeach
                <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-ss-12"><a class="banner nobord margbot30" href="javascript:void(0);" ><img src="images/tovar/banner18.jpg" alt="" /></a></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-ss-12"><a class="banner nobord margbot30" href="javascript:void(0);" ><img src="images/tovar/banner19.jpg" alt="" /></a></div> -->
            </div>
        </div><!-- //ROW -->
    </div><!-- //CONTAINER -->
</section><!-- //BANNER SECTION 