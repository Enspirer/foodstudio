<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.jobgroup.index', function ($trail) {
    $trail->push('Job Group', route('admin.jobgroup.index'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
