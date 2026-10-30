<?php

namespace Audubon\Entities;
class Bird
{

    private ?int $id = null;
    private ?string $name;
    private ?string $email;
    private ?string $phone;
    private string $location;
    private string $species;
    private string $description;
    private \DateTime $sighted_at; // this should be sightedAt per naming conventions




    public function getBirdId() : int
    {
        return $this->id;
    }

    public function setBirdId($birdId) : void
    {
        $this->id = $birdId;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(?string $name) : void
    {
        $this->name = $name;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function setEmail(?string $email) : void
    {
        $this->email = $email;
    }

    public function getPhone() : string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone) : void
    {
        $this->phone = $phone;
    }

    public function getLocation() : string
    {
        return $this->location;
    }

    public function setLocation(string $location) : void
    {
        $this->location = $location;
    }

    public function getSpecies() : string
    {
        return $this->species;
    }
    public function setSpecies(string $species) : void
    {
        $this->species = $species;
    }


    public function getSightedAt() : string
    {
        return date_format($this->sighted_at, 'm-d-y g:i A');
    }
    public function setSightedAt(\DateTime $sighted_at) : void
    {
        $this->sighted_at = $sighted_at;
    }

    public function getDescription() : string
    {
        return $this->description;
    }

    public function setDescription(string $description) : void
    {
        $this->description = $description;
    }
}