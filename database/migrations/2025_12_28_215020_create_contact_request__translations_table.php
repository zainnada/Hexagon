<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_request__translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contact_request_id')
                ->constrained('contact__requests')
                ->cascadeOnDelete();

            $table->string('locale')->index();
            $table->text('contact_subject');
            $table->text('contact_message');

            $table->unique(['contact_request_id', 'locale']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_request__translations');
    }
};
