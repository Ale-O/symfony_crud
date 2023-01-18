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
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags(*:3984)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags/page/([1-9]\\d*)(*:4094)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags/new(*:4192)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags/(\\d+)(*:4292)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags/(\\d+)/edit(*:4397)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags/([^/]++)/delete(*:4507)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users(*:4602)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/page/([1-9]\\d*)(*:4713)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/new(*:4812)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/(\\d+)(*:4913)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/(\\d+)/edit(*:5019)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/([^/]++)/delete(*:5130)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/(\\d+)/level_up(*:5240)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/(\\d+)/level_down(*:5352)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud(*:5440)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/rss\\.xml(*:5537)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/page/([1-9]\\d*)(*:5641)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/elements/([^/]++)(*:5747)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/elements/([^/]++)/page/([1-9]\\d*)(*:5869)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/subelement/([^/]++)/new(*:5981)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/(\\d+)(*:6075)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crudeditFields/(\\d+)\\}(*:6181)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crudsubelement/(\\d+)/edit(*:6290)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/([^/]++)/delete(*:6394)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/search(*:6489)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/fieldstextfields/(\\d+)/edit(*:6600)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/fieldsdatefields/(\\d+)/edit(*:6711)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/fieldsnumberfields/(\\d+)/edit(*:6824)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/fieldssubelementfields/(\\d+)/edit(*:6941)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/fieldsfilefields/(\\d+)/edit(*:7052)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/login(*:7141)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/logout(*:7231)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/new(*:7318)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/profile/edit(*:7414)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/profile/change\\-password(*:7522)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)?(*:7606)'
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
        3984 => [[['_route' => 'admin_tag_index', 'page' => '1', '_controller' => 'App\\Controller\\Admin\\TagsController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        4094 => [[['_route' => 'admin_tag_paginated', '_controller' => 'App\\Controller\\Admin\\TagsController::index', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
        4192 => [[['_route' => 'admin_tag_new', '_controller' => 'App\\Controller\\Admin\\TagsController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4292 => [[['_route' => 'admin_tag_show', '_controller' => 'App\\Controller\\Admin\\TagsController::show', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        4397 => [[['_route' => 'admin_tag_edit', '_controller' => 'App\\Controller\\Admin\\TagsController::edit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4507 => [[['_route' => 'admin_tag_delete', '_controller' => 'App\\Controller\\Admin\\TagsController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        4602 => [[['_route' => 'admin_user_index', 'page' => '1', '_controller' => 'App\\Controller\\Admin\\UsersController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        4713 => [[['_route' => 'admin_user_paginated', '_controller' => 'App\\Controller\\Admin\\UsersController::index', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
        4812 => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Admin\\UsersController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4913 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\Admin\\UsersController::show', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        5019 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UsersController::edit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5130 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\UsersController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        5240 => [[['_route' => 'admin_user_level_up', '_controller' => 'App\\Controller\\Admin\\UsersController::levelUp', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5352 => [[['_route' => 'admin_user_level_down', '_controller' => 'App\\Controller\\Admin\\UsersController::levelDown', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5440 => [[['_route' => 'crud_index', 'page' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\CrudController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        5537 => [[['_route' => 'crud_rss', 'page' => '1', '_format' => 'xml', '_controller' => 'App\\Controller\\CrudController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        5641 => [[['_route' => 'crud_index_paginated', '_format' => 'html', '_controller' => 'App\\Controller\\CrudController::index', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
        5747 => [[['_route' => 'crud_element', 'page' => '1', '_controller' => 'App\\Controller\\CrudController::elementShow', '_locale' => 'en'], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        5869 => [[['_route' => 'crud_element_paginated', '_controller' => 'App\\Controller\\CrudController::elementShow', '_locale' => 'en'], ['_locale', 'slug', 'page'], ['GET' => 0], null, false, true, null]],
        5981 => [[['_route' => 'subelement_new', '_controller' => 'App\\Controller\\CrudController::subelementNew', '_locale' => 'en'], ['_locale', 'elementSlug'], ['POST' => 0], null, false, false, null]],
        6075 => [[['_route' => 'subelement_show', '_controller' => 'App\\Controller\\CrudController::subelementShow', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        6181 => [[['_route' => 'subelement_edit_fields', '_controller' => 'App\\Controller\\CrudController::subelementEditFields', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, false, null]],
        6290 => [[['_route' => 'subelement_edit', '_controller' => 'App\\Controller\\CrudController::subelementEdit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        6394 => [[['_route' => 'subelement_delete', '_controller' => 'App\\Controller\\CrudController::subelementDelete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        6489 => [[['_route' => 'crud_search', '_controller' => 'App\\Controller\\CrudController::search', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        6600 => [[['_route' => 'textfields_edit', '_controller' => 'App\\Controller\\FieldsController::textFieldsEdit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        6711 => [[['_route' => 'datefields_edit', '_controller' => 'App\\Controller\\FieldsController::dateFieldsEdit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        6824 => [[['_route' => 'numberfields_edit', '_controller' => 'App\\Controller\\FieldsController::numberFieldsEdit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        6941 => [[['_route' => 'subelementfields_edit', '_controller' => 'App\\Controller\\FieldsController::subelementFieldsEdit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7052 => [[['_route' => 'filefields_edit', '_controller' => 'App\\Controller\\FieldsController::fileFieldsEdit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7141 => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        7231 => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        7318 => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\SecurityController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7414 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7522 => [[['_route' => 'user_change_password', '_controller' => 'App\\Controller\\UserController::changePassword', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7606 => [
            [['_route' => 'homepage', 'template' => 'default/homepage.html.twig', '_locale' => 'en', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'], ['_locale'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
