<?php

namespace Notice;
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/application',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'index',
                    ),
                ),
            ),
            'notice' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/notice[/:controller[/:action[/:id]]]',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ],
                    'defaults' => array(
                        //'__NAMESPACE__'=>'notice\Controller',
                        'controller' => 'Notice\Controller\Notice',
                        'action' => 'index',
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'application' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/application',
                    'defaults' => array(
                        //'__NAMESPACE__' => 'notice\Controller',
                        'controller' => 'Application',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:controller][/:action][/:id]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => [
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ],
        'factories' => [
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
        ],
        'invokables' => [
            'NoticeService' => 'Notice\Service\NoticeService',
        ],
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'aliases' => [
            'notice'                => 'Notice\Controller\Notice',
            'building-material'     => 'Notice\Controller\BuildingMaterial',
            'building-type'         => 'Notice\Controller\BuildingType',
            'category-otodom'       => 'Notice\Controller\CategoryOtodom',
            'location-otodom'       => 'Notice\Controller\LocationOtodom',
            'province'              => 'Notice\Controller\Province',
            'roof-material'         => 'Notice\Controller\RoofMaterial',
            'sales-unit'            => 'Notice\Controller\SalesUnit',
            'site'                  => 'Notice\Controller\Site',
            'type'                  => 'notice\Controller\Type',
            'user'                  => 'notice\Controller\User',
        ],
        'invokables' => [
            'Notice\Controller\Notice'              => 'Notice\Controller\NoticeController',
            'Notice\Controller\BuildingMaterial'    => 'Notice\Controller\BuildingMaterialController',
            'Notice\Controller\BuildingType'        => 'Notice\Controller\BuildingTypeController',
            'Notice\Controller\CategoryOtodom'      => 'Notice\Controller\CategoryOtodomController',
            'Notice\Controller\LocationOtodom'      => 'Notice\Controller\LocationOtodomController',
            'Notice\Controller\Province'            => 'Notice\Controller\ProvinceController',
            'Notice\Controller\RoofMaterial'        => 'Notice\Controller\RoofMaterialController',
            'Notice\Controller\SalesUnit'           => 'Notice\Controller\SalesUnitController',
            'Notice\Controller\Site'                => 'Notice\Controller\SiteController',
            'Notice\Controller\Type'                => 'Notice\Controller\TypeController',
            'Notice\Controller\User'                => 'Notice\Controller\UserController',
        ],
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(),
        ),
    ),
    'doctrine' => array(
        'driver' => array(
            // defines an annotation driver with two paths, and names it `my_annotation_driver`
            __NAMESPACE__.'_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(
                    __DIR__ . '/../src/'.__NAMESPACE__.'/',
                ),
            ),

            // default metadata driver, aggregates all other drivers into a single one.
            // Override `orm_default` only if you know what you're doing
            'orm_default' => array(
                'drivers' => array(
                    // register `my_annotation_driver` for any entity under namespace `My\Namespace`
                    'Notice\Model' => __NAMESPACE__.'_driver'
                )
            )
        ),
    )
);
