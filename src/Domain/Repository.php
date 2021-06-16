<?php

namespace SRC\Domain;

interface Repository
{
    public function findByCode($code): array;
    public function findAll(): array;
    public function findSummarized($code): array;
    public function findMatriz($code): array;
}