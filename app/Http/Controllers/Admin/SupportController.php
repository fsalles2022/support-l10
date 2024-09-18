<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\DTO\Supports\CreateSupportDTO;
use App\DTO\Supports\UpdateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupportRequest;
use App\Models\Support;
use App\Services\SupportService;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function __construct(
        protected SupportService $supportService
    ) {}

    public function index(Request $request)
    {
        // Obtém os dados paginados com base no filtro e parâmetros fornecidos
        $supports = $this->supportService->paginate(
            page: $request->get('page', 1),
            totalPerPage: $request->get('per_page', 5),
            filter: $request->filter
        );

        // Verifica se não há itens e se um filtro foi aplicado
        $noResults = $supports->total() === 0 && $request->filter;

        // Prepara os filtros para a view
        $filters = ['filter' => $request->get('filter', '')];

        // Retorna a view com os dados paginados, os filtros e a variável de status
        return view('admin.supports.index', compact('supports', 'filters', 'noResults'));
    }

    public function show(string|int $id)
    {


        if (!$support = $this->supportService->findOne($id)) {
            return back();
        }

        $formattedDate = Carbon::parse($support->created_at)->format('Y-m-d H:i');
        // dd($support->subject);

        return view('admin.supports.show', compact('support', 'formattedDate'));
    }

    public function create()
    {
        return view('admin.supports.create');
    }

    public function store(StoreUpdateSupportRequest $request, Support $support)
    {
        $this->supportService->new(
            CreateSupportDTO::makeFromRequest($request)
        );

        return redirect()->route('supports.index')
            ->with('message', 'Cadastrado com Sucesso!');
    }

    public function edit(string $id)
    {
        if (!$support = $this->supportService->findOne($id)) {
            return back();
        }
        return view('admin.supports.edit', compact('support'));
    }


    public function update(StoreUpdateSupportRequest $request, Support $support, string|int $id)
    {
        $support = $this->supportService->update(
            UpdateSupportDTO::makeFromRequest($request)
        );

        if (!$support) {
            return back();
        }

        return redirect()->route('supports.index')
            ->with('message', 'Atualizado com Sucesso!');
    }

    public function destroy(int $id)
    {
        $this->supportService->delete($id);

        return redirect()
            ->route('supports.index')
            ->with('message', 'Chamado Deletado com Sucesso!');
    }
}
