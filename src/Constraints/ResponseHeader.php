<?php declare(strict_types=1);
/*
 * This file is part of Webisters Testing Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Framework\Testing\Constraints;

use PHPUnit\Framework\Constraint\Constraint;

/**
 * Class ResponseHeader.
 *
 * @package testing
 */
final class ResponseHeader extends Constraint
{
    use EvaluateTrait;

    protected mixed $value;
    protected string $name;

    public function __construct(mixed $value, string $name)
    {
        $this->value = $value;
        $this->name = $name;
    }

    public function toString() : string
    {
        return "is equals the value of the Response Header '{$this->name}'";
    }
}
