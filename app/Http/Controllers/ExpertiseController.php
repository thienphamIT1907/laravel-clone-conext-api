<?php

  namespace App\Http\Controllers;

  use App\Models\Expertise;
  use App\repositories\Expertise\ExpertiseRepositoryImpl;
  use Illuminate\Http\JsonResponse;
  use Illuminate\Http\Request;
  use Validator;

  class ExpertiseController extends Controller {

    protected $repository;

    public function __construct(ExpertiseRepositoryImpl $repository) {
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
      $rules = [
        "expertise" => "required",
      ];

      $validator = Validator ::make($request -> all(), $rules);

      if ($validator -> fails()) {
        return response() -> json($validator -> errors(), 400);
      }

      $expertise = Expertise ::create($request -> all());
      return response() -> json($expertise, 201);
    }

    public function show($id): JsonResponse {
      $expertise = Expertise ::find($id);
      if (is_null($expertise)) {
        return response() -> json([
          "message" => "NOT FOUND"
        ], 404);
      }
      return response() -> json($expertise, 200);
    }

    public function update(Request $request, $id): JsonResponse {
      $expertise = Expertise ::find($id);
      if (is_null($expertise)) {
        return response() -> json([
          "message" => "NOT FOUND"
        ], 404);
      }
      $expertise -> update($request -> all());
      return response() -> json($expertise, 200);
    }

    public function destroy($id): JsonResponse {
      $event = Expertise ::find($id);
      if (is_null($event)) {
        return response() -> json([
          "message" => "NOT FOUND"
        ], 404);
      }
      $event -> delete();
      return response() -> json(null, 204);
    }
  }
