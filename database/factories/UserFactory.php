<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends \Tipoff\Authorization\Database\Factories\UserFactory
{
    protected $model = User::class;

    public function definition()
    {
        return parent::definition();

    }

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
