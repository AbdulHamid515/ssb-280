@extends('frontend.layout.account')


@section('body')
<div class="breadcrumb">
<div class="container">
<div class="breadcrumb-inner">
<ul class="list-inline list-unstyled">
   <li><a href="#">Home</a></li>
   <li class='active'>Shopping Cart</li>
</ul>
</div>
<!-- /.breadcrumb-inner -->
</div>
<!-- /.container -->
</div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
<div class="container">
<div class="row ">
<div class="shopping-cart">
<div class="shopping-cart-table ">
<div class="table-responsive">

@if ( App\Models\Frontend\Cart::totalItems() > 0 )

   <table class="table">
      <thead>
         <tr>
            <th class="cart-romove item">Remove</th>
            <th class="cart-description item">Image</th>
            <th class="cart-product-name item">Product Name</th>
            <th class="cart-edit item">Update</th>
            <th class="cart-qty item">Quantity</th>
            <th class="cart-sub-total item">Subtotal</th>
            <th class="cart-total last-item">Grandtotal</th>
         </tr>
      </thead>
      <!-- /thead -->
      <tfoot>
         <tr>
            <td colspan="7">
               <div class="shopping-cart-btn">
                  <span class="">
                  <a href="{{route('allproducts')}}" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
       <!--  <a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a>-->                 
                 </span>
               </div>
               <!-- /.shopping-cart-btn -->
            </td>
         </tr>
      </tfoot>
      <tbody>

         @php $i=0; @endphp
         @php $total_price=0 ; @endphp
         @foreach ($cartItems as $item)
         <tr>
            <td class="romove-item">
               <form action="{{route('cart.destroy', $item->id)}}" method="POST">
                  @csrf
                  
                  <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
               </form>
               <a href="" title="cancel" class="icon">
                  
               </a>
             </td>
            <td class="cart-image">
               <a class="entry-thumbnail">
            @if (!is_null($item->product->image))
               <img src="{{asset('Backend/img/product/'. $item->product->image )}}" alt="">

            @else


            @endif
               </a>
            </td>
            <td class="cart-product-name-info">
               <h4 class='cart-product-description'><a href="detail.html">{{$item->product->title}}</a></h4>
               <div class="row">
                  <div class="col-sm-4">
                     <div class="rating rateit-small"></div>
                  </div>
                  <div class="col-sm-8">
                     <div class="reviews">
                        (06 Reviews)
                     </div>
                  </div>
               </div>
               <!-- /.row -->
               <div class="cart-product-info">
                  <span class="product-color">COLOR:<span>Blue</span></span>
               </div>
            </td>
            <td class="cart-product-edit">
               <form action="{{route('cart.update',$item->id)}}" method="POST">
                  @csrf
                  <input type="submit" name="update" value="Update" class="btn btn-primary">
              
               
            </td>
            <td class="cart-product-quantity">
               <div class="quant-input">
                  <input type="number" value="{{$item->product_quantity}}" name="product_quantity">
               </div>
                </form>
            </td>

         <!--    Sub Total -->
            <td class="cart-product-sub-total">
               <span class="cart-sub-total-price">
               @if (!is_null ($item->product->offer_price))

                    ৳{{$item->product->offer_price}}BDT
               @else
               ৳{{$item->product-regular_price}}BDT
               @endif
            </span>
            </td>
            <td class="cart-product-grand-total">
               <span class="cart-grand-total-price">
               @if (!is_null ($item->product->offer_price))

                    ৳{{$item->product->offer_price *$item->product_quantity}}BDT
               @else
               ৳{{$item->product-regular_price *$item->product_quantity}}BDT
               @endif
            </span>
            </td>
         </tr>
       @endforeach
      </tbody>
      <!-- /tbody -->
   </table>
@else
<div class="alert alert-warning">No Item Added In your Cart</div>

@endif
   <!-- /table -->
</div>
</div>
<!-- /.shopping-cart-table -->				
<div class="col-md-4 col-sm-12 estimate-ship-tax">

</div>
<!-- /.estimate-ship-tax -->
<div class="col-md-4 col-sm-12 estimate-ship-tax">
<table class="table">
   <thead>
      <tr>
         <th>
            <span class="estimate-title">Discount Code</span>
            <p>Enter your coupon code if you have one..</p>
         </th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>
            <div class="form-group">
               <input type="text" class="form-control unicase-form-control text-input" placeholder="You Coupon..">
            </div>
            <div class="clearfix pull-right">
               <button type="submit" class="btn-upper btn btn-primary">APPLY COUPON</button>
            </div>
         </td>
      </tr>
   </tbody>
   <!-- /tbody -->
</table>
<!-- /table -->
</div>
   <!-- /.estimate-ship-tax -->
   <div class="col-md-4 col-sm-12 cart-shopping-total">
      <table class="table">
         <thead>
            <tr>
               <th>
               <div class="cart-sub-total">
                     Subtotal<span class="inner-left-md">
                     BDT{{App\Models\Frontend\Cart::totalPrice() }}
                  </span>
                  </div>
                  <div class="cart-grand-total">
                     Grand Total<span class="inner-left-md">BDT{{App\Models\Frontend\Cart::totalPrice() }}</span>
                  </div>
               </th>
            </tr>
         </thead>
         <!-- /thead -->
         <tbody>
            <tr>
               <td>
                  <div class="cart-checkout-btn pull-right">
                     <a href="{{route('checkout.page')}}" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</a>
                     
                  </div>
               </td>
            </tr>
         </tbody>
         <!-- /tbody -->
      </table>
      <!-- /table -->
   </div>
   <!-- /.cart-shopping-total -->			
</div>
<!-- /.shopping-cart -->
</div>
<!-- /.row -->
@endsection