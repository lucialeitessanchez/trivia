<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZa7pg4x\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZa7pg4x/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZa7pg4x.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZa7pg4x\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZa7pg4x\App_KernelDevDebugContainer([
    'container.build_hash' => 'Za7pg4x',
    'container.build_id' => '55869444',
    'container.build_time' => 1654868367,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZa7pg4x');
