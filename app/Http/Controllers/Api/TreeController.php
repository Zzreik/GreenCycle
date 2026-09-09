<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTreeRequest;
use App\Http\Resources\TreeResource;
use App\Models\Tree;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TreeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
         $request->validate([
            'user_id' => 'required|integer',
        ]);

        $trees = Tree::where('user_id', $request->user_id)->latest()->get();

        return TreeResource::collection($trees);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTreeRequest $request)
    {
        //
        $datos = $request->validated();

        $tree = Tree::create([
            'user_id' => $datos['user_id'],
            'seed_type_id' => $datos['seed_type_id'],
            'name' => $datos['name'] ?? null,
            'level' => 0,
            'health' => 100,
            'progress' => 0,
            'status' => 'ACTIVE',
        ]);

        return (new TreeResource($tree))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tree $tree)
    {
        //
         return new TreeResource($tree);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tree $tree)
    {
        //
        $tree->delete();

        return response()->noContent();
    }
}
