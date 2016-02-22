<?php

namespace Notice\Form;

use Zend\Form\Form;

class WindowsForm extends Form
{
    public function __construct($name = NULL)
    {
        parent::__construct('windows');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'windowsMaterial',
            'type'=>'text',
            'options'=>[
                'label'=>'Typ okien'
            ]
        ]);

        $this->add([
            'name' => 'otodom',
            'type'=>'integer',
            'options'=>[
                'label'=>'Nazwa wg Otodom'
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