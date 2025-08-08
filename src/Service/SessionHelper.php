<?php

namespace App\Service;

use App\Entity\LoginAndSignUp\User;
use RuntimeException;

class SessionHelper
{
    public function setUserSession($request , User $user): void
    {
        $session = $request->getSession();
        $session->set('user', $user);
        $session->set('userId', $user->getId());
        $session->set('userName', $user->getEmail());
    }
}
