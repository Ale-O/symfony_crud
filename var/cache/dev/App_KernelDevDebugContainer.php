<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerG6rT3y7\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerG6rT3y7/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerG6rT3y7.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerG6rT3y7\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerG6rT3y7\App_KernelDevDebugContainer([
    'container.build_hash' => 'G6rT3y7',
    'container.build_id' => 'e13e0381',
    'container.build_time' => 1671485513,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerG6rT3y7');
