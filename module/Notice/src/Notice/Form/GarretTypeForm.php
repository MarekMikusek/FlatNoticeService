<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 2016-02-15
 * Time: 13:52
 */

namespace Notice\Form;

use Zend\Form\Form;

class GarretTypeForm extends Form
{
    public function __construct($name = NULL)
    {
        parent::__construct('garretType');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'typeName',
            'type'=>'text',
            'options'=>[
                'label'=>'Poddasze'
            ]
        ]);

        $this->add([
            'name' => 'otodom',
            'type'=>'integer',
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