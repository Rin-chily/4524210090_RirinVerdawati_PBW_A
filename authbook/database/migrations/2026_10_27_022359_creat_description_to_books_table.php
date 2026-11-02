
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Menambahkan kolom description ke tabel books
    public function up(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->text('description')->nullable();
        });
    }

    // Menghapus kolom description jika migration dibatalkan
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }
};
