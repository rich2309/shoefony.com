<?php
/**
 * Created by IntelliJ IDEA.
 * User: ricar
 * Date: 15/03/2018
 * Time: 05:32 PM
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName', TextType::class, array('label' => "Prénom"));
        $builder->add('lastName', TextType::class, array('label' => "Nom"));
        $builder->add('email',EmailType::class, array('label' => "Email"));
        $builder->add('message', TextareaType::class, array('label' => "Message"));
    }

    public function getName()
    {
        return 'contact_form';
    }
}