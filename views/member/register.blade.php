@if($errors->all())

<div class="error" id='message' style='display:none'>

  Kami menemukan error berikut:

  <br>

  <ul>

    @foreach($errors->all() as $message)

    <li>{{ $message }}</li>

    @endforeach

  </ul>

</div>

@endif

@if(Session::has('success'))

<div class="success" id='message' style='display:none'>

  Selamat anda telah terdaftar.      

</div>

@endif

<!-- MY ACCOUNT PAGE -->
<section class="my_account parallax">
    
    <!-- CONTAINER -->
    <div class="container">
        
        <div class="my_account_block clearfix">
            <div class="login">
                <h2>NEW CUSTOMERS</h2>
                {{Form::open(array('url'=>'member','method'=>'post','class'=>'login_form'))}}
                    <label class="required" for="login-password">Name</label>
                    <input type="text" name="nama" value="{{Input::old('nama')}}" placeholder="your name" required />
                    <label class="required" for="login-password">Email</label>
                    <input type="text" name='email' value='{{Input::old("email")}}' placeholder="your email" required />
                    <label class="required" for="login-password">Password</label>
                    <input type="password" name="password" required placeholder="password" />
                    <label class="required" for="login-password">Confirmation Password</label>
                    <input type="password" name="password_confirmation" required placeholder="password" />
                    <label class="required" for="login-password">Address</label>
                    <textarea name='alamat' required>{{Input::old("alamat")}}</textarea>
                    <label class="required" for="login-password">Phone</label>
                    <input type="text" name='telp' value='{{Input::old("telp")}}' placeholder="phone" required/>
                    <label class="required" for="login-password">Pos code</label>
                    <input type="text" name='kodepos' value='{{Input::old("kodepos")}}' placeholder="pos code"  />
                    <li>
                        <label class="required" for="login-password">Negara</label>
                        <div class="input-box">
                        {{Form::select('negara',array('' => '-- Pilih Negara --') + $negara , Input::old("negara"), array('required', 'style="width: 100%;" name="negara" id="negara" data-rel="chosen" onchange="searchProvinsi(this.value)"'))}}
                        </div>
                    </li>
                    <li>
                        <div class="clear"></div>
                        <label class="required" for="login-password">Provinsi</label>
                        <div class="input-box" id="provinsiPlace">
                        {{Form::select('provinsi',array('' => '-- Pilih Provinsi --'), Input::old("provinsi"),array('required', 'style="width: 100%;" name="provinsi" id="provinsi" data-rel="chosen" onchange="searchKabupaten(this.value)"'))}}
                        </div>
                    </li>
                    <li>
                        <div class="clear"></div>
                        <label class="required" for="login-password">Kota</label>
                        <div class="input-box" id="kotaPlace">
                        {{Form::select('kota',array('' => '-- Pilih Kota --'), Input::old("kota"),array('style="width: 100%;" required name="kota" id="kota" data-rel="chosen"'))}}
                        </div>
                    </li>
                    <br>
                    {{ HTML::image(Captcha::img(), 'Captcha image') }}<br>
                    <input type="text" name='captcha' placeholder="Masukan Kode yang tertera di atas" required />
                    <div class="clearfix">
                        <div class="pull-left"><input type="checkbox" id="categorymanufacturer1" name='readme' required value="1"/><label for="categorymanufacturer1">Saya telah membaca dan menyetujui <a style="text-decoration: none; color:rgb(243, 130, 86);" target="_blank" href="{{URL::to('service')}}">(Persyaratan Member)</a></label></div>
                    </div>
                    <div class="center"><input type="submit" value="Login"></div>
                {{Form::close()}}
            </div>
            <div class="new_customers">
                <h2 style="margin:0;">ALREADY REGISTERED</h2>
                <div class="center padbot30 "><a class="btn active" href="{{URL::to('member/')}}" >login</a></div>
            </div>
        </div>
        
    </div><!-- //CONTAINER -->
</section><!-- //MY ACCOUNT PAGE -->