<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::table('companies', function (Blueprint $table) {
      $table->string('official_website_url')->after('business_activities')->default('');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('companies', function (Blueprint $table) {
      $table->dropColumn('official_website_url');
    });
  }
};
