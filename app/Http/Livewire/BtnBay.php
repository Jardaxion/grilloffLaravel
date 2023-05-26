<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Cart;
class BtnBay extends Component
{
    public $product;

    public function mount(Product $product){
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.btn-bay');
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

        $this->dispatchBrowserEvent('add-product', ['message' => 'Товар успешно добавлен']);
        $this->emit('refreshBasket');
        $this->emit('refreshBasketMobile');

    }
}
