<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\PopularCatalogs;
use \App\Models\Category;

class PopularCatalogController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Популярыне каталоги';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PopularCatalogs());

        $grid->column('id', __('id'));
        $grid->column('Категория')->display(function(){
            return Category::where('slug', '=', $this->title)->value('category');
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
        $show = new Show(PopularCatalogs::findOrFail($id));

        $show->field('id', __('id'));
        $show->field('Заголовок')->display(function(){
            return Category::where('slug', '=', $this->title)->value('category');
        });

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new PopularCatalogs());

        $form->select('title', __('Категория'))->options(Category::pluck('category', 'slug'));

        return $form;
    }
}
