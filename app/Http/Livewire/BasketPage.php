<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class BasketPage extends Component
{
    public $total = 0;

    protected $listeners = ['refreshBasketPage'];

    public function mount(){
        $this->total = Cart::getTotalQuantity();
    }

    public function refreshBasketPage(){
        $this->total = Cart::getTotalQuantity();
    }

    public function render()
    {
        return view('livewire.basket-page');
    }
}
