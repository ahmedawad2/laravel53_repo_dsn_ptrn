<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\MongoRepository;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\MysqlRepository;
use Parse\ParseClient;
use Parse\ParseQuery;


class UsersController extends Controller
{
    protected $usersDataInstance;

//    public function __construct(User $user)
//    {
//        $this->usersDataInstance = new MysqlRepository($user);
//    }

    public function __construct()
    {
        $this->usersDataInstance = new MongoRepository('_User');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        print_r($this->usersDataInstance->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //you have access to the files inside Config dir, those files returns array of configs, and you can access them like below:
        print_r(config('app.name'));
        print_r(config('session.driver'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        print_r($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // in case of now route model binding is used, you can name the parameter with a different name than in the route definition
    // here, the method parameter name is: param, where in the routes definition, it's p
    public function added($param)
    {
        return $param;
    }
}
