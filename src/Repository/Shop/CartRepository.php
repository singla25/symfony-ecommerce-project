<?php

namespace App\Repository\Shop;

use App\Entity\Shop\Cart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cart>
 */
class CartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cart::class);
    }

    public function getBadgeValueByUser(string $userId):?array
    {
        return $this->findBy(['userId' => $userId]);
    }
}
