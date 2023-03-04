define([
    'dojo',
    'dojo/_base/declare',
    'ebg/core/gamegui',
    g_gamethemeurl + 'modules/js/Core/ToolsTrait.js'
], function (dojo, declare) {
    return declare(
            'smilelife.state.draw',
            [
                common.ToolsTrait
            ],
            {

                constructor: function () {
//                    this.debug('smilelife.StatesManager constructor');
                },

                displayButton: function () {
                    if (null !== this.myTable.job) {
                        if (this.myTable.job.isTemporary) {
                            this.addActionButton('resign_button', _('Resign and Play'), 'doResign', null, false, 'red');
                        } else {
                            this.addActionButton('resign_button', _('Resign and Pass'), 'doResign', null, false, 'red');
                        }
                    }
//                    this.debug('DST', this.myTable, null !== this.myTable.job, null != this.myTable.job);

                },

                doResign: function () {
                    this.debug("Resign");
                    this.ajaxcall("/" + this.game_name + "/" + this.game_name + "/resign.html", {
                        lock: true
                    }, this, function (result) {
                        this.debug("Resign :", result);
//                        this.debug("Cards : ",cards)
                    }, function (is_error) {
                        //--error
                        this.debug("Resign fail:", is_error);
                    });
                }

            }


    );
});


