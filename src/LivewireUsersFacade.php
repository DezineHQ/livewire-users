<?php

namespace TashariWebDev\LivewireUsers;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TashariWebDev\LivewireUsers\Skeleton\SkeletonClass
 */
class LivewireUsersFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'livewire-users';
    }
}
