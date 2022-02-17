<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VendorTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vendor_types')->delete();
        
        \DB::table('vendor_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Parcel Delivery',
                'description' => 'Send parcel to people',
                'slug' => 'parcel',
                'is_active' => 1,
                'created_at' => '2021-06-30 10:45:53',
                'updated_at' => '2021-06-30 10:45:53',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Food Delivery Sweet Foods',
                'description' => 'Buy the best meal from your nearby restaurant',
                'slug' => 'food',
                'is_active' => 1,
                'created_at' => '2021-06-30 10:45:53',
                'updated_at' => '2021-06-30 19:08:42',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}