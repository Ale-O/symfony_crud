<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUlueSlJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUlueSlJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUlueSlJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUlueSlJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUlueSlJ\App_KernelDevDebugContainer([
    'container.build_hash' => 'UlueSlJ',
    'container.build_id' => '5e4168fb',
    'container.build_time' => 1670777379,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUlueSlJ');
