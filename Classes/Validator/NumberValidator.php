<?php
namespace WapplerSystems\Ncaext\Validator;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator;

/**
 * Validator for general numbers.
 *
 * @api
 */
class NumberValidator extends AbstractValidator
{
    /**
     * Checks if the given value is a valid number.
     *
     * @param mixed $value The value that should be validated
     */
    public function isValid($value)
    {
        if (strlen($value) > 0 && !is_numeric($value)) {
            $this->addError(
            $this->translateErrorMessage(
                'validator.number.notvalid',
                'extbase'
            ),
                1221563685
            );
        }
    }
}
