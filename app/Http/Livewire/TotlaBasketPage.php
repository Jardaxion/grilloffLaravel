<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class TotlaBasketPage extends Component
{
    public $total;

    protected $listeners = ['refreshTotalBasketPage'];

    public function mount(){
        $this->total = Cart::getTotal();
    }

    public function refreshTotalBasketPage(){
        $this->total = Cart::getTotal();
    }

    public function render()
    {
        return view('livewire.totla-basket-page');
    }
}
