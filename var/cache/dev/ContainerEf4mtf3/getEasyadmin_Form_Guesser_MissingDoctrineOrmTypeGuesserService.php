<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'easyadmin.form.guesser.missing_doctrine_orm_type_guesser' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormTypeGuesserInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser.php';
include_once $this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Form\\Guesser\\MissingDoctrineOrmTypeGuesser.php';

return $this->services['easyadmin.form.guesser.missing_doctrine_orm_type_guesser'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Guesser\MissingDoctrineOrmTypeGuesser(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
