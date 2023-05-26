<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class BasketProductsMobile extends Component
{
    public $carts;

    protected $listeners = ['refreshBasketProductsMobile'];

    public function mount(){
        $this->carts = Cart::getContent()->toArray();
    }

    public function refreshBasketProductsMobile(){
        $this->carts = Cart::getContent()->toArray();
    }
    public function render()
    {
        return view('livewire.basket-products-mobile');
    }
}
