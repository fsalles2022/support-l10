<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SupportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // dd(Carbon::parse($this->created_at)->setTimezone('America/Sao_Paulo')->format('d/m/Y'));

        return [
            'identify' => $this->id,
            'subject' => strtoupper($this->subject),
            'content' => strtoupper($this->body),
            'created_at' => Carbon::parse($this->created_at)->setTimezone('America/Sao_Paulo')->format('d/m/Y H:i'),
            'updated_at' => Carbon::parse($this->updated_at)->setTimezone('America/Sao_Paulo')->format('d/m/Y H:i'),
        ];
    }
}
