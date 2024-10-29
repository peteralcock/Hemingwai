<?php
/**
 * @since     Apr 2023
 * @author    Haydar KULEKCI <haydarkulekci@gmail.com>
 */

namespace AIKit\Dependencies\Qdrant\Models\Filter\Condition;

class MatchString extends AbstractCondition implements ConditionInterface
{
    protected string $value;

    public function __construct(string $key, string $value)
    {
        parent::__construct($key);
        $this->value = $value;
    }

    public function toArray(): array
    {
        return [
            'key' => $this->key,
            'match' => [
                'value' => $this->value
            ]
        ];
    }
}