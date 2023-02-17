<?php

use App\Models\Ticket;
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
        Schema::disableForeignKeyConstraints();
        Schema::create('bordereaus', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Ticket::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();

            $table->string('ticketAmount');
            $table->string('amountReimbursed');
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
        Schema::dropIfExists('bordereaus');
    }
};
