<?php
require_once('views/frontend/View.php');

class ControllerAccueil
{
    private $_articleManager;
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && count($url) > 1)
            throw new Exception('Page introuvable');
        else
            $this->posts();
    }

    private function posts()
    {
        $this->_postManager = new PostManager;
        $posts = $this->_postManager->getPosts();

        $this->_view = new View('Accueil');
        $this->_view->generate(array('posts' => $posts));
    }
}