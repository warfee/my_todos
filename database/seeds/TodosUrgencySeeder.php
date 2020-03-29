<?php

use Illuminate\Database\Seeder;

class TodosUrgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('todos_urgency')->insert([
        	'id'	=> '1',
            'name'	=> 'Urgent & Important',
        ]);
        DB::table('todos_urgency')->insert([
        	'id'	=> '2',
            'name'	=> 'Urgent & Not Important',
        ]);
        DB::table('todos_urgency')->insert([
        	'id'	=> '3',
            'name'	=> 'Not Urgent & Important',
        ]);
        DB::table('todos_urgency')->insert([
        	'id'	=> '4',
            'name'	=> 'Not Urgent & Not Important',
        ]);
    }
}
