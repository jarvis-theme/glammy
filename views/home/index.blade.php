<!-- TOVAR SECTION -->
<section class="tovar_section">
    
    <!-- CONTAINER -->
    <div class="container">
        <h2>Featured products</h2>
        <!-- ROW -->
        <div class="row">
            
            <!-- TOVAR WRAPPER -->
            <div class="tovar_wrapper" data-appear-top-offset='-100' data-animated='fadeInUp'>
                
                <!-- BANNER -->
                <!-- <div class="col-lg-3 col-md-3 col-xs-6 col-ss-12">
                    <a class="banner type3 margbot40" href="javascript:void(0);" ><img src="images/tovar/banner3.jpg" alt="" /></a>
                </div> --><!-- //BANNER -->
                
                <!-- <div class="respond_clear_768"></div> -->
                
                <!-- TOVAR6 -->
                @foreach($produk as $key=>$myproduk)
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-ss-12 padbot40">
                    <div class="tovar_item {{is_terlaris($myproduk) ? 'tovar_sale':''}} {{is_outstok($myproduk) ? 'tovar_stok':''}}" style="height: 352px;">
                        <div class="tovar_img">
                            <div class="tovar_img_wrapper">
                                <img class="img" src="{{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}" alt="{{$myproduk->nama}}" />
                                <img class="img_h" src="{{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar2)}}" alt="{{$myproduk->nama}}" />
                            </div>
                            <div class="tovar_item_btns">
                                <div class=""><a class="tovar_view" href="{{slugProduk($myproduk)}}" >view</a></div>
                            </div>
                        </div>
                        <div class="tovar_description clearfix">
                            <a class="tovar_title" href="{{slugProduk($myproduk)}}" >{{$myproduk->nama}}</a>
                            <span class="tovar_price">{{jadiRupiah($myproduk->hargaJual,$matauang)}}</span>
                        </div>
                    </div>
                </div>
                @endforeach<!-- //TOVAR6 -->

            </div><!-- //TOVAR WRAPPER -->
        </div><!-- //ROW -->
    </div>

</section>

<!-- BANNER SECTION -->
<section class="banner_section">
    
    <!-- CONTAINER -->
    <div class="container">
        <!-- BANNER -->
        @foreach(getBanner(2) as $banner)
        <a class="banner type4 margbot50" href="{{URL::to($banner->url)}}" ><img style="width: 100%;" src="{{URL::to(getPrefixDomain().'/galeri/'.$banner->gambar)}}" alt="$banner->gambar" /></a>
        @endforeach
        <!-- //BANNER -->
    </div><!-- //CONTAINER -->
</section><!-- //BANNER SECTION -->

<!-- NEW ARRIVALS -->
<section class="new_arrivals padbot50">
    
    <!-- CONTAINER -->
    <div class="container">
        <h2>NEW ARRIVALS</h2>
        
        <!-- JCAROUSEL -->
        <div class="jcarousel-wrapper">
            
            <!-- NAVIGATION -->
            <div class="jCarousel_pagination">
                <a href="javascript:void(0);" class="jcarousel-control-prev" ><i class="fa fa-angle-left"></i></a>
                <a href="javascript:void(0);" class="jcarousel-control-next" ><i class="fa fa-angle-right"></i></a>
            </div><!-- //NAVIGATION -->
            
            <div class="jcarousel" data-appear-top-offset='-100' data-animated='fadeInUp'>
                <ul>
                    @foreach($newproduk as $key=>$myproduk)
                    <li>
                        <!-- TOVAR (tovar_sale,  -->
                        {{is_outstok($myproduk)}}
                        <div class="tovar_item_new {{is_terlaris($myproduk) ? 'tovar_sale':''}} {{is_outstok($myproduk) ? 'tovar_stok':''}}" style="height: 251px;">
                            <div class="tovar_img" style="height: 171px;">
                                <img src="{{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}" alt="{{$myproduk->nama}}" />
                                <div>
                                    <a class="tovar_view" href="{{slugProduk($myproduk)}}" >view</a>
                                </div>
                            </div>
                            <div class="tovar_description clearfix">
                                <a class="tovar_title" href="{{slugProduk($myproduk)}}" >{{$myproduk->nama}}</a>
                                <span class="tovar_price">{{jadiRupiah($myproduk->hargaJual,$matauang)}}</span>
                            </div>
                        </div><!-- //TOVAR -->
                    </li>
                    @endforeach
                </ul>
            </div>
        </div><!-- //JCAROUSEL -->
    </div><!-- //CONTAINER -->
</section><!-- //NEW ARRIVALS -->

<!-- BRANDS -->
<section class="brands_carousel">
    
    <!-- CONTAINER -->
    <div class="container">
        
        <!-- JCAROUSEL -->
        <div class="jcarousel-wrapper">
            
            <!-- NAVIGATION -->
            <div class="jCarousel_pagination">
                <a href="javascript:void(0);" class="jcarousel-control-prev" ><i class="fa fa-angle-left"></i></a>
                <a href="javascript:void(0);" class="jcarousel-control-next" ><i class="fa fa-angle-right"></i></a>
            </div><!-- //NAVIGATION -->
            
            <div class="jcarousel" data-appear-top-offset='-100' data-animated='fadeInUp'>
                <ul>
                    @foreach($koleksi as $key=>$mykoleksi)
                        <li><a href="{{slugKoleksi($mykoleksi)}}" ><img src="{{URL::to(getPrefixDomain().'/koleksi/'.$mykoleksi->gambar)}}" alt="{{$myproduk->nama}}" /></a></li>
                    @endforeach
                </ul>
            </div>
        </div><!-- //JCAROUSEL -->
    </div><!-- //CONTAINER -->
</section><!-- //BRANDS -->