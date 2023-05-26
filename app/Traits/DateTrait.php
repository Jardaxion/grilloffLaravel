<?php
namespace App\Traits;

use Illuminate\Support\Arr;

trait DateTrait{

    /**
     * @return string[]
     */
    public function getARRRUSMounts(){
        return [
            'январь',
            'февраль',
            'март',
            'апрель',
            'май',
            'июнь',
            'июль',
            'август',
            'сентябрь',
            'октябрь',
            'ноябрь',
            'декабрь'
        ];
    }

    /**
     * @param integer $month
     * @return array|\ArrayAccess|mixed
     */
    public function getRUSMounts($month){
       return Arr::get($this->getARRRUSMounts(),$month-1);
    }

    /**
     * Определяет правильное с точки зрения русского языка окончание месяца
     * @param int $num
     * @param array $postfixes
     * @return string
     */
    public function postfixMaunts($num, $postfixes = ['месяц', 'месяца', 'месяцев'])
    {
        //Делим число без остатка на 100
        $num = $num % 100;

        //Если больше 19, делим его без остатка ещё раз, уже на 10
        if ($num > 19)
        {
            $num = $num % 10;
        }

        //В зависимости от того, какие числа остались, возвращаем значения
        switch ($num)
        {
            case 1:
                return $postfixes[0];

            case 2: case 3: case 4:
            return $postfixes[1];

            default:
                return $postfixes[2];
        }
    }


}
