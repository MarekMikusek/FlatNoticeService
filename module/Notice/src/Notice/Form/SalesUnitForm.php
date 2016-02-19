<?php
/**
 * Created by PhpStorm.
 * user: Konto
 * Date: 2016-02-02
 * Time: 12:23
 */

namespace Notice\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;

class SalesUnitForm extends Form
{
    protected $objectManager;

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

        $this->add([
            'name' => 'offerNumber',
            'type' => 'text',
            'options' => [
                'label' => 'Numer oferty'
            ]
        ]);

        $this->add(
            [
                'name' => 'user',
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'options' => [
                    'label' => 'Użytkownik',
                    'object_manager' => $this->getObjectManager(),
                    'target_class' => 'Notice\Model\User',
                    'property' => 'userName',
                ],
            ]
        );

        $this->add([
            'name' => 'type',
            'type' => 'DoctrineModule\Form\Element\ObjectSelect',
            'options' => [
                'label' => 'Typ nieruchomości',
                'object_manager' => $this->getObjectManager(),
                'target_class' => 'Notice\Model\Type',
                'property' => 'name',
            ]
        ]);

        $this->add([
            'name' => 'title',
            'type' => 'text',
            'options' => [
                'label' => 'Nazwa obiektu'
            ]
        ]);

        $this->add([
            'name' => 'price',
            'type' => 'number',
            'options' => [
                'label' => 'Cena'
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

        $this->add([
            'name' => 'area',
            'type' => 'number',
            'options' => [
                'label' => 'Powierzchnia',
            ]
        ]);

        $this->add([
            'name' => 'landArea',
            'type' => 'number',
            'options' => [
                'label' => 'Powierzchnia działki',
            ]
        ]);

        $this->add([
            'type' => 'DoctrineModule\Form\Element\ObjectSelect',
            'name' => 'floor',
            'required' => true,
            'options' => [
                'label' => 'Piętro',
                'object_manager' => $this->getObjectManager(),
                'target_class' => 'Notice\Model\Floor',
                'property' => 'floor',
                'default'=>2
            ],
        ]);

        $this->add([
            'name' => 'numberOfRooms',
            'type' => 'number',
            'options' => [
                'label' => 'Ilość pokoi'
            ]
        ]);

        $this->add([
            'name' => 'numberOfBathrooms',
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
            'type' => 'DoctrineModule\Form\Element\ObjectSelect',
            'name' => 'parking',
            'required' => true,
            'options' => [
                'label' => 'Parking',
                'object_manager' => $this->getObjectManager(),
                'target_class' => 'Notice\Model\Parking',
                'property' => 'parkingName',
            ],
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
                'name' => 'windows',
                'options' => [
                    'label' => 'Typ okien',
                    'object_manager' => $this->getObjectManager(),
                    'target_class' => 'Notice\Model\Windows',
                    'property' => 'windowsMaterial',
                ],
            ]
        );

        $this->add([
            'type' => 'DoctrineModule\Form\Element\ObjectSelect',
            'name' => 'noise',
            'options' => [
                'label' => 'Poziom hałasu',
                'object_manager' => $this->getObjectManager(),
                'target_class' => 'Notice\Model\Noise',
                'property' => 'domiporta',
            ],
        ]);

        $this->add(
            [
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'name' => 'category-otodom',
                'options' => [
                    'label' => 'Kategoria OTO Dom',
                    'object_manager' => $this->getObjectManager(),
                    'target_class' => 'Notice\Model\CategoryOtodom',
                    'property' => 'categoryName',
                ],
            ]
        );

        $this->add(
            [
                'type' => 'DoctrineModule\Form\Element\ObjectMultiCheckbox',
                'name' => 'medias',
                'options' => [
                    'label' => 'Dostępne media',
                    'object_manager' => $this->getObjectManager(),
                    'target_class' => 'Notice\Model\Medium',
                    'property' => 'medium',
                ],
            ]
        );

        $this->add(
            [
                'type' => 'DoctrineModule\Form\Element\ObjectMultiCheckbox',
                'name' => 'extras',
                'options' => [
                    'label' => 'Dodatki',
                    'object_manager' => $this->getObjectManager(),
                    'target_class' => 'Notice\Model\Extra',
                    'property' => 'extras',
                ],
            ]
        );

        $this->add([
            'type' => 'DoctrineModule\Form\Element\ObjectMultiCheckbox',
            'name' => 'photos',
            'options' => [
                'label' => 'Link do zdjęcia',
                'object_manager' => $this->getObjectManager(),
                'target_class' => 'Notice\Model\Photo',
                'property' => 'link',
            ],
        ]);

        $this->add([
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => [
                'value' => 'Go',
                'id' => 'submitbutton'
            ]
        ]);

//        $inputFilter = new InputFilter();
//
//        $inputFilter->add([
//            'name' => 'linkToPhoto',
//            'required' => false,
//        ]);
//
//        $this->setInputFilter($inputFilter);
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