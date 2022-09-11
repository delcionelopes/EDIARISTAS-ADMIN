<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicoRequest;
use App\Models\Servico;

class ServicoController extends Controller
{
    private $servico;

    public function __construct(Servico $servico)
    {
        $this->servico = $servico;
    }
    public function index()
    {
        $servicos = $this->servico->paginate(10);
        
        return view('servicos.index',[
            'servicos' => $servicos,
        ]);
    }

    public function create()
    {
        return view('servicos.create');
    }

    public function store(ServicoRequest $request)
    {
        $dados = $request->except('_token');
        
        $this->servico->create($dados);

        return redirect()->route('servicos.index');
    }

    public function edit(int $id)
    {
        $servico = $this->servico->find($id);
        
        return view('servicos.edit',[
            'servico' => $servico,
        ]);
    }

    public function update(ServicoRequest $request, int $id)
    {
        $data = $request->except(['_token','_method']);

        $servico = $this->servico->find($id);

        $servico->update($data);

        return redirect()->route('servicos.index');
    }

    public function destroy(int $id)
    {
        $servico = $this->servico->find($id);

        $servico->delete();

        return redirect()->route('servicos.index');

    }

}
