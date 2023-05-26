<?php


namespace App\Services;
use Illuminate\Support\Facades\View;

class PHPMailService
{
    protected $view;

    protected $to;

    protected $subject;

    protected $from;

    protected $name;

    protected $body;

    /**
     * Тело сообщения, его содержание в string
     * @param string $body
     * @return $this
     */
    public function body(string $body){
        $this->body = $body;

        return $this;
    }

    /**
     * Иницилизирует вьюху для метода body()
     * @param string $view
     * @param array $data
     * @return $this
     */
    public function view(string $view,array $data)
    {
        $this->view = View::make($view, $data);

        $this->body($this->view->render());

        return $this;
    }

    /**
     * Если одно сообщение, то просто строка 'example@mail.com'
     * Если массив,то перечисляем адреса в массиве ['example@mail.com','example_cc@mail.com','example_ccc@mail.com']
     * @param string|array $to
     * @return $this
     */
    public function to(string | array $to)
    {
        if(is_string($to)){
            $this->to = $to;
        }

        if(is_array($to)){
            $this->to = implode(',',$to);
        }

        return $this;
    }

    /**
     * Тема письма
     * @param string $subject
     * @return $this
     */
    public function subject(string $subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * От кого. Почта
     * @param string $from
     * @param string|null $name
     * @return $this
     */
    public function from(string $from,string $name=null)
    {
        $this->from = $from;

        $this->name = $name;

        return $this;
    }

    public function send(){
        $to = $this->to;
        $subject =  $this->subject;
        $message = $this->body;
        $from = $this->from;
        //Дописать возможность изменять header
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: {$from} <{$from}>\r\n";
        $headers .= "Reply-To: {$from}\r\n";
        return mail ($to, $subject, $message, $headers);

    }

}
