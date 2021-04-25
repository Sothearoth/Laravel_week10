<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Category;
use Illuminate\Auth\Access\HandlesAuthorization;


// define rule for user do ey ban klaz
class CategoryPolicy
{
    use HandlesAuthorization;

    function edit(User $user, Category $category)
    {
        return $user->role === 'Admin' ;
    }
    function delete(User $user, Category $category)
    {
        return $user->role === 'Admin' ;
    }
    
    
}
