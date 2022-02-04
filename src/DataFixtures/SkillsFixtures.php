<?php

namespace App\DataFixtures;

use App\Entity\Skills;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SkillsFixtures extends Fixture
{
    public const SKILLS = [
        [
            'icon' => 'https://picsum.photos/100/200',

        ],
        [
            'icon' => 'https://picsum.photos/100/200',

        ],
        [
            'icon' => 'https://picsum.photos/100/200',

        ],       
        [
            'icon' => 'https://picsum.photos/100/200',

        ],       
        [
            'icon' => 'https://picsum.photos/100/200',

        ],       
        [
            'icon' => 'https://picsum.photos/100/200',

        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::SKILLS as $key => $skillsInfo) {
            $skills = new skills();
            $skills->setIcon($skillsInfo["icon"]);

            $manager->persist($skills);
            $this->addReference('skills_' . $key, $skills);
        }
        $manager->flush();
    }
}
