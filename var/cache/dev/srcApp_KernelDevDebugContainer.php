<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerO8d3NWU\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerO8d3NWU/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerO8d3NWU.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerO8d3NWU\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerO8d3NWU\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'O8d3NWU',
    'container.build_id' => 'c5960b9b',
    'container.build_time' => 1646521373,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerO8d3NWU');
