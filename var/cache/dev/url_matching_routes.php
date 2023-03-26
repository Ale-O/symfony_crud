<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/auth' => [[['_route' => 'auth'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/element(?'
                    .'|(*:260)'
                .')'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/element/page/([1-9]\\d*)(*:373)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/element/new(*:473)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/element/(\\d+)(*:575)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/element/(\\d+)/page/([1-9]\\d*)(*:693)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/element/(\\d+)/edit(*:800)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/element/([^/]++)/delete(*:912)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/elementadmin/subelement/([^/]++)/new(*:1037)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/element/subelement/(\\d+)(*:1151)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/elementeditFields/(\\d+)\\}(*:1266)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/elementsubelement/(\\d+)/edit(*:1384)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/element/([^/]++)/subelement/delete(*:1508)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldstextfields/([^/]++)/new(*:1627)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldsdatefields/([^/]++)/new(*:1746)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldsnumberfields/([^/]++)/new(*:1867)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldsfilefields/([^/]++)/new(*:1986)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldssubelementfields/([^/]++)/new(*:2111)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldstextfields/(\\d+)(*:2223)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldsdatefields/(\\d+)(*:2335)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldsnumberfields/(\\d+)(*:2449)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldsfilefields/(\\d+)(*:2561)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldssubelementfields/(\\d+)(*:2679)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldstextfields/(\\d+)/edit(*:2796)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldsdatefields/(\\d+)/edit(*:2913)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldsnumberfields/(\\d+)/edit(*:3032)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldsfilefields/(\\d+)/edit(*:3149)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldssubelementfields/(\\d+)/edit(*:3272)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldstextfields/([^/]++)/delete(*:3394)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldsdatefields/([^/]++)/delete(*:3516)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldsnumberfields/([^/]++)/delete(*:3640)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldsfilefields/([^/]++)/delete(*:3762)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldssubelementfields/([^/]++)/delete(*:3890)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/spreadsheet/getAllElement(*:4005)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/spreadsheet/getAllSubelement/(\\d+)(*:4129)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags(*:4223)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags/page/([1-9]\\d*)(*:4333)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags/new(*:4431)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags/(\\d+)(*:4531)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags/(\\d+)/edit(*:4636)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags/([^/]++)/delete(*:4746)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users(*:4841)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/page/([1-9]\\d*)(*:4952)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/new(*:5051)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/(\\d+)(*:5152)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/(\\d+)/edit(*:5258)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/([^/]++)/delete(*:5369)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/(\\d+)/level_up(*:5479)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/(\\d+)/level_down(*:5591)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/ajax/textFieldsAjax/([^/]++)/edit(*:5708)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/ajax/dateFieldsAjax/([^/]++)/edit(*:5825)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/ajax/numberFieldsAjax/([^/]++)/edit(*:5944)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/ajax/fileFieldsAjax/([^/]++)/edit(*:6061)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/ajax/subelementFieldsAjax/([^/]++)/edit(*:6184)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud(*:6272)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/rss\\.xml(*:6369)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/page/([1-9]\\d*)(*:6473)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/elements/([^/]++)(*:6579)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/elements/([^/]++)/page/([1-9]\\d*)(*:6701)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/subelement/([^/]++)/new(*:6813)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/(\\d+)(*:6907)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crudeditFields/(\\d+)\\}(*:7013)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crudsubelement/(\\d+)/edit(*:7122)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/([^/]++)/delete(*:7226)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/search(*:7321)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/fieldstextfields/(\\d+)/edit(*:7432)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/fieldsdatefields/(\\d+)/edit(*:7543)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/fieldsnumberfields/(\\d+)/edit(*:7656)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/fieldssubelementfields/(\\d+)/edit(*:7773)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/fieldsfilefields/(\\d+)/edit(*:7884)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/login(*:7973)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/logout(*:8063)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/new(*:8150)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/profile/edit(*:8246)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/profile/change\\-password(*:8354)'
                .'|/apip(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:8400)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:8437)'
                    .'|/(?'
                        .'|d(?'
                            .'|ocs(?:\\.([^/]++))?(*:8472)'
                            .'|ate_fields(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:8512)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:8551)'
                                .')'
                            .')'
                        .')'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:8594)'
                        .'|elements(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:8632)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:8671)'
                            .')'
                        .')'
                        .'|file_fields(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:8714)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:8753)'
                            .')'
                        .')'
                        .'|number_fields(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:8798)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:8837)'
                            .')'
                        .')'
                        .'|subelement(?'
                            .'|s(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:8883)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:8922)'
                                .')'
                            .')'
                            .'|_fields(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:8961)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:9000)'
                                .')'
                            .')'
                        .')'
                        .'|t(?'
                            .'|ags(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:9040)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:9079)'
                                .')'
                            .')'
                            .'|ext_fields(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:9121)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:9160)'
                                .')'
                            .')'
                        .')'
                        .'|users(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:9198)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:9237)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)?(*:9325)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        260 => [
            [['_route' => 'admin_index', 'page' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\Admin\\CrudController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_element_index', 'page' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\Admin\\CrudController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null],
        ],
        373 => [[['_route' => 'admin_index_paginated', '_format' => 'html', '_controller' => 'App\\Controller\\Admin\\CrudController::index', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
        473 => [[['_route' => 'admin_element_new', '_controller' => 'App\\Controller\\Admin\\CrudController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        575 => [[['_route' => 'admin_element_show', 'page' => '1', '_controller' => 'App\\Controller\\Admin\\CrudController::show', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        693 => [[['_route' => 'admin_element_paginated', '_controller' => 'App\\Controller\\Admin\\CrudController::show', '_locale' => 'en'], ['_locale', 'id', 'page'], ['GET' => 0], null, false, true, null]],
        800 => [[['_route' => 'admin_element_edit', '_controller' => 'App\\Controller\\Admin\\CrudController::edit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        912 => [[['_route' => 'admin_element_delete', '_controller' => 'App\\Controller\\Admin\\CrudController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        1037 => [[['_route' => 'admin_subelement_new', '_controller' => 'App\\Controller\\Admin\\CrudController::subelementNew', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        1151 => [[['_route' => 'admin_subelement_show', '_controller' => 'App\\Controller\\Admin\\CrudController::subelementShow', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        1266 => [[['_route' => 'admin_subelement_edit_fields', '_controller' => 'App\\Controller\\Admin\\CrudController::subelementEditFields', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, false, null]],
        1384 => [[['_route' => 'admin_subelement_edit', '_controller' => 'App\\Controller\\Admin\\CrudController::subelementEdit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1508 => [[['_route' => 'admin_subelement_delete', '_controller' => 'App\\Controller\\Admin\\CrudController::subelementDelete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        1627 => [[['_route' => 'admin_textfields_new', '_controller' => 'App\\Controller\\Admin\\FieldsController::newTextFields', '_locale' => 'en'], ['_locale', 'elementSlug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1746 => [[['_route' => 'admin_datefields_new', '_controller' => 'App\\Controller\\Admin\\FieldsController::newDateFields', '_locale' => 'en'], ['_locale', 'elementSlug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1867 => [[['_route' => 'admin_numberfields_new', '_controller' => 'App\\Controller\\Admin\\FieldsController::newNumberFields', '_locale' => 'en'], ['_locale', 'elementSlug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1986 => [[['_route' => 'admin_filefields_new', '_controller' => 'App\\Controller\\Admin\\FieldsController::newFileFields', '_locale' => 'en'], ['_locale', 'elementSlug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2111 => [[['_route' => 'admin_subelementfields_new', '_controller' => 'App\\Controller\\Admin\\FieldsController::newSubelementFields', '_locale' => 'en'], ['_locale', 'elementSlug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2223 => [[['_route' => 'admin_textfields_show', '_controller' => 'App\\Controller\\Admin\\FieldsController::showTextFields', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        2335 => [[['_route' => 'admin_datefields_show', '_controller' => 'App\\Controller\\Admin\\FieldsController::showDateFields', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        2449 => [[['_route' => 'admin_numberfields_show', '_controller' => 'App\\Controller\\Admin\\FieldsController::showNumberFields', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        2561 => [[['_route' => 'admin_filefields_show', '_controller' => 'App\\Controller\\Admin\\FieldsController::showFileFields', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        2679 => [[['_route' => 'admin_subelementfields_show', '_controller' => 'App\\Controller\\Admin\\FieldsController::showSubelementFields', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        2796 => [[['_route' => 'admin_textfields_edit', '_controller' => 'App\\Controller\\Admin\\FieldsController::editTextFields', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2913 => [[['_route' => 'admin_datefields_edit', '_controller' => 'App\\Controller\\Admin\\FieldsController::editDateFields', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3032 => [[['_route' => 'admin_numberfields_edit', '_controller' => 'App\\Controller\\Admin\\FieldsController::editNumberFields', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3149 => [[['_route' => 'admin_filefields_edit', '_controller' => 'App\\Controller\\Admin\\FieldsController::editFileFields', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3272 => [[['_route' => 'admin_subelementfields_edit', '_controller' => 'App\\Controller\\Admin\\FieldsController::editSubelementFields', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3394 => [[['_route' => 'admin_textfields_delete', '_controller' => 'App\\Controller\\Admin\\FieldsController::deleteTextFields', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        3516 => [[['_route' => 'admin_datefields_delete', '_controller' => 'App\\Controller\\Admin\\FieldsController::deleteDateFields', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        3640 => [[['_route' => 'admin_numberfields_delete', '_controller' => 'App\\Controller\\Admin\\FieldsController::deleteNumberFields', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        3762 => [[['_route' => 'admin_filefields_delete', '_controller' => 'App\\Controller\\Admin\\FieldsController::deleteFileFields', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        3890 => [[['_route' => 'admin_subelementfields_delete', '_controller' => 'App\\Controller\\Admin\\FieldsController::deleteSubelementFields', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        4005 => [[['_route' => 'admin_spreadsheet_get_all_element', '_controller' => 'App\\Controller\\Admin\\SpreadsheetController::getAllElement', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        4129 => [[['_route' => 'admin_spreadsheet_get_all_subelement', '_controller' => 'App\\Controller\\Admin\\SpreadsheetController::getAllSubelement', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        4223 => [[['_route' => 'admin_tag_index', 'page' => '1', '_controller' => 'App\\Controller\\Admin\\TagsController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        4333 => [[['_route' => 'admin_tag_paginated', '_controller' => 'App\\Controller\\Admin\\TagsController::index', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
        4431 => [[['_route' => 'admin_tag_new', '_controller' => 'App\\Controller\\Admin\\TagsController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4531 => [[['_route' => 'admin_tag_show', '_controller' => 'App\\Controller\\Admin\\TagsController::show', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        4636 => [[['_route' => 'admin_tag_edit', '_controller' => 'App\\Controller\\Admin\\TagsController::edit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4746 => [[['_route' => 'admin_tag_delete', '_controller' => 'App\\Controller\\Admin\\TagsController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        4841 => [[['_route' => 'admin_user_index', 'page' => '1', '_controller' => 'App\\Controller\\Admin\\UsersController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        4952 => [[['_route' => 'admin_user_paginated', '_controller' => 'App\\Controller\\Admin\\UsersController::index', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
        5051 => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Admin\\UsersController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5152 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\Admin\\UsersController::show', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        5258 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UsersController::edit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5369 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\UsersController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        5479 => [[['_route' => 'admin_user_level_up', '_controller' => 'App\\Controller\\Admin\\UsersController::levelUp', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5591 => [[['_route' => 'admin_user_level_down', '_controller' => 'App\\Controller\\Admin\\UsersController::levelDown', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5708 => [[['_route' => 'textfields_edit_ajax', '_controller' => 'App\\Controller\\Ajax\\CrudController::textFieldsEditAjax', '_locale' => 'en'], ['_locale', 'id'], ['PUT' => 0], null, false, false, null]],
        5825 => [[['_route' => 'datefields_edit_ajax', '_controller' => 'App\\Controller\\Ajax\\CrudController::dateFieldsEditAjax', '_locale' => 'en'], ['_locale', 'id'], ['PUT' => 0], null, false, false, null]],
        5944 => [[['_route' => 'numberfields_edit_ajax', '_controller' => 'App\\Controller\\Ajax\\CrudController::numberFieldsEditAjax', '_locale' => 'en'], ['_locale', 'id'], ['PUT' => 0], null, false, false, null]],
        6061 => [[['_route' => 'filefields_edit_ajax', '_controller' => 'App\\Controller\\Ajax\\CrudController::fileFieldsEditAjax', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        6184 => [[['_route' => 'subelementfields_edit_ajax', '_controller' => 'App\\Controller\\Ajax\\CrudController::subelementFieldsEditAjax', '_locale' => 'en'], ['_locale', 'id'], ['PUT' => 0], null, false, false, null]],
        6272 => [[['_route' => 'crud_index', 'page' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\CrudController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        6369 => [[['_route' => 'crud_rss', 'page' => '1', '_format' => 'xml', '_controller' => 'App\\Controller\\CrudController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        6473 => [[['_route' => 'crud_index_paginated', '_format' => 'html', '_controller' => 'App\\Controller\\CrudController::index', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
        6579 => [[['_route' => 'crud_element', 'page' => '1', '_controller' => 'App\\Controller\\CrudController::elementShow', '_locale' => 'en'], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        6701 => [[['_route' => 'crud_element_paginated', '_controller' => 'App\\Controller\\CrudController::elementShow', '_locale' => 'en'], ['_locale', 'slug', 'page'], ['GET' => 0], null, false, true, null]],
        6813 => [[['_route' => 'subelement_new', '_controller' => 'App\\Controller\\CrudController::subelementNew', '_locale' => 'en'], ['_locale', 'elementSlug'], ['POST' => 0], null, false, false, null]],
        6907 => [[['_route' => 'subelement_show', '_controller' => 'App\\Controller\\CrudController::subelementShow', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        7013 => [[['_route' => 'subelement_edit_fields', '_controller' => 'App\\Controller\\CrudController::subelementEditFields', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, false, null]],
        7122 => [[['_route' => 'subelement_edit', '_controller' => 'App\\Controller\\CrudController::subelementEdit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7226 => [[['_route' => 'subelement_delete', '_controller' => 'App\\Controller\\CrudController::subelementDelete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        7321 => [[['_route' => 'crud_search', '_controller' => 'App\\Controller\\CrudController::search', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        7432 => [[['_route' => 'textfields_edit', '_controller' => 'App\\Controller\\FieldsController::textFieldsEdit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7543 => [[['_route' => 'datefields_edit', '_controller' => 'App\\Controller\\FieldsController::dateFieldsEdit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7656 => [[['_route' => 'numberfields_edit', '_controller' => 'App\\Controller\\FieldsController::numberFieldsEdit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7773 => [[['_route' => 'subelementfields_edit', '_controller' => 'App\\Controller\\FieldsController::subelementFieldsEdit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7884 => [[['_route' => 'filefields_edit', '_controller' => 'App\\Controller\\FieldsController::fileFieldsEdit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7973 => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        8063 => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        8150 => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\SecurityController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        8246 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        8354 => [[['_route' => 'user_change_password', '_controller' => 'App\\Controller\\UserController::changePassword', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        8400 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        8437 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        8472 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        8512 => [
            [['_route' => 'api_date_fields_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\DateFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_date_fields_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_date_fields_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\DateFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_date_fields_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        8551 => [
            [['_route' => 'api_date_fields_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\DateFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_date_fields_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_date_fields_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\DateFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_date_fields_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_date_fields_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\DateFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_date_fields_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_date_fields_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\DateFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_date_fields_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        8594 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        8632 => [
            [['_route' => 'api_elements_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Element', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_elements_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_elements_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Element', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_elements_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        8671 => [
            [['_route' => 'api_elements_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Element', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_elements_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_elements_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Element', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_elements_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_elements_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Element', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_elements_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_elements_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Element', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_elements_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        8714 => [
            [['_route' => 'api_file_fields_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\FileFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_file_fields_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_file_fields_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\FileFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_file_fields_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        8753 => [
            [['_route' => 'api_file_fields_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\FileFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_file_fields_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_file_fields_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\FileFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_file_fields_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_file_fields_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\FileFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_file_fields_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_file_fields_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\FileFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_file_fields_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        8798 => [
            [['_route' => 'api_number_fields_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\NumberFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_number_fields_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_number_fields_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\NumberFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_number_fields_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        8837 => [
            [['_route' => 'api_number_fields_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\NumberFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_number_fields_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_number_fields_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\NumberFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_number_fields_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_number_fields_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\NumberFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_number_fields_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_number_fields_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\NumberFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_number_fields_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        8883 => [
            [['_route' => 'api_subelements_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Subelement', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_subelements_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_subelements_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Subelement', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_subelements_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        8922 => [
            [['_route' => 'api_subelements_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Subelement', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_subelements_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_subelements_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Subelement', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_subelements_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_subelements_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Subelement', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_subelements_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_subelements_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Subelement', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_subelements_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        8961 => [
            [['_route' => 'api_subelement_fields_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\SubelementFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_subelement_fields_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_subelement_fields_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\SubelementFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_subelement_fields_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        9000 => [
            [['_route' => 'api_subelement_fields_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\SubelementFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_subelement_fields_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_subelement_fields_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\SubelementFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_subelement_fields_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_subelement_fields_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\SubelementFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_subelement_fields_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_subelement_fields_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\SubelementFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_subelement_fields_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        9040 => [
            [['_route' => 'api_tags_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_tags_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_tags_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        9079 => [
            [['_route' => 'api_tags_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_tags_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_tags_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_tags_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_tags_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_tags_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_tags_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        9121 => [
            [['_route' => 'api_text_fields_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\TextFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_text_fields_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_text_fields_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\TextFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_text_fields_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        9160 => [
            [['_route' => 'api_text_fields_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\TextFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_text_fields_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_text_fields_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\TextFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_text_fields_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_text_fields_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\TextFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_text_fields_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_text_fields_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\TextFields', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_text_fields_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        9198 => [
            [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_users_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_users_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        9237 => [
            [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_users_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_users_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_users_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_users_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_users_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        9325 => [
            [['_route' => 'homepage', 'template' => 'default/homepage.html.twig', '_locale' => 'en', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'], ['_locale'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
