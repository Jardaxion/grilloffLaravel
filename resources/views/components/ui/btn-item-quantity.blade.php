<?php
$cart = \Darryldecode\Cart\Facades\CartFacade::get($product->id);

$quantity = $cart? $cart->quantity : 0 ;
?>
<div product-item="{{ $product->id }}" @if(!$cart) style="display: none" @endif
class="catalog-item__quanity">
    <span _minus_product_="{{ $product->id }}" class="_minus">
        <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.46967 5.46967C0.176777 5.76256 0.176777 6.23744 0.46967 6.53033L5.24264 11.3033C5.53553 11.5962 6.01041 11.5962 6.3033 11.3033C6.59619 11.0104 6.59619 10.5355 6.3033 10.2426L2.06066 6L6.3033 1.75736C6.59619 1.46447 6.59619 0.989592 6.3033 0.696699C6.01041 0.403806 5.53553 0.403806 5.24264 0.696699L0.46967 5.46967ZM2 5.25L1 5.25L1 6.75L2 6.75L2 5.25Z" fill="white"></path>
        </svg>
    </span>
    <input product-input="{{ $product->id }}" onchange="updateCart({{ $product->id }},this.value)"
           type="text"
           name="quanity"
           value="{{ $quantity }}">
    <span _plus_product_="{{ $product->id }}"  class="_plus">
        <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.53033 6.53033C6.82322 6.23744 6.82322 5.76256 6.53033 5.46967L1.75736 0.696699C1.46447 0.403805 0.989593 0.403805 0.6967 0.696698C0.403807 0.989592 0.403807 1.46447 0.6967 1.75736L4.93934 6L0.696698 10.2426C0.403805 10.5355 0.403805 11.0104 0.696698 11.3033C0.989591 11.5962 1.46447 11.5962 1.75736 11.3033L6.53033 6.53033ZM5 6.75L6 6.75L6 5.25L5 5.25L5 6.75Z" fill="white"></path>
        </svg>
    </span>
</div>
