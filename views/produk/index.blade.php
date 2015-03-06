<!-- BREADCRUMBS -->
<section class="breadcrumb men parallax margbot30" style="background-image:url('{{URL::to(getPrefixDomain().'/galeri/'.$name.'.jpg')}}');">
    
    <!-- CONTAINER -->
    <div class="container">
        <h2>{{$name}}</h2>
    </div><!-- //CONTAINER -->
</section><!-- //BREADCRUMBS -->


<!-- SHOP BLOCK -->
<section class="shop">
    
    <!-- CONTAINER -->
    <div class="container">
    
        <!-- ROW -->
        <div class="row">
            
            <!-- SIDEBAR -->
            <div id="sidebar" class="col-lg-3 col-md-3 col-sm-3 padbot50">
                
                <!-- CATEGORIES -->
                <div class="sidepanel widget_categories">
                    <h3>Product Categories</h3>
                    <ul class="category departments">

                        @foreach($kategori as $key=>$menu)
                            @if($menu->parent=='0')
                                <li class="menu_cont">
                                    <a href="{{slugKategori($menu)}}">{{$menu->nama}}</a>
                                    <!--SUbmenu Starts-->
                                    <ul class="side_sub_menu">
                                        @foreach($kategori as $key=>$submenu)
                                            @if($menu->id==$submenu->parent)
                                            <li><a href="{{slugKategori($submenu)}}">{{$submenu->nama}}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    <!--SUbmenu Ends-->
                                </li>
                            @endif
                        @endforeach

                    </ul>
                </div><!-- //CATEGORIES -->
                
                <!-- PRICE RANGE -->
               <!--  <div class="sidepanel widget_pricefilter">
                    <h3>Filter by price</h3>
                    <div id="price-range" class="clearfix">
                        <label for="amount">Range:</label>
                        <input type="text" id="amount"/>
                        <div class="padding-range"><div id="slider-range"></div></div>
                    </div>
                </div> --><!-- //PRICE RANGE -->

                <!-- SHOP BY SIZE -->
                <!-- <div class="sidepanel widget_sized">
                    <h3>SHOP BY SIZE</h3>
                    <ul>
                        <li><a class="sizeXS" href="javascript:void(0);" >XS</a></li>
                        <li class="active"><a class="sizeS" href="javascript:void(0);" >S</a></li>
                        <li><a class="sizeM" href="javascript:void(0);" >M</a></li>
                        <li><a class="sizeL" href="javascript:void(0);" >L</a></li>
                        <li><a class="sizeXL" href="javascript:void(0);" >XL</a></li>
                    </ul>
                </div> --><!-- //SHOP BY SIZE -->
                
                <!-- SHOP BY COLOR -->
                <!-- <div class="sidepanel widget_color">
                    <h3>SHOP BY COLOR</h3>
                    <ul>
                        <li><a class="color1" href="javascript:void(0);" ></a></li>
                        <li class="active"><a class="color2" href="javascript:void(0);" ></a></li>
                        <li><a class="color3" href="javascript:void(0);" ></a></li>
                        <li><a class="color4" href="javascript:void(0);" ></a></li>
                        <li><a class="color5" href="javascript:void(0);" ></a></li>
                        <li><a class="color6" href="javascript:void(0);" ></a></li>
                        <li><a class="color7" href="javascript:void(0);" ></a></li>
                        <li><a class="color8" href="javascript:void(0);" ></a></li>
                    </ul>
                </div> --><!-- //SHOP BY COLOR -->
                
                <!-- SHOP BY BRANDS -->
                <div class="sidepanel widget_categories">
                    <h3>SHOP BY BRANDS</h3>
                    <ul>
                    @foreach($koleksi as $mykoleksi)
                        <li><a href="{{slugKoleksi($mykoleksi)}}">{{$mykoleksi->nama}}</a></li>
                    @endforeach
                    </ul>
                </div><!-- //SHOP BY BRANDS -->
                
                <!-- BANNERS WIDGET -->
                <div class="widget_banners">
                    @foreach(getBanner(1) as $key=>$banner)
                        @if($key<1)
                        <a class="banner nobord margbot10" href="{{URL::to($banner->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$banner->gambar)}}" alt="{{$banner->gambar}}" width="100%"/></a>
                        @endif
                    @endforeach
                </div><!-- //BANNERS WIDGET -->
                
                <!-- NEWSLETTER FORM WIDGET -->
                <!-- <div class="sidepanel widget_newsletter">
                    <div class="newsletter_wrapper">
                        <h3>NEWSLETTER</h3>
                        <form class="newsletter_form clearfix" action="javascript:void(0);" method="get">
                            <input type="text" name="newsletter" value="Enter E-mail & Get 10% off" onFocus="if (this.value == 'Enter E-mail & Get 10% off') this.value = '';" onBlur="if (this.value == '') this.value = 'Enter E-mail & Get 10% off';" />
                            <input class="btn newsletter_btn" type="submit" value="Sign up & get 10% off">
                        </form>
                    </div>
                </div> --><!-- //NEWSLETTER FORM WIDGET -->
            </div><!-- //SIDEBAR -->
            
            
            <!-- SHOP PRODUCTS -->
            <div class="col-lg-9 col-sm-9 padbot20">
                
                <!-- SHOP BANNER -->
                <div class="banner_block margbot15">
                    @foreach(getBanner(2) as $key=>$banner)
                        <a class="banner nobord" href="{{URL::to($banner->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$banner->gambar)}}" alt="{{$banner->gambar}}" width="100%"/></a>
                    @endforeach
                </div><!-- //SHOP BANNER -->
                
                <!-- SORTING TOVAR PANEL -->
                <div class="sorting_options clearfix">
                    
                    <!-- COUNT TOVAR ITEMS -->
                    <div class="count_tovar_items">
                        <p>{{$name}}</p>
                        <!-- <span>194 Items</span> -->
                    </div><!-- //COUNT TOVAR ITEMS -->
                    
                    <!-- TOVAR FILTER -->
                    <div class="product_sort">
                        <p>SHOW</p>
                        <select class="" style="width: 212px;" id="show" data-rel="{{URL::current()}}">

                            <option value="12" {{Input::get('show')==12?'selected="selected"':''}}>12 ITEMS</option>
                            <option value="24" {{Input::get('show')==24?'selected="selected"':''}}>24 ITEMS</option>

                        </select>
                    </div><!-- //TOVAR FILTER -->
                    
                    <!-- PRODUC SIZE -->
                    <div id="toggle-sizes">
                        <a class="view_box active" href="javascript:void(0);"><i class="fa fa-th-large"></i></a>
                        <a class="view_full" href="javascript:void(0);"><i class="fa fa-th-list"></i></a>
                    </div><!-- //PRODUC SIZE -->
                </div><!-- //SORTING TOVAR PANEL -->
                
                <!-- ROW -->
                @if($produk->count()!=0)
                <div class="row shop_block">
                        @foreach($produk as $myproduk)
                        <!-- TOVAR -->
                        <div class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 padbot40">
                            <div class="tovar_item {{is_terlaris($myproduk) ? 'tovar_sale':''}} {{is_outstok($myproduk) ? 'tovar_stok':''}} clearfix" style="max-height: 420px;">
                                <div class="tovar_img" style="min-height: 270px;">
                                    <div class="tovar_img_wrapper">
                                        {{HTML::image(getPrefixDomain().'/produk/'.$myproduk->gambar1, $myproduk->nama, array('class' => 'img'))}}
                                        {{HTML::image(getPrefixDomain().'/produk/'.$myproduk->gambar2, $myproduk->nama, array('class' => 'img_h'))}}
                                    </div>
                                    <div class="tovar_item_btns">
                                        <div><a class="tovar_view" href="{{slugProduk($myproduk)}}" >view</a></div>
                                    </div>
                                </div>
                                <div class="tovar_description clearfix">
                                    <a class="tovar_title" href="{{slugProduk($myproduk)}}" style="min-height: 48px;">{{strtoupper($myproduk->nama)}}</a>
                                    <span class="tovar_price" style="min-width: 64px;">{{jadiRupiah($myproduk->hargaJual)}}</span>
                                </div>
                                <div class="tovar_content">{{shortDescription($myproduk->deskripsi,100)}}</div>
                            </div>
                        </div><!-- //TOVAR -->
                        @endforeach
                </div><!-- //ROW -->
                @else
                <div class="padbot60 services_section_description">
                    <br>
                    <p>Belum ada produk untuk kategori ini</p>
                </div>
                @endif

                
                <hr>
                
                <div class="clearfix">
                    <!-- PAGINATION -->
                    {{$produk->links()}}
                    <!-- //PAGINATION -->
                    
                    <!-- <a class="show_all_tovar" href="javascript:void(0);" >show all</a> -->
                    
                </div>
                
                <hr>
                
               <!--  <div class="padbot60 services_section_description">
                    <p>We empower WordPress developers with design-driven themes and a classy experience their clients will just love</p>
                    <span>Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90′s vice trust fund gastropub gentrify retro marfa viral. Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90′s vice trust fund gastropub gentrify retro marfa viral.</span>
                </div> -->
                
                <!-- SHOP BANNER -->
                <div class="row top_sale_banners center">
                    @foreach(getBanner(1) as $key=>$banner)
                        @if($key>0)
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-ss-12"><a class="banner nobord margbot30" href="{{URL::to($banner->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$banner->gambar)}}" alt="{{$banner->gambar}}" width="100%"/></a></div>
                        @endif
                    @endforeach
                </div><!-- //SHOP BANNER -->
            </div><!-- //SHOP PRODUCTS -->
        </div><!-- //ROW -->
    </div><!-- //CONTAINER -->
</section><!-- //SHOP -->