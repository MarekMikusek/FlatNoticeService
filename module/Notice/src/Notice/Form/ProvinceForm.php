<?php
/**
 * Created by PhpStorm.
 * user: Konto
 * Date: 2016-02-02
 * Time: 12:15
 */

namespace Notice\Form;

use Zend\Form\Form;

class ProvinceForm extends Form
{
    public function __construct($name = NULL)
    {
        parent::__construct('province');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'provinceName',
            'type'=>'text',
            'options'=>[
                'label'=>'Województwo'
            ]
        ]);

        $this->add([
            'name' => 'nameOtodom',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa Otodom'
            ]
        ]);

        $this->add([
            'name' => 'nameDomiporta',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa Domiporta'
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