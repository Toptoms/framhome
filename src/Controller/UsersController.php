<?php

namespace App\Controller;

use Core\AuthComponent;


class UsersController extends AppController

{

    public function index()
    {
        if (AuthComponent::checkAuthenticated()  ) {
            $this->render("index");
        } else {
            $this->redirect("login");
        }
    }

    /**
     * @throws \Exception
     */
    public function login()

    {
        $mail = 'le-campus-numerique@in-the-alps.fr';
        $pass = '123';

        if (!empty($_POST)) {
            if ($_POST['mail'] === $mail && $_POST['pass'] === $pass) {
                AuthComponent::create();
                $this->redirect('index');
            }
        }
         $this->render('login');
    }


    /**
     * @throws \Exception
     */
    public function logout()
    {
        AuthComponent::delete();
        $this->redirect('login');

    }

}