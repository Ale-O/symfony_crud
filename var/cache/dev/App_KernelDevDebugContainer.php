<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYQDIOnk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYQDIOnk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYQDIOnk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYQDIOnk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYQDIOnk\App_KernelDevDebugContainer([
    'container.build_hash' => 'YQDIOnk',
    'container.build_id' => '1f4627d9',
    'container.build_time' => 1671733169,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYQDIOnk');
