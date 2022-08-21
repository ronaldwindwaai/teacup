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
        Schema::create('local_purchasing_orders', function (Blueprint $table) {
            $table->id();
            $table->string('lpo_number');
            $table->foreignIdFor(\App\Models\Project::class);

            $table->foreignId('invoice_id')
                ->constrained('invoices')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('requested_by_user_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->boolean('approved')->default(false);

            $table->foreignId('primary_approval_user_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('secondary_approval_user_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('local_purchasing_orders');
    }
};
