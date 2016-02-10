<?php
/**
 * Created by PhpStorm.
 * User: Konto
 * Date: 2016-02-09
 * Time: 15:20
 */

namespace Notice\Controller;

use Zend\Form\Form;
use Zend\View\Model\ViewModel;
use Zend\Hydrator;

class SalesUnitController  extends AbstractNoticeController
{
    private $entityName = 'SalesUnit';
    private $controllerName = 'sales-unit';

    public function indexAction()
    {
        return new ViewModel([
            'returnData' => $this->getRepository("Notice\\Model\\" . $this->entityName)->findAll()
        ]);
    }

    public function addAction()
    {
        $form = $this->createForm('Notice\\Form\\' . $this->entityName . 'Form');
        $form->get('submit')->setValue('Dodaj');
        if ($form->get('country')->getValue() == NULL){
            $form->get('country')->setValue('Polska');
        }
        $request = $this->getRequest();

        if ($request->isPost()) {
            $form->setData($request->getPost());
            if ($form->isValid()) {
                $dataToAdd = $form->getData();
                $noticeService = $this->getServiceLocator()->get('NoticeService');
                $noticeService->insertData($dataToAdd);
                return $this->redirect()->toRoute('notice', ['controller' => $this->controllerName, 'action' => 'index']);
            }
        }
        return ['form' => $form];
    }

    public function editAction()
    {
        $id = (int)$this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('notice', ['controller' => $this->controllerName,
                'action' => 'add']);
        }
        try {
            $dataToEdit = $this->getRepository("Notice\\Model\\" . $this->entityName)->find($id);
        } catch (\Exception $ex) {
            $this->redirect()->toRoute('notice', ['controller' => $this->controllerName, 'action' => 'index']);
        }

        /** @var Form $form */
        $form = $this->createForm('Notice\\Form\\' . $this->entityName . 'Form');
        $form->bind($dataToEdit);
        $form->get('submit')->setAttribute('value', 'Zapisz');
        $request = $this->getRequest();
        if ($request->isPost()) {
            $form->setData($request->getPost());
            if ($form->isValid()) {
                $this->getEntityManager()->flush();
                $this->redirect()->toRoute('notice', ['controller' => $this->controllerName, 'action' => 'index']);
            }
        }
        return ['form' => $form];
    }

    public function deleteAction()
    {
        $id = (int)$this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('notice', ['controller' => $this->controllerName, 'action' => 'index']);
        }
        $request = $this->getRequest();
        $dataToDelete = $this->getRepository("Notice\\Model\\" . $this->entityName)->find($id);
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');
            if ($del == "Yes") {
                $noticeService = $this->getServiceLocator()->get('NoticeService');
                $noticeService->deleteData($dataToDelete);
                $this->flashMessenger()->addMessage('Usunięto!');
                var_dump($this->controllerName);
                return $this->redirect()->toRoute('notice',
                    ['controller' => $this->controllerName, 'action' => 'index']);
            }
        }
        return ['dataToDelete' => $dataToDelete];
    }


}