<?php

declare(strict_types = 1);

use PedroTroller\CS\Fixer\DoctrineMigrationsFixer;
use PedroTroller\CS\Fixer\PhpspecFixer;
use PhpCsFixer\Fixer\Alias\MbStrFunctionsFixer;
use PhpCsFixer\Fixer\Alias\NoAliasFunctionsFixer;
use PhpCsFixer\Fixer\ArrayNotation\NormalizeIndexBraceFixer;
use PhpCsFixer\Fixer\CastNotation\ShortScalarCastFixer;
use PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer;
use PhpCsFixer\Fixer\Comment\CommentToPhpdocFixer;
use PhpCsFixer\Fixer\Comment\MultilineCommentOpeningClosingFixer;
use PhpCsFixer\Fixer\ControlStructure\NoSuperfluousElseifFixer;
use PhpCsFixer\Fixer\ControlStructure\NoUselessElseFixer;
use PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer;
use PhpCsFixer\Fixer\FunctionNotation\ImplodeCallFixer;
use PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer;
use PhpCsFixer\Fixer\FunctionNotation\NullableTypeDeclarationForDefaultNullValueFixer;
use PhpCsFixer\Fixer\FunctionNotation\UseArrowFunctionsFixer;
use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveIssetsFixer;
use PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveUnsetsFixer;
use PhpCsFixer\Fixer\LanguageConstruct\DeclareEqualNormalizeFixer;
use PhpCsFixer\Fixer\ListNotation\ListSyntaxFixer;
use PhpCsFixer\Fixer\Operator\AssignNullCoalescingToCoalesceEqualFixer;
use PhpCsFixer\Fixer\Operator\ConcatSpaceFixer;
use PhpCsFixer\Fixer\Phpdoc\AlignMultilineCommentFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocNoEmptyReturnFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocOrderFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocSeparationFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocSummaryFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocToCommentFixer;
use PhpCsFixer\Fixer\Semicolon\MultilineWhitespaceBeforeSemicolonsFixer;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use PhpCsFixer\Fixer\Strict\StrictComparisonFixer;
use PhpCsFixer\Fixer\Strict\StrictParamFixer;
use PhpCsFixer\Fixer\Whitespace\ArrayIndentationFixer;
use PhpCsFixer\Fixer\Whitespace\MethodChainingIndentationFixer;
use Symplify\CodingStandard\Fixer\Spacing\StandaloneLinePromotedPropertyFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $containerConfigurator): void {
    $containerConfigurator->import(SetList::PSR_12);
    $containerConfigurator->import(SetList::DOCTRINE_ANNOTATIONS);

    $services = $containerConfigurator->services();
    $services->set(AlignMultilineCommentFixer::class);
    $services->set(ArrayIndentationFixer::class);
    $services->set(CombineConsecutiveIssetsFixer::class);
    $services->set(CombineConsecutiveUnsetsFixer::class);
    $services->set(ConcatSpaceFixer::class)->call('configure', [[
        'spacing' => 'one',
    ]]);
    $services->set(DeclareEqualNormalizeFixer::class)->call('configure', [[
        'space' => 'single',
    ]]);
    $services->set(ListSyntaxFixer::class)->call('configure', [[
        'syntax' => 'long',
    ]]);
    $services->set(MbStrFunctionsFixer::class);
    $services->set(MethodArgumentSpaceFixer::class)->call('configure', [[
        'after_heredoc' => false,
        'keep_multiple_spaces_after_comma' => false,
        'on_multiline' => 'ensure_fully_multiline',
    ]]);
    $services->set(MethodChainingIndentationFixer::class);
    $services->set(MultilineCommentOpeningClosingFixer::class);
    $services->set(MultilineWhitespaceBeforeSemicolonsFixer::class)->call('configure', [[
        'strategy' => 'new_line_for_chained_calls',
    ]]);
    $services->set(NoSuperfluousElseifFixer::class);
    $services->set(NoUselessElseFixer::class);
    $services->set(NullableTypeDeclarationForDefaultNullValueFixer::class);
    $services->set(OrderedClassElementsFixer::class)->call('configure', [[
        'order' => [
            'use_trait',
            'constant_public',
            'constant_protected',
            'constant_private',
            'property_public',
            'property_protected',
            'property_private',
        ],
        'sort_algorithm' => 'none',
    ]]);
    $services->set(PhpdocNoEmptyReturnFixer::class);
    $services->set(PhpdocOrderFixer::class);
    $services->set(CommentToPhpdocFixer::class);
    $services->set(StrictComparisonFixer::class);
    $services->set(StandaloneLinePromotedPropertyFixer::class);
    $services->set(StrictParamFixer::class);
    $services->set(PhpspecFixer::class);
    $services->set(DoctrineMigrationsFixer::class);
    $services->set(AssignNullCoalescingToCoalesceEqualFixer::class);
    $services->set(ShortScalarCastFixer::class);
    $services->set(NormalizeIndexBraceFixer::class);
    $services->set(ImplodeCallFixer::class);
    $services->set(NoAliasFunctionsFixer::class);
    $services->set(UseArrowFunctionsFixer::class);
    $services->set(DeclareStrictTypesFixer::class);
    $services->set(NoUnusedImportsFixer::class);
    $services->set(PhpdocSeparationFixer::class);
    $services->remove(PhpdocAlignFixer::class);
    $services->remove(PhpdocSummaryFixer::class);
    $services->remove(PhpdocToCommentFixer::class);
    $services->remove(YodaStyleFixer::class);
};
