<?php

namespace Notice\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;

class LocationOtodomForm extends Form
{
    protected $objectManager;

    public function __construct($name = NULL)
    {
        parent::__construct('location-otodom');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'locationName',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa lokalizacji'
            ]
        ]);

        $this->add([
            'name' => 'location',
            'type'=>'text',
            'options'=>[
                'label'=>'Lokalizacja Otodom'
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

        $inputFilter = new InputFilter();
        $inputFilter->add([
            'name' => 'locationName',
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

        $inputFilter->add([
            'name' => 'location',
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