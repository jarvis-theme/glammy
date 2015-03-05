<!-- BREADCRUMBS -->
<section class="breadcrumb men parallax margbot30">
    
    <!-- CONTAINER -->
    <div class="container">
        <h2>{{$name}}</h2>
    </div><!-- //CONTAINER -->
</section><!-- //BREADCRUMBS -->

<!-- NEW ARRIVALS -->
<section class="new_arrivals padbot50">
    
    <!-- CONTAINER -->
    <div class="container">
      @if($hasilpro->count()!=0 || $hasilhal->count()!=0 || $hasilblog->count()!=0)
        <h2>Hasil pencarian</h2>
        
        <!-- JCAROUSEL -->
        <div class="jcarousel-wrapper">
            
            <div class="jcarousel">
                <ul>
                  
                    @foreach($hasilpro as $key=>$myproduk)
                    <li>
                        <!-- TOVAR (tovar_sale,  -->
                        <div class="tovar_item_new {{is_terlaris($myproduk) ? 'tovar_sale':''}} {{is_outstok($myproduk) ? 'tovar_stok':''}}">
                            <div class="tovar_img" style="height: 171px;">
                                <img src="{{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}" alt="{{$myproduk->nama}}" />
                                <div>
                                    <a class="tovar_view" href="{{slugProduk($myproduk)}}" >view</a>
                                </div>
                            </div>
                            <div class="tovar_description clearfix">
                                <a class="tovar_title" href="{{slugProduk($myproduk)}}" >{{$myproduk->nama}}</a>
                                <span class="tovar_price">{{jadiRupiah($myproduk->hargaJual)}}</span>
                            </div>
                        </div><!-- //TOVAR -->
                    </li>
                    @endforeach

                    @foreach($hasilhal as $myhal)
                    <li>
                        <!-- TOVAR (tovar_sale,  -->
                        <div class="tovar_item_new">
                          <div class="tovar_description clearfix">
                              <a class="tovar_title" href="{{URL::to('halaman/'.$myhal->slug)}}" >{{$myhal->judul}}</a>
                              <span class="tovar_price">{{shortDescription($myhal->isi,100)}}</span>
                          </div>
                        </div>
                    </li>

                    @endforeach

                    @foreach($hasilblog as $myblog)
                    <li>
                        <!-- TOVAR (tovar_sale,  -->
                        <div class="tovar_item_new">
                          <div class="tovar_description clearfix">
                              <a class="tovar_title" href="{{URL::to('blog/'.$myblog->slug)}}" >{{$myblog->judul}}</a>
                              <span class="tovar_price">{{shortDescription($myblog->isi,100)}}</span>
                          </div>
                        </div>
                    </li>

                    @endforeach

                 
                </ul>
            </div>
        </div><!-- //JCAROUSEL -->
    </div><!-- //CONTAINER -->
    @else
      <h2>Hasil tidak di temukan</h2>
    @endif
</section><!-- //NEW ARRIVALS -->