<?php

namespace SmileLife\Game\Table;

use Core\Decorator\DisplayModelDecorator;
use Core\Models\Core\Model;
use Core\Serializers\Serializer;
use SmileLife\Game\Card\CardManager;
use SmileLife\Game\Card\Core\CardDecorator;

/**
 * Description of PlayerTableDecorator
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
class PlayerTableDecorator extends DisplayModelDecorator {

    /**
     * 
     * @var Serializer
     */
    private $serializer;

    /**
     * 
     * @var CardManager
     */
    private $cardManager;

    /**
     * 
     * @var CardDecorator
     */
    private $cardDecorator;

    public function __construct() {
        $this->serializer = new Serializer(PlayerTable::class);
        $this->cardManager = new CardManager();
        $this->cardDecorator = new CardDecorator($this->cardManager->getSerializer());
    }

    protected function decorateOne(Model $model): array {
        return $this->doDecorate($model);
    }

    public function getSerializer(): Serializer {
        return $this->serializer;
    }

    public function doDecorate(PlayerTable $table) {
        return [
            "job" => $this->cardDecorator->decorate($table->getJob()),
            "studies" => $this->cardDecorator->decorate($table->getStudies()),
            "wages" => $this->cardDecorator->decorate($table->getWages()),
            "childs" => $this->cardDecorator->decorate($table->getChilds()),
            "flirts" => $this->cardDecorator->decorate($table->getFlirts()),
            "marriage" => $this->cardDecorator->decorate($table->getMarriage()),
            "adultery" => $this->cardDecorator->decorate($table->getAdultery()),
            "acquisitions" => $this->cardDecorator->decorate($table->getAcquisitions()),
            "attacks" => $this->cardDecorator->decorate($table->getAttacks()),
        ];
    }

}
