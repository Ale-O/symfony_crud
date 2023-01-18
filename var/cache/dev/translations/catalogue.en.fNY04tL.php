<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('en', array (
  'validators+intl-icu' => 
  array (
    'post.slug_unique' => 'This title was already used in another crud post, but they must be unique.',
    'post.blank_summary' => 'Give your post a summary!',
    'post.blank_content' => 'Your post should have some content!',
    'post.too_short_content' => 'Post content is too short ({ limit } characters minimum)',
    'post.too_many_tags' => 'Too many tags (add { limit } tags or less)',
    'comment.blank' => 'Please don\'t leave your comment blank!',
    'comment.too_short' => 'Comment is too short ({ limit } characters minimum)',
    'comment.too_long' => 'Comment is too long ({ limit } characters maximum)',
    'comment.is_spam' => 'The content of this comment is considered spam.',
  ),
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
  ),
  'messages+intl-icu' => 
  array (
    'note' => 'NOTE',
    'tip' => 'TIP',
    'not_available' => 'Not available',
    'mit_license' => 'MIT Licence',
    'http_error.name' => 'Error {status_code, number}',
    'http_error.description' => 'There was an unknown error (HTTP {status_code, number}) that prevented to complete your request.',
    'http_error.suggestion' => 'Try loading this page again in some minutes or <a href="{url}">go back to the homepage</a>.',
    'http_error_403.description' => 'You don\'t have permission to access to this resource.',
    'http_error_403.suggestion' => 'Ask your manager or system administrator to grant you access to this resource.',
    'http_error_404.description' => 'We couldn\'t find the page you requested.',
    'http_error_404.suggestion' => 'Check out any misspelling in the URL or <a href="{url}">go back to the homepage</a>.',
    'http_error_500.description' => 'There was an internal server error.',
    'http_error_500.suggestion' => 'Try loading this page again in some minutes or <a href="{url}">go back to the homepage</a>.',
    'title.homepage' => 'Application <strong>Crud</strong>',
    'title.source_code' => 'Source code used to render this page',
    'title.controller_code' => 'Controller code',
    'title.twig_template_code' => 'Twig template code',
    'title.login' => 'Secure connection',
    'title.element_list' => 'List of elements',
    'title.fields_list' => 'List of fields',
    'title.textfields_list' => 'List of text fields',
    'title.datefields_list' => 'List of date fields',
    'title.numberfields_list' => 'List of number fields',
    'title.filefields_list' => 'List of file fields',
    'title.subelementfields_list' => 'List of dropdown fields',
    'title.tag_list' => 'List of tags',
    'title.user_list' => 'List of users',
    'title.edit' => 'Edit {id, number}',
    'title.edit_element' => 'Edit element #{id, number}',
    'title.add_subelement' => 'Add registration',
    'subelement.too_short' => 'Registration content too short',
    'element.too_short_content' => 'Element content too short',
    'title.subelement_error' => 'Registration creating error.',
    'title.textfields_error' => 'Text field edit error.',
    'title.datefields_error' => 'Date field edit error.',
    'title.edit_user' => 'Edit user',
    'title.change_password' => 'Edit password',
    'action.show' => 'Show',
    'action.create_account' => 'Create your account',
    'action.show_element' => 'Show registration',
    'action.show_code' => 'Show code',
    'action.edit' => 'Edit',
    'action.edit_fields' => 'Edit field',
    'action.lock_fields' => 'Lock field',
    'action.level_up' => 'Upgrade to administrator',
    'action.level_down' => 'Downgrade to user',
    'action.level_up_successfully' => 'You successfully upgrated to administrator',
    'action.level_down_successfully' => 'You successfully downgrated to user',
    'action.edit_element' => 'Edit element',
    'action.save' => 'Save',
    'action.delete' => 'Delete',
    'action.undeletable' => 'Undeletable',
    'action.delete_element' => 'Delete element',
    'action.delete_subelement' => 'Delete registration',
    'delete_modal.title' => 'Are you sure you want to delete ?',
    'delete_element_modal.title' => 'Are you sure you want to delete this element ?',
    'delete_subelement_modal.title' => 'Are you sure you want to delete this registration ?',
    'delete_modal.body' => 'This action can\'t be cancelled.',
    'delete_element_modal.body' => 'The delete can\'t be cancelled.',
    'label.delete' => 'Delete',
    'label.delete_element' => 'Delete element',
    'label.delete_subelement' => 'Delete registration',
    'label.cancel' => 'Cancel',
    'label.create' => 'Create',
    'label.create_fields' => 'Create field',
    'label.create_element' => 'Create element',
    'label.create_subelement' => 'Create registration',
    'label.create_tag' => 'Create tag',
    'label.create_user' => 'Create user',
    'action.create' => 'Create',
    'action.create_element' => 'Create new element',
    'action.create_subelement' => 'Create registration',
    'label.save_and_create_new' => 'Save and create new',
    'action.back_to_list' => 'Back to list',
    'action.back' => 'Back',
    'action.quick_add_subelement' => 'Quick creation',
    'action.sign_in' => 'Login in',
    'action.browse_app' => 'Navigation',
    'action.browse_admin' => 'Login in',
    'action.edit_user' => 'Edit user',
    'action.change_password' => 'Edit password',
    'label.too_many_tags' => 'Too many tags',
    'label.id' => 'ID',
    'label.title' => 'Title',
    'label.position' => 'Position',
    'label.name' => 'Name',
    'action.close' => 'Close',
    'label.author' => 'Creator',
    'label.author_email' => 'Creator mail',
    'label.username' => 'ID',
    'label.fullname' => 'Name',
    'label.email' => 'Mail',
    'label.password' => 'Password',
    'label.current_password' => 'Current password',
    'label.new_password' => 'New password',
    'label.new_password_confirm' => 'Confirm password',
    'label.isAdmin' => 'Administrator profil',
    'label.role' => 'Role',
    'label.content' => 'Content',
    'label.summary' => 'Summary',
    'label.published_at' => 'Published at',
    'label.tags' => 'Tags',
    'label.actions' => 'Actions',
    'title.fields_new' => 'Add new field',
    'title.element_new' => 'Add new element',
    'title.subelement_new' => 'Add new registration',
    'title.tag_new' => 'Add new tag',
    'title.user_new' => 'Add new user',
    'action.edit_contents' => 'Edit content',
    'menu.toggle_nav' => 'Activate/Deactivate navigation',
    'menu.choose_language' => 'Choose language',
    'menu.element_list' => 'List of element',
    'menu.back_to_crud' => 'Back to navigation',
    'menu.homepage' => 'Navigation',
    'menu.tags' => 'Manage tags',
    'menu.admin' => 'Database',
    'menu.user' => 'Account',
    'menu.users' => 'Manage users',
    'menu.logout' => 'Logout',
    'menu.rss' => 'Crud Elements RSS',
    'menu.search' => 'Search',
    'element.to_publish_a_subelement' => 'For add registration',
    'fields.num_fields' => '{count, plural, one {# field} other {# fields}}',
    'element.num_subelements' => '{count, plural, one {# registration} other {# registrations}}',
    'element.subelemented_on' => 'Add at',
    'fields.no_fields' => 'No field found.',
    'element.no_subelements' => 'Add the first registration.',
    'element.no_elements_found' => 'No element found.',
    'tag.no_tags_found' => 'No tag found.',
    'user.no_users_found' => 'No user found.',
    'action.created_successfully' => 'Successfully created !',
    'element.created_successfully' => 'Element successfully created !',
    'action.updated_successfully' => 'Successfully updated !',
    'element.updated_successfully' => 'Element successfully updated !',
    'action.deleted_successfully' => 'Successfully deleted !',
    'element.deleted_successfully' => 'Element successfully deleted !',
    'subelement.deleted_successfully' => 'Registration successfully deleted !',
    'element.search_for' => 'Search...',
    'element.search_no_results' => 'No result',
    'user.updated_successfully' => 'information successfully updated !',
    'notification.subelement_created' => 'Your element has been completed with new registration !',
    'notification.subelement_created.description' => 'Your element "{title}" has been completed with new registration. You can see the new registration with <a href="{link}">this link</a>',
    'help.app_description' => 'This <strong>CRUD</strong> has been built with the framework Symfony.',
    'help.show_code' => 'Click to see the source code of the <strong>controller</strong> and <strong>template</strong> use to display this page.',
    'help.browse_app' => '<strong>Public</strong> space without connection',
    'help.first_connect' => 'You have not <strong>account</strong>',
    'help.browse_admin' => 'Login to your <strong>account</strong>.',
    'help.login_users' => 'Try one of these users',
    'help.role_user' => 'Normal user',
    'help.role_admin' => 'Administrator',
    'help.reload_fixtures' => 'If these users don\'t word, reload the application fixtures excuting this command from the terminal :',
    'help.add_user' => 'If you want to create new users, excute this command :',
    'help.more_information' => 'For more informatins, consult the <a href="https://symfony.com/doc">documentation of Symfony</a>.',
    'help.element_summary' => 'The summary can\'t have Markdown content or HTML ; only brut text.',
    'help.element_publication' => 'Select the future publication date.',
    'help.element_content' => 'Use the Markdown to formate the element content. HTML is also authorized.',
    'help.subelement_content' => 'Registration description.',
    'info.change_password' => 'After updating yout password, you will be disconnecting from the application.',
    'rss.title' => 'Crud',
    'rss.description' => 'Last elements created',
    'paginator.previous' => 'Previous',
    'paginator.next' => 'Next',
    'paginator.current' => 'Current page',
    'Year' => 'Year',
    'Month' => 'Month',
    'Day' => 'Day',
    'file' => 'File',
    'file.show_pdf' => 'Show pdf',
    'title.filefields_error' => 'Title filefields error',
    'Filter' => 'Filter',
    'Content' => 'Content',
    'title.subelementfields_error' => 'Error in subelementfield',
  ),
));


return $catalogue;
