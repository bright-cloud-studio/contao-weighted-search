<?php

/**
 * Bright Cloud Studio's Contao Weighted Search
 *
 * Copyright (C) 2023 Bright Cloud Studio
 *
 * @package    bright-cloud-studio/contao-weighted-search
 * @link       https://www.brightcloudstudio.com/
 * @license    https://opensource.org/license/gpl-3-0/
**/

/* Register the classes */
ClassLoader::addClasses(array
(
    // overriding default SearchResult
    'Contao\ModuleSearch'             => 'system/modules/contao_weighted_search/library/contao/modules/ModuleSearch.php',
    'Bcs\Model\SearchIndexBackend'    => 'system/modules/contao_weighted_search/library/Bcs/Model/SearchIndexBackend.php'
    
));
