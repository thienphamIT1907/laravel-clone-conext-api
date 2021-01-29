<?php

  namespace App\Http\Controllers;

  use App\Models\Voucher;
  use App\repositories\Voucher\VoucherRepositoryImpl;
  use Illuminate\Http\JsonResponse;
  use Illuminate\Http\Request;
  use Validator;

  class VoucherController extends Controller {

    protected $repository;

    public function __construct(VoucherRepositoryImpl $repository) { $this -> repository = $repository; }

    public function index(Request $request): JsonResponse {
      if ($request -> query('type') === 'featured') {
        return response() -> json($this -> repository -> getByOption('featured'), 200);
      }
      return response() -> json($this -> repository -> getByOption('get'), 200);
    }

    public function create() { }

    public function store(Request $request) { }

    public function show($id) { }

    public function edit($id) { }

    public function update(Request $request, $id) { }

    public function destroy($id) { }
  }
