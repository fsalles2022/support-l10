<?php

namespace App\Http\Controllers\Api;

use App\DTO\Supports\CreateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupportRequest;
use App\DTO\Supports\UpdateSupportDTO;
use App\Http\Resources\SupportResource;
use Illuminate\Http\Request;
use App\Services\SupportService;
use Illuminate\Http\Response;

class SupportController extends Controller
{

    public function __construct(
        protected SupportService $supportService,
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $supports = $this->supportService->paginate(
            page: $request->get('page', 1),
            totalPerPage: $request->get('per_page', 5),
            filter: $request->filter
        );

        // dd($supports->items());

        return SupportResource::collection($supports->items())
            ->additional([
                'meta' => [
                    'total' => $supports->total(),
                    'isFirstPage' => $supports->isFirstPage(),
                    'isLastPage' => $supports->isLastPage(),
                    'currentPage' => $supports->currentPage(),
                    'getNumberNextPage' => $supports->getNumberNextPage(),
                    'getNumberPreviousPage' => $supports->getNumberPreviousPage(),
                ]
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateSupportRequest $request)
    {
        $support = $this->supportService->new(
            CreateSupportDTO::makeFromRequest($request)
        );

        return new SupportResource($support);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (! $support = $this->supportService->findOne($id)) {
            return response()->json([
                'error' => 'Not found'
            ], Response::HTTP_NOT_FOUND);
        }

        return new SupportResource($support);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateSupportRequest $request, string $id)
    {
        $support = $this->supportService->update(
            UpdateSupportDTO::makeFromRequest($request, $id)
        );

        if (!$support) {
            return response()->json([
                'error' => 'Not found'
            ], Response::HTTP_NOT_FOUND);
        }

        return new SupportResource($support);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!$this->supportService->findOne($id)) {
            return response()->json([
                'error' => 'Not found'
            ], Response::HTTP_NOT_FOUND);
        }
        return $this->supportService->delete($id);

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
