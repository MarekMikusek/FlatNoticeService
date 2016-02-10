<?php
/**
 * Created by PhpStorm.
 * user: Konto
 * Date: 2016-02-02
 * Time: 12:23
 */

namespace Notice\Form;

use Zend\Form\Form;

class SalesUnitForm extends Form
{
    protected    $objectManager;

    public
    function __construct($name = NULL)
    {
        parent::__construct('salesUnit');
    }

    public
    function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add(
            [
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'name' => 'user',
                'options' => [
                    'label' => 'Użytkownik',
                    'object_manager' => $this->getObjectManager(),
                    'target_class' => 'Notice\Model\User',
                    'property' => 'userName',
                ],
            ]
        );

        $this->add([
            'name'=>'title',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa obiektu'
            ]
        ]);

        $this->add([
            'name'=>'price',
            'type'=>'number'
        ]);

        $this->add(
            [
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'name' => 'site',
                'options' => [
                    'label' => 'Inwestycja',
                    'object_manager' => $this->getObjectManager(),
                    'target_class' => 'Notice\Model\Site',
                    'property' => 'siteName',
                ],
            ]
        );

        $this->add(
            [
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'name' => 'type',
                'options' => [
                    'label' => 'Typ budynku',
                    'object_manager' => $this->getObjectManager(),
                    'target_class' => 'Notice\Model\Type',
                    'property' => 'name',
                ],
            ]
        );

        $this->add([
            'name' => 'area',
            'type' => 'number',
            'options' => [
                'label' => 'Powierzchnia',
            ]
        ]);

        $this->add([
            'type' => 'DoctrineModule\Form\Element\ObjectSelect',
            'name' => 'floorNumber',
            'required'=>true,
            'options' => [
                'label' => 'Piętro',
                'object_manager' => $this->getObjectManager(),
                'target_class' => 'Notice\Model\Floor',
                'property' => 'floor',
            ],
        ]);

        $this->add([
            'name' => 'noOfRooms',
            'type' => 'number',
            'options' => [
                'label' => 'Ilość pokoi'
            ]
        ]);

        $this->add([
            'name' => 'noOfBathrooms',
            'type' => 'number',
            'options' => [
                'label' => 'Ilość łazienek'
            ]
        ]);

        $this->add([
            'name' => 'noticeTitle',
            'type' => 'text',
            'options' => [
                'label' => 'Tytuł ogłoszenia'
            ]
        ]);

        $this->add([
            'name' => 'description',
            'type' => 'text',
            'options' => [
                'label' => 'Opis nieruchomości'
            ]
        ]);

        $this->add([
            'name' => 'availableFrom',
            'type' => 'date',
            'options' => [
                'label' => 'Dostępny od'
            ]
        ]);

        $this->add(
            [
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'name' => 'site',
                'options' => [
                    'label' => 'Inwestycja',
                    'object_manager' => $this->getObjectManager(),
                    'target_class' => 'Notice\Model\Site',
                    'property' => 'siteName',
                ],
            ]
        );

        $this->add(
            [
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'name' => 'category-otodom',
                'options' => [
                    'label' => 'Kategoria OTO Dom',
                    'object_manager' => $this->getObjectManager(),
                    'target_class' => 'notice\Model\CategoryOtodom',
                    'property' => 'name',
                ],
            ]
        );

        $this->add([
            'name' => 'linkToPhoto',
            'type' => 'text',
            'options' => [
                'label' => 'Link do fotografii'
            ]
        ]);


        $this->add([
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => [
                'value' => 'Go',
                'id' => 'submitbutton'
            ]
        ]);
    }

    public
    function setObjectManager(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    public
    function getObjectManager()
    {
        return $this->objectManager;
    }

}