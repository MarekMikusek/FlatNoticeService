<?php

namespace Notice\Form;

use Zend\Form\Form;

class SecurityForm extends Form
{
    public function __construct($name = NULL)
    {
        parent::__construct('security');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'securityName',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa zabezpieczenia'
            ]
        ]);

        $this->add([
            'name'=>'Otodom',
            'type'=>'integer',
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