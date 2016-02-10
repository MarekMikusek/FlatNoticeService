<?php

namespace Notice\Form;

use Zend\Form\Form;

class CountryForm extends Form
{
    public function __construct($name = NULL)
    {
        parent::__construct('country');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'countryName',
            'type'=>'text',
            'options'=>[
                'label'=>'Kraj'
            ]
        ]);

        $this->add([
            'name' => 'Otodom',
            'type'=>'text',
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