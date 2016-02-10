<?php
/**
 * Created by PhpStorm.
 * user: Konto
 * Date: 2016-02-02
 * Time: 10:23
 */

namespace Notice\Form;

use Zend\Form\Form;
use Doctrine\Common\Persistence\ObjectManager;
use Zend\InputFilter\InputFilter;

class SiteForm extends Form
{
    protected $objectManager;

    public function __construct($name = NULL)
    {
        parent::__construct('site');
    }

    public function init()
    {
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name'=>'siteName',
            'type'=>'text',
            'options'=>[
                'label'=>'Nazwa inwestycji'
            ]
        ]);

        $this->add([
            'name' => 'country',
            'type'=>'text',
            'options'=>[
                'label'=>'Kraj'
            ]
        ]);

        $this->add(
            [
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'name' => 'province',
                'options' => [
                    'label' => 'Województwo',
                    'object_manager' => $this->getObjectManager(),
                    'target_class' => 'Notice\Model\Province',
                    'property' => 'provinceName',
                ],
            ]
        );


        $this->add([
            'name'=>'district',
            'type'=>'text',
            'options'=>[
                'label'=>'Powiat'
            ]
        ]);

        $this->add([
            'name'=>'city',
            'type'=>'text',
            'options'=>[
                'label'=>'Miasto'
            ]
        ]);

        $this->add([
            'name'=>'quarter',
            'type'=>'text',
            'options'=>[
                'label'=>'Dzielnica'
            ],
            'attributes'=>[
                'required'=>false,
            ]
        ]);

        $this->add([
            'name'=>'street',
            'type'=>'text',
            'options'=>[
                'label'=>'Ulica'
            ]
        ]);

        $this->add([
            'name'=>'constructionYear',
            'type'=>'number',
            'options'=>[
                'label'=>'Rok budowy'
            ]
        ]);

        $this->add([
            'name'=>'latitude',
            'type'=>'text',
            'options'=>[
                'label'=>'Szerokość geogr.'
            ],
        ]);

        $this->add([
            'name'=>'longitude',
            'type'=>'text',
            'options'=>[
                'label'=>'Długość geogr.'
            ],
            'attributes'=>[
                'required'=>false,
            ]
        ]);

        $this->add(
            [
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'name' => 'locationOtodom',
                'options' => [
                    'label' => 'Lokalizacja OTO Dom',
                    'object_manager' => $this->getObjectManager(),
                    'target_class' => 'Notice\Model\LocationOtodom',
                    'property' => 'locationName',
                ],
            ]
        );

        $this->add(
            [
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'name' => 'categoryOtodom',
                'options' => [
                    'label' => 'Kategoria OTO Dom',
                    'object_manager' => $this->getObjectManager(),
                    'target_class' => 'Notice\Model\CategoryOtodom',
                    'property' => 'categoryName',
                ],
            ]
        );

        $this->add([
            'name'=>'linkToPhoto',
            'type'=>'file',
            'options'=>[
                'label'=>'Link do fotografii'
            ]
        ]);

        $this->add(
            [
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'name' => 'roofMaterial',
                'required'=>false,
                'options' => [
                    'label' => 'Materiał dachu',
                    'object_manager' => $this->getObjectManager(),
                    'target_class' => 'Notice\Model\RoofMaterial',
                    'property' => 'roofMaterialName',
                ],
            ]
        );

        $this->add([
            'type' => 'DoctrineModule\Form\Element\ObjectSelect',
            'name' => 'numberOfFloors',
            'required'=>true,
            'options' => [
                'label' => 'Ilość pięter',
                'object_manager' => $this->getObjectManager(),
                'target_class' => 'Notice\Model\Floor',
                'property' => 'floor',
            ],
        ]);

        $this->add(
            [
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'name' => 'mediaMask',
                'required'=>false,
                'options' => [
                    'label' => 'Dostępne media',
                    'object_manager' => $this->getObjectManager(),
                    'target_class' => 'Notice\Model\SecurityMask',
                    'property' => 'securityName',
                ],
            ]
        );

        $this->add(
            [
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'name' => 'securityMask',
                'required'=>false,
                'options' => [
                    'label' => 'Zabezpieczenia',
                    'object_manager' => $this->getObjectManager(),
                    'target_class' => 'Notice\Model\SecurityMask',
                    'property' => 'securityName',
                ],
            ]
        );

        $this->add(
            [
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'name' => 'buildingMaterial',
                'options' => [
                    'label' => 'Materiał konstrukcyjny',
                    'object_manager' => $this->getObjectManager(),
                    'target_class' => 'Notice\Model\BuildingMaterial',
                    'property' => 'material',
                ],
            ]
        );

        $this->add([
            'name'=>'submit',
            'type'=>'Submit',
            'attributes'=>[
                'value'=>'Go',
                'id'=>'submitbutton'
            ]
        ]);
        $inputFilter = new InputFilter();

        $inputFilter->add([
            'name' => 'longitude',
            'required' => false
        ]);
        $inputFilter->add([
            'name' => 'title',
            'required' => false,
        ]);

        $this->setInputFilter($inputFilter);
    }



    public function setObjectManager(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    public function getObjectManager()
    {
        return $this->objectManager;
    }

}