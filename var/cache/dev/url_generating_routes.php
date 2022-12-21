<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin_index' => [['_locale'], ['page' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\Admin\\CrudController::index', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/admin/element/'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_element_index' => [['_locale'], ['page' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\Admin\\CrudController::index', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/admin/element/'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_index_paginated' => [['_locale', 'page'], ['_format' => 'html', '_controller' => 'App\\Controller\\Admin\\CrudController::index', '_locale' => 'en'], ['page' => '[1-9]\\d*', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['variable', '/', '[1-9]\\d*', 'page', true], ['text', '/admin/element/page'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_element_new' => [['_locale'], ['_controller' => 'App\\Controller\\Admin\\CrudController::new', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/admin/element/new'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_element_show' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\CrudController::show', '_locale' => 'en'], ['id' => '\\d+', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['variable', '/', '\\d+', 'id', true], ['text', '/admin/element'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_element_edit' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\CrudController::edit', '_locale' => 'en'], ['id' => '\\d+', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/edit'], ['variable', '/', '\\d+', 'id', true], ['text', '/admin/element'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_element_delete' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\CrudController::delete', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/element'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_textfields_new' => [['_locale', 'elementSlug'], ['_controller' => 'App\\Controller\\Admin\\FieldsController::newTextFields', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/new'], ['variable', '/', '[^/]++', 'elementSlug', true], ['text', '/admin/fields'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_textfields_edit' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\FieldsController::edit', '_locale' => 'en'], ['id' => '\\d+', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/edit'], ['variable', '/', '\\d+', 'id', true], ['text', '/admin/fields'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_textfields_delete' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\FieldsController::delete', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/fields'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_tag_index' => [['_locale'], ['page' => '1', '_controller' => 'App\\Controller\\Admin\\TagsController::index', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/admin/tags/'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_tag_paginated' => [['_locale', 'page'], ['_controller' => 'App\\Controller\\Admin\\TagsController::index', '_locale' => 'en'], ['page' => '[1-9]\\d*', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['variable', '/', '[1-9]\\d*', 'page', true], ['text', '/admin/tags/page'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_tag_new' => [['_locale'], ['_controller' => 'App\\Controller\\Admin\\TagsController::new', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/admin/tags/new'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_tag_show' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\TagsController::show', '_locale' => 'en'], ['id' => '\\d+', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['variable', '/', '\\d+', 'id', true], ['text', '/admin/tags'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_tag_edit' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\TagsController::edit', '_locale' => 'en'], ['id' => '\\d+', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/edit'], ['variable', '/', '\\d+', 'id', true], ['text', '/admin/tags'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_tag_delete' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\TagsController::delete', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/tags'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_user_index' => [['_locale'], ['page' => '1', '_controller' => 'App\\Controller\\Admin\\UsersController::index', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/admin/Users/'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_user_paginated' => [['_locale', 'page'], ['_controller' => 'App\\Controller\\Admin\\UsersController::index', '_locale' => 'en'], ['page' => '[1-9]\\d*', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['variable', '/', '[1-9]\\d*', 'page', true], ['text', '/admin/Users/page'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_user_new' => [['_locale'], ['_controller' => 'App\\Controller\\Admin\\UsersController::new', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/admin/Users/new'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_user_show' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\UsersController::show', '_locale' => 'en'], ['id' => '\\d+', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['variable', '/', '\\d+', 'id', true], ['text', '/admin/Users'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_user_edit' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\UsersController::edit', '_locale' => 'en'], ['id' => '\\d+', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/edit'], ['variable', '/', '\\d+', 'id', true], ['text', '/admin/Users'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_user_delete' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\UsersController::delete', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/Users'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_user_level_up' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\UsersController::levelUp', '_locale' => 'en'], ['id' => '\\d+', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/level_up'], ['variable', '/', '\\d+', 'id', true], ['text', '/admin/Users'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_user_level_down' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\UsersController::levelDown', '_locale' => 'en'], ['id' => '\\d+', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/level_down'], ['variable', '/', '\\d+', 'id', true], ['text', '/admin/Users'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'crud_index' => [['_locale'], ['page' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\CrudController::index', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/crud/'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'crud_rss' => [['_locale'], ['page' => '1', '_format' => 'xml', '_controller' => 'App\\Controller\\CrudController::index', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/crud/rss.xml'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'crud_index_paginated' => [['_locale', 'page'], ['_format' => 'html', '_controller' => 'App\\Controller\\CrudController::index', '_locale' => 'en'], ['page' => '[1-9]\\d*', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['variable', '/', '[1-9]\\d*', 'page', true], ['text', '/crud/page'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'crud_element' => [['_locale', 'slug'], ['page' => '1', '_controller' => 'App\\Controller\\CrudController::elementShow', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['variable', '/', '[^/]++', 'slug', true], ['text', '/crud/elements'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'crud_element_paginated' => [['_locale', 'slug', 'page'], ['_controller' => 'App\\Controller\\CrudController::elementShow', '_locale' => 'en'], ['page' => '[1-9]\\d*', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['variable', '/', '[1-9]\\d*', 'page', true], ['text', '/page'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/crud/elements'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'subelement_new' => [['_locale', 'elementSlug'], ['_controller' => 'App\\Controller\\CrudController::subelementNew', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/new'], ['variable', '/', '[^/]++', 'elementSlug', true], ['text', '/crud/subelement'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'subelement_show' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\CrudController::subelementShow', '_locale' => 'en'], ['id' => '\\d+', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '}'], ['variable', '/', '\\d+', 'id', true], ['text', '/crud'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'subelement_edit' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\CrudController::subelementEdit', '_locale' => 'en'], ['id' => '\\d+', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/edit'], ['variable', '/', '\\d+', 'id', true], ['text', '/crudsubelement'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'subelement_delete' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\CrudController::subelementDelete', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/crud'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'crud_search' => [['_locale'], ['_controller' => 'App\\Controller\\CrudController::search', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/crud/search'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'textfields_edit' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\FieldsController::textFieldsEdit', '_locale' => 'en'], ['id' => '\\d+', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/edit'], ['variable', '/', '\\d+', 'id', true], ['text', '/fieldstextfields'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'datefields_edit' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\FieldsController::dateFieldsEdit', '_locale' => 'en'], ['id' => '\\d+', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/edit'], ['variable', '/', '\\d+', 'id', true], ['text', '/fieldsdatefields'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'security_login' => [['_locale'], ['_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/login'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'security_logout' => [['_locale'], ['_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/logout'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'user_new' => [['_locale'], ['_controller' => 'App\\Controller\\SecurityController::new', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/new'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'user_edit' => [['_locale'], ['_controller' => 'App\\Controller\\UserController::edit', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/profile/edit'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'user_change_password' => [['_locale'], ['_controller' => 'App\\Controller\\UserController::changePassword', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/profile/change-password'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'homepage' => [['_locale'], ['template' => 'default/homepage.html.twig', '_locale' => 'en', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
];
