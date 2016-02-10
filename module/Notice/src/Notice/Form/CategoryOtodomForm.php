<?php
/**
 * Created by PhpStorm.
 * user: Konto
 * Date: 2016-02-02
 * Time: 11:51
 */

namespace Notice\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;

class CategoryOtodomForm extends Form
{
    protected $objectManager;

    public function __construct($name = NULL)
    {
        parent::__construct('category-otodom');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'categoryName',
            'type'=>'text',
            'options'=>[
                'label'=>'Opis'
            ]
        ]);

        $this->add([
            'name' => 'category',
            'type'=>'text',
            'options'=>[
                'label'=>'Kategoria wg Otodom'
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
            'name' => 'description',
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