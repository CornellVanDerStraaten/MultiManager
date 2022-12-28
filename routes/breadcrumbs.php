<?php
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));
});

// Home > Review
Breadcrumbs::for('review.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Review', route('review.index'));
});

// Home > Review > Create
Breadcrumbs::for('review.create', function (BreadcrumbTrail $trail) {
    $trail->parent('review.index');
    $trail->push('Create', route('review.create'));
});
