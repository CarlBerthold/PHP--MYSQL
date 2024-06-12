<?php

function generateUser() : array
{
    $user = [
        "id" => 1,
        "first_name" => "John",
        "last_name" => "Doe",
        "email" => "john.doe@example.com",
        "password" => "password123",
        "role" => "user",
        "created_at" => "2021-01-01",
        "updated_at" => "2021-01-01"
    ];

    return $user;
}