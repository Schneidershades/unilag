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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('details')->nullable();
            $table->foreignId('payment_id')->nullable()->constrained('transactions')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('parent_id')->nullable()->constrained('transactions')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('payment_gateway_id')->nullable()->constrained('payment_gateways')->cascadeOnUpdate()->nullOnDelete(); 
            $table->string('transactionable_type')->nullable();
            $table->foreignId('transactionable_id')->nullable();
            $table->float('subtotal')->default(0);
            $table->float('total')->default(0);
            $table->float('charges')->default(0);
            $table->float('amount_paid')->default(0);
            $table->string('payment_reference')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnUpdate()->nullOnDelete();
            $table->string('currency')->nullable();
            $table->string('payment_gateway')->nullable();
            $table->string('payment_gateway_method')->nullable();
            $table->string('payment_gateway_message')->nullable();
            $table->longText('payment_gateway_json_response')->nullable();
            $table->float('payment_gateway_charge')->default(0);
            $table->boolean('discount_applied')->default(false);
            $table->float('discount_amount')->default(0);
            $table->string('platform_initiated')->nullable();
            $table->string('status')->default('Pending');
            $table->boolean('success')->default(false);
            $table->boolean('recurring')->default(false);
            $table->integer('recurring_ticket_purchased')->nullable();
            $table->integer('recurring_usage_exhausted')->nullable();
            $table->date('recurring_end_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
