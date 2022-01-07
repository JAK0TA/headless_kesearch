<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Operator\ConcatSpaceFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();

    $parameters->set(Option::PATHS, [
        __DIR__ . '/Classes',
    ]);

    $containerConfigurator->import(SetList::COMMENTS);
    $containerConfigurator->import(SetList::CONTROL_STRUCTURES);
    $containerConfigurator->import(SetList::NAMESPACES);
    $containerConfigurator->import(SetList::SPACES);
    $containerConfigurator->import(SetList::CLEAN_CODE);
    $containerConfigurator->import(SetList::SYMFONY);
    $containerConfigurator->import(SetList::SYMFONY_RISKY);
    $containerConfigurator->import(SetList::COMMON);
    $containerConfigurator->import(SetList::PSR_12);
    $containerConfigurator->import(SetList::PHP_CS_FIXER);
    $containerConfigurator->import(SetList::PHP_CS_FIXER_RISKY);
    $containerConfigurator->import(SetList::DOCTRINE_ANNOTATIONS);
    $containerConfigurator->import(SetList::STRICT);
    $containerConfigurator->import(SetList::DOCBLOCK);
    $containerConfigurator->import(SetList::ARRAY);
    $containerConfigurator->import(SetList::PHPUNIT);

    $parameters->set(Option::SKIP, [
        PhpdocAlignFixer::class => null,
        ConcatSpaceFixer::class => null,
        DeclareStrictTypesFixer::class => [
            // or multiple files by path to match against "fnmatch()"
            __DIR__ . 'ext_emconf.php',
            __DIR__ . 'ext_tables.php',
            __DIR__ . 'ext_localconf.php',
            __DIR__ . 'Configuration',
        ],
    ]);
};
