<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Images;
class ImagesPolicy
{
    use HandlesAuthorization;

   public function delete (User $user, Images $images){
       
       return (($user->id == $images->user_id ) || ($user->user_type == "Admin"));
   }
    
}
