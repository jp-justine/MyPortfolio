<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProjectFixtures extends Fixture 
{
    public const PROJECTS = [
        [
            'image' => 'https://picsum.photos/300/200',
            'title' => 'The Wild Post',
            'description' => 'Projet fictif de formation a la Wild Code school 
            Création d\'un site web statique sous forme d\'un journal de la wild de Reims',
            'link' => 'https://www.linkedin.com/in/justine-petit/',
        ],
        [
            'image' => 'https://picsum.photos/300/200',
            'title' => 'Journal d\'une scéne de crime',
            'description' => 'Projet fictif de formation a la Wild Code school. Sherlock Holmes, Journal d\'une scène de crime :
            Site web dynamique permettant de prendre des notes sur une “scène de crime” d\'intégrer des hashtags et de retrouver facilement ses notes.',
            'link' => 'https://www.linkedin.com/in/justine-petit/',
        ],
        [
            'image' => 'https://picsum.photos/300/200',
            'title' => 'Journal d\'une scéne de crime',
            'description' => 'Projet fictif de formation a la Wild Code school. Sherlock Holmes, Journal d\'une scène de crime :
            Site web dynamique permettant de prendre des notes sur une “scène de crime” d\'intégrer des hashtags et de retrouver facilement ses notes.',
            'link' => 'https://www.linkedin.com/in/justine-petit/',
        ],       [
            'image' => 'https://picsum.photos/300/200',
            'title' => 'Journal d\'une scéne de crime',
            'description' => 'Projet fictif de formation a la Wild Code school. Sherlock Holmes, Journal d\'une scène de crime :
            Site web dynamique permettant de prendre des notes sur une “scène de crime” d\'intégrer des hashtags et de retrouver facilement ses notes.',
            'link' => 'https://www.linkedin.com/in/justine-petit/',
        ],       [
            'image' => 'https://picsum.photos/300/200',
            'title' => 'Journal d\'une scéne de crime',
            'description' => 'Projet fictif de formation a la Wild Code school. Sherlock Holmes, Journal d\'une scène de crime :
            Site web dynamique permettant de prendre des notes sur une “scène de crime” d\'intégrer des hashtags et de retrouver facilement ses notes.',
            'link' => 'https://www.linkedin.com/in/justine-petit/',
        ],       [
            'image' => 'https://picsum.photos/300/200',
            'title' => 'Journal d\'une scéne de crime',
            'description' => 'Projet fictif de formation a la Wild Code school. Sherlock Holmes, Journal d\'une scène de crime :
            Site web dynamique permettant de prendre des notes sur une “scène de crime” d\'intégrer des hashtags et de retrouver facilement ses notes.',
            'link' => 'https://www.linkedin.com/in/justine-petit/',
        ],       [
            'image' => 'https://picsum.photos/300/200',
            'title' => 'Journal d\'une scéne de crime',
            'description' => 'Projet fictif de formation a la Wild Code school. Sherlock Holmes, Journal d\'une scène de crime :
            Site web dynamique permettant de prendre des notes sur une “scène de crime” d\'intégrer des hashtags et de retrouver facilement ses notes.',
            'link' => 'https://www.linkedin.com/in/justine-petit/',
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::PROJECTS as $key => $projectInfo) {
            $project = new Project();
            $project->setImage($projectInfo["image"]);
            $project->setTitle($projectInfo["title"]);
            $project->setDescription($projectInfo["description"]);
            $project->setLink($projectInfo["link"]);

            $manager->persist($project);
            $this->addReference('project_' . $key, $project);
        }
        $manager->flush();
    }
}