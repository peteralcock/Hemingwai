<?php
/**
 * @since     Apr 2023
 * @author    Haydar KULEKCI <haydarkulekci@gmail.com>
 */

namespace AIKit\Dependencies\Qdrant\Models\Filter\Condition;

use AIKit\Dependencies\Qdrant\Domain\Assert;
use AIKit\Dependencies\Qdrant\Exception\InvalidArgumentException;

class Range extends AbstractCondition implements ConditionInterface
{
    protected const CONDITIONS = ['gt', 'gte', 'lt', 'lte'];
    protected array $ranges;

    public function __construct(string $key, array $ranges)
    {
        parent::__construct($key);
        Assert::keysExistsAtLeastOne(
            $ranges,
            self::CONDITIONS,
            'Range expects at least one of %s keys'
        );
        $this->ranges = $ranges;
    }

    public function toArray(): array
    {
        return [
            'key' => $this->key,
            'range' => $this->ranges
        ];
    }
}