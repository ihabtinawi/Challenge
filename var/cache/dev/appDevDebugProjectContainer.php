<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXeonfq0\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXeonfq0/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXeonfq0.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXeonfq0\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXeonfq0\appDevDebugProjectContainer([
    'container.build_hash' => 'Xeonfq0',
    'container.build_id' => '81771417',
    'container.build_time' => 1563798300,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXeonfq0');