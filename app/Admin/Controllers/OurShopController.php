<?php

namespace App\Admin\Controllers;

use App\Models\OurShop;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OurShopController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Наши магазины';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new OurShop());

        $grid->column('id', __('id'));
        $grid->column('city', __('Город'))->editable();
        $grid->column('adress', __('Адрес'))->editable();
        $grid->column('phone', __('Телефон'))->editable();

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
        $show = new Show(OurShop::findOrFail($id));

        $show->field('id', __('id'));
        $show->field('city', __('Город'));
        $show->field('adress', __('Адрес'));
        $show->field('phone', __('Телефон'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new OurShop());

        $form->text('city', __('Город'));
        $form->text('adress', __('Адрес'));
        $form->mobile('phone', __('Телефон'));

        $form->display('', 'График работы');
        $form->text('fromTo', __('Дни недели'));
        $form->text('fromToDate', __('Время работы'));
        $form->text('weekend', __('Выходной'));

        return $form;
    }
}
