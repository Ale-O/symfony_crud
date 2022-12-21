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
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/element/(\\d+)/edit(*:682)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/element/([^/]++)/delete(*:794)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fields/([^/]++)/new(*:902)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fields/(\\d+)/edit(*:1008)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fields/([^/]++)/delete(*:1120)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags(*:1214)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags/page/([1-9]\\d*)(*:1324)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags/new(*:1422)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags/(\\d+)(*:1522)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags/(\\d+)/edit(*:1627)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags/([^/]++)/delete(*:1737)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users(*:1832)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/page/([1-9]\\d*)(*:1943)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/new(*:2042)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/(\\d+)(*:2143)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/(\\d+)/edit(*:2249)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/([^/]++)/delete(*:2360)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/(\\d+)/level_up(*:2470)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/(\\d+)/level_down(*:2582)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud(*:2670)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/rss\\.xml(*:2767)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/page/([1-9]\\d*)(*:2871)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/elements/([^/]++)(*:2977)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/elements/([^/]++)/page/([1-9]\\d*)(*:3099)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/subelement/([^/]++)/new(*:3211)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/(\\d+)\\}(*:3307)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crudsubelement/(\\d+)/edit(*:3416)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/([^/]++)/delete(*:3520)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/search(*:3615)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/fieldstextfields/(\\d+)/edit(*:3726)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/fieldsdatefields/(\\d+)/edit(*:3837)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/login(*:3926)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/logout(*:4016)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/new(*:4103)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/profile/edit(*:4199)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/profile/change\\-password(*:4307)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)?(*:4391)'
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
        575 => [[['_route' => 'admin_element_show', '_controller' => 'App\\Controller\\Admin\\CrudController::show', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        682 => [[['_route' => 'admin_element_edit', '_controller' => 'App\\Controller\\Admin\\CrudController::edit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        794 => [[['_route' => 'admin_element_delete', '_controller' => 'App\\Controller\\Admin\\CrudController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        902 => [[['_route' => 'admin_textfields_new', '_controller' => 'App\\Controller\\Admin\\FieldsController::newTextFields', '_locale' => 'en'], ['_locale', 'elementSlug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1008 => [[['_route' => 'admin_textfields_edit', '_controller' => 'App\\Controller\\Admin\\FieldsController::edit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1120 => [[['_route' => 'admin_textfields_delete', '_controller' => 'App\\Controller\\Admin\\FieldsController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        1214 => [[['_route' => 'admin_tag_index', 'page' => '1', '_controller' => 'App\\Controller\\Admin\\TagsController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        1324 => [[['_route' => 'admin_tag_paginated', '_controller' => 'App\\Controller\\Admin\\TagsController::index', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
        1422 => [[['_route' => 'admin_tag_new', '_controller' => 'App\\Controller\\Admin\\TagsController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1522 => [[['_route' => 'admin_tag_show', '_controller' => 'App\\Controller\\Admin\\TagsController::show', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        1627 => [[['_route' => 'admin_tag_edit', '_controller' => 'App\\Controller\\Admin\\TagsController::edit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1737 => [[['_route' => 'admin_tag_delete', '_controller' => 'App\\Controller\\Admin\\TagsController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        1832 => [[['_route' => 'admin_user_index', 'page' => '1', '_controller' => 'App\\Controller\\Admin\\UsersController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        1943 => [[['_route' => 'admin_user_paginated', '_controller' => 'App\\Controller\\Admin\\UsersController::index', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
        2042 => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Admin\\UsersController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2143 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\Admin\\UsersController::show', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        2249 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UsersController::edit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2360 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\UsersController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        2470 => [[['_route' => 'admin_user_level_up', '_controller' => 'App\\Controller\\Admin\\UsersController::levelUp', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2582 => [[['_route' => 'admin_user_level_down', '_controller' => 'App\\Controller\\Admin\\UsersController::levelDown', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2670 => [[['_route' => 'crud_index', 'page' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\CrudController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        2767 => [[['_route' => 'crud_rss', 'page' => '1', '_format' => 'xml', '_controller' => 'App\\Controller\\CrudController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        2871 => [[['_route' => 'crud_index_paginated', '_format' => 'html', '_controller' => 'App\\Controller\\CrudController::index', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
        2977 => [[['_route' => 'crud_element', 'page' => '1', '_controller' => 'App\\Controller\\CrudController::elementShow', '_locale' => 'en'], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        3099 => [[['_route' => 'crud_element_paginated', '_controller' => 'App\\Controller\\CrudController::elementShow', '_locale' => 'en'], ['_locale', 'slug', 'page'], ['GET' => 0], null, false, true, null]],
        3211 => [[['_route' => 'subelement_new', '_controller' => 'App\\Controller\\CrudController::subelementNew', '_locale' => 'en'], ['_locale', 'elementSlug'], ['POST' => 0], null, false, false, null]],
        3307 => [[['_route' => 'subelement_show', '_controller' => 'App\\Controller\\CrudController::subelementShow', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, false, null]],
        3416 => [[['_route' => 'subelement_edit', '_controller' => 'App\\Controller\\CrudController::subelementEdit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3520 => [[['_route' => 'subelement_delete', '_controller' => 'App\\Controller\\CrudController::subelementDelete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        3615 => [[['_route' => 'crud_search', '_controller' => 'App\\Controller\\CrudController::search', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        3726 => [[['_route' => 'textfields_edit', '_controller' => 'App\\Controller\\FieldsController::textFieldsEdit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3837 => [[['_route' => 'datefields_edit', '_controller' => 'App\\Controller\\FieldsController::dateFieldsEdit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3926 => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4016 => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4103 => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\SecurityController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4199 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4307 => [[['_route' => 'user_change_password', '_controller' => 'App\\Controller\\UserController::changePassword', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4391 => [
            [['_route' => 'homepage', 'template' => 'default/homepage.html.twig', '_locale' => 'en', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'], ['_locale'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
