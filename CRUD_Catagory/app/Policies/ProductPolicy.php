<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Product;
use Illuminate\Auth\Access\HandlesAuthorization;


// define rule for user do ey ban klaz
class ProductPolicy
{
    use HandlesAuthorization;

    function edit(User $user, Product $product)
    {
        return $user->role === 'Admin' || $user->id === $product->owner_id;
    }
    function delete(User $user, Product $product)
    {
        return $user->role === 'Admin' || $user->id === $product->owner_id;
    }
    
    
}
