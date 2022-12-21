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
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldstextfields/([^/]++)/new(*:912)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldsdatefields/([^/]++)/new(*:1030)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldstextfields/(\\d+)/edit(*:1147)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldsdatefields/(\\d+)/edit(*:1264)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldstextfields/([^/]++)/delete(*:1386)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/fieldsdatefields/([^/]++)/delete(*:1508)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags(*:1602)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags/page/([1-9]\\d*)(*:1712)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags/new(*:1810)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags/(\\d+)(*:1910)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags/(\\d+)/edit(*:2015)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/tags/([^/]++)/delete(*:2125)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users(*:2220)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/page/([1-9]\\d*)(*:2331)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/new(*:2430)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/(\\d+)(*:2531)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/(\\d+)/edit(*:2637)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/([^/]++)/delete(*:2748)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/(\\d+)/level_up(*:2858)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/Users/(\\d+)/level_down(*:2970)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud(*:3058)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/rss\\.xml(*:3155)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/page/([1-9]\\d*)(*:3259)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/elements/([^/]++)(*:3365)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/elements/([^/]++)/page/([1-9]\\d*)(*:3487)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/subelement/([^/]++)/new(*:3599)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/(\\d+)\\}(*:3695)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crudsubelement/(\\d+)/edit(*:3804)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/([^/]++)/delete(*:3908)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/crud/search(*:4003)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/fieldstextfields/(\\d+)/edit(*:4114)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/fieldsdatefields/(\\d+)/edit(*:4225)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/login(*:4314)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/logout(*:4404)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/new(*:4491)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/profile/edit(*:4587)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/profile/change\\-password(*:4695)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)?(*:4779)'
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
        912 => [[['_route' => 'admin_textfields_new', '_controller' => 'App\\Controller\\Admin\\FieldsController::newTextFields', '_locale' => 'en'], ['_locale', 'elementSlug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1030 => [[['_route' => 'admin_datefields_new', '_controller' => 'App\\Controller\\Admin\\FieldsController::newDateFields', '_locale' => 'en'], ['_locale', 'elementSlug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1147 => [[['_route' => 'admin_textfields_edit', '_controller' => 'App\\Controller\\Admin\\FieldsController::editTextFields', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1264 => [[['_route' => 'admin_datefields_edit', '_controller' => 'App\\Controller\\Admin\\FieldsController::editDateFields', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1386 => [[['_route' => 'admin_textfields_delete', '_controller' => 'App\\Controller\\Admin\\FieldsController::deleteTextFields', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        1508 => [[['_route' => 'admin_datefields_delete', '_controller' => 'App\\Controller\\Admin\\FieldsController::deleteDateFields', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        1602 => [[['_route' => 'admin_tag_index', 'page' => '1', '_controller' => 'App\\Controller\\Admin\\TagsController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        1712 => [[['_route' => 'admin_tag_paginated', '_controller' => 'App\\Controller\\Admin\\TagsController::index', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
        1810 => [[['_route' => 'admin_tag_new', '_controller' => 'App\\Controller\\Admin\\TagsController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1910 => [[['_route' => 'admin_tag_show', '_controller' => 'App\\Controller\\Admin\\TagsController::show', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        2015 => [[['_route' => 'admin_tag_edit', '_controller' => 'App\\Controller\\Admin\\TagsController::edit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2125 => [[['_route' => 'admin_tag_delete', '_controller' => 'App\\Controller\\Admin\\TagsController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        2220 => [[['_route' => 'admin_user_index', 'page' => '1', '_controller' => 'App\\Controller\\Admin\\UsersController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        2331 => [[['_route' => 'admin_user_paginated', '_controller' => 'App\\Controller\\Admin\\UsersController::index', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
        2430 => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Admin\\UsersController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2531 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\Admin\\UsersController::show', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        2637 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UsersController::edit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2748 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\UsersController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        2858 => [[['_route' => 'admin_user_level_up', '_controller' => 'App\\Controller\\Admin\\UsersController::levelUp', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2970 => [[['_route' => 'admin_user_level_down', '_controller' => 'App\\Controller\\Admin\\UsersController::levelDown', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3058 => [[['_route' => 'crud_index', 'page' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\CrudController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        3155 => [[['_route' => 'crud_rss', 'page' => '1', '_format' => 'xml', '_controller' => 'App\\Controller\\CrudController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        3259 => [[['_route' => 'crud_index_paginated', '_format' => 'html', '_controller' => 'App\\Controller\\CrudController::index', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
        3365 => [[['_route' => 'crud_element', 'page' => '1', '_controller' => 'App\\Controller\\CrudController::elementShow', '_locale' => 'en'], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        3487 => [[['_route' => 'crud_element_paginated', '_controller' => 'App\\Controller\\CrudController::elementShow', '_locale' => 'en'], ['_locale', 'slug', 'page'], ['GET' => 0], null, false, true, null]],
        3599 => [[['_route' => 'subelement_new', '_controller' => 'App\\Controller\\CrudController::subelementNew', '_locale' => 'en'], ['_locale', 'elementSlug'], ['POST' => 0], null, false, false, null]],
        3695 => [[['_route' => 'subelement_show', '_controller' => 'App\\Controller\\CrudController::subelementShow', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, false, null]],
        3804 => [[['_route' => 'subelement_edit', '_controller' => 'App\\Controller\\CrudController::subelementEdit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3908 => [[['_route' => 'subelement_delete', '_controller' => 'App\\Controller\\CrudController::subelementDelete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        4003 => [[['_route' => 'crud_search', '_controller' => 'App\\Controller\\CrudController::search', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        4114 => [[['_route' => 'textfields_edit', '_controller' => 'App\\Controller\\FieldsController::textFieldsEdit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4225 => [[['_route' => 'datefields_edit', '_controller' => 'App\\Controller\\FieldsController::dateFieldsEdit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4314 => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4404 => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4491 => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\SecurityController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4587 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4695 => [[['_route' => 'user_change_password', '_controller' => 'App\\Controller\\UserController::changePassword', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4779 => [
            [['_route' => 'homepage', 'template' => 'default/homepage.html.twig', '_locale' => 'en', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'], ['_locale'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
