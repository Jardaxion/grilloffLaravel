<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class BuyButtonProductPage extends Component
{
    public $product, $isActive, $countProduct, $countProductInput;

    public function mount($product){
        $this->product = $product;
        $this->isActive = false;
        $this->countProduct = 0;

        if(!empty(Cart::get($this->product->id))){
            $this->countProduct = Cart::get($this->product->id)->quantity;
        }

        $this->countProductInput = $this->countProduct;

        if($this->countProduct > 0){
            $this->isActive = true;
        }
    }

    public function add(){
        Cart::add(array(
            'id' => $this->product->id,
            'slug' => $this->product->slug,
            'name' => $this->product->name,
            'price' => $this->product->price,
            'article' => $this->product->article,
            'image' => $this->product->image,
            'link' => route('product',$this->product->slug),
            'quantity' => 1,
            'associatedModel' => $this->product
        ));

        $this->update();
    }

    public function minus(){
        if($this->countProduct == 1){
            Cart::remove($this->product->id);
        } else {
            Cart::update($this->product->id,array(
                'quantity' => -1
            ));
        }

        $this->update();
    }

    public function plus(){
        Cart::update($this->product->id,array(
            'quantity' => +1
        ));

        $this->update();
    }

    private function update(){
        $this->countProduct = 0;
        $this->isActive = true;

        if(Cart::get($this->product->id) != null){
            $this->countProduct = Cart::get($this->product->id)->quantity;
        }

        $this->countProductInput = $this->countProduct;

        if($this->countProduct == 0){
            $this->isActive = false;
        } 

        $this->emit('refreshBasket');
        $this->emit('refreshBasketMobile');
    }
    public function render()
    {
        return view('livewire.buy-button-product-page');
    }
}
