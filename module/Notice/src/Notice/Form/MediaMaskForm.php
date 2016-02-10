<?php
/**
 * Created by PhpStorm.
 * User: Konto
 * Date: 2016-02-09
 * Time: 12:52
 */

namespace Notice\Form;


class MediaMaskForm
{
    public function __construct($name = NULL)
    {
        parent::__construct('mediaMask');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'mediaMask',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa medium'
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