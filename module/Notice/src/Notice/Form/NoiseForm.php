<?php

namespace Notice\Form;

use Zend\Form\Form;

class NoiseForm extends Form
{
    public function __construct($name = NULL)
    {
        parent::__construct('noise');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'domiporta',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa'
            ]
        ]);

        $this->add([
            'name' => 'otodom',
            'type'=>'text',
            'options'=>[
                'label'=>'Oznaczenie wg Otodom'
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