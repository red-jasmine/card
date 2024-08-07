<?php

namespace RedJasmine\Card\Application\Services;

use RedJasmine\Card\Application\Services\Pipelines\CardGroupPipeline;
use RedJasmine\Card\Domain\Models\Card;
use RedJasmine\Card\Domain\Repositories\CardRepositoryInterface;
use RedJasmine\Support\Application\ApplicationCommandService;

class CardCommandService extends ApplicationCommandService
{


    protected static string $modelClass = Card::class;


    public function __construct(
        protected CardRepositoryInterface $repository,
    )
    {

        parent::__construct();
    }


    protected function pipelines() : array
    {
        return [
            'create' => [
                CardGroupPipeline::class
            ],
            'update' => [
                CardGroupPipeline::class
            ],
            'delete' => [],
        ];
    }


}
