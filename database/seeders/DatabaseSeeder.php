<?php

namespace Database\Seeders;

use App\Models\Bank;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\LocalPurchasingOrder;
use App\Models\Project;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(30)->create();
        Bank::factory(5)->create();
        Supplier::factory(15)->create();
        Project::factory(4)->create();
        Invoice::factory(20)->create();
        InvoiceItem::factory(10)->create();
        LocalPurchasingOrder::factory(20)->create();
    }
}
