<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\Complects;

use \App\Models\Product;

class ComplectsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Комплекты';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Complects());

        $grid->column('title', __('Заголовок'));
        $grid->column('image', __('Изображение'))->image();
        $grid->column('url', __('Ссылка'));

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
        $show = new Show(Complects::findOrFail($id));

        $show->field('title', __('Заголовок'));
        $show->field('image', __('Image'));
        $show->field('url', __('Ссылка'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Complects());

        $form->text('title', __('Заголовок'));
        $form->image('image', __('Image'));
        // $form->text('url', __('Ссылка'));
        $form->select('url', __('Ссылка'))->options(Product::pluck('name', 'slug'));

        return $form;
    }
}
