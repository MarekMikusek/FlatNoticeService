<?php

namespace Notice\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;

class BuildingOwnershipForm extends Form
{
    public function __construct($name = NULL)
    {
        parent::__construct('building-ownership');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'ownership',
            'type' => 'text',
            'options' => [
                'label' => 'Rodzaj własności'
            ]
        ]);

        $this->add([
            'name' => 'nameOtodom',
            'type' => 'text',
            'options' => [
                'label' => 'Nazwa wg Otodom'
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