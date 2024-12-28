<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @author Xanders
 * @see https://team.xsamtech.com/xanderssamoth
 */
class HomeController extends Controller
{
    // ==================================== HTTP GET METHODS ====================================
    /**
     * GET: Home page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * GET: Exercices page
     *
     * @return \Illuminate\View\View
     */
    public function exercise($entity)
    {
        if ($entity == 'pushstate-popstate') {
            return view('home', ['title' => 'Accueil']);
        }
    }
}
