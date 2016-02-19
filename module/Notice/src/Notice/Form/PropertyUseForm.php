<?php

namespace Notice\Form;

use Zend\Form\Form;

class PropertyUseForm extends Form
{

    public function __construct($name = NULL)
    {
        parent::__construct('PropertyUse');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'propertyUse',
            'type'=>'text',
            'options'=>[
                'label'=>'Sposób użytkowania lokalu użytkowego'
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