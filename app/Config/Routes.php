<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/admin/hero', 'HeroController::admin');
$routes->post('/admin/hero/update', 'HeroController::updateHero');

$routes->get('admin/about_us', 'AboutUsController::admin');  // Admin page to view and edit
$routes->post('admin/update_about_us', 'AboutUsController::updateAboutUs');  // Update form submission

$routes->get('admin/goals', 'GoalsController::admin');
$routes->post('goals/update', 'GoalsController::update');

$routes->get('admin/programs', 'ProgramController::admin');
$routes->get('program/update/(:num)', 'ProgramController::update/$1');
$routes->post('program/update/(:num)', 'ProgramController::update/$1');

$routes->get('/admin/materials', 'MaterialController::admin');
$routes->post('/admin/materials/create', 'MaterialController::create');
$routes->get('/admin/materials/edit/(:num)', 'MaterialController::edit/$1');
$routes->post('/admin/materials/update/(:num)', 'MaterialController::update/$1');
$routes->get('/admin/materials/delete/(:num)', 'MaterialController::delete/$1');

$routes->get('admin/certification', 'CertificationController::admin');  // Admin page to edit certification
$routes->post('admin/certification/update', 'CertificationController::update');  // Admin page to update certification

$routes->get('/admin/portfolio', 'PortfolioController::create');
$routes->post('/portfolio/store', 'PortfolioController::store');
$routes->get('/admin/portfolio/(:num)/edit', 'PortfolioController::edit/$1');
$routes->post('/portfolio/update/(:num)', 'PortfolioController::update/$1');
$routes->get('/portfolio/delete/(:num)', 'PortfolioController::delete/$1');


$routes->get('admin/coach', 'CoachController::admin'); // This will point to the CoachController's admin method
$routes->get('admin/coaches/create', 'CoachController::create'); // Form for creating coach
$routes->post('admin/coaches/store', 'CoachController::store'); // Store new coach
$routes->get('admin/coaches/edit/(:num)', 'CoachController::edit/$1'); // Edit coach form
$routes->post('admin/coaches/update/(:num)', 'CoachController::update/$1'); // Update coach
$routes->get('admin/coaches/delete/(:num)', 'CoachController::delete/$1'); // Delete coach

$routes->get('admin/contact', 'ContactController::index');  // Menampilkan halaman admin
$routes->post('admin/contact/update', 'ContactController::update');  // Menangani form update

$routes->get('admin/sponsor', 'SponsorController::admin');
$routes->get('admin/sponsor/create', 'SponsorController::create');
$routes->post('admin/sponsor/store', 'SponsorController::store');
$routes->get('admin/sponsor/edit/(:num)', 'SponsorController::edit/$1');
$routes->post('admin/sponsor/update/(:num)', 'SponsorController::update/$1');
$routes->get('admin/sponsor/delete/(:num)', 'SponsorController::delete/$1');

$routes->get('admin/footer', 'FooterController::index');
$routes->post('admin/footer/update', 'FooterController::update');

$routes->get('/', 'Pages::index');
$routes->get('admin', 'Dash::index');