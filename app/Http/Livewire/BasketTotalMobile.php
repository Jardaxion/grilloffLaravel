<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Cart;

class BasketTotalMobile extends Component
{
    public $total = 0;

    protected $listeners = ['refreshBasketMobile'];

    public function mount(){
        $this->total = Cart::getTotalQuantity();
    }

    public function refreshBasketMobile(){
        $this->total = Cart::getTotalQuantity();
    }
    public function render()
    {
        return view('livewire.basket-total-mobile');
    }
}
