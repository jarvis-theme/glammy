<!-- BREADCRUMBS -->
<section class="breadcrumb parallax margbot30"></section>
<!-- //BREADCRUMBS -->


<!-- PAGE HEADER -->
<section class="page_header">
    
    <!-- CONTAINER -->
    <div class="container">
        <h3 class="pull-left"><b>{{$data->judul}}</b></h3>
        
        <div class="pull-right">
            <a href="{{URL::to('/')}}" >Back to shop<i class="fa fa-angle-right"></i></a>
        </div>
    </div><!-- //CONTAINER -->
</section><!-- //PAGE HEADER -->

<!-- FAQ PAGE -->
<section class="faq_page">
    
    <!-- CONTAINER -->
    <div class="container">
    
        <!-- ROW -->
        <div class="row">
            
            <!-- FAQ BLOCK -->
            <div class="col-lg-9 col-md-9 col-sm-9 padbot30">
                <div class="title2">
                    {{$data->isi}}
                </div>
            </div>
            <!-- SIDEBAR -->
            <div id="sidebar" class="col-lg-3 col-md-3 col-sm-3 padbot50">
                
                <!-- WIDGET SEARCH -->
                <div class="sidepanel widget_search">
                    <form class="search_form" method="post" action="{{URL::to('search')}}" name="search_form">
                        <input type="text" name="search" value="Search..." onFocus="if (this.value == 'Search...') this.value = '';" onBlur="if (this.value == '') this.value = 'Search...';" />
                    </form>
                </div><!-- //WIDGET SEARCH -->
                
                <!-- CATEGORIES -->
                <div class="sidepanel widget_categories">
                    <h3>Sidebar Menu</h3>
                    <ul>
                        <li><a href="{{URL::to('halaman/about-us')}}">About Us</a></li>
                        <li><a href="{{URL::to('produk')}}">Product Page</a></li>
                        <li><a href="{{URL::to('testimoni')}}">Testimonials</a></li>
                        <li><a href="{{URL::to('service')}}">Shipping terms</a></li>
                        <li><a href="{{URL::to('blog')}}" >Articles</a></li>
                        <li><a href="{{URL::to('kontak')}}" >Contacts</a></li>
                    </ul>
                </div><!-- //CATEGORIES -->
                
                <!-- WIDGET BEST SELLERS -->
                <div class="sidepanel widget_best_sellers">
                  <h3>BEST SELLERS</h3>
                  
                  <ul class="tovar_items_small">
                    @foreach(bestSeller(3) as $item)
                    <li class="clearfix">
                      {{imageProduk($item,array('class'=>'tovar_item_small_img','alt'=>50))}}
                      <a href="{{slugProduk($item)}}" class="tovar_item_small_title">{{$item->nama}}</a>
                      <span class="tovar_item_small_price">{{price($item->hargaJual)}}</span>
                    </li>
                    @endforeach 
                    

                  </ul>
                </div><!-- //WIDGET BEST SELLERS -->
                
                <!-- BANNERS WIDGET -->
                <div class="widget_banners">
                @foreach(getBanner(1) as $key=>$banner)
                    @if($key==0)
                      <a class="banner nobord margbot10" href="{{URL::to($banner->url)}}" ><img style="width: 100%;" src="{{URL::to(getPrefixDomain().'/galeri/'.$banner->gambar)}}" alt="$banner->gambar" /></a>
                    @endif
                @endforeach
                </div><!-- //BANNERS WIDGET -->
            </div><!-- //SIDEBAR -->
        </div>
    </div>
</section>