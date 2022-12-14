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

    /**
     * lista os serviços
     *
     * @return void
     */
    public function index()
    {
        $servicos = $this->servico->paginate(10);
        
        return view('servicos.index',[
            'servicos' => $servicos,
        ]);
    }

    /**
     * cria um novo serviço
     *
     * @return void
     */
    public function create()
    {
        return view('servicos.create');
    }
    /**
     * grava o novo serviço no BD
     *
     * @param ServicoRequest $request
     * @return void
     */
    public function store(ServicoRequest $request)
    {
        $dados = $request->except('_token');
        
        $this->servico->create($dados);

        return redirect()->route('servicos.index')
                         ->with('mensagem','Serviço criado com sucesso!');
    }

    /**
     * edita o seeviço
     *
     * @param Servico $servico
     * @return void
     */
    public function edit(Servico $servico)
    {     
        return view('servicos.edit',[
            'servico' => $servico,
        ]);
    }

    /**
     * grava a alteração do serviço
     *
     * @param ServicoRequest $request Servico $servico
     * @param integer $id
     * @return void
     */
    public function update(ServicoRequest $request, Servico $servico)
    {
        $data = $request->except(['_token','_method']);       

        $servico->update($data);

        return redirect()->route('servicos.index')
                         ->with('mensagem','Serviço atualizado com sucesso!');;
    }

    /**
     * exclui o serviço
     *
     * @param Servico $servico
     * @return void
     */
    public function destroy(Servico $servico)
    {   

        $servico->delete();

        return redirect()->route('servicos.index');

    }

}
