<?php
/**
 * CollectionParamsDiff
 *
 * @since     Mar 2023
 * @author    Haydar KULEKCI <haydarkulekci@gmail.com>
 */

namespace AIKit\Dependencies\Qdrant\Models\Request;

class CollectionParamsDiff implements RequestModel
{
    /**
     * @var int Number of replicas for each shard
     */
    protected int $replicationFactor;

    /**
     * @var int Minimal number successful responses from replicas to consider operation successful
     */
    protected int $writeConsistencyFactor;

    public function toArray(): array
    {
        return [
            'replication_factor' => $this->replicationFactor,
            'write_consistency_factor' => $this->writeConsistencyFactor,
        ];
    }
}