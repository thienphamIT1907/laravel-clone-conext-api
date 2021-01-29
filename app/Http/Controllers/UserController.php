<?php

  namespace App\Http\Controllers;

  use App\repositories\User\UserRepositoryImpl;
  use Illuminate\Http\Request;
  use Validator;

  class UserController extends Controller {

    protected $repository;

    /**
     * UserController constructor.
     * @param $repository
     */
    public function __construct(UserRepositoryImpl $repository) { $this -> repository = $repository; }

    public function index() {
      return response() -> json($this -> repository -> getAllRandom(), 200);
    }

    public function create() {
      //
    }

    public function store(Request $request) {
      //
    }

    public function show($id) {
      //
    }

    public function edit($id) {
      //
    }

    public function update(Request $request, $id) {
      //
    }

    public function destroy($id) {
      //
    }
  }
