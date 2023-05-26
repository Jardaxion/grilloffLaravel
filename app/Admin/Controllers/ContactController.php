<?php

namespace App\Admin\Controllers;

use App\Models\Contact;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ContactController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Контакты';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Contact());

        $grid->column('name', __('Имя'));
        $grid->column('contact', __('Значение'));

        $grid->column('attribute', __('Атрибут'));
        $grid->column('image', __('Иконка'));
        $grid->column('slug', __('Вывод'))->display(function (){
            return "<p>Contact::get('{$this->slug}')</p>";
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
        $show = new Show(Contact::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('contact', __('Contact'));
        $show->field('attribute', __('Attribute'));
        $show->field('image', __('Image'));
        $show->field('slug', __('Slug'));
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
        $form = new Form(new Contact());
        $form->text('name', __('Имя'));
        $form->textarea('contact', __('Значение'));
        $form->textarea('attribute', __('Атрибут'));
        $form->image('image', __('Иконка'));

        return $form;
    }
}

