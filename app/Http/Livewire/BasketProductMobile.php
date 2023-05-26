<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class BasketProductMobile extends Component
{
    public $cart, $fullPrice, $countProduct;

    public function mount($cart){
        $this->cart = $cart;
        
        $this->countProduct = 0;
        if(Cart::get($this->cart['id']) != null){
            $this->countProduct = Cart::get($this->cart['id'])->quantity;
        }

        $this->fullPrice = $this->cart['price'] * $this->cart['quantity'];
    }

    public function clear(){
        Cart::remove($this->cart['id']);

        $this->emits();
    }

    public function minus(){
        if($this->countProduct == 1){
            Cart::remove($this->cart['id']);
        } else {
            Cart::update($this->cart['id'],array(
                'quantity' => -1
            ));
        }

        $this->update();
    }

    public function plus(){
        Cart::update($this->cart['id'],array(
            'quantity' => +1
        ));

        $this->update();
    }

    private function update(){
        $this->countProduct = 0;

        if(Cart::get($this->cart['id']) != null){
            $this->countProduct = Cart::get($this->cart['id'])->quantity;
        }

        $this->fullPrice = $this->cart['price'] * $this->countProduct;

        if($this->countProduct == 0){
            $this->clear();
        } 

        $this->emits();
    }

    private function emits(){
        $this->emit('refreshBasket');
        $this->emit('refreshTotalBasket');
        $this->emit('refreshTotalBasketPage');
        $this->emit('refreshBasketPage');
        $this->emit('refreshBasketMobile');
    }

    public function render()
    {
        return view('livewire.basket-product-mobile');
    }
}
