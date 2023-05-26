<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\PromotionCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Str;
use function GuzzleHttp\Promise\all;

class PromotionCategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Категории на главной';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PromotionCategory());

        $grid->column('id', __('Id'));
        $grid->column('Название категории')->display(function(){
            return Category::where('id', '=', $this->name)->value('category');
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
        $show = new Show(PromotionCategory::findOrFail($id));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new PromotionCategory());
        $form->select('name','Название категории')->options(function(){
            return Category::pluck('category', 'id');
        });

        return $form;
    }


}
