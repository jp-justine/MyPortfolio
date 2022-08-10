<?php

namespace App\DataFixtures;

use App\Entity\Skills;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SkillsFixtures extends Fixture
{
    public const SKILLS = [
        [
            'name' => 'HTML',
            'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg',
        ],
        [
            'name' => 'CSS',
            'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg',
        ],
        [
            'name' => 'PHP',
            'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg',
        ],
        [
            'name' => 'Javascript',
            'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg',
        ],
        [
            'name' => 'Java',
            'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original-wordmark.svg',
        ],
        [
            'name' => 'TypeScript',
            'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg',
        ],
        [
            'name' => 'C',
            'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/c/c-original.svg',
        ],
        [
            'name' => 'C#',
            'icon' => 'https://numgrade.com/wp-content/uploads/2020/11/Logo_Formation_C.png',
        ],
        [
            'name' => 'C++',
            'icon' => 'https://raw.githubusercontent.com/isocpp/logos/master/cpp_logo.png',
        ],
        [
            'name' => 'Python',
            'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original-wordmark.svg',
        ],
        [
            'name' => 'SQL',
            'icon' => 'https://azure.microsoft.com/en-us/patterns/styles/glyphs-icons/azure-sql-database.svg',
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::SKILLS as $skillsInfo) {
            $skills = new skills();
            $skills ->setName($skillsInfo['name']); 
            $skills->setIcon($skillsInfo["icon"]);

            $this->addReference('skills_' . $skillsInfo['name'], $skills);
            $manager->persist($skills);
        }
        $manager->flush();
    }
}
