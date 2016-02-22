<?php

namespace Notice\Form;


use Zend\Form\Form;

class MediasForm extends Form
{
    public function __construct($name = NULL)
    {
        parent::__construct('medias');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'media',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa medium'
            ]
        ]);

        $this->add([
            'name'=>'submit',
            'type'=>'Submit',
            'attributes'=>[
                'value'=>'Zapisz',
                'id'=>'submitbutton'
            ]
        ]);
    }

}