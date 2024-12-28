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
        return view('welcome', ['title' => 'Home']);
    }

    /**
     * GET: Exercices page
     *
     * @return \Illuminate\View\View
     */
    public function exercise($entity)
    {
        if ($entity == 'pushstate-popstate') {
            return view('home', [
                'title' => 'pushState & popState', 
                'entity' => $entity
            ]);
        }

        if ($entity == 'using-api') {
            return view('home', [
                'title' => 'Using the API', 
                'entity' => $entity
            ]);
        }

        if ($entity == 'pushstate-replacestate') {
            return view('home', [
                'title' => 'pushState with replaceState', 
                'entity' => $entity
            ]);
        }

        if ($entity == 'popstate-hashchange') {
            return view('home', [
                'title' => 'popState & hashchange', 
                'entity' => $entity
            ]);
        }

        if ($entity == 'history-basics-ajax') {
            return view('home', [
                'title' => 'Basics with Ajax', 
                'entity' => $entity
            ]);
        }
    }
}
