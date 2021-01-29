<?php

  namespace App\Http\Controllers;

  use App\repositories\Workplace\WorkplaceRepositoryImpl;
  use Illuminate\Http\JsonResponse;
  use Illuminate\Http\Request;
  use Validator;

  class WorkplaceController extends Controller {

    protected $repository;

    public function __construct(WorkplaceRepositoryImpl $repository) { $this -> repository = $repository; }

    public function index(Request $request): JsonResponse {
      if ($request -> query('get') === 'location') {
        return response() -> json($this -> repository -> getLocation(), 200);
      } else {

      }
      return response() -> json($this -> repository -> getAll(), 200);
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
