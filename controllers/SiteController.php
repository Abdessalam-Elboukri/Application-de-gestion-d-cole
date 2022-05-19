<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{

    public function home()
    {
        return $this->render('home');
    }

    public function classes()
    {
        return $this->render('classes');
    }

    public function students()
    {
        return $this->render('students');
    }

    public function profile()
    {
        return $this->render('profile');
    }

    public function teachers()
    {
        return $this->render('teachers');
    }

    // public function handleContact(Request $request)
    // {
    //     $body = $request->getBody();
    //     echo "<pre>";
    //     var_dump($body);
    //     echo "</pre>";
    //     exit;
    //     return 'Handling submitted data';
    // }
}