<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZxxeisq\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZxxeisq/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerZxxeisq.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerZxxeisq\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerZxxeisq\appDevDebugProjectContainer([
    'container.build_hash' => 'Zxxeisq',
    'container.build_id' => '4576ee5b',
    'container.build_time' => 1568359058,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZxxeisq');
