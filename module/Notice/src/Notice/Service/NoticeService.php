<?php

namespace Notice\Service;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorAwareTrait;
use Zend\ServiceManager\ServiceLocatorInterface;

class NoticeService implements ServiceLocatorAwareInterface
{
    use ServiceLocatorAwareTrait;
    protected $action;

    protected $entityManager = null;

    public function deleteData($data)
    {
        $this->getEntityManager()->remove($data);
        $this->getEntityManager()->flush();
    }

    public function insertData($data)
    {
        $this->getEntityManager()->persist($data);
        $this->getEntityManager()->flush();
    }

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    public function getEntityManager()
    {
        if ($this->entityManager == null) {
            $this->entityManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }

        return $this->entityManager;
    }

//    public function createForm($entity)
//    {
//        $sl = $this->getServiceLocator();
//        $form = $sl->get('FormElementManager')->get($entity);
//        return $form;
//    }

}