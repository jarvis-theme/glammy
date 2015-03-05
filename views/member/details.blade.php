 @if($errors->all())

    <div class="alert alert-error">

    We encountered the following errors:

    <br>

    <ul>

        @foreach($errors->all() as $message)

        <li>{{ $message }}</li>

        @endforeach

    </ul>

    </div>

@endif

@if(Session::has('error'))

    <div class="alert alert-error">

    <p>Password lama anda tidak benar, silakan coba lagi.</p>

    </div>

@endif

@if(Session::has('success'))

    <div class="success" id='message' style='display:none'>

        <p>Informasi anda berhasil di update.</p>

    </div>

@endif

<!-- BREADCRUMBS -->
<section class="breadcrumb parallax margbot30"></section>
<!-- //BREADCRUMBS -->


<!-- PAGE HEADER -->
<section class="page_header">
    
    <!-- CONTAINER -->
    <div class="container border0 margbot0">
        <h3 class="pull-left"><b>Order History</b></h3>
        
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
                    <div class="col-lg-12 col-md-12 padbot40">
                        <table class="table type1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No. order</th>
                                    <th>Order date</th>
                                    <th>Details order</th>
                                    <th>Total</th>
                                    <th>Resi</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @if($setting->checkoutType==1)
                            <tbody>
                                @foreach ($order as $key=>$item)
                                <tr>
                                    <th>{{$key+1}}</th>
                                    <td>{{prefixOrder()}}{{$item->kodeOrder}}</td>
                                    <td>{{waktu($item->tanggalOrder)}}</td>
                                    <td>{{ price($item->total)}}</td>
                                    <td>@foreach ($item->detailorder as $detail)
                                        <li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku->opsi1.($detail->opsisku->opsi2 != '' ? ' / '.$detail->opsisku->opsi2:'').($detail->opsisku->opsi3 !='' ? ' / '.$detail->opsisku->opsi3:'').')':''}} - {{$detail->qty}}</li>
                                    @endforeach</td>
                                    <td>{{ $item->noResi}}</td>
                                    <td>
                                    @if($item->status==0)
                                        <span class="label label-warning">Pending</span>
                                    @elseif($item->status==1)
                                        <span class="label label-important">Konfirmasi diterima</span>
                                    @elseif($item->status==2)
                                        <span class="label label-info">Pembayaran diterima</span>
                                    @elseif($item->status==3)
                                        <span class="label label-info">Terkirim</span>
                                    @elseif($item->status==4)
                                        <span class="label label-info">Batal</span>
                                    @endif
                                    </td>
                                    <td>@if($item->status==0)<a href="{{URL::to('konfirmasiorder/'.$item->id)}}" class="btn btn-sm" target="_self"> Konfirmasi Pembayaran </a>
                                    @endif</td>   
                                </tr>
                                @endforeach
                            </tbody>
                            @elseif($setting->checkoutType==2)
                            <tbody>
                                @foreach ($inquiry as $item)
                                <tr>
                                    <th>{{$key+1}}</th>
                                    <td>{{prefixOrder()}}{{$item->kodeInquiry}}</td>
                                    <td>{{waktu($item->created_at)}}</td>
                                    <td>{{ price($item->total)}}</td>
                                    <td>@foreach ($item->detailInquiry as $detail)
                                        <li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku->opsi1.($detail->opsisku->opsi2 != '' ? ' / '.$detail->opsisku->opsi2:'').($detail->opsisku->opsi3 !='' ? ' / '.$detail->opsisku->opsi3:'').')':''}} - {{$detail->qty}}</li>
                                    @endforeach</td>
                                    <td>{{ $item->noResi}}</td>
                                    <td>
                                    @if($item->status==0)
                                        <span class="label label-warning">Pending</span>
                                    @elseif($item->status==1)
                                        <span class="label label-important">Inquiry diterima</span>
                                    @elseif($item->status==2)
                                        <span class="label label-info">Batal</span>
                                    @endif
                                    </td>
                                    <td>@if($item->status==0)<a href="{{URL::to('konfirmasiorder/'.$item->id)}}" class="btn btn-sm" target="_self"> Konfirmasi Pembayaran </a>
                                    @endif</td>   
                                </tr>
                                @endforeach
                                @if ($inquiry->count()==0)
                                <tr>
                                    <td colspan="2">
                                        Inquiry anda masih kosong.
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                            @elseif($setting->checkoutType==3)
                            <tbody>
                                @foreach ($order as $key=>$item)
                                <tr>
                                    <th>{{$key+1}}</th>
                                    <td>{{prefixOrder()}}{{$item->kodePreorder}}</td>
                                    <td>{{waktu($item->tanggalOrder)}}</td>
                                    <td>{{ price($item->total)}}</td>
                                    <td><li>{{$item->preorderdata->produk->nama}} ({{$item->opsiSkuId==0 ? 'No Opsi' : $item->opsisku->opsi1.($item->opsisku->opsi2!='' ? ' / '.$item->opsisku->opsi2:'').($item->opsisku->opsi3!='' ? ' / '.$item->opsisku->opsi3:'')}}) - {{$item->jumlah}}</li></td>
                                    <td>
                                    @if($item->status==0)
                                    <span class="label label-warning">Pending</span>
                                    @elseif($item->status==1)
                                    <span class="label label-important">Konfirmasi DP diterima</span>
                                    @elseif($item->status==2)
                                    <span class="label label-info">DP terbayar</span>
                                    @elseif($item->status==3)
                                    <span class="label label-info">Menunggu pelunasan</span>
                                    @elseif($item->status==4)
                                    <span class="label label-info">Pembayaran lunas</span>
                                    @elseif($item->status==5)
                                    <span class="label label-info">Terkirim</span>
                                    @elseif($item->status==6)
                                    <span class="label label-info">Batal</span>
                                    @elseif($item->status==7)
                                    <span class="label label-info">Konfirmasi Pelunasan diterima</span>
                                    @endif
                                    </td>
                                    <td>@if($item->status<4)
                                    <a href="{{URL::to('konfirmasipreorder/'.$item->id)}}" class="btn btn-sm" target="_self"> Konfirmasi Pembayaran </a>
                                    @endif</td>   
                                </tr>
                                @endforeach
                            </tbody>
                            @endif
                        </table>
                        @if($setting->checkoutType==2)
                        {{$inquiry->links()}}
                        @else
                        {{$order->links()}}
                        @endif
                    </div>
                    
                </div><!-- //ROW -->
        <!-- ROW -->
        {{Form::open(array('url'=>'member/update','method'=>'put','class'=>'form-horizontal'))}}
        <div class="row">
            <div class="col-lg-9 col-md-9 padbot60">
                <div class="checkout_confirm_orded clearfix">

                    <div class="col-lg-6 col-md-6">

                        <fieldset>

                            <ul class="form-list">

                                <li>

                                    <label class="required" for="login-email">Nama</label>

                                    <div class="input-box">

                                        <input type="text" name='nama' value='{{$user->nama}}' required  class="input-text">

                                    </div>

                                </li>

                                <li>

                                    <label class="required" for="login-password">Email</label>

                                    <div class="input-box">

                                        <input type="text" name='email' value='{{$user->email}}' required class="input-text">

                                    </div>

                                </li>

                                <li>

                                    <label class="required" for="login-password">Telp / HP</label>

                                    <div class="input-box">

                                        {{Form::input('text', 'telp', $user->telp, array('class'=>'span4'))}}

                                    </div>

                                </li>

                                <li>

                                    <label class="required" for="login-password">Note</label>

                                    <div class="input-box">

                                        <textarea style="height:100px;" name='catatan'>{{$user->catatan}}</textarea>

                                    </div>

                                </li>

                            </ul>

                            <br/>

                            

                        </fieldset>

                    </div>

                    <div class="col-lg-6 col-md-6">

                        <fieldset>

                            <ul class="form-list">

                                <li>

                                    <label class="required" for="login-email">Alamat</label>

                                    <div class="input-box">

                                        <textarea name='alamat'>{{$user->alamat}}</textarea>

                                    </div>

                                </li>

                                <li>

                                    <label class="required" for="login-password">Negara</label>

                                    <div class="input-box">

                                        {{Form::select('negara',array('' => '-- Pilih Negara --') + $negara , ($user ? $user->negara :(Input::old("negara")? Input::old("negara") :"")), array('required'=>'', 'id'=>'negara', 'style'=>'width:100%'))}}

                                    </div>

                                </li>

                                <li>

                                    <div class="clear"></div>

                                    <label class="required" for="login-password">Provinsi</label>

                                    <div class="input-box">

                                        {{Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi , ($user ? $user->provinsi :(Input::old("provinsi")? Input::old("provinsi") :"")),array('required'=>'','id'=>'provinsi', 'style'=>'width:100%'))}}

                                    </div>

                                </li>

                                <li>

                                    <div class="clear"></div>

                                    <label class="required" for="login-password">Kota</label>

                                    <div class="input-box">

                                        {{Form::select('kota',array('' => '-- Pilih Kota --') + $kota , ($user ? $user->kota :(Input::old("kota")? Input::old("kota") :"")),array('required'=>'','id'=>'kota', 'style'=>'width:100%'))}}

                                    </div>

                                </li>

                                <li>

                                    <div class="clear"></div>

                                    <label class="required" for="login-password">Kodepos</label>

                                    <div class="input-box">

                                        <input type="text" name='kodepos' value='{{$user->kodepos}}' class="input-text">

                                    </div>

                                </li>

                            </ul>

                        </fieldset>

                    </div>

                    <div class="clear"></div><br>
                    <button  class="btn" type="submit">Update</button>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-3 padbot60">
                
                <!-- BAG TOTALS -->
                <div class="sidepanel widget_bag_totals your_order_block">
                    <div class="input-box action_buttonbar">

                    <h4>Ubah Password?</h4>

                    <i class="oranje">Biarkan kosong jika tidak ingin mengubah password</i><br><br>

                    <div class="clear"></div>

                    <div class="col-1">

                        <fieldset>

                            <ul class="form-list">

                                <li>

                                    <label class="required" for="login-email">Password Lama</label>

                                    <div class="input-box">

                                        <input type="password" value="" name='oldpassword' class="input-text">

                                    </div>

                                </li>

                                <li>

                                    <label class="required" for="login-password">Password Baru</label>

                                    <div class="input-box">

                                        <input type="password" name='password' class="input-text">

                                    </div>

                                </li>

                                <li>

                                    <label class="required" for="login-password">Confirm Password Baru</label>

                                    <div class="input-box">

                                        <input type="password" name='password_confirmation' class="input-text">

                                    </div>

                                </li>

                            </ul>

                        </fieldset>
                        <button  class="btn" type="submit">Update</button>
                        
                    </div>

                </div><!-- //REGISTRATION FORM -->
            </div><!-- //SIDEBAR -->
        </div><!-- //ROW -->
        {{Form::close()}}
    </div><!-- //CONTAINER -->
</section><!-- //CHECKOUT PAGE -->

