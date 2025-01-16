<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('auctions', function (Blueprint $table) {
            $table->unsignedInteger('view_count')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('auctions', function (Blueprint $table) {
            $table->dropColumn('view_count');
        });
    }
    
};
