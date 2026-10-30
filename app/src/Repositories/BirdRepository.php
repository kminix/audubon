<?php

namespace Audubon\Repositories;

use Audubon\Entities\Bird;
use Doctrine\ORM\EntityManagerInterface;
use Exception;

class BirdRepository
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function create(array $data): Bird
    {
        $bird = new Bird();

        $bird->setName($data['name'] ?? null);
        $bird->setEmail($data['email'] ?? null);
        $bird->setPhone($data['phone'] ?? null);
        $bird->setLocation($data['location']);
        $bird->setSpecies($data['species']);
        $bird->setDescription($data['description']);
        $bird->setSightedAt(new \DateTime($data['sighted_at']));
        $this->entityManager->persist($bird);
        $this->entityManager->flush();

        return $bird;
    }
}