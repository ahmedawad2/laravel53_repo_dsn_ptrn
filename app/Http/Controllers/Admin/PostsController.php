<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        print_r('from index');
        return Post::all();
    }

    public function create()
    {
        /**
         * redirect()->action() allow linking to a controller's method
         * BEWARE: reference the controller with a partial namespace starting after App\Http\Controllers
         * other kinds of redirects:
         *1) home() to a route called home.
         *2) away() to an external URL, without default URL validation.
         *3) refresh() to the same page.
         *4) secure() the same as to() with $secure set to true.
         */
        return redirect()->action('Admin\PostsController@index');
    }

    public function show(Post $post)
    {
        return $post;
    }


}
