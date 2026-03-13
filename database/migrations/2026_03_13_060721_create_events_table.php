<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->decimal('price', 10, 2);
            $table->decimal('lat', 10, 8);
            $table->decimal('lng', 11, 8);
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }
    public function down() { Schema::dropIfExists('events'); }
};