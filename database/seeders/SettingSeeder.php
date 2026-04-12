<?php
namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Setting::updateOrCreate(["address" => "admin@admin.com"],
            [
                "name"      => "admin",
                "address"     => "admin@admin.com",
                "phone"     => "01006830403",
                "facebook"  => "link it now",
                "instagram" => "link it now",
                "tiktok"    => "link it now",
            ]);
    }
}
