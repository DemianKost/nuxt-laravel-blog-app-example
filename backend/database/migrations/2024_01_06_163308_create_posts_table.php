<?php

declare(strict_types=1);

use App\Enums\Status;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', static function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->string('title');
            $table->string('status')->default(Status::PUBLISHED->value);
            $table->string('summary', 160); // meta description

            $table->text('content');

            $table->json('meta')->nullable();

            $table->foreignUlid('user_id')
                ->index()
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
