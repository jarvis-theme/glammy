<!-- BREADCRUMBS -->
<section class="breadcrumb parallax margbot30"></section>
<!-- //BREADCRUMBS -->


<!-- PAGE HEADER -->
<section class="page_header">
  
  <!-- CONTAINER -->
  <div class="container">
    <h3 class="pull-left"><b>Costumer Service Page</b></h3>
    
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
          <h2>Here you'll find the answers to all your questions</h2>
          <p>There is something decidedly not of this century about the evening dresses—and they are almost all evening dresses, with a few soigné jumpsuits and pencil skirts in the mix—that she crafts from unembellished satins, cadys, and organzas, with hems cropped just above the ankle.</p>
        </div>
        
        <!-- Accordion -->
        <div id="accordion">
          
          <h4 class="accordion_title">Term of Service</h4>
          <div class="accordion_content">
            <p>{{$service->tos}}</p>
          </div>
          
          <h4 class="accordion_title">Refund Policy</h4>
          <div class="accordion_content">
            <p>{{$service->refund}}</p>
          </div>
          
          <h4 class="accordion_title">Privacy Policy</h4>
          <div class="accordion_content">
            <p>{{$service->privacy}}</p>
          </div>
          
        </div><!-- //Accordion -->
        
      </div><!-- //FAQ BLOCK -->
      
      
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
    </div><!-- //ROW -->
  </div><!-- //CONTAINER -->
</section><!-- //FAQ PAGE -->
