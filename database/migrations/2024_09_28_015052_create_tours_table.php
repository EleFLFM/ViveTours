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
        if (!Schema::hasTable('tours')) {
            Schema::create('tours', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->text('description');
                $table->string('image')->nullable();
                $table->timestamps();
            });
        }

        Schema::table('tours', function (Blueprint $table) {
            if (!Schema::hasColumn('tours', 'start_date')) {
                $table->date('start_date')->after('description');
            }
            if (!Schema::hasColumn('tours', 'end_date')) {
                $table->date('end_date')->after('start_date');
            }
            if (Schema::hasColumn('tours', 'tour_date')) {
                $table->dropColumn('tour_date');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->dropColumn(['start_date', 'end_date']);
            $table->date('tour_date')->after('description');
        });
    }
};