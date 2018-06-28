<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->integer('venue_id');
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->integer('event_type_id');
            $table->string('cover_pic');
            $table->string('logo_pic');
            $table->string('thumbnail_pic');
            $table->text('description');
            $table->integer('event_manager_contact');
            $table->integer('audience_expected');
            $table->integer('audience_type_id');
            $table->string('special_attraction');
            $table->integer('expected_sponsorship');
            $table->boolean('sponsored');
            $table->integer('event_status_id');
            $table->integer('sponsor_status_id');
            // $table->integer('sponsors_name'); using many to many relationship; see event model
            $table->boolean('admin_verified');
            $table->rememberToken();
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
        Schema::drop('event');
    }
}
