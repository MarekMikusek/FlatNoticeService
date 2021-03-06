<?php

namespace Notice\Form;


class MediaSiteForm
{
    public function __construct($name = NULL)
    {
        parent::__construct('mediaSite');
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