<?php declare(strict_types=1);

return [
    'prefix' => null,
    'finders' => [],
    'patchers' => [
        // correct paths inside phar, due to inner autoload.php path
        function (string $filePath, string $prefix, string $content): string {
            if ($filePath !== 'bin/run') {
                return $content;
            }

            return str_replace('__DIR__ . \'/..', '\'phar://dummy.phar', $content);
        },
    ],
    'whitelist' => [
        'Dummy\*',
    ],
];
