<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 2016-02-15
 * Time: 13:21
 */

namespace Notice\Form;

use Zend\Form\Form;

class ConstructionStatusForm extends Form
{

    public function __construct($name = NULL)
    {
        parent::__construct('constructionStatus');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'statusName',
            'type'=>'text',
            'options'=>[
                'label'=>'Stan budowy'
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