<?php

namespace Notice\Form;

use Zend\Form\Form;

class HeatingForm extends Form
{
    public function __construct($name = NULL)
    {
        parent::__construct('heating');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'heatingOtodom',
            'type'=>'text',
            'options'=>[
                'label'=>'Oznaczenie wg Otodom'
            ]
        ]);

        $this->add([
            'name' => 'heatingName',
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