<<<<<<< Updated upstream
+<?php
=======
<?php
>>>>>>> Stashed changes

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< Updated upstream
        Schema::create('accessories', function (Blueprint $table) {
=======
        Schema::create('accesories', function (Blueprint $table) {
>>>>>>> Stashed changes
            //['name', 'price','image']
            $table->bigIncrements('id');
            $table->text('name');
            $table->integer('price');
            $table->text('image');
            $table->timestamps();
        });
<<<<<<< Updated upstream
    }
=======
    } 
>>>>>>> Stashed changes

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accessories');
    }
<<<<<<< Updated upstream
}
=======
}
>>>>>>> Stashed changes
