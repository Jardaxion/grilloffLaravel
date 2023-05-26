<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class BasketProducts extends Component
{
    public $carts;

    protected $listeners = ['refreshBasketProducts'];

    public function mount(){
        $this->carts = Cart::getContent()->toArray();
    }

    public function refreshBasketProducts(){
        $this->carts = Cart::getContent()->toArray();
    }

    public function render()
    {
        return view('livewire.basket-products');
    }
}
