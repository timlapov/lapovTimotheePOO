<?php

namespace Src\Entity;

class Moto {
    private ?int $id;
    private string $brand;
    private string $model;
    private string $type;
    private float $price;
    private string $image;

    const VALID_TYPES = ['Enduro', 'Custom', 'Sportive', 'Roadster'];
// SETTERS
    public function __construct(string $brand, string $model, string $type, string $price, string $image, int $id = null)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->setType($type);
        $this->price = $price;
        $this->image = $image;
        if ($id !== null) {
            $this->id = $id;
        }
    }
    public function setType(string $type): void
    {
        if (in_array($type, self::VALID_TYPES)) {
            $this->type = $type;
        } else {
            echo("Unacceptable type of motorcycle: $type");
        }
    }
//GETTERS
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getBrand(): string
    {
        return $this->brand;
    }
    public function getModel(): string
    {
        return $this->model;
    }
    public function getType(): string
    {
        return $this->type;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    public function getImage(): string
    {
        return $this->image;
    }

    //FUNCTIONS
    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id,
            'brand' => $this->brand,
            'model' => $this->model,
            'type' => $this->type,
            'price' => $this->price,
            'image' => $this->image
        ];
    }
    public static function fromArray($array): self
    {
        if (!$array) {
            //throw new InvalidArgumentException("Il n'existe pas de tableau");
            echo("ERROR! Il n'existe pas de tableau");
            exit;
        }
        return new self(
            $array['brand'],
            $array['model'],
            $array['type'],
            (float)$array['price'],
            $array['image'],
            isset($array['id']) ? (int)$array['id'] : null
        );
    }
}