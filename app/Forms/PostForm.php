<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class PostForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', Field::TEXT, [
                'rules' => 'required|min:5|max:150'
            ])
            ->add('content', Field::TEXTAREA, [
                'rules' => 'max:30000'
            ])
            ->add('publish', Field::BUTTON_SUBMIT, [
                'attr' => ['class' => 'btn-primary btn']
            ]);
    }

}
