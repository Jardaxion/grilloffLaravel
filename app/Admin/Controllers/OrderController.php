<?php

namespace App\Admin\Controllers;

use App\Models\Order;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Arr;

class OrderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Заказы';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Order());

        $grid->column('id', __('ID'));
        $grid->column('status', __('Статус'))->display(function ($val){
            return Arr::get(Order::STATUS,$val);
        });

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
        $show = new Show(Order::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('status', __('Status'));
        $show->field('delivery', __('Delivery'));
        $show->field('order', __('Order'));
        $show->field('user_id', __('User id'));
        $show->field('total', __('Total'));
        $show->field('cart_total', __('Cart total'));
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
        $form = new Form(new Order());

        $form->number('status', __('Status'));
        $form->textarea('delivery', __('Delivery'));
        $form->textarea('order', __('Order'));
        $form->textarea('user_id', __('User id'));
        $form->decimal('total', __('Total'));
        $form->decimal('cart_total', __('Cart total'));

        return $form;
    }
}
