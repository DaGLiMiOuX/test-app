<?php

namespace App\Schemas;

use DateTime;
use OpenApi\Attributes as OA;

#[OA\Schema()]
class UserSchema
{
    #[OA\Property()]
    public int $id;
    #[OA\Property()]
    public string $name;
    #[OA\Property()]
    public string $email;
    #[OA\Property()]
    public DateTime $email_verified_at;
    #[OA\Property()]
    public DateTime $created_at;
    #[OA\Property()]
    public DateTime $updated_at;
}
