<?php
// Framework Eloquent (ORM)

# Classe que acessa a entidade (tabela) novidades
# É obrigatório declarar na $fillable os campos que em algum momento serão preenchidos

# No PHP temos 3 tipos de arrays (vetores):

// Indexado - Lista os dados com índices numéricos - $var = ['primeiro','segundo'] - $var[1] = 'segundo'
// Associativo - Usa chaves nomeadas - $var = ['chave'=>'valor','chave02'=>'valor02'] - $var['chave02']
// Multidimensional - $var = [['chave01'=>'valor01'], ['valor02]] - $var[0]['chave02']

# $var = ['array']; $var = array('array=>array')

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Novidades extends Model
{
    protected $fillable = [
        'email',
        'validado',
        'opt_out',
        'motivo_saida',
    ];
}
