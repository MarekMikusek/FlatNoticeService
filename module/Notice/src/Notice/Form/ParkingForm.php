<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 2016-02-18
 * Time: 11:29
 */

namespace Notice\Form;


use Zend\Form\Form;

class ParkingForm extends Form
{
    public function __construct($name = NULL)
    {
        parent::__construct('parking');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'parkingName',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa'
            ]
        ]);

        $this->add([
            'name' => 'gumtree',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa Gumtree'
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