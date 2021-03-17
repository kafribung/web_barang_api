<?php

namespace App\Http\Resources\Auht;

use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'   => $this->name,
            'email'  => $this->email,
            'role'   => $this->roles,
            'token'  => $this->token,
        ];
    }
}
