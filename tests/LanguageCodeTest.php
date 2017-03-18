<?php
/**
 * List of 217 language codes: ISO 639-1.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2016 - 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-LanguageCode
 * @since      1.0.0
 */

namespace Josantonius\LanguageCode\Tests;

use Josantonius\LanguageCode\LanguageCode;

/**
 * Tests class for LanguageCode library.
 *
 * @since 1.0.0
 */
class LanguageCodeTest { 

    /**
     * Get language name from language code.
     *
     * @since 1.0.0
     */
    public static function testGetLanguageFromCode() {

        echo '<pre>'; var_dump(LanguageCode::getLanguageFromCode('es')); echo '</pre>';
    }

    /**
     * Getting a language name wrong.
     *
     * @since 1.0.0
     */
    public static function testGetLanguageFromCodeUndefined() {

        echo '<pre>'; var_dump(LanguageCode::getLanguageFromCode('abcd')); echo '</pre>';
    }

    /**
     * Get language code from language name
     *
     * @since 1.0.0
     */
    public static function testGetCodeFromLanguage() {

        echo '<pre>'; var_dump(LanguageCode::getCodeFromLanguage('spanish')); echo '</pre>';
    }

    /**
     * Getting a language code wrong.
     *
     * @since 1.0.0
     */
    public static function testGetCodeFromLanguageUndefined() {

        echo '<pre>'; var_dump(LanguageCode::getCodeFromLanguage('abcd')); echo '</pre>';
    }

    /**
     * Get all language codes as array.
     *
     * @since 1.0.0
     */
    public static function testGetAll() {

        echo '<pre>'; var_dump(LanguageCode::getAll()); echo '</pre>';
    }
}
