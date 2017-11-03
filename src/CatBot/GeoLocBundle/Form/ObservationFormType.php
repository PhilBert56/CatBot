<?php


namespace CatBot\GeoLocBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ObservationFormType extends AbstractType
{

    /**
    * {@inheritdoc}
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
          ->add('latitude',TextType::class,array('label' => 'observation.latitude'))
          ->add('longitude',TextType::class,array('label' => 'observation.longitude'))
          ;

    }

     /**
     * {@inheritdoc}
     */



      public function configureOptions(OptionsResolver $resolver)
      {
          $resolver->setDefaults(array(
              'data_class' => 'CatBot\GeoLocBundle\Entity\Observation'
          ));
      }



      /**
       * {@inheritdoc}
       */

      public function getBlockPrefix()
      {
          return 'geolocbundle_observation';
      }

}
