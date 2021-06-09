<?php


namespace FitraTech\SyliusFacebookMessengerPlugin\Form\Extension;


use Sylius\Bundle\ChannelBundle\Form\Type\ChannelType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ChannelTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        parent::buildForm($builder, $options);

        $builder
          ->add('enableFacebookMessenger', CheckboxType::class, [
              'label' => 'fitra_tech_sylius_facebook_messenger_plugin.ui.enable_facebook_messenger',
              'required' => false,
          ])
          ->add('facebookPageId', TextType::class, [
              'label' => 'fitra_tech_sylius_facebook_messenger_plugin.ui.facebook_page_id',
              'required' => false,
          ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [
            ChannelType::class,
        ];
    }
}
