<?php

namespace ContainerHEDUITR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfesseurModifierTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ProfesseurModifierType' shared autowired service.
     *
     * @return \App\Form\ProfesseurModifierType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ProfesseurModifierType.php';

        return $container->privates['App\\Form\\ProfesseurModifierType'] = new \App\Form\ProfesseurModifierType();
    }
}
