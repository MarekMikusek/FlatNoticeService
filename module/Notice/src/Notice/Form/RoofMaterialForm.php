<?php
/**
 * Created by PhpStorm.
 * user: Konto
 * Date: 2016-02-02
 * Time: 12:19
 */

namespace Notice\Form;


use Zend\Form\Form;

class RoofMaterialForm extends Form
{
    public function __construct($name = NULL)
    {
        parent::__construct('roofMaterial');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'roofmaterialName',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa materiału dachu '
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