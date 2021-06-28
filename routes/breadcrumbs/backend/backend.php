<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.jobgroup.index', function ($trail) {
    $trail->push('Job Group', route('admin.jobgroup.index'));
});

Breadcrumbs::for('admin.team.index', function ($trail) {
    $trail->push('Team', route('admin.team.index'));
});

Breadcrumbs::for('admin.team.edit', function ($trail) {
    $trail->push('Edit Team', route('admin.team.edit',1));
});


require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
