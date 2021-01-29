<?php

  namespace App\Http\Controllers;

  use App\Models\BusinessType;
  use App\repositories\BusinessType\BusinessTypeRepositoryImpl;
  use Illuminate\Http\JsonResponse;
  use Illuminate\Http\Request;
  use Validator;

  class BusinessTypeController extends Controller {

    protected $repository;

    public function __construct(BusinessTypeRepositoryImpl $repository) {
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

    public function store(Request $request): JsonResponse {
      $rules = ["type" => "required | min: 20 | max: 50"];
      $validator = Validator ::make($request -> all(), $rules);

      if ($validator -> fails()) {
        return response() -> json($validator -> errors(), 400);
      }

      $businessType = BusinessType ::create($request -> all());
      return response() -> json($businessType, 201);
    }

    public function show(int $id): JsonResponse {
      $businessType = BusinessType ::find($id);
      if (is_null($businessType)) {
        return response() -> json([
          "message" => "NOT FOUND"
        ], 404);
      }
      return response() -> json($businessType, 200);
    }

    public function update(Request $request, $id): JsonResponse {
      $businessType = BusinessType ::find($id);
      if (is_null($businessType)) {
        return response() -> json([
          "message" => "NOT FOUND"
        ], 404);
      }
      $businessType -> update($request -> all());
      return response() -> json($businessType, 200);
    }

    public function destroy($id): JsonResponse {
      $businessType = BusinessType ::find($id);
      if (is_null($businessType)) {
        return response() -> json([
          "message" => "NOT FOUND"
        ], 404);
      }
      $businessType -> delete();
      return response() -> json(null, 204);
    }
  }
