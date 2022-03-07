<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

        public function __construct(UserPasswordEncoderInterface $passwordEncoder)
        {
        $this->passwordEncoder = $passwordEncoder;
        } 


    public function load(ObjectManager $manager): void
    {
        /*$user = new User();
        $roles[] = 'ROLE_USER';
        $user-> setEmail('david.renault@gmail.com');
        $user-> setRoles($roles);
        $user-> setUsername('dRenault');
        $user-> setPassword($this->passwordEncoder->encodePassword(
            $user,
            'mpRenault'
        ));*/

        /*$user = new User();
        $roles[] = 'ROLE_PROF';
        $user-> setEmail('ludovic.romagne@gmail.com');
        $user-> setRoles($roles);
        $user-> setUsername('lRomagne');
        $user-> setPassword($this->passwordEncoder->encodePassword(
            $user,
            'mpRomagne'
        ));*/

        /*$user = new User();
        $roles[] = 'ROLE_ADMIN';
        $user-> setEmail('esther.lai@gmail.com');
        $user-> setRoles($roles);
        $user-> setUsername('eLai');
        $user-> setPassword($this->passwordEncoder->encodePassword(
            $user,
            'mpLai'
        ));*/

        /*$user = new User();
        $roles[] = 'ROLE_ADMIN';
        $user-> setEmail('donatien.fleutot@gmail.com');
        $user-> setRoles($roles);
        $user-> setUsername('dFleutot');
        $user-> setPassword($this->passwordEncoder->encodePassword(
            $user,
            'mpFleutot'
        ));*/

        $user = new User();
        $roles[] = 'ROLE_ADMIN';
        $user-> setEmail('carlos.gambinos@gmail.com');
        $user-> setRoles($roles);
        $user-> setUsername('Carlos Gambinos');
        $user-> setPassword($this->passwordEncoder->encodePassword(
            $user,
            'mpGambinos'
        ));
        
        $manager->persist($user);
        $manager->flush();

        /*
        php bin/console doctrine:fixtures:load --append
        */
    }
}

