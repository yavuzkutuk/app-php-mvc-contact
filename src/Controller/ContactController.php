<?php

namespace App\Controller;

class ContactController extends AbstractController
{
    /**
     * Display contact page
     */
    public function index(): string
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $errors = $this->validate($_POST);

            if(!$errors){
                // Envoyer le mail
            }
        }
        return $this->twig->render('Contact/index.html.twig');
    }

    private function validate(array $values)
    {
        return;
    }
}
