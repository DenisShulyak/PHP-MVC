<?php
/**
 * Created by PhpStorm.
 * User: ������
 * Date: 18.02.2020
 * Time: 17:37
 */

namespace Controllers;


use Core\_Abstract\Controller;
use Models\Books;

class SiteController extends Controller
{

    function index(){
        Books::insert(['name'=>'Test book']);

        $this->render('index');
    }
}