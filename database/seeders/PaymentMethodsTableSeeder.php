<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_methods')->delete();
        
        \DB::table('payment_methods')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Cash On Delivery',
                'slug' => 'cash',
                'instruction' => 'This is the method of payment upon receipt',
                'secret_key' => NULL,
                'public_key' => NULL,
                'hash_key' => NULL,
                'class' => NULL,
                'is_active' => 1,
                'is_cash' => 1,
                'created_at' => '2021-01-09 12:38:10',
                'updated_at' => '2021-07-17 10:49:00',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'Offline Payment',
                'slug' => 'offline',
                'instruction' => 'Send payment thru remittance.
',
                'secret_key' => '',
                'public_key' => '',
                'hash_key' => '',
                'class' => NULL,
                'is_active' => 1,
                'is_cash' => 0,
                'created_at' => '2021-01-09 12:38:10',
                'updated_at' => '2021-07-17 10:49:14',
                'deleted_at' => NULL,
            )
        ));
        
        
    }
}