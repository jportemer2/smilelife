define([
    'dojo',
    'dojo/_base/declare',
], function (dojo, declare) {
    return declare(
            'smilelife.notification.draw',
            [
                //smilelife.state.draw
            ],
            {

                notif_drawNotification: function (notif) {
                    this.debug('DRAW', notif);
                    if (parseInt(notif.args.playerId) === this.player_id) {
                        var card = notif.args.card;
                        this.displayCard(card, "myhand", "card_deck");
                    } else {
                        var card = {
                            id: Date.now(),
                        };
                        this.displayCard(card, "playerpanel_" + notif.args.playerId, "card_deck");
                    }
                    this.deckCounter.setValue(this.deckCounter.getValue() - 1);
                    this.handCounters[notif.args.playerId].setValue(this.handCounters[notif.args.playerId].getValue() + 1);
                },
                
                
            }
    );
});