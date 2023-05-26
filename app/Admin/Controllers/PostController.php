<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Rubric;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PostController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Новости';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Превью'))->image();
        $grid->column('title', __('Заголовок'));
        $grid->column('category.category', __('Категория'));
        $grid->column('theme', __('Тема'));


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
        $show = new Show(Post::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('slug', __('Slug'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('content', __('Content'));
        $show->field('image', __('Image'));
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
        $form = new Form(new Post());

        $form->column(1/2, function ($form) {
            $form->text('title', __('Заголовок'));
            $form->textarea('description', __('Короткое описание'));
//            $form->select('category_id','Категория')
//                ->options(Category::all()->pluck('category','id'));
        });

        $form->column(1/2, function ($form) {
            $form->tags('tags','Тэги');
            $form->date('date', 'Дата');
            $form->image('image', __('Превью'));
            $form->image('image_in_post', __('Изображение в новосте'));

        });

        $form->column(12, function ($form) {
            $form->ckeditor('content', __('Содержание'));

        });






//        $form->multipleSelect('rubrics','Рубрики')->options(Rubric::all()->pluck('name','id'));
        return $form;
    }
}
