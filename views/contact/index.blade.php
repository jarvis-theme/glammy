@if(Session::has('msg2'))
<div class="success" id='message' style='display:none'>
    Terima kasih, pesan anda sudah terkirim.
</div>
@endif
@if(Session::has('msg3'))
<div class="success" id='message' style='display:none'>
    Maaf, pesan anda belum terkirim.
</div>
@endif
@if($errors->all())
<div class="error" id='message' style='display:none'>
    Terjadi kesalahan dalam menyimpan data.<br><br>
    @foreach($errors->all() as $message)
    -{{ $message }}<br>
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
    <div class="container">
        <h3 class="pull-left"><b>Contacts</b></h3>
        
        <div class="pull-right">
            <a href="{{URL::to('/')}}" >Back to shop<i class="fa fa-angle-right"></i></a>
        </div>
    </div><!-- //CONTAINER -->
</section><!-- //PAGE HEADER -->


<!-- CONTACTS BLOCK -->
<section class="contacts_block">
    
    <!-- CONTAINER -->
    <div class="container">
        
        <!-- ROW -->
        <div class="row padbot30">
            <div class="col-lg-6 col-md-6 padbot30">
                <div id="map">
                    @if($kontak->lat!='0' || $kontak->lat!='0')
                        <iframe style="float:right" width="565" height="490" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn=0.006849,0.009892&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
                    @else
                        <iframe style="float:right" width="565" height="490" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->alamat }}&amp;aq=0&amp;oq=gegerkalong+hil&amp;sspn=0.006849,0.009892&amp;ie=UTF8&amp;hq=&amp;hnear={{ $kontak->alamat }}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
                    @endif
                </div>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-6 padbot30">
                <ul class="contact_info_block">
                    <li>
                        <h3><i class="fa fa-map-marker"></i><b>Store locations</b></h3>
                        <p>{{$kontak->nama}}</p>
                        <span>{{$kontak->alamat}}</span>
                    </li>
                    <li>
                        <h3><i class="fa fa-phone"></i><b>Phones</b></h3>
                        <p class="phone">{{$kontak->telepon}}</p>
                        <p class="phone">{{$kontak->hp}}</p>
                    </li>
                    <li>
                        <h3><i class="fa fa-comments"></i><b>Chat</b></h3>
                        @if($kontak->bb)
                        <p>{{$kontak->bb}} <small>(Pin Blackberry)</small></p>
                        @endif
                        <br>
                        @if($kontak->ym)
                        <p>{{ymyahoo($kontak->ym)}}</p>
                        @endif
                    </li>
                    <li>
                        <h3><i class="fa fa-envelope"></i><b>E-mail</b></h3>
                        <p>{{$kontak->nama}}</p>
                        <a href="mailto:adv@glammyshop.com">{{$kontak->email}}</a>
                    </li>
                </ul>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-6 padbot30">
                <!-- CONTACT FORM -->
                <div class="contact_form">
                    <h3><b>Contacts form</b></h3>
                    <p>Sign in to save and share your Love List.</p>
                    <div id="note"></div>
                    <div id="fields">
                        <form action="{{URL::to('kontak')}}" method="post">
                            <label>Name</label>
                            <input type="text" name="namaKontak" value="" placeholder="Name" required/>
                            <label>E-mail</label>
                            <input type="text" name="emailKontak" value="" placeholder="E-mail" required/>
                            <label>Message</label>
                            <textarea name="messageKontak" placeholder="Message" ></textarea><br>
                            <input class="btn active" type="submit" value="Send Message" />
                        </form>
                    </div>
                </div><!-- //CONTACT FORM -->
            </div>
        </div><!-- //ROW -->
    </div><!-- //CONTAINER -->
</section><!-- //CONTACTS BLOCK -->