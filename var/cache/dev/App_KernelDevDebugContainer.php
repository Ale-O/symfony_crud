<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPYgRsA8\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPYgRsA8/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPYgRsA8.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPYgRsA8\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPYgRsA8\App_KernelDevDebugContainer([
    'container.build_hash' => 'PYgRsA8',
    'container.build_id' => '8df58918',
    'container.build_time' => 1670960419,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPYgRsA8');
