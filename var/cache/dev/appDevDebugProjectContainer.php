<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKtz10xl\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKtz10xl/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerKtz10xl.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerKtz10xl\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerKtz10xl\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Ktz10xl',
    'container.build_id' => '05611a0f',
    'container.build_time' => 1592079024,
));
