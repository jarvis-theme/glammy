@if($errors->all())

<div class="error" id='message' style='display:none'>

	We encountered the following errors:

	<br>

    @foreach($errors->all() as $message)

    {{ $message }}<br>

    @endforeach

</div>

@endif

@if(Session::has('success'))

<div class="success" id='message' style='display:none'>

	<p>Terima kasih, konfirmasi anda sudah terkirim.</p>

</div>

@endif



@if(Session::has('message'))

<div class="error" id='message' style='display:none'>

	<p>Maaf, kode order anda tidak ditemukan.</p>					

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
                                    <th align="center" >Kode Order</th>
									<th align="center" >Tanggal Order</th>
									<th align="center" >Order</th>
									<th align="center" >Jumlah</th>
									<th align="center" >Jumlah yg belum di bayar</th>
									<th align="center" >No Resi</th>
									<th align="center" >Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>@if($checkouttype==1)
										{{prefixOrder().$order->kodeOrder}}
									@else
										{{prefixOrder().$order->kodePreorder}}
									@endif</td>
                                    <td>@if($checkouttype==1)
										{{waktu($order->tanggalOrder)}}
									@else
										{{waktu($order->tanggalPreorder)}}
									@endif</td>
                                    <td>@if ($checkouttype==1)
											@foreach ($order->detailorder as $detail)
												<li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku->opsi1.($detail->opsisku->opsi2 != '' ? ' / '.$detail->opsisku->opsi2:'').($detail->opsisku->opsi3 !='' ? ' / '.$detail->opsisku->opsi3:'').')':''}} - {{$detail->qty}}</li>
											@endforeach
										@else

											{{$order->preorderdata->produk->nama}} 
											({{$order->opsiSkuId==0 ? 'No Opsi' : $order->opsisku->opsi1.($order->opsisku->opsi2!='' ? ' / '.$order->opsisku->opsi2:'').($order->opsisku->opsi3!='' ? ' / '.$order->opsisku->opsi3:'')}})
											 - {{$order->jumlah}}

										@endif</td>
                                    <td>{{jadiRupiah($order->total)}}</td>
                                    <td>@if($checkouttype==1)
									- {{jadiRupiah($order->total)}}
									
									@else 

										@if($order->status < 2)

										- {{jadiRupiah($order->total)}}
										
										@elseif(($order->status > 1 && $order->status < 4) || $order->status==7)

										- {{jadiRupiah($order->total - $order->dp)}}

										@else

										0
										@endif

									@endif</td>
                                    <td>{{$order->noResi}}</td>
                                    <td>
                                    @if($checkouttype==1)
										@if($order->status==0)
										<span class="label label-warning">Pending</span>
										@elseif($order->status==1)
										<span class="label label-important">Konfirmasi diterima</span>
										@elseif($order->status==2)
										<span class="label label-info">Pembayaran diterima</span>
										@elseif($order->status==3)
										<span class="label label-info">Terkirim</span>
										@elseif($order->status==4)
										<span class="label label-info">Batal</span>
										@endif
									
									@else 

										@if($order->status==0)
										<span class="label label-warning">Pending</span>
										@elseif($order->status==1)
										<span class="label label-important">Konfirmasi DP diterima</span>
										@elseif($order->status==2)
										<span class="label label-info">DP terbayar</span>
										@elseif($order->status==3)
										<span class="label label-info">Menunggu pelunasan</span>
										@elseif($order->status==4)
										<span class="label label-info">Pembayaran lunas</span>
										@elseif($order->status==5)
										<span class="label label-info">Terkirim</span>
										@elseif($order->status==6)
										<span class="label label-info">Batal</span>
										@elseif($order->status==7)
										<span class="label label-info">Konfirmasi Pelunasan diterima</span>
										@endif

									@endif
                                    </td>  
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div><!-- //ROW -->
        <!-- ROW -->
        @if($checkouttype==1)
    		{{Form::open(array('url'=> 'konfirmasiorder/'.$order->id, 'method'=>'put', 'class'=> 'form-horizontal'))}}	
    	@else
    		{{Form::open(array('url'=> 'konfirmasipreorder/'.$order->id, 'method'=>'put', 'class'=> 'form-horizontal'))}}	
    	@endif
        <div class="row">
            <div class="col-lg-12 col-md-12 padbot60">
                <div class="checkout_confirm_orded clearfix">

                    <div>

                        <fieldset>

                            <ul class="form-list">

                                <li>

                                    <label class="required" for="login-email">Nama Pengirim</label>

                                    <div class="input-box">

                                        <input type="text" name='nama' value='{{Input::old("nama")}}' required class="input-text">

                                    </div>

                                </li>

                                <li>

                                    <label class="required" for="login-password">No Rekening</label>

                                    <div class="input-box">

                                        <input type="text" name='noRekPengirim' value='{{Input::old("noRekPengirim")}}' required class="input-text">

                                    </div>

                                </li>

                                <li>

                                    <label class="required" for="login-password">Tranfer ke</label>

                                    <div class="input-box">

                                        <select name='bank' style="width: 100%;">

											<option value=''>-- Pilih Bank Tujuan --</option>

											@foreach ($banktrans as $bank)

												<option value="{{$bank->id}}">{{$bank->bankdefault->nama}} - {{$bank->noRekening}} - A/n {{$bank->atasNama}}</option>

											@endforeach

										</select>

                                    </div>

                                </li>
								<br>
                                <li>

                                    <label class="required" for="login-password">Jumlah dibayar</label>

                                    <div class="input-box">

                                        @if($checkouttype==1)
								            		
											<input class="span6" type="text" name='jumlah' value='{{$order->total}}' required>

						            	@else
						            		@if($order->status < 2)

											<input class="span6" type="text" name='jumlah' value='{{$order->dp}}' required>
											
											@elseif(($order->status > 1 && $order->status < 4) || $order->status==7)

											<input class="span6" type="text" name='jumlah' value='{{$order->total - $order->dp}}' required>

											@endif

						            	@endif

                                    </div>

                                </li>

                            </ul>

                            <br/>

                            

                        </fieldset>

                    </div>

                    <div class="clear"></div><br>
                    <button  class="btn" type="submit">Update</button>
                </div>
            </div>
            
        </div><!-- //ROW -->
        {{Form::close()}}
    </div><!-- //CONTAINER -->
</section><!-- //CHECKOUT PAGE -->