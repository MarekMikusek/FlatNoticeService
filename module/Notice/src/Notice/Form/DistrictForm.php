<?php

namespace Notice\Form;

use Zend\Form\Form;

class DistrictForm extends Form
{
    public function __construct($name = NULL)
    {
        parent::__construct('district');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'districtName',
            'type'=>'text',
            'options'=>[
                'label'=>'Powiat'
            ]
        ]);

        $this->add([
            'name' => 'otodom',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa Otodom'
            ]
        ]);

        $this->add([
            'name' => 'domiporta',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa Domiporta'
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