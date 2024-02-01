<?php

declare(strict_types=1);

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
    $containerConfigurator->sets([
        SetList::PSR_12,
        SetList::DOCTRINE_ANNOTATIONS,
    ]);

    $containerConfigurator->rule(AlignMultilineCommentFixer::class);
    $containerConfigurator->rule(ArrayIndentationFixer::class);
    $containerConfigurator->rule(CombineConsecutiveIssetsFixer::class);
    $containerConfigurator->rule(CombineConsecutiveUnsetsFixer::class);
    $containerConfigurator->ruleWithConfiguration(ConcatSpaceFixer::class,
        [
            'spacing' => 'one',
        ],
    );
    $containerConfigurator->ruleWithConfiguration(DeclareEqualNormalizeFixer::class, [
        'space' => 'single',
    ]);
    $containerConfigurator->ruleWithConfiguration(ListSyntaxFixer::class, [
            'syntax' => 'long',
    ]);
    $containerConfigurator->rule(MbStrFunctionsFixer::class);
    $containerConfigurator->ruleWithConfiguration(MethodArgumentSpaceFixer::class, [
        'after_heredoc' => false,
        'keep_multiple_spaces_after_comma' => false,
        'on_multiline' => 'ensure_fully_multiline',
    ]);
    $containerConfigurator->rule(MethodChainingIndentationFixer::class);
    $containerConfigurator->rule(MultilineCommentOpeningClosingFixer::class);
    $containerConfigurator->ruleWithConfiguration(MultilineWhitespaceBeforeSemicolonsFixer::class, [
        'strategy' => 'new_line_for_chained_calls',
    ]);
    $containerConfigurator->rule(NoSuperfluousElseifFixer::class);
    $containerConfigurator->rule(NoUselessElseFixer::class);
    $containerConfigurator->rule(NullableTypeDeclarationForDefaultNullValueFixer::class);
    $containerConfigurator->ruleWithConfiguration(OrderedClassElementsFixer::class, [
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
    ]);
    $containerConfigurator->rule(PhpdocNoEmptyReturnFixer::class);
    $containerConfigurator->rule(PhpdocOrderFixer::class);
    $containerConfigurator->rule(CommentToPhpdocFixer::class);
    $containerConfigurator->rule(StrictComparisonFixer::class);
    $containerConfigurator->rule(StandaloneLinePromotedPropertyFixer::class);
    $containerConfigurator->rule(StrictParamFixer::class);
    $containerConfigurator->rule(PhpspecFixer::class);
    $containerConfigurator->rule(DoctrineMigrationsFixer::class);
    $containerConfigurator->rule(AssignNullCoalescingToCoalesceEqualFixer::class);
    $containerConfigurator->rule(ShortScalarCastFixer::class);
    $containerConfigurator->rule(NormalizeIndexBraceFixer::class);
    $containerConfigurator->rule(ImplodeCallFixer::class);
    $containerConfigurator->rule(NoAliasFunctionsFixer::class);
    $containerConfigurator->rule(UseArrowFunctionsFixer::class);
    $containerConfigurator->rule(DeclareStrictTypesFixer::class);
    $containerConfigurator->rule(NoUnusedImportsFixer::class);
    $containerConfigurator->rule(PhpdocSeparationFixer::class);
    $containerConfigurator->skip([
        PhpdocAlignFixer::class,
        PhpdocSummaryFixer::class,
        PhpdocToCommentFixer::class,
        YodaStyleFixer::class,
    ]);
};
