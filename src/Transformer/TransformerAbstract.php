<?php


namespace Transformer;


abstract class TransformerAbstract
{
    /**
     * @param object $items
     * @param string $transform
     * @return array
     */
    public function transformCollection(object $items, $transform = 'transform')
    {
        return array_map([$this, $transform], $items->toArray());
    }

    /**
     * @param array $items
     * @param string $transform
     * @return array
     */
    public function transformArray(array $items, $transform = 'transform')
    {
        return array_map([$this, $transform], $items);
    }

    /**
     * @param object|array $item
     * @return mixed
     */
    abstract public function transform($item);
}