<?php
// Framework Migrate

# Classe de criação das entidades do banco de dados

# Importação das classes do Migrate
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations. (Cria a tabela no banco de dados)
     */
    public function up(): void
    {
        Schema::create('novidades', function (Blueprint $table) {
            $table->id('id'); # Primary Key (NOT NULL por default)
            $table->string('email', 254)->unique;
            $table->integer('validado')->default(0);
            $table->enum('opt_out',['sim','não'])->default('sim');
            #$table->dateTime('data_criacao')->default('CURRENT_TIMESTAMP');
            $table->string('motivo_saida', 150)->nullable();
            $table->timestamps();
        });
    }

    # Para enviar a tabela para o banco executamos os comandos do Migration
    // php artisan migrate - Sobe as alterações e tabelas novas
    // php artisan migrate:fresh - Apaga as tabela e apaga os dados
    // php artisan:refresh - Apaga os dados da tabela e recria (atualiza)
    // php artisan migrate:rollback --steps=X - Retorna à versão anterior do banco (steps = versão)
    // php artisan:reset - Reseta

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('novidades');
    }
};
