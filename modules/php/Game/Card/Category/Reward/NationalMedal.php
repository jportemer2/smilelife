<?php

namespace SmileLife\Card\Category\Reward;

use SmileLife\Card\CardType;
use SmileLife\Card\Category\Job\Job\Journalist;
use SmileLife\Card\Category\Job\Job\Researcher;
use SmileLife\Card\Category\Job\Job\Writer;
use SmileLife\Card\Module\BaseGame;
use SmileLife\Table\PlayerTable;

/**
 * Description of NationalMedal
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
class NationalMedal extends Reward implements BaseGame {

    public function __construct() {
        parent::__construct();

        $this->setTitle(clienttranslate('Grand Prize of Excellence'))
                ->setText1(clienttranslate('Can only be attributed to writers, '
                                . 'researchers and journalists'))
                ->setText2(clienttranslate('You may pocket paychecks from 1 to '
                                . '4 while you work in the awarded job.'));
    }

    /* -------------------------------------------------------------------------
     *                  BEGIN - Abstract
     * ---------------------------------------------------------------------- */

    public function getClass(): string {
        return self::class;
    }

    public function getSmilePoints(): int {
        return 4;
    }

    public function getType(): int {
        return CardType::REWARD_NATIONAL_MEDAL;
    }
    
    

    /* -------------------------------------------------------------------------
     *                  BEGIN - Implement BaseGame
     * ---------------------------------------------------------------------- */

    public function getBaseCardCount(): int {
        return 2;
    }

}
