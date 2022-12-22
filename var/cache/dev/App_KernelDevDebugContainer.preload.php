<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
require __DIR__.'/ContainerXbfxvsh/App_KernelDevDebugContainer.php';
require __DIR__.'/ContainerXbfxvsh/getWebpackEncore_TagRendererService.php';
require __DIR__.'/ContainerXbfxvsh/getWebpackEncore_ExceptionListenerService.php';
require __DIR__.'/ContainerXbfxvsh/getWebpackEncore_EntrypointLookupCollectionService.php';
require __DIR__.'/ContainerXbfxvsh/getWebpackEncore_EntrypointLookupDefaultService.php';
require __DIR__.'/ContainerXbfxvsh/getWebProfiler_Controller_RouterService.php';
require __DIR__.'/ContainerXbfxvsh/getWebProfiler_Controller_ProfilerService.php';
require __DIR__.'/ContainerXbfxvsh/getWebProfiler_Controller_ExceptionPanelService.php';
require __DIR__.'/ContainerXbfxvsh/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerXbfxvsh/getValidator_ExpressionService.php';
require __DIR__.'/ContainerXbfxvsh/getValidator_EmailService.php';
require __DIR__.'/ContainerXbfxvsh/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerXbfxvsh/getTwig_Runtime_MarkdownService.php';
require __DIR__.'/ContainerXbfxvsh/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerXbfxvsh/getTwig_Mailer_MessageListenerService.php';
require __DIR__.'/ContainerXbfxvsh/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerXbfxvsh/getTranslation_Loader_YmlService.php';
require __DIR__.'/ContainerXbfxvsh/getTranslation_Loader_XliffService.php';
require __DIR__.'/ContainerXbfxvsh/getTranslation_Loader_ResService.php';
require __DIR__.'/ContainerXbfxvsh/getTranslation_Loader_QtService.php';
require __DIR__.'/ContainerXbfxvsh/getTranslation_Loader_PoService.php';
require __DIR__.'/ContainerXbfxvsh/getTranslation_Loader_PhpService.php';
require __DIR__.'/ContainerXbfxvsh/getTranslation_Loader_MoService.php';
require __DIR__.'/ContainerXbfxvsh/getTranslation_Loader_JsonService.php';
require __DIR__.'/ContainerXbfxvsh/getTranslation_Loader_IniService.php';
require __DIR__.'/ContainerXbfxvsh/getTranslation_Loader_DatService.php';
require __DIR__.'/ContainerXbfxvsh/getTranslation_Loader_CsvService.php';
require __DIR__.'/ContainerXbfxvsh/getSession_Storage_NativeService.php';
require __DIR__.'/ContainerXbfxvsh/getSessionService.php';
require __DIR__.'/ContainerXbfxvsh/getServicesResetterService.php';
require __DIR__.'/ContainerXbfxvsh/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerXbfxvsh/getSecurity_User_Provider_Concrete_DatabaseUsersService.php';
require __DIR__.'/ContainerXbfxvsh/getSecurity_PasswordEncoderService.php';
require __DIR__.'/ContainerXbfxvsh/getSecurity_Logout_Listener_Default_MainService.php';
require __DIR__.'/ContainerXbfxvsh/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerXbfxvsh/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerXbfxvsh/getSecurity_HelperService.php';
require __DIR__.'/ContainerXbfxvsh/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerXbfxvsh/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerXbfxvsh/getSecurity_EncoderFactory_GenericService.php';
require __DIR__.'/ContainerXbfxvsh/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerXbfxvsh/getSecurity_ContextListener_0Service.php';
require __DIR__.'/ContainerXbfxvsh/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerXbfxvsh/getSecurity_AuthenticationUtilsService.php';
require __DIR__.'/ContainerXbfxvsh/getSecurity_Authentication_Provider_Dao_MainService.php';
require __DIR__.'/ContainerXbfxvsh/getSecurity_Authentication_Listener_Form_MainService.php';
require __DIR__.'/ContainerXbfxvsh/getSecurity_Authentication_Listener_Anonymous_MainService.php';
require __DIR__.'/ContainerXbfxvsh/getSecurity_AccessMapService.php';
require __DIR__.'/ContainerXbfxvsh/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerXbfxvsh/getSecrets_VaultService.php';
require __DIR__.'/ContainerXbfxvsh/getRouting_LoaderService.php';
require __DIR__.'/ContainerXbfxvsh/getPropertyAccessorService.php';
require __DIR__.'/ContainerXbfxvsh/getMonolog_Logger_SecurityService.php';
require __DIR__.'/ContainerXbfxvsh/getMailer_TransportFactory_SmtpService.php';
require __DIR__.'/ContainerXbfxvsh/getMailer_TransportFactory_SendmailService.php';
require __DIR__.'/ContainerXbfxvsh/getMailer_TransportFactory_NullService.php';
require __DIR__.'/ContainerXbfxvsh/getMailer_TransportFactory_NativeService.php';
require __DIR__.'/ContainerXbfxvsh/getMailer_MailerService.php';
require __DIR__.'/ContainerXbfxvsh/getHtmlSanitizer_Form_TextTypeExtensionService.php';
require __DIR__.'/ContainerXbfxvsh/getHtmlSanitizer_DefaultService.php';
require __DIR__.'/ContainerXbfxvsh/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerXbfxvsh/getFragment_Renderer_HincludeService.php';
require __DIR__.'/ContainerXbfxvsh/getFragment_Renderer_EsiService.php';
require __DIR__.'/ContainerXbfxvsh/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerXbfxvsh/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerXbfxvsh/getForm_TypeExtension_Upload_ValidatorService.php';
require __DIR__.'/ContainerXbfxvsh/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerXbfxvsh/getForm_TypeExtension_Form_TransformationFailureHandlingService.php';
require __DIR__.'/ContainerXbfxvsh/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerXbfxvsh/getForm_TypeExtension_Form_DataCollectorService.php';
require __DIR__.'/ContainerXbfxvsh/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/ContainerXbfxvsh/getForm_Type_FormService.php';
require __DIR__.'/ContainerXbfxvsh/getForm_Type_EntityService.php';
require __DIR__.'/ContainerXbfxvsh/getForm_Type_ColorService.php';
require __DIR__.'/ContainerXbfxvsh/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerXbfxvsh/getForm_ServerParamsService.php';
require __DIR__.'/ContainerXbfxvsh/getForm_RegistryService.php';
require __DIR__.'/ContainerXbfxvsh/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerXbfxvsh/getErrorHandler_ErrorRenderer_HtmlService.php';
require __DIR__.'/ContainerXbfxvsh/getErrorControllerService.php';
require __DIR__.'/ContainerXbfxvsh/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerXbfxvsh/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerXbfxvsh/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerXbfxvsh/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerXbfxvsh/getDebug_Security_Voter_Security_Access_RoleHierarchyVoterService.php';
require __DIR__.'/ContainerXbfxvsh/getDebug_Security_Voter_Security_Access_ExpressionVoterService.php';
require __DIR__.'/ContainerXbfxvsh/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerXbfxvsh/getElementVoterService.php';
require __DIR__.'/ContainerXbfxvsh/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerXbfxvsh/getDebug_FileLinkFormatter_UrlFormatService.php';
require __DIR__.'/ContainerXbfxvsh/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerXbfxvsh/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerXbfxvsh/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerXbfxvsh/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerXbfxvsh/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerXbfxvsh/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerXbfxvsh/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerXbfxvsh/getDataCollector_Request_SessionCollectorService.php';
require __DIR__.'/ContainerXbfxvsh/getContainer_GetenvService.php';
require __DIR__.'/ContainerXbfxvsh/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerXbfxvsh/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerXbfxvsh/getCache_SystemClearerService.php';
require __DIR__.'/ContainerXbfxvsh/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerXbfxvsh/getCache_AppClearerService.php';
require __DIR__.'/ContainerXbfxvsh/getAnnotations_CacheService.php';
require __DIR__.'/ContainerXbfxvsh/getTemplateControllerService.php';
require __DIR__.'/ContainerXbfxvsh/getRedirectControllerService.php';
require __DIR__.'/ContainerXbfxvsh/getUserRepositoryService.php';
require __DIR__.'/ContainerXbfxvsh/getTextFieldsRepositoryService.php';
require __DIR__.'/ContainerXbfxvsh/getTagRepositoryService.php';
require __DIR__.'/ContainerXbfxvsh/getSubelementRepositoryService.php';
require __DIR__.'/ContainerXbfxvsh/getElementRepositoryService.php';
require __DIR__.'/ContainerXbfxvsh/getDateFieldsRepositoryService.php';
require __DIR__.'/ContainerXbfxvsh/getUserTypeService.php';
require __DIR__.'/ContainerXbfxvsh/getUserNewTypeService.php';
require __DIR__.'/ContainerXbfxvsh/getUserEditTypeService.php';
require __DIR__.'/ContainerXbfxvsh/getTagsInputTypeService.php';
require __DIR__.'/ContainerXbfxvsh/getDateTimePickerTypeService.php';
require __DIR__.'/ContainerXbfxvsh/getChangePasswordTypeService.php';
require __DIR__.'/ContainerXbfxvsh/getTagTypeService.php';
require __DIR__.'/ContainerXbfxvsh/getSubelementTypeService.php';
require __DIR__.'/ContainerXbfxvsh/getElementTypeService.php';
require __DIR__.'/ContainerXbfxvsh/getSubelementNotificationSubscriberService.php';
require __DIR__.'/ContainerXbfxvsh/getCheckRequirementsSubscriberService.php';
require __DIR__.'/ContainerXbfxvsh/getUserControllerService.php';
require __DIR__.'/ContainerXbfxvsh/getSecurityControllerService.php';
require __DIR__.'/ContainerXbfxvsh/getFieldsController2Service.php';
require __DIR__.'/ContainerXbfxvsh/getCrudController2Service.php';
require __DIR__.'/ContainerXbfxvsh/getUsersControllerService.php';
require __DIR__.'/ContainerXbfxvsh/getTagsControllerService.php';
require __DIR__.'/ContainerXbfxvsh/getFieldsControllerService.php';
require __DIR__.'/ContainerXbfxvsh/getCrudControllerService.php';
require __DIR__.'/ContainerXbfxvsh/get_ServiceLocator_UFJkjP8Service.php';
require __DIR__.'/ContainerXbfxvsh/get_ServiceLocator_NfDhB4vService.php';
require __DIR__.'/ContainerXbfxvsh/get_ServiceLocator_KR88F0PService.php';
require __DIR__.'/ContainerXbfxvsh/get_ServiceLocator_HvP7sfcService.php';
require __DIR__.'/ContainerXbfxvsh/get_ServiceLocator_HOHyH2EService.php';
require __DIR__.'/ContainerXbfxvsh/get_ServiceLocator_GPh6XLService.php';
require __DIR__.'/ContainerXbfxvsh/get_ServiceLocator_Ch4JgvlService.php';
require __DIR__.'/ContainerXbfxvsh/get_ServiceLocator_SRCoNHUService.php';
require __DIR__.'/ContainerXbfxvsh/get_ServiceLocator_S92MJGpService.php';
require __DIR__.'/ContainerXbfxvsh/get_ServiceLocator_QOjUGpSService.php';
require __DIR__.'/ContainerXbfxvsh/get_ServiceLocator_MlSflDMService.php';
require __DIR__.'/ContainerXbfxvsh/get_ServiceLocator_Met3hw9Service.php';
require __DIR__.'/ContainerXbfxvsh/get_ServiceLocator_KfwZsneService.php';
require __DIR__.'/ContainerXbfxvsh/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerXbfxvsh/get_ServiceLocator_GeY2L1oService.php';
require __DIR__.'/ContainerXbfxvsh/get_ServiceLocator_G4iNSV6Service.php';
require __DIR__.'/ContainerXbfxvsh/get_ServiceLocator_FXjGl5FService.php';
require __DIR__.'/ContainerXbfxvsh/get_ServiceLocator_9CRX9VxService.php';
require __DIR__.'/ContainerXbfxvsh/get_ServiceLocator_25IZi3dService.php';
require __DIR__.'/ContainerXbfxvsh/get_ServiceLocator__1lrpk9Service.php';
require __DIR__.'/ContainerXbfxvsh/get_Container_Private_Security_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerXbfxvsh/get_Container_Private_Form_Type_FileService.php';
require __DIR__.'/ContainerXbfxvsh/get_Container_Private_Form_FactoryService.php';
require __DIR__.'/ContainerXbfxvsh/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerXbfxvsh/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Bundle\DebugBundle\DebugBundle';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\WebProfilerBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle';
$classes[] = 'Symfony\WebpackEncoreBundle\WebpackEncoreBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'HtmlSanitizer\Bundle\HtmlSanitizerBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ExpressionExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\DumpExtension';
$classes[] = 'App\Twig\AppExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension';
$classes[] = 'Symfony\Component\VarDumper\Dumper\HtmlDumper';
$classes[] = 'Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Twig\Extra\Markdown\MarkdownExtension';
$classes[] = 'Twig\Extra\Intl\IntlExtension';
$classes[] = 'HtmlSanitizer\Bundle\Twig\TwigExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Component\Validator\Validator\TraceableValidator';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'App\Controller\Admin\CrudController';
$classes[] = 'App\Controller\Admin\FieldsController';
$classes[] = 'App\Controller\Admin\TagsController';
$classes[] = 'App\Controller\Admin\UsersController';
$classes[] = 'App\Controller\CrudController';
$classes[] = 'App\Controller\FieldsController';
$classes[] = 'App\Controller\SecurityController';
$classes[] = 'App\Controller\UserController';
$classes[] = 'App\EventSubscriber\CheckRequirementsSubscriber';
$classes[] = 'App\EventSubscriber\ControllerSubscriber';
$classes[] = 'App\EventSubscriber\RedirectToPreferredLocaleSubscriber';
$classes[] = 'App\EventSubscriber\SubelementNotificationSubscriber';
$classes[] = 'App\Form\ElementType';
$classes[] = 'App\Form\SubelementType';
$classes[] = 'App\Form\TagType';
$classes[] = 'App\Form\Type\ChangePasswordType';
$classes[] = 'App\Form\Type\DateTimePickerType';
$classes[] = 'App\Utils\MomentFormatConverter';
$classes[] = 'App\Form\Type\TagsInputType';
$classes[] = 'App\Form\UserEditType';
$classes[] = 'App\Form\UserNewType';
$classes[] = 'App\Form\UserType';
$classes[] = 'App\Repository\DateFieldsRepository';
$classes[] = 'App\Repository\ElementRepository';
$classes[] = 'App\Repository\SubelementRepository';
$classes[] = 'App\Repository\TagRepository';
$classes[] = 'App\Repository\TextFieldsRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\Twig\SourceCodeExtension';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\DoctrineProvider';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\CachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Component\Cache\Adapter\TraceableAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\DumpDataCollector';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataCollector';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataExtractor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\RequestDataCollector';
$classes[] = 'Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Bridge\Monolog\Logger';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Bridge\Monolog\Processor\DebugProcessor';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'App\Security\ElementVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\ExpressionLanguage';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Logging\LoggerChain';
$classes[] = 'Symfony\Bridge\Doctrine\Logger\DbalLogger';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Doctrine\DBAL\Logging\DebugStack';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\HttpCache\Esi';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SurrogateListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Monolog\Handler\NullHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\FragmentListener';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'HtmlSanitizer\SanitizerInterface';
$classes[] = 'HtmlSanitizer\SanitizerBuilder';
$classes[] = 'HtmlSanitizer\Extension\Basic\BasicExtension';
$classes[] = 'HtmlSanitizer\Extension\Code\CodeExtension';
$classes[] = 'HtmlSanitizer\Extension\Image\ImageExtension';
$classes[] = 'HtmlSanitizer\Extension\Iframe\IframeExtension';
$classes[] = 'HtmlSanitizer\Extension\Listing\ListExtension';
$classes[] = 'HtmlSanitizer\Extension\Table\TableExtension';
$classes[] = 'HtmlSanitizer\Extension\Extra\ExtraExtension';
$classes[] = 'HtmlSanitizer\Bundle\Form\TextTypeExtension';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\EnvelopeListener';
$classes[] = 'Symfony\Component\Mailer\Mailer';
$classes[] = 'Symfony\Component\Mailer\Transport\Transports';
$classes[] = 'Symfony\Component\Mailer\Transport';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageLoggerListener';
$classes[] = 'Symfony\Component\Mailer\Transport\NativeTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\NullTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\SendmailTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory';
$classes[] = 'Symfony\Bridge\Monolog\Handler\ConsoleHandler';
$classes[] = 'Monolog\Handler\StreamHandler';
$classes[] = 'Monolog\Processor\PsrLogMessageProcessor';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\Profiler';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\FileProfilerStorage';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\TimeDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector';
$classes[] = 'Symfony\Component\Validator\DataCollector\ValidatorDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\EventDataCollector';
$classes[] = 'Symfony\Component\Cache\DataCollector\CacheDataCollector';
$classes[] = 'Symfony\Component\Translation\DataCollector\TranslationDataCollector';
$classes[] = 'Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector';
$classes[] = 'Symfony\Bridge\Twig\DataCollector\TwigDataCollector';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector';
$classes[] = 'Symfony\Component\Mailer\DataCollector\MessageDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ProfilerListener';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Routing\Matcher\ExpressionLanguageProvider';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider';
$classes[] = 'Symfony\Component\Security\Core\User\UserChecker';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Encoder\EncoderFactory';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Symfony\Component\Security\Core\Security';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\DefaultLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Core\Encoder\UserPasswordEncoder';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Symfony\Component\ExpressionLanguage\ExpressionLanguage';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\Translation\Loader\CsvFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuDatFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IniFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\JsonFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\MoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\QtFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuResFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\XliffFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Translation\DataCollectorTranslator';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Translation\Translator';
$classes[] = 'Symfony\Component\Translation\Formatter\MessageFormatter';
$classes[] = 'Symfony\Component\Translation\IdentityTranslator';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageListener';
$classes[] = 'Symfony\Bridge\Twig\Mime\BodyRenderer';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Twig\Extra\Markdown\MarkdownRuntime';
$classes[] = 'Twig\Extra\Markdown\DefaultMarkdown';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\VarDumper\Cloner\VarCloner';
$classes[] = 'Symfony\Component\VarDumper\Server\Connection';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\RouterController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\EntrypointLookup';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\EntrypointLookupCollection';
$classes[] = 'Symfony\WebpackEncoreBundle\EventListener\ExceptionListener';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\TagRenderer';

Preloader::preload($classes);
