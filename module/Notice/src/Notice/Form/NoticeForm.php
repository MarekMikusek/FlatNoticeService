<?php

namespace Notice\Form;

use Zend\Form\Form;

class NoticeForm extends Form
{
    protected $objectManager;

    public function __construct($name = NULL)
    {
        parent::__construct('notice');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add(
            [
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'name' => 'salesUnit',
                'options' => [
                    'label' => 'Nieruchomość',
                    'object_manager' => $this->getObjectManager(),
                    'target_class' => 'notice\Model\SalesUnit',
                    'property' => 'id',
                ],
            ]
        );

        $this->add([
            'name'=>'isChanged',
            'type'=>'hidden',
        ]);


        $this->add([
            'name'=>'isActive',
            'type'=>'boolean',

        ]);

        $this->add([
            'name'=>'isPubslishedOnOtodom',
            'type'=>'boolean',
            'options'=>[
                'label'=>'Opublikować na OtoDom?'
            ]
        ]);

        $this->add([
            'name'=>'isPubslishedOnOtodom',
            'type'=>'boolean',
            'options'=>[
                'label'=>'Opublikować na Gumtree?'
            ]
        ]);

        $this->add([
            'name'=>'isPubslishedOnDomiporta',
            'type'=>'boolean',
            'options'=>[
                'label'=>'Opublikować na Domiporta?'
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
    }

}
