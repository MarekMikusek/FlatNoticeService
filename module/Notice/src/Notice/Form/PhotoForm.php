<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 2016-02-19
 * Time: 10:03
 */

namespace Notice\Form;

use Zend\Form\Form;

class LinkForm extends Form
{
    public function __construct($name = NULL)
    {
        parent::__construct('link');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'fileName',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa pliku'
            ]
        ]);

        $this->add([
            'name' => 'link',
            'type'=>'text',
            'options'=>[
                'label'=>'Link do zdjęcia'
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