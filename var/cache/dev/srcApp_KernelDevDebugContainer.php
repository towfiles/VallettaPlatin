<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSxtPNhx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSxtPNhx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSxtPNhx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSxtPNhx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerSxtPNhx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'SxtPNhx',
    'container.build_id' => 'c4397d2f',
    'container.build_time' => 1564425560,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSxtPNhx');