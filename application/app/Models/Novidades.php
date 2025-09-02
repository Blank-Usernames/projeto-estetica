<?php
// Framework Eloquent

# Classe que acessa a entidade (tabela) novidades
# É obrigatório declarar na $fillable os campos que em algum momento serão preenchidos

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Novidades extends Model
{
    protected $fillable = [
        'email'
    ];
}
