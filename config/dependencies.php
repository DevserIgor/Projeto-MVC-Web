<?php

$containerBuilder =  new \DI\ContainerBuilder();

$containerBuilder->addDefinitions([
    \Doctrine\ORM\EntityManagerInterface::class => function (){
        return (new \Alura\Cursos\Infra\EntityManagerCreator())->getEntityManager();
    }
]);

return $containerBuilder->build();