<?php

class ContactsController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

public function indexAction()
{
    $contact = new Zend_Db_Table('contacts');
    $query = $contact->select()->order('name');
    $this->view->contacts = $contact->fetchAll($query);
}


public function addAction()
{

    $form = new Application_Model_ContactForm(
        array('action' => '/contact/add',
                 'method' => 'POST'
        )
    );


    if ($this->getRequest()->isPost()) {

        if ($form->isValid($this->getRequest()->getPost())) {

            $contact = new Zend_Db_Table('contacts');
            $data = array (
                'name'  => $this->_request->getPost('name'),
                'email' => $this->_request->getPost('email'),
                'type'  => $this->_request->getPost('type')
            );

            $contact->insert($data);

            echo "<p>Contact added!</p>";

        }

    }

    $this->view->form = $form;

}


}

