<?php

namespace admin\controller;

use system\Controller;

class BaseController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->checkLogin();
    }

    protected function checkLogin()
    {
        if ($this->params['c'] != 'Login') {
            if (empty($_SESSION['admin'])) {
                $this->redirect('login', 'login');
            }
        }
        return true;
    }
}
