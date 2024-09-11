<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    /**
     * FISH ATTRIBUTES
     * $this->attributes['id'] - int - contains the fish primary key (id)
     * $this->attributes['name'] - string - contains the fish name
     * $this->attributes['species'] - string - contains the fish species. Can be 'Frog Dog' or 'Big Head'
     * $this->attributes['weight'] - float - contains the fish weight
     */
    protected $guarded = ['id']; // id is non-fillable

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getSpecies(): string
    {
        return $this->attributes['species'];
    }

    public function setSpecies(string $species): void
    {
        $this->attributes['species'] = $species;
    }

    public function getWeight(): float
    {
        return $this->attributes['weight'];
    }

    public function setWeight(float $weight): void
    {
        $this->attributes['weight'] = $weight;
    }
}