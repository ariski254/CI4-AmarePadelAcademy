<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public Page: Home page (accessible without login)
$routes->get('/', 'Pages::index');  // Home page, no login required

// Login routes: Login page and login actions
$routes->get('login', 'AuthController::index'); // Login page
$routes->post('auth/login', 'AuthController::login'); // Login action
$routes->get('auth/logout', 'AuthController::logout'); // Logout action

// Admin routes: Protect with the 'authFilter' to require login
$routes->get('admin', 'Dash::index', ['filter' => 'authFilter']);  // Admin dashboard (only accessible if logged in)

$routes->get('/admin/hero', 'HeroController::admin', ['filter' => 'authFilter']);
$routes->post('/admin/hero/update', 'HeroController::updateHero', ['filter' => 'authFilter']);

$routes->get('admin/about_us', 'AboutUsController::admin', ['filter' => 'authFilter']);
$routes->post('admin/update_about_us', 'AboutUsController::updateAboutUs', ['filter' => 'authFilter']);

$routes->get('admin/goals', 'GoalsController::admin', ['filter' => 'authFilter']);
$routes->post('goals/update', 'GoalsController::update', ['filter' => 'authFilter']);

$routes->get('/admin/programs', 'ProgramController::admin', ['filter' => 'authFilter']);
$routes->match(['get', 'post'], '/admin/programs/update/(:num)', 'ProgramController::update/$1', ['filter' => 'authFilter']);

$routes->get('/admin/materials', 'MaterialController::admin', ['filter' => 'authFilter']);
$routes->post('/admin/materials/create', 'MaterialController::create', ['filter' => 'authFilter']);
$routes->get('/admin/materials/edit/(:num)', 'MaterialController::edit/$1', ['filter' => 'authFilter']);
$routes->post('/admin/materials/update/(:num)', 'MaterialController::update/$1', ['filter' => 'authFilter']);
$routes->get('/admin/materials/delete/(:num)', 'MaterialController::delete/$1', ['filter' => 'authFilter']);

$routes->get('admin/certification', 'CertificationController::admin', ['filter' => 'authFilter']);
$routes->post('admin/certification/update', 'CertificationController::update', ['filter' => 'authFilter']);

$routes->get('/admin/portfolio', 'PortfolioController::create', ['filter' => 'authFilter']);
$routes->post('/portfolio/store', 'PortfolioController::store', ['filter' => 'authFilter']);
$routes->get('/admin/portfolio/(:num)/edit', 'PortfolioController::edit/$1', ['filter' => 'authFilter']);
$routes->post('/portfolio/update/(:num)', 'PortfolioController::update/$1', ['filter' => 'authFilter']);
$routes->get('/portfolio/delete/(:num)', 'PortfolioController::delete/$1', ['filter' => 'authFilter']);

$routes->get('admin/coach', 'CoachController::admin', ['filter' => 'authFilter']);
$routes->get('admin/coaches/create', 'CoachController::create', ['filter' => 'authFilter']);
$routes->post('admin/coaches/store', 'CoachController::store', ['filter' => 'authFilter']);
$routes->get('admin/coaches/edit/(:num)', 'CoachController::edit/$1', ['filter' => 'authFilter']);
$routes->post('admin/coaches/update/(:num)', 'CoachController::update/$1', ['filter' => 'authFilter']);
$routes->get('admin/coaches/delete/(:num)', 'CoachController::delete/$1', ['filter' => 'authFilter']);

$routes->get('admin/contact', 'ContactController::index', ['filter' => 'authFilter']);
$routes->post('admin/contact/update', 'ContactController::update', ['filter' => 'authFilter']);

$routes->get('admin/sponsor', 'SponsorController::admin', ['filter' => 'authFilter']);
$routes->get('admin/sponsor/create', 'SponsorController::create', ['filter' => 'authFilter']);
$routes->post('admin/sponsor/store', 'SponsorController::store', ['filter' => 'authFilter']);
$routes->get('admin/sponsor/edit/(:num)', 'SponsorController::edit/$1', ['filter' => 'authFilter']);
$routes->post('admin/sponsor/update/(:num)', 'SponsorController::update/$1', ['filter' => 'authFilter']);
$routes->get('admin/sponsor/delete/(:num)', 'SponsorController::delete/$1', ['filter' => 'authFilter']);

$routes->get('admin/footer', 'FooterController::index', ['filter' => 'authFilter']);
$routes->post('admin/footer/update', 'FooterController::update', ['filter' => 'authFilter']);

// Routes for Admin Controller
$routes->get('admin/add', 'AdminController::add', ['filter' => 'authFilter']);
$routes->post('admin/save', 'AdminController::save', ['filter' => 'authFilter']);

// Catch-all route for 404s
$routes->get('/(:any)', 'ErrorsController::show404/$1');

// Custom 404 route for unknown admin pages
$routes->get('admin/(:any)', 'ErrorsControllercopy::show404/$1');