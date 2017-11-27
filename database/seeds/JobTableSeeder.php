<?php

use App\Job;
use Illuminate\Database\Seeder;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 10件分のテストデータを挿入
        for($i = 1; $i <= 10; $i++) {
            $job = new Job();
            $job->title = "タイトル";
            $job->body = "本文_$i";
            $job->company = "会社_$i";

            // $table->text('tags')->nullable();
            // $table->string('emp_type')->nullable();
            // $table->string('position')->nullable();
            // $table->string('market')->nullable();
            // $table->integer('fee_min')->nullable();
            // $table->integer('fee_max')->nullable();
            // $table->string('address')->nullable();
            // $table->decimal('address_lat', 11, 8)->nullable();
            // $table->decimal('address_lng', 11, 8)->nullable();
            $job->save();
        }
    }
}
