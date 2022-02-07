<?php

namespace App\DataFixtures;

use App\Entity\Skills;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SkillsFixtures extends Fixture
{
    public const SKILLS = [
        [
            'icon' => 'https://image.flaticon.com/icons/png/512/919/919827.png?w=200',

        ],
        [
            'icon' => 'https://img2.freepng.fr/20180825/bks/kisspng-php5-programowanie-logo-jpeg-computer-icons-custom-helper-php-function-to-print-array-theric-5b817888c5f8c6.6870411415352116568109.jpg?w=200',

        ],
        [
            'icon' => 'https://symfony.com/logos/symfony_black_03.png?w=200',

        ],       
        [
            'icon' => 'https://img2.freepng.fr/20190205/gru/kisspng-logo-scalable-vector-graphics-computer-icons-porta-sass-logos-download-5c59c7809db691.075885191549387648646.jpg?w=200',

        ],       
        [
            'icon' => 'https://img2.freepng.fr/20180720/pjj/kisspng-javascript-logo-html-clip-art-javascript-logo-5b5188b16dbcd8.5939232615320700654495.jpg?w=200',

        ],       
        [
            'icon' => 'https://img2.freepng.fr/20180824/xrj/kisspng-computer-icons-pro-git-portable-network-graphics-i-git-book-pro-git-app-app-5b80546c0b1311.5417567715351368760454.jpg?w=200',

        ],
        [
            'icon' => 'https://img2.freepng.fr/20180326/gxq/kisspng-github-computer-icons-icon-design-github-5ab8a31e334e73.4114704215220498222102.jpg?w=200',

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
