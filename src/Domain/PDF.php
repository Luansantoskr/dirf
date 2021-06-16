<?php

namespace SRC\Domain;

interface PDF
{
    public function generateWebFile(string $content);

    public function generateLocalFile(string $content, string $name);
}