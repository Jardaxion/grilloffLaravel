<?php

namespace App\Admin\Controllers;

use App\Models\Delivery;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Arr;

class DeliveryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Доставка';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Delivery());

        $grid->column('id', __('Id'));
        $grid->column('delivery', __('Название'));
        $grid->column('type', __('Тип'))->display(function ($val){
            return Arr::get(Delivery::TYPE_PRICE,$val);
        });
//        $grid->column('price', __('Цена'));


        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Delivery::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('delivery', __('Delivery'));
        $show->field('type', __('Type'));
        $show->field('price', __('Price'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Delivery());

        $form->text('delivery', __('Название'));
        $form->radio('type','Тип доставки')
            ->options(Delivery::TYPE_PRICE)
            ->when('custom', function (Form $form) {

                $form->decimal('price', __('Цена'));

            });

        return $form;
    }
}
