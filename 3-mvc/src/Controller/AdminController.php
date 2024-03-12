<?php

use App\Controller\AbstractController;
use App\Repository\UserRepository;

class AdminController extends AbstractController
{
    public function dashboard()
    {
        echo 'Dashboard';
    }

    public function user()
    {
        $userRepository = new UserRepository();
        $users = $userRepository->findAll();
        //var_dump($users);
        
        //echo 'Gestion user';
        return $this->render('admin/user.html.twig', [
            'users' => $users,
            'nbusers' => 3
        ]);

    }
}