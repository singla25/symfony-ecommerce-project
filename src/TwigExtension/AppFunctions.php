<?php

namespace App\TwigExtension;

use App\Repository\Shop\CartRepository;
use Symfony\Component\HttpFoundation\RequestStack;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppFunctions extends AbstractExtension
{

    public function __construct(private readonly CartRepository $cartRepository, private readonly RequestStack $requestStack)
    {

    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('cartBadgeValue', [$this, 'cartBadgeValue']),
        ];
    }

    public function cartBadgeValue()
    {
        $userId = $this->requestStack->getSession()->get('userId');
        return count($this->cartRepository->getBadgeValueByUser($userId) ?? 0);
    }
}
