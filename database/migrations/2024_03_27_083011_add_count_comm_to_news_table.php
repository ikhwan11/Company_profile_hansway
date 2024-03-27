<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddCountCommToNewsTable extends Migration
{
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->integer('count_comm')->default(0);
        });

        // Hitung jumlah komentar dan simpan di kolom count_comm
        DB::unprepared('
            CREATE TRIGGER update_count_comm_trigger AFTER INSERT ON news_comments
            FOR EACH ROW
            BEGIN
                UPDATE news
                SET count_comm = (
                    SELECT COUNT(*)
                    FROM news_comments
                    WHERE news_id = NEW.news_id
                )
                WHERE id = NEW.news_id;
            END;
        ');
    }

    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('count_comm');
        });

        DB::unprepared('DROP TRIGGER IF EXISTS update_count_comm_trigger');
    }
}
