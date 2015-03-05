@if(Session::has('msg'))
<div class="success" id='message' style='display:none'>
  <p>Terima kasih, testimonial anda sudah terkirim.</p>
</div>
@endif
@if($errors->all())
<div class="error" id='message' style='display:none'>
Terjadi kesalahan dalam menyimpan data.<br>
<ul>
    @foreach($errors->all() as $message)
    <li>{{ $message }}</li>
    @endforeach
</ul>
</div>
@endif

<!-- BREADCRUMBS -->
<section class="breadcrumb parallax margbot30"></section>
<!-- //BREADCRUMBS -->


<!-- PAGE HEADER -->
<section class="page_header">
    
    <!-- CONTAINER -->
    <div class="container border0 margbot0">
        <h3 class="pull-left"><b>Testimonial</b></h3>
        
        <div class="pull-right">
            <a href="{{URL::to('/')}}" >Back shopping bag<i class="fa fa-angle-right"></i></a>
        </div>
    </div><!-- //CONTAINER -->
</section><!-- //PAGE HEADER -->

<!-- CHECKOUT PAGE -->
<section class="checkout_page">
    
    <!-- CONTAINER -->
    <div class="container">
        <!-- ROW -->
        <div class="row">
            <div class="col-lg-9 col-md-9 padbot40">
              <div class="checkout_confirm_orded clearfix">
                <h2>{{$nama}}</h2>
                <section id="main_content">
                  @foreach($testimonial as $key=>$value)
                    <blockquote>
                      <i>{{($value->isi)}}</i>
                    </blockquote>
                  <a href="#"><span style="padding-bottom: 11px;" class="highlight_text">{{$value->nama}}</span></a>
                  <p><small><i class="date">{{waktuTgl($value->created_at)}}</i></small></p>
                  <hr>

                  @endforeach
                  {{$testimonial->links()}}
                </section>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 padbot60">
                <div class="checkout_confirm_orded clearfix">
                  <h2>Buat Testimonial</h2>
                  <form action="{{URL::to('testimoni')}}" method="post">
                    <label>Nama</label><br><input style="border: solid 1px #e1e1e1; padding: 4px;width: 94%;" type="text" name="nama" class="input-text" required><br><br>
                    <label>Testimonial</label><br><textarea style="border: solid 1px #e1e1e1; padding: 4px;width: 94%;" name="testimonial" class="textarea" required></textarea><br><br>
                    <button type="submit" class="btn center active" value="">Kirim Testimonial</button>
                    <br><br>
                  </form>
                </div>
            </div>
        </div><!-- //ROW -->
    </div><!-- //CONTAINER -->
</section><!-- //CHECKOUT PAGE -->
