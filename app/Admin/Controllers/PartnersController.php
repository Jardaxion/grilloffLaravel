<?php

namespace App\Admin\Controllers;

use App\Models\Partner;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PartnersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Partner';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Partner());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Логотип партнера'))->display(function ($val){
            return '<img width="100" src="'.image($val).'">';
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
        $show = new Show(Partner::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Partner());

        $form->image('image', __('Логотип партнера'));

        return $form;
    }
}
