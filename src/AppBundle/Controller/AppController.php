<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 08/03/2018
 * Time: 06:59 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Contact;
use AppBundle\Form\ContactType;

class AppController extends Controller
{
    /**
     * @Route("/", name="cms_homepage")
     */
    public function indexAction()
    {
        return $this->render('app/index.html.twig');
    }

    /**
     * @Route("/presentation", name="cms_presentation")
     */
    public function presentationAction()
    {
        return $this->render('app/presentation.html.twig');
    }

    /**
     * @Route("/contact", name="cms_contact")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function contactAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid())
            {
                // Actions to do after form validation
                $this->get('session')->getFlashBag()->add('notice',"Merci, votre message a bien été pris en compte !");
                return $this->redirect($this->generateUrl('cms_contact'));
            }
        }

        return $this->render(
            'app/contact.html.twig',
            array('form' => $form->createView())
        );
    }
}