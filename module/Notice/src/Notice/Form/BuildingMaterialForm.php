<?php

namespace Notice\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;

class BuildingMaterialForm extends Form
{
    public function __construct($name = NULL)
    {
        parent::__construct('building-material');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'material',
            'type' => 'text',
            'options' => [
                'label' => 'Nazwa materiału'
            ]
        ]);

        $this->add([
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => [
                'value' => 'Go',
                'id' => 'submitbutton'
            ]
        ]);

        $inputFilter = new InputFilter();
        $inputFilter->add([
            'name' => 'material',
            'required' => true,
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ],
            'validators' => [
                [
                    'name' => 'StringLength',
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                        'unique'=>true,
                    ]
                ]
            ]
        ]);
        $this->setInputFilter($inputFilter);
    }
}