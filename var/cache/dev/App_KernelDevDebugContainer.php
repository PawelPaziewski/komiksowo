<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSjxPRe5\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSjxPRe5/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSjxPRe5.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSjxPRe5\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSjxPRe5\App_KernelDevDebugContainer([
    'container.build_hash' => 'SjxPRe5',
    'container.build_id' => 'def2b48f',
    'container.build_time' => 1593096536,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSjxPRe5');