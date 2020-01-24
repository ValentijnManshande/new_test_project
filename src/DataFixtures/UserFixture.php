<?php

namespace App\DataFixtures;

use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;

class UserFixture extends BaseFixture
{
    protected function loadData(ObjectManager $manager)
    {

        $this->createMany(10,'main_users', function($i){
            $user = new User();
            $user->setEmail(sprintf('spacebar%d@example.com', $i));
            $user->setFirstName($this->faker->firstName);

            return $user;
        });

        $manager->flush();
    }
}
