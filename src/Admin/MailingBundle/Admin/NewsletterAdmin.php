<?php

namespace Admin\MailingBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Show\ShowMapper;

class NewsletterAdmin extends AbstractAdmin
{
    /**
     * @param RouteCollection $collection
     */
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('mailjetexport', $this->getRouterIdParameter().'/mailjetexport');
        $collection->add('addUserList', $this->getRouterIdParameter().'/addUserList');
    }
    
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('newsletter')
            ->add('commentaire')
            ->add('frequence')
            ->add('users')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('newsletter')
            ->add('commentaire')
            ->add('frequence')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                    'mailjetexport' => array('template' => 'AdminMailingBundle:CRUD:list__action_mailjetexport.html.twig'),
                    'addUserList' => array('template' => 'AdminMailingBundle:CRUD:list__action_addUserList.html.twig')
                    )
                )
            )
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('newsletter','text', array('label' => 'Nom de la newsletter'))
            ->add('commentaire', 'text')
            ->add('frequence','text', array('label' => 'Fréquence d\'envoi de la newsletter'))
            ->add('users')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('newsletter')
            ->add('commentaire')
            ->add('frequence')
            ->add('users')
        ;
    }
    protected function getlistPromoUser() {
        $getlistuser = $this->getConfigurationPool()->getContainer()->get('Doctrine')->getManager()->getRepository('Admin\UserBundle\Entity\User')->findall();
        return $getlistuser;
    }

}
