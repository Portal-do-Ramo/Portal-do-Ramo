<?php

namespace App\Http\Resources;

use App\Repositories\Interfaces\EquipeRepositoryInterface;
use Illuminate\Http\Resources\Json\JsonResource;

class EquipeMembroResource extends JsonResource
{
    protected $equipeRepository;

    public function __construct($resource, EquipeRepositoryInterface $equipeRepository)
    {
        parent::__construct($resource);
        $this->equipeRepository = $equipeRepository;    
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'nome_equipe' => $this->nome_equipe,
            'foto_url' => $this->foto_url,
            'coordenador' => $this->coordenador,
            'assessor' => $this->assessor,
            'capitulo' => $this->capitulo,
            'arquivos' => $this->equipeRepository->getArquivos($this->resource),
            'eventos' => $this->equipeRepository->getEventos($this->resource),
            'projetos' => $this->equipeRepository->getProjetos($this->resource),
            'membros' => $this->equipeRepository->getMembros($this->resource)
        ];
    }
}