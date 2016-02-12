<?php

namespace Notice\Form;

use Zend\Form\FOrm;

class FloorForm extends Form
{
    public function __construct($name = NULL)
    {
        parent::__construct('floor');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'floor',
            'type'=>'text',
            'options'=>[
                'label'=>'Piętro'
            ]
        ]);

        $this->add([
            'name'=>'otodom',
            'type'=>'integer',
            'options'=>[
                'label'=>'Piętro wg Otodom'
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