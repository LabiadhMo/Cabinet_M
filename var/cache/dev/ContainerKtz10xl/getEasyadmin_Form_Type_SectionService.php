<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'easyadmin.form.type.section' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\AbstractType.php';
include_once $this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Form\\Type\\EasyAdminSectionType.php';

return $this->services['easyadmin.form.type.section'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminSectionType();
