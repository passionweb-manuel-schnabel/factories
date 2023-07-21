<?php

namespace Passionweb\Factories\Factory;

class CustomLanguageFactory
{
    protected array $languages = [
        'en' => 'English',
        'de' => 'German',
    ];

    public function getCustomLanguages(): array
    {
        // fetch data from a repository or something
        // similar instead of using static data
        $newEntries = [
            'fr' => 'French',
            'nl' => 'Dutch',
            'be' => 'Belgian',
            'es' => 'Spanish',
        ];
        $customLanguages = [];
        foreach ($newEntries as $key => $value) {
            $customLanguages[$key] = $value;
        }
        return array_merge(
            $this->languages,
            $customLanguages
        );
    }
}

