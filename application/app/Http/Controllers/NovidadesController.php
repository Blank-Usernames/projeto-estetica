<?php
/*
CRUD - Operação de manutenção de uma tabela

Métodos de CRUD no ORM Eloquent (ORM - Object Relational Model)

Create - INSERT
    - create() - Cadastra os dados
    - save() - Salva (opcional)
    - firstOrCreate() - Cria 'if not exists'
    - updateOrCreate() - Cria ou atualiza 'if exists'
Read - SELECT
    - all() - Traz todos os registros da tabela
    - find() - Traz um registro pelo ID (PK)
    - findOrFail() - If (erro = true) {mostrarErro = false} else {executar = true}
    - first() - Traz apenas o primeiro registro cadastrado
    - firstOrFail() - If (erro = true) {mostrarErro = false} else {executar = true}
    - where() - Traz todos os registros filtrados
    - get() - Organiza os dados em um objeto do Eloquent

*/


namespace App\Http\Controllers;

use App\Models\Novidades; # Conecta ao Banco de Dados
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class NovidadesController extends Controller
{
    # Método Construtor - __construct()
    public function __construct() {
        # Criar o cadastro inicial

        # Acesso direto à classe estática Novidades
        Novidades::create([
            'email'=>'eduardosoliveira67@senacsp.edu.br',
            'validado'=>'1',
            'opt_out'=>'sim',
            'motivo_saida'=>'Não quero mais XD',
            'data_criacao'=>date('Y-m-d h:i:s'),
        ]);

        # Chamada do método desta classe
        $this->dummyData();
    }
    
    # Inserir dados de teste (fake)
    public function dummyData() {
        # Instância a classe 'faker'
        $faker = Faker::create();

        # Realizar 10 cadastros por vez
        for ($i = 0; $i < 10; $i++) {
            Novidades::create([
                'email'=> $faker->unique()->safeEmail(),
                'data_criacao'=>date('Y-m-d h:i:s'),
            ]);
        }
    }

    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        # Buscar todos os dados da tabela
        $todos = Novidades::all();

        # Busca a Primary Key (ID)
        //$unico = Novidades::find(1);

        # Busca de acordo com a filtragem
        //$filtrado = Novidades::where('email','like', 'm%')->get();

        # Dump and Die - Exibe tudo o que há na variável e interrompe a execução do sistema
        //dd($unico);

        # Dump legível no PHP
        //echo "<pre>";
        //print_r($filtrado);
        //echo "</pre>";
        //die();

        /* 
        return:
            - return "Texto";
            - return "<h1>Hello World!</h1>;
            - return redirect('www.youtube.com');
            - return view('arquivo');
            - return route('rota')
        
        */

        # Redirecionando para a rota passando os valores buscados
        return redirect()->route('novidades',['dados'=>$todos]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Novidades $novidades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Novidades $novidades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Novidades $novidades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Novidades $novidades)
    {
        //
    }
}
