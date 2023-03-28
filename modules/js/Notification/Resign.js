define([
    'dojo',
    'dojo/_base/declare',
], function (dojo, declare) {
    return declare(
            'smilelife.notification.resign',
            [
                //smilelife.state.draw
            ],
            {
                notif_resignNotification: function (notif) {
                    this.debug("notif_resignNotification called", notif);

                    var card = notif.args.card;
                    this.displayCard(card, "card_empty", "pile_job_" + notif.args.playerId);
//                    if (notif.args.table.studies.length > 0) {
//                        var newCard = notif.args.table.studies[notif.args.table.studies.length-1];
//                        this.displayCard(newCard, 'pile_job_' + notif.args.playerId);
//                    }

                    var _this = this;
                    setTimeout(function () {
                        _this.discardCounter.setValue(_this.discardCounter.getValue() + 1);
                        _this.boardCounter[notif.args.playerId].job.setValue(_this.boardCounter[notif.args.playerId].job.getValue() - 1);
                    }, this.animationTimer);
                },
            }
    );
});