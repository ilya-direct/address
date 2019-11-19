<?php


namespace Address;


class Service
{
    public function locationExists(string $address): bool
    {
        return true;
    }

    /**
     * @param string $address
     * @return string[]
     */
    public function findSuggestions(string $address): array
    {
        return ['a1', 'a2'];
    }
}
