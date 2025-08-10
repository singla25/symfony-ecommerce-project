<?php

namespace App\Service;

use App\Entity\LoginAndSignUp\User;
use RuntimeException;
use Symfony\Component\HttpFoundation\Request;

class SessionHelper
{
    public function setUserSession($request , User $user): void
    {
        $session = $request->getSession();
        $session->set('user', $user);
        $session->set('userId', $user->getId());
        $session->set('userName', $user->getEmail());
    }

//    public function clearUserSession(Request $request): void
//    {
//        $request->getSession()->remove('user');
//        $request->getSession()->remove('userId');
//        $request->getSession()->remove('userName');
//    }
}
