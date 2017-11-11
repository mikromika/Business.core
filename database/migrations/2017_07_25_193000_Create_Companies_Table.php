    <?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateCompaniesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('companies', function (Blueprint $table) {
              $table->increments('id');
              $table->string('name')->unique();
              $table->integer('firm_id')->nullable();
              $table->integer('reg_nr');  //PRH // international format
              $table->integer('vat_nr')->nullable();  //PRH
              $table->string('type');       // Business type; vendor or customer
              $table->string('category');  // Business field
              $table->boolean('active')->default(true)->nullable();
            //  $table->timestamp(established_date)->nullable();
              //$table->FingerPrintToken()
              $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies', function (Blueprint $table) {
            //
        });
    }
}
