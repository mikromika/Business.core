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
              $table->integer('firm_id');
              $table->string('Company_name')->unique();
              $table->string('Reg_nr-');
              //$table->string('active');
              //$table->FingerPrintToken()
              //$table->timestamp(Established_date);
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
