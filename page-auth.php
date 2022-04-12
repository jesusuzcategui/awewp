<?php
/**
 * Template Name: Page Auth
*/

use Timber\Timber;
$context = Timber::get_context();

Timber::render('pages/auth.twig', $context);