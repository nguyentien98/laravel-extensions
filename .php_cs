<?php

$header = <<<EOF
This file is part of the Sepiphy package.

(c) Nguyễn Xuân Quỳnh <nguyenxuanquynh2210vghy@gmail.com>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

$finder = PhpCsFixer\Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('tests/fixtures')
    ->in(__DIR__.'/src')
    ->in(__DIR__.'/tests')
;

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRiskyAllowed(true)
    ->setFinder($finder)
    ->setRules([
        'header_comment' => ['header' => $header],
    ])
;
