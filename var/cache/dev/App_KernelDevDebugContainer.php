<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTQNIiao\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTQNIiao/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTQNIiao.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTQNIiao\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTQNIiao\App_KernelDevDebugContainer([
    'container.build_hash' => 'TQNIiao',
    'container.build_id' => '148943f1',
    'container.build_time' => 1670246561,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTQNIiao');
