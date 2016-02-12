<?php

namespace Notice\Form;

use Zend\Form\Form;

class UserForm extends Form
{
    protected $objectManager;

    public function __construct($name = NULL)
    {
        parent::__construct('user');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'userName',
            'type'=>'text',
            'options'=>[
                'label'=>'Imię i nazwisko'
            ]
        ]);

        $this->add([
            'name'=>'phone',
            'type'=>'text',
            'options'=>[
                'label'=>'Telefon'
            ]
        ]);

        $this->add([
            'name'=>'email',
            'type'=>'text',
            'options'=>[
                'label'=>'email'
            ]
        ]);

        $this->add([
            'name'=>'licence',
            'type'=>'text',
            'options'=>[
                'label'=>'licence'
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
            'name' => 'phone',
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
            'name' => 'email',
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
                        'unique'=>true,
                    ]
                ]
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
            'name' => 'licence',
            'required' => false,
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ],
            'validators' => [
                [
                    'name' => 'StringLength',
                    'options' => [
                        'encoding' => 'UTF-8',
                        'unique'=>true,
                    ]
                ]
            ]
        ]);

        $this->setInputFilter($inputFilter);
    }

}
