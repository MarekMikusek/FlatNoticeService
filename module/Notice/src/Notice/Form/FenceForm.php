<?php

namespace Notice\Form;

use Zend\Form\Form;

class FenceForm extends Form

{
    public function __construct($name = NULL)
    {
        parent::__construct('fence');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'fenceName',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa'
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