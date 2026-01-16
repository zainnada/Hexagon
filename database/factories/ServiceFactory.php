<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Stichoza\GoogleTranslate\GoogleTranslate;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition():array
    {
        return [
            'service_price' => $this->faker->randomFloat(2, 10, 500),
            'client_id' => Client::factory(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Service $service) {

            $service->translations()->create([
                'locale' => 'ar',
                'service_name' => $this->faker->jobTitle(),
                'service_description' => $this->faker->paragraph,
            ]);

            $service->translations()->create([
                'locale' => 'en',
                'service_name' => $this->faker->jobTitle(),
                'service_description' => $this->faker->paragraph,
            ]);
        });
    }


}
