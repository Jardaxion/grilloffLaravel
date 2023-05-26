<?php

namespace App\Admin\Controllers;

use App\Models\Text;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TextController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Тексты сайта';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Text());
        $grid->model()->orderBy('id','DESC');
        $grid->column('output', __('Вывод'))->display(function (){
            return '{!! Text("'.$this->slug.'") !!}';
        });
        $grid->column('title', __('Описание'));
        $grid->column('textarea', __('Текст'));


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
        $show = new Show(Text::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('textarea', __('Textarea'));
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
        $form = new Form(new Text());

        $form->text('title', __('Описание'))->required();
        $form->textarea('textarea', __('Текст'));

        return $form;
    }


    public function uiUpdated(){
        $text = Text::find(request('text'));
        $text->textarea = request('val');
        $text->save();
        response()->json(['success' => 'success']);
    }
}
