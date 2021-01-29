<?php

  namespace App\Http\Controllers;

  use App\repositories\Explore\ExploreRepositoryImpl;
  use Illuminate\Http\JsonResponse;
  use Illuminate\Http\Request;
  use Validator;

  class ExploreController extends Controller {

    protected $repository;

    public function __construct(ExploreRepositoryImpl $repository) {
      $this -> repository = $repository;
    }

    public function index(): JsonResponse {
      return response() -> json(
        $this -> repository -> getAll(),
        200,
        [],
        JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT
      );
    }

    public function create() {}

    public function store(Request $request) {}

    public function show($id) {}

    public function edit($id) {}

    public function update(Request $request, $id) {}

    public function destroy($id) {}
  }
