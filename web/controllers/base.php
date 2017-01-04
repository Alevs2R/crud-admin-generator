<?php

/*
 * This file is part of the CRUD Admin Generator project.
 *
 * Author: Jon Segador <jonseg@gmail.com>
 * Web: http://crud-admin-generator.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


require_once __DIR__.'/../../vendor/autoload.php';
require_once __DIR__.'/../../src/app.php';


require_once __DIR__.'/actual_assortment/index.php';
require_once __DIR__.'/assortment_achievement/index.php';
require_once __DIR__.'/photo_raw/index.php';
require_once __DIR__.'/placement_deviation/index.php';
require_once __DIR__.'/plano_achievement_group/index.php';
require_once __DIR__.'/plano_achievement_shelving/index.php';
require_once __DIR__.'/plano_achievement_visit/index.php';
require_once __DIR__.'/plano_assortment/index.php';
require_once __DIR__.'/planogram/index.php';
require_once __DIR__.'/planogram_detail/index.php';
require_once __DIR__.'/planogram_shelving/index.php';
require_once __DIR__.'/product/index.php';
require_once __DIR__.'/product_category/index.php';
require_once __DIR__.'/product_realo_status/index.php';
require_once __DIR__.'/realogram/index.php';
require_once __DIR__.'/realogram_assortment_photo/index.php';
require_once __DIR__.'/realogram_photo/index.php';
require_once __DIR__.'/regions/index.php';
require_once __DIR__.'/retailers/index.php';
require_once __DIR__.'/shelving_type/index.php';
require_once __DIR__.'/shelving_type_shelf/index.php';
require_once __DIR__.'/store/index.php';
require_once __DIR__.'/store_format/index.php';
require_once __DIR__.'/store_type/index.php';
require_once __DIR__.'/user/index.php';
require_once __DIR__.'/user_stores/index.php';
require_once __DIR__.'/visit/index.php';



$app->match('/', function () use ($app) {

    return $app['twig']->render('ag_dashboard.html.twig', array());
        
})
->bind('dashboard');


$app->run();