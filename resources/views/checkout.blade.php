@extends('layouts.master')

@section('content')

<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>THANH TOÁN</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                @include('layouts.leftSideBar')
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form enctype="multipart/form-data" action="{{ route('place-order') }}" class="checkout" method="post" name="checkout">

                                <div id="customer_details" class="col2-set">
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Thông tin thanh toán</h3>
                                            <!-- <p id="billing_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                <label class="" for="billing_country">Country <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <select class="country_to_state country_select" id="billing_country" name="billing_country">
                                                    <option value="">Select a country…</option>
                                                    <option value="AX">Åland Islands</option>
                                                    
                                                </select>
                                            </p> -->

                                            <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                <label class="" for="billing_last_name">Họ và tên<abbr title="required"  class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="billing_last_name" onchange="RadioButtonCheck(true)" name="name" class="input-text ">
                                            </p>
                                            <div class="clear"></div>

                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_address_1">Địa chỉ <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" onchange="RadioButtonCheck(true)" placeholder="Street address" id="billing_address_1" name="address" class="input-text ">
                                            </p>

                                            <div class="clear"></div>

                                            <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                                <label class="" for="billing_phone">Số điện thoại <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" onchange="RadioButtonCheck(true)" placeholder="" id="billing_phone" name="phone" class="input-text ">
                                            </p>

                                            <p id="order_comments_field" class="form-row notes">
                                                <label class="" for="order_comments">Ghi chú</label>
                                                <textarea cols="5" rows="2" onchange="RadioButtonCheck(true)" placeholder="Notes about your order, e.g. special notes for delivery." id="order_comments" class="input-text " name="comments"></textarea>
                                            </p>

                                            <div class="clear"></div>


                                        </div>
                                    </div>

                                    

                                </div>

                                <h3 id="order_review_heading">Your order</h3>

                                <div id="order_review" style="position: relative;">
                                    <table class="shop_table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody id="#cart-item">
                                            
                                        </tbody>
                                        <tfoot>

                                            <tr class="cart-subtotal">
                                                <th>Cart Subtotal</th>
                                                <td><span class="amount">{{$total}} $</span><span id="#sub"  class="amount"></span>
                                                </td>
                                            </tr>

                                            <tr class="shipping">
                                                <th>Shipping and Handling</th>
                                                <td id="#ship">

                                                    Free Shipping
                                                    <input type="hidden" class="shipping_method" value="free_shipping" id="shipping_method_0" data-index="0" name="shipping_method[0]">
                                                </td>
                                            </tr>


                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td><strong><span class="amount">{{ $total }} </span><span id="#total" class="amount">$</span></strong> </td>
                                            </tr>

                                        </tfoot>
                                    </table>


                                    <div id="payment">
                                        <ul class="payment_methods methods">
                                            <li class="payment_method_cheque">
                                                <input type="radio" onclick="RadioButtonCheck()" data-order_button_text="" value="cheque" name="payment_method" class="input-radio" id="payment_method_cheque" ">
                                                <label for="payment_method_cheque">Cheque Payment </label>
                                                <div style="display:none;" class="payment_box payment_method_cheque">
                                                    <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </li>
                                            <li class="payment_method_paypal">
                                                <input type="radio" data-order_button_text="Proceed to PayPal" value="paypal" name="payment_method" class="input-radio" id="payment_method_paypal" onclick="RadioButtonCheck()">
                                                <label for="payment_method_paypal">PayPal <img alt="PayPal Acceptance Mark" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png"><a title="What is PayPal?" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" class="about_paypal" href="https://www.paypal.com/gb/webapps/mpp/paypal-popup">What is PayPal?</a>
                                                </label>
                                                <div style="display:none;" class="payment_box payment_method_paypal">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                </div>
                                                <div id="paypal_button" style="visibility: hidden;">
                                                    @include('layouts.paypal')
                                                </div>
                                            </li>
                                        </ul>

                                        <div id="cheque_button" class="form-row place-order">

                                            <input type="button" onclick="document.forms['checkout'].submit();" data-value="Place order" value="Đặt hàng" id="place_order" name="woocommerce_checkout_place_order" class="button alt">


                                        </div>
                                        <script>
                                                    
                                                    RadioButtonCheck(true);
                                                    function RadioButtonCheck(stat = false) {
                                                        if (document.getElementById('payment_method_paypal').checked && InputStatus() == true) {
                                                            document.getElementById('paypal_button').style.visibility = 'visible';
                                                        }
                                                        else {
                                                            document.getElementById('paypal_button').style.visibility = 'hidden';
                                                            if (stat == false) {
                                                                alert('vui lòng nhập đầy đủ thông tin!');
                                                            }
                                                            
                                                        }

                                                        if (document.getElementById('payment_method_cheque').checked && InputStatus() == true) {
                                                            document.getElementById('cheque_button').style.visibility = 'visible';
                                                        }
                                                        else {
                                                            document.getElementById('cheque_button').style.visibility = 'hidden';
                                                            if (stat == false) {
                                                                alert('vui lòng nhập đầy đủ thông tin!');
                                                            }
                                                        }
                                                    }
                                                </script>
                                        <div class="clear"></div>

                                    </div>
                                </div>
                            </form>

                            
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>

@endsection