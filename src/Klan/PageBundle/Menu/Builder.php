<?php

namespace Klan\PageBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function topMenu(FactoryInterface $factory, array $options)
    {

        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');
        $menu->setChildrenAttribute('id', 'top-menu');
        $menu->addChild('topmenu.user', array('route' => 'testing_index'))->setAttribute('icon', 'id-card fa-fw')->setAttribute('translation_domain', 'KlanPageBundle');
//        $menu->addChild('topmenu.logout', array('route' => 'fos_user_security_logout'))->setAttribute('icon', 'sign-out fa-fw')->setAttribute('translation_domain', 'KlanPageBundle');

        return $menu;

    }

    public function sideMenu(FactoryInterface $factory, array $options)
    {

        $sidemenu = $factory->createItem('root');
        $sidemenu->setChildrenAttribute('class', 'nav');
        $sidemenu->setChildrenAttribute('id', 'side-menu');

        $sidemenu->addChild('sidemenu.page.root')->setAttribute('icon', 'list fa-fw')->setAttribute('translation_domain', 'KlanPageBundle');
        $sidemenu['sidemenu.page.root']->setChildrenAttribute('class', 'nav nav-second-level collapse');
        $sidemenu['sidemenu.page.root']->addChild('testing.index', array('route' => 'testing_index'))->setAttribute('icon', 'id-card fa-fw')->setAttribute('translation_domain', 'KlanPageBundle');

        return $sidemenu;
    }

}