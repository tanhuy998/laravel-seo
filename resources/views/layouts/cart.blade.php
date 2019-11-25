
<tr id="" class="cart_item">
    <td class=\"product-remove\" onclick=\"DeleteCartProductCookie($id);location.reload()\">
        <a title=\"Remove this item\" class=\"remove\" href=\"#\">×</a> 
    </td>
            
    <td class=\"product-thumbnail\">
        <a href=\""+ GetFQDN() + '/product/' +"\">
            <img width=\"145\" height=\"145\" alt=\"poster_1_up\" class=\"shop_thumbnail\" src=\"../img/".$productThumbImage["$id"]['DUONGDAN']."\">
        </a>
    </td>";
                            
    <td class=\"product-name\">
        <a href=\"http://localhost/final/controle/C_Single-Product.php?id=$id\">".$product['TENSANPHAM']."
        </a>
    </td>
                                            
    <td class=\"product-price\">
        <span class=\"amount\">".number_format($product['GIA'])." VNĐ</span>
    </td>
    
    <td class=\"product-quantity\">
        <div class=\"quantity buttons_added\">
            <input id=\"$id\" type=\"number\" size=\"4\" class=\"input-text qty text\" title=\"Qty\" value=\"".$quantity["$id"]."\" min=\"1\" onchange=\"AddCartProductCookie($id,GetQuantity($id))\" step=\"1\">
        </div>
    </td>
                                    
    <td class=\"product-subtotal\">
        <span class=\"amount\">".number_format($totalPrice)." VNĐ</span>
    </td>
</tr>
