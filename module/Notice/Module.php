<?php

namespace Notice;

use Notice\Model\BuildingMaterial;
use Notice\Model\BuildingType;
use Notice\Model\CategoryOtodom;
use Notice\Model\LocationOtodom;
use Notice\Model\Notice;
use Notice\Model\Province;
use Notice\Model\RoofMaterial;
use Notice\Model\SalesUnit;
use Notice\Model\Site;
use Notice\Model\Type;
use Notice\Model\User;
use Notice\Form\BuildingMaterialForm;
use Notice\Form\BuildingTypeForm;
use Notice\Form\CategoryOtodomForm;
use Notice\Form\LocationOtodomForm;
use Notice\Form\NoticeForm;
use Notice\Form\ProvinceForm;
use Notice\Form\RoofMaterialForm;
use Notice\Form\SalesUnitForm;
use Notice\Form\SiteForm;
use Notice\Form\TypeForm;
use Notice\Form\UserForm;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;

class Module implements AutoloaderProviderInterface, ConfigProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
//            'Zend\Loader\ClassMapAutoloader' => array(
//                __DIR__ . '/autoload_classmap.php',
//            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getFormElementConfig()
    {
        return [
            'factories' => [
                'Notice\Form\BuildingMaterialForm' => function ($sm) {
                    $sl = $sm->getServiceLocator();
                    $objectManager = $sl->get('Doctrine\ORM\EntityManager');

                    $form = new BuildingMaterialForm();
                    $form->setHydrator(new DoctrineHydrator($objectManager))
                        ->setObject(new BuildingMaterial());
                    return $form;
                },
                'Notice\Form\BuildingTypeForm' => function ($sm) {
                    $sl = $sm->getServiceLocator();
                    $objectManager = $sl->get('Doctrine\ORM\EntityManager');

                    $form = new BuildingTypeForm();
                    $form->setHydrator(new DoctrineHydrator($objectManager))
                        ->setObject(new BuildingType());
                    return $form;
                },
                'Notice\Form\CategoryOtodomForm' => function ($sm) {
                    $sl = $sm->getServiceLocator();
                    $objectManager = $sl->get('Doctrine\ORM\EntityManager');

                    $form = new CategoryOtodomForm();
                    $form->setHydrator(new DoctrineHydrator($objectManager))
                        ->setObject(new CategoryOtodom());
                    return $form;
                },

                'Notice\Form\LocationOtodomForm' => function ($sm) {
                    $sl = $sm->getServiceLocator();
                    $objectManager = $sl->get('Doctrine\ORM\EntityManager');

                    $form = new LocationOtodomForm();
                    $form->setHydrator(new DoctrineHydrator($objectManager))
                        ->setObject(new LocationOtodom());
                    return $form;
                },

                'Notice\Form\NoticeForm' => function ($sm) {
                    $sl = $sm->getServiceLocator();
                    $objectManager = $sl->get('Doctrine\ORM\EntityManager');

                    $form = new NoticeForm();
                    $form->setHydrator(new DoctrineHydrator($objectManager))
                        ->setObject(new Notice());
                    return $form;
                },

                'Notice\Form\ProvinceForm' => function ($sm) {
                    $sl = $sm->getServiceLocator();
                    $objectManager = $sl->get('Doctrine\ORM\EntityManager');

                    $form = new ProvinceForm();
                    $form->setHydrator(new DoctrineHydrator($objectManager))
                        ->setObject(new Province());
                    return $form;
                },

                'Notice\Form\RoofMaterialForm' => function ($sm) {
                    $sl = $sm->getServiceLocator();
                    $objectManager = $sl->get('Doctrine\ORM\EntityManager');

                    $form = new RoofMaterialForm();
                    $form->setHydrator(new DoctrineHydrator($objectManager))
                        ->setObject(new RoofMaterial());
                    return $form;
                },

                'Notice\Form\SalesUnitForm' => function ($sm) {
                    $sl = $sm->getServiceLocator();
                    $objectManager = $sl->get('Doctrine\ORM\EntityManager');

                    $form = new SalesUnitForm();
                    $form->setHydrator(new DoctrineHydrator($objectManager))
                        ->setObject(new SalesUnit());
                    return $form;
                },

                'Notice\Form\SiteForm' => function ($sm) {
                    $sl = $sm->getServiceLocator();
                    $objectManager = $sl->get('Doctrine\ORM\EntityManager');

                    $form = new SiteForm();
                    $form->setHydrator(new DoctrineHydrator($objectManager))
                        ->setObject(new Site());
                    return $form;
                },

                'Notice\Form\TypeForm' => function ($sm) {
                    $sl = $sm->getServiceLocator();
                    $objectManager = $sl->get('Doctrine\ORM\EntityManager');

                    $form = new TypeForm();
                    $form->setHydrator(new DoctrineHydrator($objectManager))
                        ->setObject(new Type());
                    return $form;
                },

                'Notice\Form\UserForm' => function ($sm) {
                    $sl = $sm->getServiceLocator();
                    $objectManager = $sl->get('Doctrine\ORM\EntityManager');

                    $form = new UserForm();
                    $form->setHydrator(new DoctrineHydrator($objectManager))
                        ->setObject(new User());
                    return $form;
                },
            ]
        ];
    }

    public function getServiceConfig()
    {
        return array(
//            'factories' => array(
//                'Zend\Authentication\AuthenticationService' => function ($serviceManager) {
//                    // If you are using DoctrineORMModule:
//                    return $serviceManager->get('doctrine.authenticationservice.orm_default');
//                },
//            ),
            'invokables' => [
                'NoticeService' => 'Notice\Service\NoticeService'
            ]
        );
    }
}