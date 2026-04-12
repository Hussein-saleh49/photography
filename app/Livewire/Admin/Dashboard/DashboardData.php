<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\Blog;
use App\Models\Collection;
use App\Models\Message;
use App\Models\Subscriber;
use Livewire\Component;

class DashboardData extends Component
{
    public function render()
    {
        $blogsCount = Blog::count();
        $collectionsCount = Collection::count();
        $messagesCount = Message::count();
        $subscribersCount = Subscriber::count();
        return view('livewire.admin.dashboard.dashboard-data',get_defined_vars());
    }
}
