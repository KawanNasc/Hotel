<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameNomeTabela extends Migration
{
    public function up()
    {
        Schema::rename('quarto', 'quartos');
    }

    public function down()
    {
        // Se desejar reverter o processo de renomear a tabela, você pode implementar a lógica aqui
    }
}
?>