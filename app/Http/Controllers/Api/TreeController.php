<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreTreeRequest;
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
        $trees = $request->user()->trees()->latest()->get();

        return TreeResource::collection($trees);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTreeRequest $request)
    {
        //
        $datos = $request->validated();

        $tree = $request->user()->trees()->create([
            'seed_type_id' => $datos['seed_type_id'],
            'name' => $datos['name'] ?? null,
            'level' => 0,
            'health' => 100,
            'progress' => 0,
            'status' => 'ACTIVE',
            'last_decay_at' => now(),
        ]);

        return (new TreeResource($tree))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Tree $tree)
    {
        //
        abort_if($tree->user_id !== $request->user()->id, 403, 'Este árbol no te pertenece.');
        
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
    }
}
