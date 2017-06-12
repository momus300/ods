<?php

namespace AppBundle\EventListener;

use AppBundle\Entity\Applications;
use Doctrine\ORM\Event\LifecycleEventArgs;

class PasswordGenerator
{
    private $PasswordGenerator;

    public function __construct(\AppBundle\Services\PasswordGenerator $PasswordGenerator)
    {
        $this->PasswordGenerator = $PasswordGenerator;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if ($entity instanceof Applications) {
//            global $kernel;
//            /** @var \AppBundle\Services\PasswordGenerator $generator */
//            $generator = $kernel->getContainer()->get('app.password_generator');
            $entity->setAdminKey($this->PasswordGenerator->generate()->getPassword());
            $entity->setPublicKey($this->PasswordGenerator->generate()->getPassword());
        }
    }
}