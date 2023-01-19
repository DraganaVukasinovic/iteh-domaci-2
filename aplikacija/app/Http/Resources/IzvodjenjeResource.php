<?php

namespace App\Http\Resources;

use App\Models\Pozoriste;
use App\Models\Predstava;
use Illuminate\Http\Resources\Json\JsonResource;

class IzvodjenjeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return 
        [
            'id'=>$this->resource->id, 
            'pozoriste'=>Pozoriste::find($this->resource->pozoriste), 
            'predstava'=>Predstava::find($this->resource->predstava), 
            'datum'=>$this->resource->datum, 
        ];
    }
}
