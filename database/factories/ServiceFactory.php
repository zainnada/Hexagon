<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition():array
    {
        return [
            'service_price' => $this->faker->randomFloat(2, 10, 500),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Service $service) {

            $faker_ar = \Faker\Factory::create('ar_SA');

            $service->translations()->create([
                'locale' => 'ar',
                'service_name' => $faker_ar->jobTitle(),
                'service_description' => $faker_ar->paragraph,
            ]);


            $service->translations()->create([
                'locale' => 'en',
                'service_name' => $this->faker->jobTitle(),
                'service_description' => $this->faker->paragraph,
            ]);
        });
    }


}
