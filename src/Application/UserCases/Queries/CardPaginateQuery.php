<?php

namespace RedJasmine\Card\Application\UserCases\Queries;

use RedJasmine\Support\Infrastructure\ReadRepositories\PaginateQuery;

class CardPaginateQuery extends PaginateQuery
{


    public ?string $status;
    public ?bool   $isLoop;

}
