<?php

namespace Notice\Form;

use Zend\Form\Form;

class TypeForm extends Form
{
    protected $objectManager;

    public function __construct($name = NULL)
    {
        parent::__construct('type');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'name',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa'
            ]
        ]);

        $this->add([
            'name'=>'otodom',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa OTODom'
            ]
        ]);

        $this->add([
            'name'=>'domiporta',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa Domiporta'
            ]
        ]);

        $this->add([
            'name'=>'gumtree',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa Gumtree'
            ]
        ]);

        $this->add([
            'name'=>'submit',
            'type'=>'Submit',
            'attributes'=>[
                'value'=>'Go',
                'id'=>'submitbutton'
            ]
        ]);
    }

}
