<?php
/**
 * Created by PhpStorm.
 * User: Konto
 * Date: 2016-02-05
 * Time: 10:40
 */

namespace Notice\Controller;

use Doctrine\ORM\EntityManager;
use Zend\Mvc\Controller\AbstractActionController;
use Notice\Service\NoticeService;

class AbstractNoticeController extends AbstractActionController
{
    public function createForm($entity)
    {
        $sl = $this->getServiceLocator();
        $form = $sl->get('FormElementManager')->get($entity);
        return $form;
    }

    /**
     * @return EntityManager
     */
    public function getEntityManager()
    {
        return $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
    }

    public function getRepository($entity)
    {
        /** @var NoticeService $service */
        $service = $this->getServiceLocator()->get('NoticeService');
        return $repository = $service->getEntityManager()->getRepository($entity);
    }
}