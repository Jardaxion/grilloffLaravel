<?php

namespace App\Admin\Controllers;

use App\Models\Property;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PropertyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Свойства';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Property());

        $grid->column('id', __('Id'));
        $grid->column('property', __('Свойство'));
        $grid->column('is_active', __('Статус'))->bool();
        $grid->column('is_product', __('Показать в товаре'))->bool();
        $grid->column('is_filter', __('Показать в фильтре'))->bool();



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
        $show = new Show(Property::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('property', __('Property'));
        $show->field('value', __('Value'));


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Property());

        $form->text('property', __('Свойство'));
        $states = [
            'on'  => ['value' => 1, 'text' => 'Активный', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'Отключен', 'color' => 'danger'],
        ];

        $form->switch('is_active','Статус')->states($states)->default(1);
        $form->switch('is_product','Показать в товаре')->states($states)->default(1);
        $form->switch('is_filter','Показать в фильтре')->states($states)->default(1);

        $form->table('value','Значения', function ($form) {
            $form->text('val','Значение');
            $form->textarea('options','Доп. поле');

        });

        // callback after form submission


        return $form;
    }
}
