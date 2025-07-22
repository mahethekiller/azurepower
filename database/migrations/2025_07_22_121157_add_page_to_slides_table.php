<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('slides', function (Blueprint $table) {
        $table->unsignedBigInteger('page')->nullable()->after('image'); // foreign key to menus
    });
}

public function down()
{
    Schema::table('slides', function (Blueprint $table) {
        $table->dropColumn('page');
    });
}

};
