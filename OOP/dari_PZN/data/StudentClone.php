<?php namespace Data\StudentClone;

class Student{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample): void{
        $this->sample = $sample;
    }

    public function __clone(): void{
        // ketika clone object, maka sample akan di buang
        // yang lainnya tetap di clone
        unset($this->sample); // unset -> buang sample
    }

    public function __toString(): string{
        return "Student id:$this->id, name:$this->name, value:$this->value";
    }

    public function __invoke(...$arguments): void{ // ... like *args in python
        $join = join(",", $arguments);
        echo "Invoke student with arguments $join" . PHP_EOL;
    }

    /*public function __debugInfo(): array{
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "Me",
            "version" => "1.0.0"
        ];
    }*/
}