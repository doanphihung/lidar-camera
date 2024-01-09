<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push(__('label.common.home'), route('home'));
});

// Notification
Breadcrumbs::for('notification.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('menu.list_management.list_notification'), route('notification.index'));
});
