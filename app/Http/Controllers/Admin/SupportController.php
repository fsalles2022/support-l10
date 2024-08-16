<?php

namespace App\Http\Controllers\Admin;

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
        // $supports = support::all();
        $supports = $this->supportService->getAll($request->filter);
        return view('admin.supports.index', compact('supports'));
    }

    public function show(string|int $id)
    {
        //Support::find($id);
        //Support::where('id, '$id')->first();
        //Support::where('id', '=', '$id')->first();
        if (!$support = $this->supportService->findOne($id)) {
            return back();
        }
        // dd($support->subject);

        return view('admin.supports.show', compact('support'));
    }

    public function create()
    {
        return view('admin.supports.create');
    }

    public function store(StoreUpdateSupportRequest $request, Support $support)
    {

        $data = $request->validated();
        $data['status'] = 'a';

        $support->create($data);

        return redirect()->route('supports.index');
    }

    public function edit(string $id)
    {
        // if (!$support = $support->where('id', $id)->first()) {
        if (!$support = $this->supportService->findOne($id)) {
            return back();
        }
        return view('admin.supports.edit', compact('support'));
    }


    public function update(StoreUpdateSupportRequest $request, Support $support, string|int $id)
    {
        if (!$support = $support->find($id)) {
            return back();
        }

        //$support->subject = $request->subject;
        //$support->body = $request->body;
        //$support->save();
        //     $support->update($request->only(['subject', 'body' ])
        // );
        $support->update($request->validated());
        return redirect()->route('supports.index');
    }

    public function destroy(int $id)
    {
        $this->supportService->delete($id);

        return redirect()->route('supports.index');
    }
}
