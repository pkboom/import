<?php

use PhpCsFixer\Config;

return (new Config())
    ->setRules([
        '@PSR12' => true,
        'array_syntax' => ['syntax' => 'short'],
        'ordered_imports' => ['sort_algorithm' => 'alpha'],
        'no_unused_imports' => true,
        'not_operator_with_successor_space' => true,
        'trailing_comma_in_multiline' => true,
        'phpdoc_scalar' => true,
        'unary_operator_spaces' => true,
        'binary_operator_spaces' => true,
        'blank_line_before_statement' => [
            'statements' => ['break', 'continue', 'declare', 'return', 'throw', 'try'],
        ],
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_var_without_name' => true,
        'class_attributes_separation' => [
            'elements' => [
                'method' => 'one',
            ],
        ],
        'method_argument_space' => [
            'on_multiline' => 'ensure_fully_multiline',
            'keep_multiple_spaces_after_comma' => true,
        ],
        'no_extra_blank_lines' => [
            'tokens' => [
                'extra',
                'curly_brace_block',
            ],
        ],
        'no_singleline_whitespace_before_semicolons' => true,
        'concat_space' => true,
        'no_whitespace_before_comma_in_array' => true,
        'array_indentation' => true,
        'method_chaining_indentation' => true,
        'object_operator_without_whitespace' => true,
        'trim_array_spaces' => true,
        'whitespace_after_comma_in_array' => [
            'ensure_single_space' => true,
        ],
    ]);
