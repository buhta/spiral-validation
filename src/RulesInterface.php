<?php

/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

declare(strict_types=1);

namespace Spiral\Validation;

/**
 * Responsible for providing validation rules based on given schema.
 */
interface RulesInterface
{
    /**
     * Parse rule definition into array of rules.
     *
     * @param array|string $rules
     *
     * @return \Generator|RuleInterface[]
     *
     * @throws \Spiral\Validation\Exception\ValidationException
     */
    public function getRules($rules): \Generator;
}
