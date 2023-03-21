@extends('app')

@section('content')

   <div class="row">

       <div class="col-sm-12 col-md-12 col-md-offset-1 pt-5">

           <table class="table table-hover">

               <thead>

               <tr>

                   <th>Product</th>

                   <th>Quantity</th>

                   <th class="text-center">Price</th>

                   <th class="text-center">Total</th>

                   <th> </th>

               </tr>

               </thead>

               <tbody>

               @foreach($cart->items as $item)

                   <tr>

                       <td class="col-sm-8 col-md-6">

                           <div class="media">

                               <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>

                               <div class="media-body pl-2">

                                   <h4 class="media-heading"><a href="#">{{ $item['item']->name }}</a></h4>

                                   <h5 class="media-heading"> by <a href="#">Brand name</a></h5>

                                   <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>

                               </div>

                           </div></td>

                       <td class="col-sm-1 col-md-1" style="text-align: center">

                           <input type="email" class="form-control" id="exampleInputEmail1" value="{{ $item['totalQty'] }}">

                       </td>

                       <td class="col-sm-1 col-md-1 text-center"><strong>{{ $item['item']->price }}</strong></td>

                       <td class="col-sm-1 col-md-1 text-center"><strong>{{ $item['totalPrice'] }}</strong></td>

                       <td class="col-sm-1 col-md-1">

                           <a class="btn btn-danger" href="{{route('shop.remove11',$item['item']->id )}}">

                               <span class="glyphicon glyphicon-remove"></span> Remove

                           </a></td>

                   </tr>



               @endforeach

               <tr>

                   <td>   </td>

                   <td>   </td>

                   <td>   </td>

                   <td><h3>Total</h3></td>

                   <td class="text-right"><h3><strong>${{ $cart->totalPrice }}</strong></h3></td>

               </tr>

               <tr>

                   <td>   </td>

                   <td>   </td>

                   <td>   </td>

                   <td>

                       <button type="button" class="btn btn-default">

                           <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping

                       </button></td>

                   <td>

                       <button type="button" class="btn btn-success">

                           Checkout <span class="glyphicon glyphicon-play"></span>

                       </button></td>
               </tr>

               </tbody>

           </table>

       </div>

   </div>

@endsection
