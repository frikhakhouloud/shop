<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFxSVqkF\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFxSVqkF/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFxSVqkF.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFxSVqkF\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFxSVqkF\App_KernelDevDebugContainer([
    'container.build_hash' => 'FxSVqkF',
    'container.build_id' => '64d9bf65',
    'container.build_time' => 1641767055,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFxSVqkF');
