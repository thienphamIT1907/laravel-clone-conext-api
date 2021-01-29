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
      $options = $request -> query('type');
      return response() -> json($this -> repository -> getByOption($options), 200);
    }

    public function create() { }

    public function store(Request $request) { }

    public function show($id) { }

    public function edit($id) { }

    public function update(Request $request, $id) { }

    public function destroy($id) { }
  }
