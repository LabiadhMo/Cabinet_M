<?php

namespace AppBundle\Controller;

use AppBundle\Entity\RDV;
use AppBundle\Entity\User;
use AppBundle\Entity\Mutuelle;
use AppBundle\Entity\Consultation;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Console\Question\ConfirmationQuestion;

class ConsultController extends Controller
{

    /**
     * @return string
     */

     /**
     * md5() pour assure que le nom des fichiers ne sont pas semilair 
     * uniqid() avoir le timestamps 
     * return une string unique 
     * fonction d'utilite 
     */
    private function generateUniqueFileName()
    {
      
        return md5(uniqid());
    }

    /**
     * @Route("/Cabinet/Administration/Gestionconsultation", name="Gestionconsultation")
     */
     /**
     * consulter l"espace des action 
     * persiste les consultation
     * route de gestion de consultation 
     */
    public function GestionconsultationAction()
    {
        $users = $this->getDoctrine()
        ->getRepository('AppBundle:RDV')
        ->findAll();

        return $this->render('Cabinet/consultation/gestionconsultation.html.twig' , array(
        'users'=>$users
        ));
    }

   /**
     * @Route("/Cabinet/Administration/Gestionconsultation/search", name="searchconsult")
     */

     /**
     * consulter l"espace des action 
     * persiste les consultation
     * route de rechercher de consultaion 
     */
    public function SearchconsultAction()
    {
        if ( ! empty($_POST['search'])){
        $data = $_POST['search'];
        }

        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = 'SELECT * FROM r_d_v where r_d_v.cin = :c;';
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->bindValue('c', $data);
        $statement->execute();
        $users = $statement->fetchAll();

        if ($users == null) {
            $this->addFlash(
                'notice',
                'Aucun résultat trouvé !'
                );
                return $this->redirectToRoute('Gestionconsultation');
        }else{
            $this->addFlash(
                'notice',
                'Résultat pour votre recherche'
                );
        }

        return $this->render('Cabinet/consultation/gestionconsultation.html.twig', array(
        'users' => $users));
    }


    /**
     * @Route("/Cabinet/Administration/Gestionconsultation/créer/{id}", name="créerconsultation")
     */
     /**
     * 
     * persiste les consultation
     * route de creer  de consultaion 
     */
    public function CréerconsultationAction($id, Request $request)
    {
        $user = $this->getDoctrine()
        ->getRepository('AppBundle:RDV')
        ->find($id);       

        $date = $user->getDateRdv();
        $consultation = new Consultation;

        $form = $this->createFormBuilder($consultation)
        ->add('type',ChoiceType::class, array('label' => 'Type', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px'), 'choices' => array('Examen' => 'Examen' ,'Controle' => 'Controle', 'Traitement' => 'Traitement'),'choices_as_values' => true,'multiple'=>false,'expanded'=>false))
        ->add('date_consult', TextType::class, array('label' => 'Date','attr' => array('class' => 'form-control', 'placeholder' => $date, 'disabled' => 'true', 'style' => 'margin-bottom:15px')))
        ->add('maladie', TextType::class, array('attr' => array('class' => 'form-control' , 'style' => 'margin-bottom:15px')))
        ->add('description', TextareaType::class, array('attr' => array('class' => 'form-control' , 'style' => 'margin-bottom:15px')))     
        ->add('file', FileType::class, array('label' => 'Fichiers', 'attr' => array('class' => 'form-control' , 'style' => 'margin-bottom:15px'),'required' => false))       
        ->add('submit', SubmitType::class, array('label' => 'Valider', 'attr' => array('class' => 'btn btn-success', 'style' => 'margin-bottom:15px')))
        ->getForm();
              
        $form ->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

        $cin = $user->getCin();
        $type = $form['type']->getData();
        $description = $form['description']->getData();
        $maladie = $form['maladie']->getData();
        $file = $consultation->getFile();

            if ($file <> null){
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
                $file->move(
                $this->getParameter('files_directory'),
                $fileName);
                $consultation->setFile($fileName);
                $consultation->setCin($cin);
                $consultation->setDateConsult($date);
                $consultation->setMaladie($maladie);
                $consultation->setDescription($description);
                $consultation->setType($type);

                $em = $this -> getDoctrine() -> getManager();
                $em->persist($consultation);
                $em->flush();

                $em = $this -> getDoctrine() -> getManager();
                $rdv = $em -> getRepository('AppBundle:RDV')->find($id);
                $em->remove($rdv);
                $em->flush();
                $this->addFlash(
                'notice',
                'Consultation crée avec succès'
                );
                return $this->redirectToRoute('Gestionconsultation');

            }else{

                $consultation->setCin($cin);
                $consultation->setDateConsult($date);
                $consultation->setMaladie($maladie);
                $consultation->setDescription($description);

                $em = $this -> getDoctrine() -> getManager();
                $em->persist($consultation);
                $em->flush();

                $em = $this -> getDoctrine() -> getManager();
                $rdv = $em -> getRepository('AppBundle:RDV')->find($id);
                $em->remove($rdv);
                $em->flush();

                $this->addFlash(
                'notice',
                'Consultation crée avec succès'
                );
                return $this->redirectToRoute('Gestionconsultation');
                }
        }
        return $this->render('Cabinet/consultation/créerconsultation.html.twig', array(
        'form' => $form->createView()));
    }
    
    /**
     * @Route("/Cabinet/Administration/Gestionconsultation/edit/{id}", name="editconsultations")
     */

      /**
     * consulter l"espace des action 
     * persiste les consultation
     * route d"editer de consultaion par id 
     */
    public function EditconsultationAction($id, Request $request)
    {

        $consultation = $this -> getDoctrine()
        -> getRepository('AppBundle:Consultation')
        -> find($id);

        $date = $consultation->getDateConsult();
        $consultation->setCin($consultation->getCin());
        $consultation->setType($consultation->getType());
        $consultation->setMaladie($consultation->getMaladie());
        $consultation->setDateConsult($consultation->getDateConsult());
        $consultation->setDescription($consultation->getDescription());
        if ($consultation->getFile() <> null) {
         $consultation->setFile(new File($this->getParameter('files_directory').'/'.$consultation->getFile()));
        }
        

        $form = $this->createFormBuilder($consultation)
        ->add('type',ChoiceType::class, array('label' => 'Type', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px'), 'choices' => array('Examen' => 'Examen' ,'Controle' => 'Controle', 'Traitement' => 'Traitement'),'choices_as_values' => true,'multiple'=>false,'expanded'=>false))
        ->add('date_consult', TextType::class, array('label' => 'Date','attr' => array('class' => 'form-control','placeholder' => $date, 'disabled' => 'true', 'style' => 'margin-bottom:15px')))
        ->add('maladie', TextType::class, array('attr' => array('class' => 'form-control' , 'style' => 'margin-bottom:15px')))
        ->add('description', TextareaType::class, array('attr' => array('class' => 'form-control' , 'style' => 'margin-bottom:15px')))     
        ->add('file', FileType::class, array('label' => 'Fichiers', 'attr' => array('class' => 'form-control' , 'style' => 'margin-bottom:15px'),'required' => false))       
        ->add('submit', SubmitType::class, array('label' => 'Valider', 'attr' => array('class' => 'btn btn-success', 'style' => 'margin-bottom:15px')))
        ->getForm();

        $form ->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

        $cin = $consultation->getCin();
        $type = $form['type']->getData();
        $description = $form['description']->getData();
        $maladie = $form['maladie']->getData();
        $file = $form['file']->getData();
        

            if ($file <> null){
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
                $file->move(
                $this->getParameter('files_directory'),
                $fileName);
                $consultation->setFile($fileName);
                $consultation->setCin($cin);
                $consultation->setMaladie($maladie);
                $consultation->setDescription($description);
                $consultation->setType($type);
                $consultation->setDateConsult($date);

                $em = $this -> getDoctrine() -> getManager();
                $em->persist($consultation);
                $em->flush();

                $this->addFlash(
                'notice',
                'Consultation modifié avec succès'
                );
                return $this->redirectToRoute('voirconsultations');

            }else{

                $consultation->setCin($cin);
                $consultation->setMaladie($maladie);
                $consultation->setDescription($description);
                $consultation->setType($type);
                $consultation->setDateConsult($date);

                $em = $this -> getDoctrine() -> getManager();
                $em->persist($consultation);
                $em->flush();

                $this->addFlash(
                'notice',
                'Consultation modifié avec succès'
                );
                return $this->redirectToRoute('voirconsultations');
                }
        }
        return $this->render('Cabinet/consultation/editconsultation.html.twig', array(
        'form' => $form->createView(),
        'consultation' => $consultation
        ));
    }

    /**
     * @Route("/Cabinet/Administration/Gestionconsultation/delete/{id}", name="deleteconsultation")
     */

      /**
     * consulter l"espace des action 
     * persiste les consultation
     * route de supriler  de consultaion par id 
     */
    public function DeleteconsultAction($id, Request $request)
    {

       $em = $this -> getDoctrine() -> getManager();
       $consultation = $em -> getRepository('AppBundle:Consultation')->find($id);
       $em->remove($consultation);
       $em->flush();

      $this->addFlash(
      'notice',
      'Consultation été supprimer avec succès'
      );
      return $this->redirectToRoute('voirconsultations');

    }
     

    /**
     * @Route("/Cabinet/Administration/Gestionconsultation/voir/", name="voirconsultations")
     */ 
     /**
     * consulter l"espace des action 
     * persiste les consultation
     * route  d'avoir de consultaion 
     */
     public function VoirconsultsAction()
     {

        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = 'SELECT * FROM fos_user where fos_user.cin <> :c;';
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->bindValue('c', '');
        $statement->execute();
        $users = $statement->fetchAll();

        return $this->render('Cabinet/consultation/voirconsultations.html.twig', array(
        'users'=>$users));  

     }

   /**
     * @Route("/Cabinet/Administration/Gestionconsultation/voir/search", name="searchconsultations")
     */

      /**
     * consulter l"espace des action 
     * persiste les consultation
     * route de rechercher de consultaion 
     */
    public function SearchconsultationsAction()
    {
        if ( ! empty($_POST['search'])){
        $data = $_POST['search'];
        }

        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = 'SELECT * FROM fos_user where fos_user.cin = :c;';
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->bindValue('c', $data);
        $statement->execute();
        $users = $statement->fetchAll();

        if ($users == null) {
            $this->addFlash(
                'notice',
                'Aucun résultat trouvé !'
                );
                return $this->redirectToRoute('voirconsultations');
        }else{
            $this->addFlash(
                'notice',
                'Résultat pour votre recherche'
                );
        }


        return $this->render('Cabinet/consultation/voirconsultations.html.twig', array(
        'users' => $users));
    }       


    /**
     * @Route("/Cabinet/Administration/Gestionconsultation/voir/{cin}", name="voirconsultation")
     */ 

      /**
     * consulter l"espace des action 
     * persiste les consultation
     * route de voir consultaion 
     */
     public function VoirconsultAction($cin, Request $request)
     {

        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = 'SELECT * FROM Consultation where Consultation.cin = :c;';
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->bindValue('c', $cin);
        $statement->execute();
        $consults = $statement->fetchAll();

        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = 'SELECT * FROM fos_user where fos_user.cin = :c;';
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->bindValue('c', $cin);
        $statement->execute();
        $users = $statement->fetchAll();

        return $this->render('Cabinet/consultation/voirconsultation.html.twig', array(
        'consults'=>$consults, 'users'=>$users ));  

     }

   /**
     * @Route("/Cabinet/Administration/Gestionconsultation/voir/search/{cin}", name="searchconsultation")
     */

      /**
     * consulter l"espace des action 
     * persiste les consultation
     * route de rechercher de consultaion 
     */
    public function SearchconsultationnAction($cin, Request $request)
    {
        if ( ! empty($_POST['search'])){
        $data = $_POST['search'];
        }

        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = 'SELECT * FROM fos_user where fos_user.cin = :c;';
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->bindValue('c', $cin);
        $statement->execute();
        $users = $statement->fetchAll();

        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = 'SELECT * FROM Consultation where Consultation.date_consult = :c;';
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->bindValue('c', $data);
        $statement->execute();
        $consults = $statement->fetchAll();

        if ($consults == null) {
            $this->addFlash(
                'notice',
                'Aucun résultat trouvé !'
                );
                return $this->redirect("/Cabinet/Administration/Gestionconsultation/voir/$cin");
        }else{
            $this->addFlash(
                'notice',
                'Résultat pour votre recherche'
                );
        }


        return $this->render('Cabinet/consultation/voirconsultation.html.twig', array(
        'consults'=>$consults, 'users'=>$users ));
    }

     /**
     * @Route("/Cabinet/Administration/Gestionconsultation/voirconsult/{id}", name="voirconsult")
     */ 
     /**
     * consulter l"espace des action 
     * persiste les consultation
     * route de voir consultaion 
     */
     public function VoirconsultuAction($id, Request $request)
     {

        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = 'SELECT * FROM Consultation where Consultation.id = :id;';
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->bindValue('id', $id);
        $statement->execute();
        $consults = $statement->fetchAll();

        return $this->render('Cabinet/consultation/voirconsult.html.twig', array(
        'consults'=>$consults));  

     }
    /**
     * @Route("/voirmaconsult/{id}", name="voirmaconsult")
     */ 
     public function VoirmaconsultAction($id, Request $request)
     {

        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = 'SELECT * FROM Consultation where Consultation.id = :id;';
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->bindValue('id', $id);
        $statement->execute();
        $consults = $statement->fetchAll();

        return $this->render('Cabinet/consultation/voirmaconsult.html.twig', array(
        'consults'=>$consults));  

     }
}
?>