<!-- BREADCRUMBS -->
<section class="breadcrumb parallax margbot30"></section>
<!-- //BREADCRUMBS -->

<!-- TOVAR DETAILS -->
<section class="tovar_details padbot70">
  
  <!-- CONTAINER -->
  <div class="container">
    
    <!-- ROW -->
    <div class="row">
      <!-- SIDEBAR TOVAR DETAILS -->
      <div class="col-lg-3 col-md-3 sidebar_tovar_details">
        <h3><b>other</b></h3>
        
        <ul class="tovar_items_small clearfix">
          @foreach($produklain as $myproduk)
          <li class="clearfix">
            {{HTML::image(getPrefixDomain().'/produk/'.$myproduk->gambar1, $myproduk->nama, array('class' => 'tovar_item_small_img', 'style'=>'min-height: 100px;'))}}
            <a href="{{URL::to(slugProduk($myproduk))}}" class="tovar_item_small_title">{{$myproduk->nama}}</a>
            @if($setting->checkoutType!=2)
              <span class="tovar_item_small_price">{{jadiRupiah($myproduk->hargaJual,$matauang)}}</span>
            @endif
          </li>
          @endforeach
        </ul>
      </div><!-- //SIDEBAR TOVAR DETAILS -->
      
      <!-- TOVAR DETAILS WRAPPER -->
      <div class="col-lg-9 col-md-9 tovar_details_wrapper clearfix">
        <div class="tovar_details_header clearfix margbot35">
          <h3 class="pull-left"><b>{{$breadcrumb}}</b></h3>
          
          <!-- <div class="tovar_details_pagination pull-right">
            <a class="fa fa-angle-left" href="javascript:void(0);" ></a>
            <span>2 of 34</span>
            <a class="fa fa-angle-right" href="javascript:void(0);" ></a>
          </div> -->
        </div>
        
        <!-- CLEARFIX -->
        <div class="clearfix padbot40">
          <div class="tovar_view_fotos clearfix">
            <div id="slider2" class="flexslider">
              <ul class="slides">
                <li><a href="javascript:void(0);" >{{HTML::image(getPrefixDomain().'/produk/'.$produk->gambar1)}}</a></li>
                <li><a href="javascript:void(0);" >{{HTML::image(getPrefixDomain().'/produk/'.$produk->gambar2)}}</a></li>
                <li><a href="javascript:void(0);" >{{HTML::image(getPrefixDomain().'/produk/'.$produk->gambar3)}}</a></li>
                <li><a href="javascript:void(0);" >{{HTML::image(getPrefixDomain().'/produk/'.$produk->gambar4)}}</a></li>
              </ul>
            </div>
            <div id="carousel2" class="flexslider">
              <ul class="slides">
                @if($produk->gambar1)
                <li><a href="javascript:void(0);" >{{HTML::image(getPrefixDomain().'/produk/thumb/'.$produk->gambar1, '$produk->nama')}}</a></li>
                @endif
                @if($produk->gambar2)
                <li><a href="javascript:void(0);" >{{HTML::image(getPrefixDomain().'/produk/thumb/'.$produk->gambar2, '$produk->nama')}}</a></li>
                @endif
                @if($produk->gambar3)
                <li><a href="javascript:void(0);" >{{HTML::image(getPrefixDomain().'/produk/thumb/'.$produk->gambar3, '$produk->nama')}}</a></li>
                @endif
                @if($produk->gambar4)
                <li><a href="javascript:void(0);" >{{HTML::image(getPrefixDomain().'/produk/thumb/'.$produk->gambar4, '$produk->nama')}}</a></li>
                @endif
              </ul>
            </div>
          </div>
          
          <div class="tovar_view_description">
            <div class="tovar_view_title">{{$produk->nama}}</div>
            <div class="tovar_article">{{$produk->barcode}}</div>
            <div class="clearfix tovar_brend_price">
              <div class="pull-left tovar_brend">{{$produk->koleksi}}</div>
              <div class="pull-right tovar_view_price">{{ price($produk->hargaJual) }}</big> 
                @if($produk->hargaCoret!=0)
                <small style="text-decoration: line-through;">{{ price($produk->hargaCoret) }}</small>
                @endif
              </div>
            </div>
            <form action="#" id='addorder'>
              @if($opsiproduk->count()>0)
              <div class="tovar_view_btn">
                <select class="basic col-lg-6 col-md-6">
                  <option value=""> Pilih Opsi </option>
                  @foreach ($opsiproduk as $key => $opsi)
                  <option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
                    {{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{jadiRupiah($opsi->harga)}}
                  </option>
                  @endforeach
                </select>
                <!-- <a class="add_bag" href="javascript:void(0);" ><i class="fa fa-shopping-cart"></i>Beli</a> -->
                <!-- <a class="add_lovelist" href="javascript:void(0);" ><i class="fa fa-heart"></i></a> -->
              </div>
              @endif
              <div class="tovar_size_select">
                <div class="clearfix">
                  <p class="pull-left">Jumlah</p>
                  <input type="text" class="qty col-lg-6 col-md-6" name='qty' value="1" required />
                </div>
              </div>
              <div class="tovar_view_btn">
                <button class="add_bag add_cart" type="submit" value='Masukan ke Keranjang'><i class="fa fa-shopping-cart"></i> Masukan ke Keranjang</button>
              </div>
            </form>
           
            <div class="tovar_shared clearfix">
              <p>Share item with friends</p>
              <ul>
                <div id="twitter" data-url="{{Request::url();}}" data-text="{{$produk->nama}} | " data-title="Tweet"></div>
                <div id="facebook" data-url="{{Request::url();}}" data-text="{{$produk->nama}}" data-title="Like"></div>
                <div id="googleplus" data-url="{{Request::url();}}" data-text="{{$produk->nama}}" data-title="+1"></div>
                <div id="delicious" data-url="{{Request::url();}}" data-text="{{$produk->nama}}"></div>
                <div id="stumbleupon" data-url="{{Request::url();}}" data-text="{{$produk->nama}}"></div>
                
                <!--
                <li><a class="facebook" href="javascript:void(0);" ><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="https://twitter.com/intent/tweet?text={{$produk->nama}}&nbsp;|&nbsp;&url={{Request::url();}}&via=jarvis_store" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a class="linkedin" href="javascript:void(0);" ><i class="fa fa-linkedin"></i></a></li>
                <li><a class="google-plus" href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a></li>
                <li><a class="tumblr" href="javascript:void(0);" ><i class="fa fa-tumblr"></i></a></li>-->
                <iframe src="//www.facebook.com/plugins/share_button.php?href={{URL::to(slugProduk($produk))}}&amp;layout=button" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:20px; margin-right:10px !important;" allowTransparency="true"></iframe>
                <a class="twitter-share-button" href="https://twitter.com/share" data-count="none">Tweet </a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
              </ul>
            </div>
          </div>
        </div><!-- //CLEARFIX -->
        
        <!-- TOVAR INFORMATION -->
        <div class="tovar_information">
          <ul class="tabs clearfix">
            <li class="current">Details</li>
            <!-- <li>Information</li> -->
            <li>Reviews</li>
          </ul>
          <div class="box visible">
            <p>{{$produk->deskripsi}}</p>
          </div>
         <!--  <div class="box">
            Original Levi 501 <br>
            Button fly<br>
            Regular fit<br>
            waist 28"-32 =16"hem<br>
            waist 33" = 17" hem<br>
            waist 34"-40"=18" hem<br>
            Levi's have started to introduce the red tab with just the (R) (registered trade mark) on the red tab<br><br>

            Size Details:<br>
            All sizes from 28-40 waist<br>
            Leg length 30", 32", 34", 36"
          </div> -->
          <div class="box">
            {{pluginTrustklik()}}
          </div>
        </div><!-- //TOVAR INFORMATION -->
      </div><!-- //TOVAR DETAILS WRAPPER -->
    </div><!-- //ROW -->
  </div><!-- //CONTAINER -->
</section><!-- //TOVAR DETAILS -->


<!-- BANNER SECTION -->
<section class="banner_section">
  
  <!-- CONTAINER -->
  <div class="container">
    
    <!-- ROW -->
    <div class="row">
      
      <!-- BANNER WRAPPER -->
      <div class="banner_wrapper">
        <!-- BANNER -->
        @foreach(getBanner(2) as $key=>$banner)
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-ss-12"><a class="banner nobord margbot30" href="{{URL::to($banner->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$banner->gambar)}}" alt="{{$banner->gambar}}" width="100%"/></a></div>
        @endforeach
      </div><!-- //BANNER WRAPPER -->
    </div><!-- //ROW -->
  </div><!-- //CONTAINER -->
</section><!-- //BANNER SECTION -->

@if(count($produkbaru) > 0)
<!-- NEW ARRIVALS -->
<section class="new_arrivals padbot50">
  
  <!-- CONTAINER -->
  <div class="container">
    <h2>new arrivals</h2>
    
    <!-- JCAROUSEL -->
    <div class="jcarousel-wrapper">
      
      <!-- NAVIGATION -->
      <div class="jCarousel_pagination">
        <a href="javascript:void(0);" class="jcarousel-control-prev" ><i class="fa fa-angle-left"></i></a>
        <a href="javascript:void(0);" class="jcarousel-control-next" ><i class="fa fa-angle-right"></i></a>
      </div><!-- //NAVIGATION -->
      
      <div class="jcarousel">
        <ul>
          @foreach($produkbaru as $newproduk)
          <li>
            <!-- TOVAR -->
            <div class="tovar_item_new">
              <div class="tovar_img" style="height: 170px;">
                {{HTML::image(getPrefixDomain().'/produk/'.$newproduk->gambar1, $newproduk->nama, array('class' => 'tovar_item_small_img','style'=>'width: 100%; min-height: 100px;'))}}
                <div class="open-project-link"><a class="open-project tovar_view" href="{{URL::to(slugProduk($newproduk))}}" > view</a></div>
              </div>
              <div class="tovar_description clearfix">
                <a class="tovar_title" href="{{URL::to(slugProduk($newproduk))}}" >{{$newproduk->nama}}</a>
                <span class="tovar_price">{{jadiRupiah($newproduk->hargaJual,$matauang)}}</span>
              </div>
            </div><!-- //TOVAR -->
          </li>
          @endforeach
        </ul>
      </div>
    </div><!-- //JCAROUSEL -->
  </div><!-- //CONTAINER -->
</section><!-- //NEW ARRIVALS -->
@endif