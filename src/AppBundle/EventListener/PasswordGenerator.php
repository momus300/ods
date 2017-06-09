<?php

namespace AppBundle\EventListener;

use AppBundle\Entity\Applications;
use Doctrine\ORM\Event\LifecycleEventArgs;

class PasswordGenerator
{
    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if ($entity instanceof Applications) {
            global $kernel;
            /** @var \AppBundle\Services\PasswordGenerator $generator */
            $generator = $kernel->getContainer()->get('app.password_generator');
            $entity->setAdminKey($generator->generate()->getPassword());
            $entity->setPublicKey($generator->generate()->getPassword());
        }
    }
}