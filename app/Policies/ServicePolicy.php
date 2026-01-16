<?php

namespace App\Policies;

use App\Models\Service;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ServicePolicy
{
    public function edit(User $user, Service $service)
    {
        return $service->client->user->is($user);
    }

}
