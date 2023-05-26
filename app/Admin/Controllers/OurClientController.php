<?php

namespace App\Admin\Controllers;

use App\Models\OurClient;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OurClientController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Наши клиенты';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new OurClient());

        $grid->column('id', __('id'));
        $grid->column('img', __('Логотип клиента'))->display(function ($val){
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
        $show = new Show(OurClient::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('img', __('Img'));
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
        $form = new Form(new OurClient());

        $form->image('img', __('Логотип клиента'));

        return $form;
    }
}
