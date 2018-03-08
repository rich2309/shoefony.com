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
     */
    public function contactAction()
    {
        return $this->render('app/contact.html.twig');
    }
}