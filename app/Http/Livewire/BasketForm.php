<?php

namespace App\Http\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;

use Livewire\Component;

use Mail;
use App\Mail\OrderAdmin;
use App\Mail\OrderClient;

use Cart;

class BasketForm extends Component
{
    use LivewireAlert;
    public $name, $phone, $email, $comment, $address, $city, $street, $home, $isHouse, $payMethod;

    public function submit(){
        if(strlen($this->name) < 2){
            $this->war('ФИО должно быть больше 1 символа');
            return 0;
        }

        if(strlen($this->phone) == 0){
            $this->war('Поле телефон должо быть заполнено!');
            return 0;
        }

        if(strlen($this->email) == 0){
            $this->war('Поле email должо быть заполнено!');
            return 0;
        }

        if(!str_contains($this->email, '@') || !str_contains($this->email, '.')){
            $this->war('Введите поле email корректно');
            return 0;
        }

        if(strlen($this->address) == 0){
            $this->war('Поле адрес должо быть заполнено!');
            return 0;
        }

        if(strlen($this->city) == 0){
            $this->war('Поле город должо быть заполнено!');
            return 0;
        }

        if(strlen($this->street) == 0){
            $this->war('Поле улица должо быть заполнено!');
            return 0;
        }

        if(strlen($this->home) == 0){
            $this->war('Поле дом должо быть заполнено!');
            return 0;
        }

        if(strlen($this->payMethod) == 0){
            $this->war('Выбирите способ оплаты');
            return 0;
        }

        switch($this->payMethod){
            case 'online':
                $this->sendMail();
                break;
            case 'nal':
                $this->sendMail();
                break;
        }
    }

    private function checkReq($input){
        return strlen($input) == 0;
    }

    private function sendMail(){
        // $this->sendMailAdmin();
        $this->sendMailClient();
    }

    private function sendMailAdmin(){
        $comment = $this->comment;
        $isHome = 'Квартира';
        $payMethod = 'Онлайн';
        
        if($this->isHouse){
            $isHome = 'Частный дом';
        }

        if($this->payMethod == 'nal'){
            $payMethod = 'Наличка';
        }

        if($this->comment == ''){
            $comment = 'Комментарий пуст';
        }

        $order = [
            'name' => $this->name, 
            'phone' => $this->phone, 
            'email' => $this->email, 
            'comment' => $comment, 
            'address' => $this->address, 
            'city' => $this->city, 
            'street' => $this->street, 
            'home' => $this->home, 
            'isHome' => $isHome, 
            'payMethod' => $payMethod, 
        ];

        Mail::to(config('mails.to'))->send(new OrderAdmin($order));
    }

    private function sendMailClient(){


        $order = [
            'name' => $this->name,
            'phone' => $this->phone, 
            'email' => $this->email,
            'city' => $this->city, 
            'street' => $this->street, 
            'home' => $this->home
        ];

        $carts = Cart::getContent();

        $all = ['order' => $order, 'carts' => $carts];

        Mail::to($this->email)->send(new OrderClient($all));

        $this->alert('success', 'Ожидайте, когда с вами сваяжется наш менеджер');
    }

    private function war($text){
        $this->alert('warning', $text);
    }

    public function render()
    {
        return view('livewire.basket-form');
    }
}
