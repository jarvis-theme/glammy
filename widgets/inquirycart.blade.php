<div class="shopping_bag">
    <a class="shopping_bag_btn" href="javascript:void(0);" ><i class="fa fa-shopping-cart"></i><p>shopping bag</p><span>{{Shpcart::wishlist()->total_items()}}</span></a>
    <div class="cart" id='shoppingcartplace'>
    	<ul class="cart-items">
			@if(Shpcart::wishlist()->contents())
				@foreach (Shpcart::wishlist()->contents() as $key => $cart)
			    <li class="clearfix">
			        <!-- <img class="cart_item_product" src="images/tovar/women/1.jpg" alt="" /> -->
			        <a href="#" class="cart_item_title">{{$cart['name']}}</a>
			        <span class="cart_item_price">{{ $cart['qty'] }} Item(s)</span>
			    </li>
			    @endforeach
		    @endif
		</ul>
		<div class="cart_total">
		    <div class="clearfix"><span class="cart_subtotal">Subtotal: <b>{{Shpcart::wishlist()->total_items()}}</b> ITEM(s)</span></div>
		    <a class="btn active" href="{{URL::to('checkout')}}">Checkout</a>
		</div>
	</div>
</div>