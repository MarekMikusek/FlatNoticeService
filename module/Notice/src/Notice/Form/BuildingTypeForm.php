<?php

namespace Notice\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;

class BuildingTypeForm extends Form
{
    protected $objectManager;

    public function __construct($name = NULL)
    {
        parent::__construct('buildingType');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'type',
            'type'=>'text',
            'options'=>[
                'label'=>'Rodzaj nieruchomości'
            ]
        ]);

        $this->add([
            'name' => 'nameOtodom',
            'type'=>'text',
            'options'=>[
                'label'=>'Rodzaj nieruchomości Otodom'
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

        $inputFilter = new InputFilter();
        $inputFilter->add([
            'name' => 'type',
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
