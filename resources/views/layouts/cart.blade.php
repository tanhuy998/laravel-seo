
<tr id="" class="cart_item">
    <td class="product-remove" onclick="DeleteCartProductCookie($id);location.reload()">
        <a title="Remove this item" class="remove" href="#">×</a> 
    </td>
            
    <td class="product-thumbnail">
        <a href="{{ route('product', ['id' => $product->slug]) }}">
            <img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="{{ asset('resources/img/'.($product->images->first())? $product->images->first()->path: '') }}">
        </a>
    </td>";
                            
    <td class="product-name">
        <a href="{{ route('product', ['id' => $product->slug]) }}">
        </a>
    </td>
                                            
    <td class="product-price">
        <span class="amount">{{ $product->price }} VNĐ</span>
    </td>
    
    <td class="product-quantity">
        <div class="quantity buttons_added">
            <input id="$id" type="number" size="4" class="input-text qty text" title="Qty" value="{{ $product->qty }}" min="1" onchange="AddCartProductCookie($id,GetQuantity($id))" step="1">
        </div>
    </td>
                                    
    <td class="product-subtotal">
        <span class="amount">{{ $product->price*$product->qty }} VNĐ</span>
    </td>
</tr>
