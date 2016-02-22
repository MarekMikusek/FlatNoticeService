<?php

namespace Notice\Form;

use Zend\Form\Form;

class ExtraForm extends Form
{
    public function __construct($name = NULL)
    {
        parent::__construct('extras');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'extras',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa'
            ]
        ]);

        $this->add([
            'name' => 'flatOtodom',
            'type'=>'text',
            'options'=>[
                'label'=>'Oznaczenie Otodom/mieszkanie'
            ]
        ]);

        $this->add([
            'name' => 'houseOtodom',
            'type'=>'text',
            'options'=>[
                'label'=>'Oznaczenie Otodom/dom'
            ]
        ]);

        $this->add([
            'name' => 'commercialOtodom',
            'type'=>'text',
            'options'=>[
                'label'=>'Oznaczenie Otodom/lokal'
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