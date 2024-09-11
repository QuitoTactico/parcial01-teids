<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class Fish extends Model
{
    /**
     * FISH ATTRIBUTES
     * $this->attributes['id'] - int - contains the fish primary key (id)
     * $this->attributes['name'] - string - contains the fish name
     * $this->attributes['species'] - string - contains the fish species. Can be 'Frog Dog' or 'Big Head'
     * $this->attributes['weight'] - float - contains the fish weight
     * $this->attributes['created_at'] - string - contains the fish creation date
     * $this->attributes['updated_at'] - string - contains the fish last update date
     */
    protected $guarded = ['id']; // id is non-fillable

    protected $table = 'Fishes'; // table name

    /**
     * Validate the fish data.
     *
     * @throws ValidationException
     */
    public static function validateFishData(array $data): void
    {
        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'species' => 'required|in:Frog Dog,Big Head',
            'weight' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }

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

    public function getCreatedAt(): string
    {
        return $this->attributes['created_at'];
    }

    public function getUpdatedAt(): string
    {
        return $this->attributes['updated_at'];
    }
}
