<?php
namespace App\Livewire\Admin\Settings;

use App\Models\Setting;
use Livewire\Component;

class SettingsUpdate extends Component
{
    public $record;

    public $name, $phone, $address, $email;
    public $about_title, $about_description;
    public $facebook, $instagram, $tiktok;

    protected $listeners = ['settingUpdate'];

    protected function rules()
    {
        return [
            'name'              => 'required|string|min:3|max:255',
            'phone'             => 'nullable|string|max:20',
            'address'           => 'nullable|string|max:255',
            'about_title'       => 'nullable|string|max:255',
            'about_description' => 'nullable|string|max:1024|min:10',
            'email'             => 'nullable|email',
            'facebook'          => 'nullable|url',
            'instagram'         => 'nullable|url',
            'tiktok'            => 'nullable|url',
        ];
    }

    public function settingUpdate($id)
    {
        $this->record = Setting::findOrFail($id);

        $this->fill([
            'name'              => $this->record->name,
            'phone'             => $this->record->phone,
            'address'           => $this->record->address,
            'email'             => $this->record->email,
            'about_title'       => $this->record->about_title,
            'about_description' => $this->record->about_description,
            'facebook'          => $this->record->facebook,
            'instagram'         => $this->record->instagram,
            'tiktok'            => $this->record->tiktok,
        ]);

        $this->resetValidation();

        $this->dispatch('open-update-modal');
    }

    public function submit()
    {
        $data = $this->validate();

        if (! $this->record) {
            return;
        }

        $this->record->update($data);

        $this->reset(['name', 'phone', 'address','email','about_title','about_description', 'facebook', 'instagram', 'tiktok']);

        $this->dispatch('close-update-modal');
        $this->dispatch('refreshData')->to(SettingsData::class);
    }

    public function render()
    {
        return view('livewire.admin.settings.settings-update');
    }
}
