<?php

declare(strict_types=1);

namespace AIKit\Dependencies\Faker\Extension;

use AIKit\Dependencies\Faker\Generator;

/**
 * A helper trait to be used with GeneratorAwareExtension.
 */
trait GeneratorAwareExtensionTrait
{
    /**
     * @var Generator|null
     */
    private $generator;

    /**
     * @return static
     */
    public function withGenerator(Generator $generator): Extension
    {
        $instance = clone $this;

        $instance->generator = $generator;

        return $instance;
    }
}