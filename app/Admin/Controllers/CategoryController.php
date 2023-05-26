<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Категории';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category());

        $grid->model()->orderSort();

        $grid->column('id', __('Id'));
        $grid->column('category', __('Категория'))->editable();
        $grid->column('image', __('Картинка'))->image();

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
        $show = new Show(Category::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category', __('Category'));



        $show->field('slug', __('Slug'));


        return $show;
    }

    /**
     * Make a form builder.
     *
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Category());

        $form->text('category', __('Категория'));
        $form->image('image', __('Картинка'));

        return $form;
    }
}
