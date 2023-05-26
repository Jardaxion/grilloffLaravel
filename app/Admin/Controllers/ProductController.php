<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Offer;
use App\Models\PriceOption;
use App\Models\PriceOptionItem;
use App\Models\Product;
use App\Models\Property;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\Size;
use App\Models\Color;
use App\Admin\Actions\Product\Replicate;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Товары';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());
        $grid->model()->orderBy('id','DESC');
        $grid->column('name', __('Имя'));
        $grid->column('price', __('Цена'))->editable();
        $grid->column('image', 'Картинка')->image();
        $grid->column('isAviable', 'В наличии')->switch(['on' => ['value' => 1, 'text' => 'Да', 'color' => 'success'], "off" => ['value' => 0, 'text' => 'Нет', 'color' => 'danger']]);

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
//        $show = new Show(Product::findOrFail($id));
//        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());
        $form->column(12, function ($form) {
            $form->multipleSelect('categories', __('Категории'))
                ->options( Category::all()->pluck('category','id'));
        });

        $form->column(1/2, function ($form) {
            $form->text('name', __('Имя'))->rules('required')->required();
            $form->text('article', __('Артикул'))->rules('required')->required();
            $form->switch('isAviable', __('В наличии'))->states(['on' => ['value' => 1, 'text' => 'Да', 'color' => 'success'], "off" => ['value' => 0, 'text' => 'Нет', 'color' => 'danger']]);
        });

        $form->column(1/2, function ($form) {
            $form->text('price','Цена')->rules('required');
            $form->text('oldPrice','Старая цена');
        });

        $form->column(12, function($form){
            $form->hasMany('char', 'Характеристики',function($form){
                $form->text('title', __('Название характеристики'));
                $form->text('char', __('Характеристика'));
            });
        });


        $form->column(12, function ($form) {
            $form->ckeditor('description','Описание');
        });

        $form->column(12, function ($form) {
            $form->image('image', __('Превью в карточке товара'))->rules('required');
            $form->multipleImage('images', __('Изображения товара'))->removable();
        });

        $form->column(12, function ($form) {
            $form->select('catalogBottom', __('Категория внизу страницы'))->options(Category::pluck('category', 'id'));
        });



        return $form;


    }
}
