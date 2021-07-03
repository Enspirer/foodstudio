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


Breadcrumbs::for('admin.feature.index', function ($trail) {
    $trail->push('Feature Events', route('admin.feature.index'));
});
Breadcrumbs::for('admin.promotion.index', function ($trail) {
    $trail->push('Promotions', route('admin.promotion.index'));
});
Breadcrumbs::for('admin.promotion.edit', function ($trail) {
    $trail->push('Edit Promotion', route('admin.promotion.edit',1));
});
Breadcrumbs::for('admin.voucher.index', function ($trail) {
    $trail->push('Voucher', route('admin.voucher.index'));
});
Breadcrumbs::for('admin.voucher.edit', function ($trail) {
    $trail->push('Edit Voucher', route('admin.voucher.edit',1));
});


Breadcrumbs::for('admin.corporatenews.index', function ($trail) {
    $trail->push('Corporate News', route('admin.corporatenews.index'));
});
Breadcrumbs::for('admin.corporatenews.edit', function ($trail) {
    $trail->push('Edit Corporate News', route('admin.corporatenews.edit',1));
});
Breadcrumbs::for('admin.tenantnews.index', function ($trail) {
    $trail->push('Tenants News', route('admin.tenantnews.index'));
});
Breadcrumbs::for('admin.tenantnews.edit', function ($trail) {
    $trail->push('Edit Tenants News', route('admin.tenantnews.edit',1));
});
Breadcrumbs::for('admin.video.index', function ($trail) {
    $trail->push('Video', route('admin.video.index'));
});
Breadcrumbs::for('admin.video.edit', function ($trail) {
    $trail->push('Edit Video', route('admin.video.edit',1));
});
Breadcrumbs::for('admin.social.index', function ($trail) {
    $trail->push('Social Responsibility', route('admin.social.index'));
});
Breadcrumbs::for('admin.social.edit', function ($trail) {
    $trail->push('Edit Social Responsibility', route('admin.social.edit',1));
});
Breadcrumbs::for('admin.social.editvid', function ($trail) {
    $trail->push('Edit Social Responsibility', route('admin.social.editvid',1));
});



require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
