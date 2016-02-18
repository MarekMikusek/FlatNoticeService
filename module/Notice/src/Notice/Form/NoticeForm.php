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
                    'target_class' => 'Notice\Model\SalesUnit',
                    'property' => 'id',
                ],
            ]
        );

        $this->add([
            'name' => 'isChanged',
            'type' => 'hidden',
        ]);


        $this->add([
            'name' => 'isActive',
            'type' => 'boolean',

        ]);

//        $this->add([
//            'name' => 'toBePublishedOnOtodom',
//            'type' => 'hidden'
//        ]);
//
//        $this->add([
//            'name' => 'toBePublishedOnDomiporta',
//            'type' => 'hidden'
//        ]);
//
//        $this->add([
//            'name' => 'toBePublishedOnGumtree',
//            'type' => 'hidden'
//        ]);

        $this->add([
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => [
                'value' => 'Go',
                'id' => 'submitbutton'
            ]
        ]);
    }

    /**
     * @return mixed
     */
    public function getObjectManager()
    {
        return $this->objectManager;
    }

}
