<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Role Types
         *
         */
        $MenuItems = [
            [
                'name' => 'Home',
                'type' => 'page_link',
                'link' => NULL,
                'page_id' => 1,
                'status' => 1,
            ],
            [
                'name' => 'About us',
                'type' => 'page_link',
                'link' => NULL,
                'page_id' => 2,
                'status' => 1,
            ],
            [
                'name' => 'News',
                'type' => 'page_link',
                'link' => NULL,
                'page_id' => 3,
                'status' => 1,
            ],
        ];

        /*
         * Add Role Items
         *
         */
        foreach ($MenuItems as $MenuItem) {
            $newMenuItem = MenuItem::where('name', '=', $MenuItem['name'])->first();
            if ($newMenuItem === null) {
                $newMenuItem = MenuItem::create([
                    'name' => $MenuItem['name'],
                    'type' => $MenuItem['type'],
                    'link' => $MenuItem['link'],
                    'page_id' => $MenuItem['page_id'],
                    'status' => $MenuItem['status'],
                ]);
            }
        }
    }
}
