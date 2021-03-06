<?php
/**
 * Sample TranslatorInterface implementation created for use in unit tests.
 *
 * @author    Jim Moser <jmoser@epicride.info>
 * @link      http://github.com/jim-moser/zf2-validators-empty-or-test for 
 *            source repository.
 * @copyright Copyright (c) June 9, 2016 Jim Moser
 * @license   LICENSE.txt at http://github.com/jim-moser/
 *            zf2-validators-empty-or-test
 *            New BSD License
 */
namespace JimMoser\ValidatorTest;

use Laminas\Validator\Translator\TranslatorInterface;

class MockTranslator implements TranslatorInterface
{
    /**
     * @param  string $message
     * @param  string $textDomain
     * @param  string $locale
     * @return string
     */
    public function translate($message, $textDomain = 'default', $locale = null)
    {
        return str_replace('Value', 'Valor', $message);
    }
} 