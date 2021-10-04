<?php

namespace App\DataFixtures;

use App\Entity\Coaching;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker = Factory::create('fr_FR');
      for($p = 0; $p<10 ; $p++) {
          $coaching = new Coaching;
          $coaching->setName($faker->sentence)
                   ->setPrice(mt_rand(100, 200))
                   ->setSlug($faker->slug());

          $manager->persist($coaching);
      }

        $manager->flush();
    }
}
