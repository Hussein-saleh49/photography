<?php
namespace App\Livewire\Admin\Settings;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithPagination;

class SettingsData extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    protected $listeners       = ["refreshData" => '$refresh'];
    public function render()
    {
        $settings = Setting::paginate(2);
        return view('livewire.admin.settings.settings-data',get_defined_vars());
    }
}
