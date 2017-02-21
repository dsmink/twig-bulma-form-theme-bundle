<?php

namespace AppBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * TextTypeExtension
 *
 * @author Dennis Smink <d.smink@gmail.com>
 */
class TextTypeExtension extends AbstractTypeExtension
{
    /**
     * Builds the view.
     *
     * This method is called after the extended type has built the view to
     * further modify it.
     *
     * @see FormTypeInterface::buildView()
     *
     * @param FormView      $view    The view
     * @param FormInterface $form    The form
     * @param array         $options The options
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        if (isset($options['bulma_icon'])) {
            $view->vars['bulma_icon'] = $options['bulma_icon'];
        }
    }
    
    /**
     * Configures the options for this type.
     *
     * @param OptionsResolver $resolver The resolver for the options
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefined('bulma_icon');
        $resolver->setAllowedTypes('bulma_icon', 'array');
    }
    
    /**
     * Returns the name of the type being extended.
     *
     * @return string The name of the type being extended
     */
    public function getExtendedType() 
    {
        return TextType::class;
    }
}
