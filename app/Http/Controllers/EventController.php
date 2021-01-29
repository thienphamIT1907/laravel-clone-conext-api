<?php

  namespace App\Http\Controllers;

  use App\Models\Event;
  use App\repositories\Event\EventRepositoryImpl;
  use Illuminate\Http\JsonResponse;
  use Illuminate\Http\Request;
  use Validator;

  class EventController extends Controller {

    protected $repository;

    public function __construct(EventRepositoryImpl $repository) {
      $this -> repository = $repository;
    }

    public function index(Request $request): JsonResponse {
      if ($request -> query('status') === 'past') {
        return response() -> json($this -> repository -> getAllPastEvent(), 200);
      }
      return response() -> json($this -> repository -> getAll(), 200);
    }

    public function store(Request $request): JsonResponse {
      $rules = [
        "img" => "required",
        "status" => "required",
        "title" => "required",
        "content" => "required",
        "type" => "required",
        "start_date" => "required",
        "end_date" => "required",
      ];

      $validator = Validator ::make($request -> all(), $rules);

      if ($validator -> fails()) {
        return response() -> json($validator -> errors(), 400);
      }

      $event = Event ::create($request -> all());
      return response() -> json($event, 201);
    }

    public function show($id): JsonResponse {
      $event = Event ::find($id);
      if (is_null($event)) {
        return response() -> json([
          "message" => "NOT FOUND"
        ], 404);
      }
      return response() -> json($event, 200);
    }

    public function update(Request $request, $id): JsonResponse {
      $event = Event ::find($id);
      if (is_null($event)) {
        return response() -> json([
          "message" => "NOT FOUND"
        ], 404);
      }
      $event -> update($request -> all());
      return response() -> json($event, 200);
    }

    public function destroy($id): JsonResponse {
      $event = Event ::find($id);
      if (is_null($event)) {
        return response() -> json([
          "message" => "NOT FOUND"
        ], 404);
      }
      $event -> delete();
      return response() -> json(null, 204);
    }
  }
