<?php

namespace App\EventSubscriber;

use App\Repository\Shop\CartRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Bundle\SecurityBundle\Security;

use Twig\Environment;

class TwigGlobalCartSubscriber implements EventSubscriberInterface
{
    private $twig;
    private $security;
    private $cartRepository;

    public function __construct(Environment $twig, Security $security, CartRepository $cartRepository)
    {
        $this->twig = $twig;
        $this->security = $security;
        $this->cartRepository = $cartRepository;
    }

    public function onKernelController(ControllerEvent $event)
    {
        $user = $this->security->getUser();

        $cartCount = 0;
        if ($user) {
            $cartCount = $this->cartRepository->count(['userId' => $user->getId()]);
        }

        // This will create a global twig variable called 'cartCount'
        $this->twig->addGlobal('cartCount', $cartCount);
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }
}
