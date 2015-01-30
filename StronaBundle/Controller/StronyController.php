<?php

namespace StronaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use StronaBundle\Formularz\FormularzWyposazenie;
use StronaBundle\Formularz\FormularzDomek;
use StronaBundle\Formularz\FormularzKlient;

use StronaBundle\Entity\Domek;
use StronaBundle\Entity\Admin;
use StronaBundle\Entity\Klient;
use StronaBundle\Entity\Wyposazenie;

class StronyController extends Controller
{
    /**
   * @Route(
   *    "/pokaz-domki", 
   *    name="pokaz_domki"
   * )
   * 
   * @Template("StronaBundle:Strony:pokaz_domki.html.twig")
   */
    
    public function wyswietlDomkekAction() {
        
        $wys = $this->getDoctrine()->getRepository('StronaBundle:Domek');
        $row = $wys->findAll();
        
        return array(
            'row' => $row
        );
        
    }
    
    
      /**
   * @Route(
   *    "/pokaz-wyposazenie", 
   *    name="pokaz_wyposazenie"
   * )
   * 
   * @Template("StronaBundle:Strony:pokaz_wyposazenie.html.twig")
   */
    
    public function wyswietlwyposazenieAction() {
        
        $wys = $this->getDoctrine()->getRepository('StronaBundle:Wyposazenie');
        $row = $wys->findAll();
        
        return array(
            'row' => $row
        );
        
    }
    
        /**
   * @Route(
   *    "/pokaz-klientow", 
   *    name="pokaz_klientow"
   * )
   * 
   * @Template("StronaBundle:Strony:pokaz_klientow.html.twig")
   */
    
    public function wyswietlklientowAction() {
        
        $wys = $this->getDoctrine()->getRepository('StronaBundle:Klient');
        $row = $wys->findAll();
        
        return array(
            'row' => $row
        );
        
    }
    
    
    
  /**
   * @Route(
   *    "/glowna", 
   *    name="strona_glowna"
   * )
   * 
   * @Template("StronaBundle:Strony:index.html.twig")
   */
    public function indexAction(){
        return array();
    }
    
    /**
   * @Route("/dodaj-domek",
     * name= "dodaj_domek")
   * @Template("StronaBundle:Strony:dodaj_domek.html.twig")
   */
    
    public function dodaj_domekAction(Request $request){
        
        $Domek = new Domek();
        $Wyposazenie = new Wyposazenie();
        
       $formularz = $this->createForm(new FormularzDomek(), $Domek);
       
       $session = $this->get('session');
       if($request->isMethod('POST')){
           if($formularz->isValid()){
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($Domek);
            $em->persist($Wyposazenie);
            $em->flush();
         
            $session->getFlashBag()->add('success', 'Twoje dane zostały zapisane');
            return $this->redirect($this->generateUrl('dodaj_domek'));
        }  else {
            $session->getFlashBag()->add('danger', 'Twoje dane nie zostały zapisane');
        }
           
       }
        return array(
            'formularz' => $formularz->createView(),
        );
    }
    
    /**
   * @Route("/dodaj-wyposazenie", 
     * name="dodaj_wyposazenie"
     * )
   * @Template("StronaBundle:Strony:dodaj_wyposazenie.html.twig")
   */
    
    public function dodaj_wyposazenieAction(Request $request){
         
        $Wyposazenie = new Wyposazenie();
       
        $formularz = $this->createForm(new FormularzWyposazenie(), $Wyposazenie);
          
        $formularz->handleRequest($request);
        
        $session = $this->get('session');
        
        if($request->isMethod('POST')){
        
        if($formularz->isValid()){
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($Wyposazenie);
            $em->flush();
         
            $session->getFlashBag()->add('success', 'Twoje dane zostały zapisane');
            return $this->redirect($this->generateUrl('dodaj_wyposazenie'));
        }  else {
            $session->getFlashBag()->add('danger', 'Twoje dane nie zostały zapisane');
        }
        }
        
        return array(
            'formularz' => $formularz->createView(),
        );
        
        
    }
    
   /**
   * @Route("/dodaj-klienta", name="dodaj_klienta")
   * @Template("StronaBundle:Strony:kontakt.html.twig")
   */
    
    public function dodaj_klientaAction(Request $request){
        
          $klient = new Klient();
       
        $formularz = $this->createForm(new FormularzKlient(), $klient);
      
         $formularz->handleRequest($request);
        
        $session = $this->get('session');
        
        if($request->isMethod('POST')){
        
        if($formularz->isValid()){
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($klient);
            $em->flush();
         
            $session->getFlashBag()->add('success', 'Twoje dane zostały zapisane');
            return $this->redirect($this->generateUrl('dodaj_wyposazenie'));
        }  else {
            $session->getFlashBag()->add('danger', 'Twoje dane nie zostały zapisane');
        }
        }
        
        return array(
            'formularz' => $formularz->createView(),
          
        );
    }
//            {
//        
//        $formularz = $this->createFormBuilder()
//                ->add('imie', 'text')
//                ->add('email', 'email')
//                ->add('temat', 'choice', array(
//                    'choices' => array(
//                        's' => 'Budowa stron',
//                        'o' => 'Optymalizacja',
//                        'a' => 'Audyt',
//                        'ad'=> 'Adwords',
//                        'r' => 'Remarekting',
//                        'b' => 'Banerowa'
//                    ),
//                    'expanded' =>true
//                    
//                ))
//                ->add('tresc', 'textarea')
//                ->add('wyslij', 'submit')
//                ->getForm();
//                   
//        return array(
//            'formularz' => $formularz->createView()
//        );
//    }
    
     /**
   * @Route(
   *    "/strona-bledu", 
   *    name="strona_bledu"
   * )
   */
    public function  stronaBleduAction(){
        throw new \Exception('Chyba zabłądziłeś');
    }
}