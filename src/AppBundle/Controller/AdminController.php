<?php
    /**
     * package utilise 
     */
namespace AppBundle\Controller;
 
use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
     /**
     * controlleur  : 
     */
class AdminController extends BaseAdminController
 
{
     /**
     * return : new user created 
     */
   public function createNewUserEntity()
 
   {
 
       return $this->get('fos_user.user_manager')->createUser();
 
   }
     /**
     *  return : persist l'entite de la base user
     */
   public function prePersistUserEntity($user)
 
   {
 
       $this->get('fos_user.user_manager')->updateUser($user, false);
 
   }
     /**
     * return upadated user entity
     */
   public function preUpdateUserEntity($user)
 
   {
 
       $this->get('fos_user.user_manager')->updateUser($user, false);
 
   }
}
 
?>