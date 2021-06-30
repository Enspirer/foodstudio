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

Breadcrumbs::for('admin.tenant.index', function ($trail) {
    $trail->push('Tenant', route('admin.tenant.index'));
});

Breadcrumbs::for('admin.tenant.edit', function ($trail) {
    $trail->push('Edit Tenant', route('admin.tenant.edit',1));
});

Breadcrumbs::for('admin.tenant.cuisine_index', function ($trail) {
    $trail->push('Cuisine', route('admin.tenant.cuisine_index',1));
});

Breadcrumbs::for('admin.tenant.cuisine_edit', function ($trail) {
    $trail->push('Edit Cuisine', route('admin.tenant.cuisine_edit',1));
});




Breadcrumbs::for('admin.tenants.index', function ($trail) {
    $trail->push('Tenants', route('admin.tenants.index'));
});
Breadcrumbs::for('admin.tenants.edit', function ($trail) {
    $trail->push('Edit Tenants', route('admin.tenants.edit',1));
});


require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
