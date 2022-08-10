<?php

namespace App\DataFixtures;

use App\Entity\Projects;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ProjectsFixtures extends Fixture implements DependentFixtureInterface
{
    public const PROJECTS = [
        [
            'image' => 'https://picsum.photos/300/200',
            'title' => 'The Wild Post',
            'description' => "Création en équipe (du  28 sept au 8 oct 2021) 
            d'un site fictif de type journal sur l'école Wild Code School de Reims.",
            'skills' => ['HTML', 'CSS'],
            'link' => 'https://www.linkedin.com/in/justine-petit/',
            
        ],
        [
            'image' => 'https://picsum.photos/300/200',
            'title' => 'The Wild Post',
            'description' => "Création en équipe (du  28 sept au 8 oct 2021) 
            d'un site fictif de type journal sur l'école Wild Code School de Reims.",
            'skills' => ['HTML', 'CSS'],
            'link' => 'https://www.linkedin.com/in/justine-petit/',
        ],
        [
            'image' => 'https://picsum.photos/300/200',
            'title' => 'The Wild Post',
            'description' => "Création en équipe (du  28 sept au 8 oct 2021) 
            d'un site fictif de type journal sur l'école Wild Code School de Reims.",
            'skills' => ['HTML', 'CSS'],
            'link' => 'https://www.linkedin.com/in/justine-petit/',
        ],       
        [
            'image' => 'https://picsum.photos/300/200',
            'title' => 'The Wild Post',
            'description' => "Création en équipe (du  28 sept au 8 oct 2021) 
            d'un site fictif de type journal sur l'école Wild Code School de Reims.",
            'skills' => ['HTML', 'CSS'],
            'link' => 'https://www.linkedin.com/in/justine-petit/',
        ],       
        [
            'image' => 'https://picsum.photos/300/200',
            'title' => 'The Wild Post',
            'description' => "Création en équipe (du  28 sept au 8 oct 2021) 
            d'un site fictif de type journal sur l'école Wild Code School de Reims.",
            'skills' => ['HTML', 'CSS'],
            'link' => 'https://www.linkedin.com/in/justine-petit/',
        ],       
        [
            'image' => 'https://picsum.photos/300/200',
            'title' => 'The Wild Post',
            'description' => "Création en équipe (du  28 sept au 8 oct 2021) 
            d'un site fictif de type journal sur l'école Wild Code School de Reims.",
            'skills' => ['HTML', 'CSS'],
            'link' => 'https://www.linkedin.com/in/justine-petit/',
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::PROJECTS as $key => $projectInfo) {
            $project = new Projects();
            $project->setImage($projectInfo["image"]);
            $project->setTitle($projectInfo["title"]);
            $project->setDescription($projectInfo["description"]);
            $this->addReference('project_' . $key, $project);
            foreach ($projectInfo['skills'] as $skillsInfo) {
                $project->addSkill($this->getReference('skills_' . $skillsInfo));
            };
            $project->setLink($projectInfo["link"]);

            $manager->persist($project);
        }
        $manager->flush();
    }
    public function getDependencies()
    {
        return [
            SkillsFixtures::class
        ];
    }
}