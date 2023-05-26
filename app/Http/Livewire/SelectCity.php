<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\Cities;
use Log;

class SelectCity extends Component
{
    public $city;

    public function selectCity($newCity){
        session(['city' => $newCity]);

        Log::alert($newCity);
    }

    public function render()
    {
        $this->city = session('city') ? session('city') : Cities::get()[0]->city;
        
        return view('livewire.select-city');
    }
}
