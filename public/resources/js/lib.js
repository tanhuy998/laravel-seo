
function SetCookie(cname, cvalue, exdays,cpath) {
    let d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/" + cpath;
}

function DeleteCookie(cName) {
    document.cookie = cName + "= ," + "; expires = Thu, 01 Jan 1997 00:00:00 UTC; path=/" ;
}

function DeleteCartProduct(cName) {
    DeleteCookie(cName);
    
    console.log(cName);
}


function GetCookieValue(cname) {
    //let name = cname + "=";
    //let decodedCookie = decodeURIComponent(document.cookie);
    //let ca = decodedCookie.split(';');
    // for(let i = 0; i <ca.length; i++) {
    //     let c = ca[i];
    //     while (c.charAt(0) == ' ') {
    //         c = c.substring(1);
    //     }
    //     if (c.indexOf(name) == 0) {
    //         return c.substring(name.length, c.length);
    //     }
    // }

    let cookie = document.cookie;
    let list = cookie.split("; ");

    for (i = 0; i < list.length; ++i) {
        let nameValue = list[i].split("=");
        if (nameValue[0] == cname) return nameValue[1];
    }
    return null;
}

//function that update for the hole current document 
function Update() {
    RenderCartNotification();
}

function RenderCartNotification() {
    let cart = GetCart();

    noti_dot = (cart.count != 0)?'<span class="product-count">'+ cart.count +'</span>' : '';

    document.getElementById('cart-notification').innerHTML += noti_dot;
}

function GetCart() {
    let cart = GetCookieValue('cart');

    let cart_list = JSON.parse(cart);
    
    let total_products = 0;
    
    for (let i = 0; i < cart_list.length; ++i) {
        total_products += cart_list[i].qty;
    }

    cart_list.count = total_products;

    return cart_list;
}

function AddProduct(_id, _quantity) {
    let cart = GetCookieValue('cart');

    _quantity = parseInt(_quantity);
    _id = parseInt(_id);

    if (cart == null) {

        let product_list = [];

        product_list.push( {id: _id, qty: _quantity} );

        let val = JSON.stringify(product_list);

        SetCookie('cart', val, 1,  '');
    }
    else {
        let product_list = JSON.parse(cart);

        // check if this product has add to shop yet
        let flag = false;
        for (let i = 0; i < product_list.length; ++i) {
            if (product_list[i].id == _id) {
                product_list[i].qty += _quantity;
                flag = true;
                break;
            }
        }

        if (flag == false) {
            product_list.push({id: _id, qty: _quantity});
        }

        let val = JSON.stringify(product_list);

        SetCookie('cart', val, 1, '');
    }

    Update();
}

function AddCartProductCookie(pName, pPrice, pQuantity, img, path) {
    let total = pQuantity*pPrice;
    let pValue = pPrice + "-" + pQuantity + "-" + total.toString() + "-" + img + "-" +path;    
    console.log("setcookie");
    SetCookie(pName, pValue, 1, "");
    SetShopingCart();
}

function PrintProductsToCartTable() {
    let cookie = document.cookie;
    let productsList = cookie.split("; ");
    console.log(document.cookie);
    //let cartTotal = 0;
    //let productsCount = productsList.length - 1;

    for ( i = 0; i < productsList.length; ++i) {
        let nameValue = productsList[i].split('=');
        let name = nameValue[0];

        if (name == 'carttotal' || name == 'ship') { continue;}
        
        let value = nameValue[1].split("-");
        console.log(name);

        // get all attribute of product
        let price = value[0];
        let quantity = value[1];
        let total = value[2];
        let img = value[3];
        let path = value[4];
        SetHTMLTag(name,price,quantity,img,total,path);

        //cartTotal += parseInt(total);
        //console.log(cartTotal);  
    }

    //let cartTotalCValue = cartTotal.toString() + "-" + productsCount.toString();
    //SetCookie("carttotal",cartTotalCValue,1,"");
}

function SetShopingCart() {
    let cookie = document.cookie;
    let productsList = cookie.split("; ");
    console.log(document.cookie);
    let cartTotal = 0;
    let productsCount = 0; //= productsList.length - 2;

    for ( i = 0; i < productsList.length; ++i) {
        let nameValue = productsList[i].split('=');
        let name = nameValue[0];

        if (name == 'carttotal' || name == 'ship') { continue;}
        
        let value = nameValue[1].split("-");
        console.log(name);

        // get all attribute of product
        let price = value[0];
        let total = value[2];

        cartTotal += parseInt(total);
        productsCount += 1;
        console.log(cartTotal);  
    }

    console.log(cartTotal);
    let cartTotalCValue = cartTotal.toString() + "-" + productsCount.toString();
    SetCookie("carttotal",cartTotalCValue,1,"");

    CartTotal();
}

function PrintCheckout() {
    let cookie = document.cookie;
    let productsList = cookie.split("; ");
    console.log(document.cookie);
    //let cartTotal = 0;
    //let productsCount = productsList.length - 1;

    for ( i = 0; i < productsList.length; ++i) {
        let nameValue = productsList[i].split('=');
        let name = nameValue[0];

        if (name == 'carttotal' || name == 'ship') { continue;}
        
        let value = nameValue[1].split("-");
        console.log(name);

        // get all attribute of product
        let price = value[0];
        let quantity = value[1];
        let total = value[2];
        //let img = value[3];
        //let path = value[4];
        SetCheckoutTag(name,total,quantity);

        //cartTotal += parseInt(total);
        //console.log(cartTotal);  
    }

    let ship = GetCookieValue("ship");
    document.getElementById("#ship").innerHTML = ship;

    let cookieTotal = GetCookieValue("carttotal");
    let value = cookieTotal.split("-");
    let cartTotal = value[0];
    document.getElementById("#sub").innerHTML = cartTotal;
    let totalWithShip = parseInt(cartTotal) + parseInt(ship);
    document.getElementById("#total").innerHTML = totalWithShip;
}

function CartTotal() {
    
    let cartValue = GetCookieValue("carttotal").split("-");
    let total = cartValue[0];
    let productCount = cartValue[1];
    console.log(total);

    document.getElementById("#amount").innerHTML = total;
    document.getElementById("#count").innerHTML = productCount;
}

function UpdateCart() {
    let cartValue = GetCookieValue("carttotal").split("-");
    let total = cartValue[0];
    let productCount = cartValue[1];
    console.log(total);

    document.getElementById("#a1").innerHTML += total;
}

SetCookie("ship","0",1,"");

function TotalWithShip() {
    let strShip = document.getElementById("#s").innerText;
    let shipCost = parseInt(strShip);
    console.log(shipCost);
    let strTotal = document.getElementById("#a1").innerText;
   //let total = 
    let total = shipCost + parseInt(strTotal);
    console.log("");
    document.getElementById("#a2").innerHTML += total;
}

function SetHTMLTag(className,price,quantity,img,total,path) {
    console.log("sethtml");
    let id = GetHashCode(className);
    console.log(id);
    let cookie = "\'" + className + "\'" + "," + price + "," + "GetCartQuantity(\'" + className + "\')" + "," + "\'" + img + "\'" + "," + "\'" + path + "\'";
    let tag =  "<tr class=" + "\"" + className + "\"" + "><td class=\"product-remove\" onclick=\"\"><a title=\"Remove this item\" class=\"remove\"  href=\"#\" onclick=\"DeleteCartProduct(\'" + className +"\');window.location.reload();\">×</a> </td> <td class=\"product-thumbnail\"><a href=\"#\"><img width=\"145\" height=\"145\" alt=\"poster_1_up\" class=\"shop_thumbnail\" src=\"" + img +"\"></a></td><td class=\"product-name\"><a href=\"" + path + "\">" + className +"</a> </td><td class=\"product-price\"><span class=\"amount\">£"+ price +"</span> </td><td class=\"product-quantity\"><div class=\"quantity buttons_added\"><input id=\"#" + id.toString() +"\" onchange=\"AddCartProductCookie(" + cookie + ")\" type=\"number\" size=\"4\" class=\"input-text qty text\" title=\"Qty\" value=\"" + quantity + "\" min=\"0\" step=0\"1\"></div></td><td class=\"product-subtotal\"><span class=\"amount\">£"+ total +"</span></td></tr>";
    
    //let html = document.getElementById("product-list");
    //html.insertBefore(html, html.childNodes[0]);
    document.getElementById("cart-list").innerHTML += tag;
}

function SetCheckoutTag(className,totalPrice,quantity) {
    let tag = "<tr class=\"cart_item\"> <td class=\"product-name\">" + className + "<strong class=\"product-quantity\">×" + quantity + "</strong> </td> <td class=\"product-total\"> <span class=\"amount\">$" + totalPrice + "</span> </td> </tr>";
    document.getElementById("#cart-item").innerHTML += tag;
}



function GetCartQuantity(className) {
    //let id = "#" + className;
    let id = "#" + GetHashCode(className).toString();
    let val = document.getElementById(id).value;
    return val;
}

function GetQuantity(id) {
    let val = document.getElementById(id).value;
    return val;
}

function GetHashCode(str) {
    let hash = 0;
    for (let i = 0; i < str.length; i++) {
        let character = str.charCodeAt(i);
        hash = ((hash<<5)-hash)+character;
        hash = hash & hash; // Convert to 32bit integer
    }
    return hash;
}
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */


// Close the dropdown if the user clicks outside of it

function SearchProducts() {

    let input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByClassName("search");
    console.log("search");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}