<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number');
            $table->date('invoice_date')->default(now());
            $table->float('vat',8,2)->nullable();
            $table->float('sub_total',8,2);
            $table->float('discount',8,2)->nullable();
            $table->float('total',8,2);

            $table->foreignId('supplier_id')
                ->constrained('suppliers')
                ->onUpdate('cascade')
                ->onDelete('cascade');


            $table->enum('status',[
                'submitted',
                'processing',
                'processed',
                'rejected'
            ])->default('submitted');

            $table->longText('status_message')->nullable();
            $table->timestamp('paid_date')->nullable();
            $table->longText('file_url');

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
        Schema::dropIfExists('invoice');
    }
};
