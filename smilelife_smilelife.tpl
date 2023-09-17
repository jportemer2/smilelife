{OVERALL_GAME_HEADER}
<div id="modal-container"></div>
<div id="more-container"></div>

<div id="game_container">
    <div class="centered_table" id="mytable_container">
        <div id="deck_and_discard">
            <div class="pile_container pile_deck">
                <div class="pile" id="pile_deck">

                </div>
                <div class="pile_counter" id="pile_deck_count">0</div>
            </div>
            <div class="pile_container pile_discard">
                <div class="pile" id="pile_discard">

                </div>
                <div class="pile_counter" id="pile_discard_count">0</div>
            </div>
            <div class="pile_container pile_offside">
                <div class="pile" id="pile_offside">

                </div>
                <div class="pile_counter" id="pile_offside_count">0</div>
            </div>
        </div>


    </div>
    <div class="centered_table player_tables">
        <div id="tables">


        </div>
    </div>
</div>

<script type="text/javascript">
    var jstpl_card = `
        <div id="card_\${id}" class="cardontable selectable" >
            <div class="card_sides">
                <div class="card-side front" id="front_card_\${id}">
                </div>
                <div class="card-side back"></div>
            </div>
        </div>
    `;
    var jstpl_attack_modale = `
        <div class="modal-overlay">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">\${title}</div>
                    <div class="modal-close">
                        <a href="#" class="action-button bgabutton bgabutton_gray" onclick="return false;" id="attackCancel_button">X</a>
                    </div>
                </div>
                <div id="modal_selection" class="modal-body">
                </div>
            </div>
        </div>
    `;
    var jstpl_modal_v2 = `
        <div class="modal-overlay">
            <div>
                <h2>\${title}</h2>
                <div id="modal-selection" class="modal-body"></div>
                <div id="target-selection" class="modal-body"></div>
                <div id="modal-btn">
                    <a href="#" class="action-button bgabutton bgabutton_red" onclick="return false;" id="more_cancel_button">cancel</a>
                </div>
            </div>
        </div>
    `;
    var jstpl_btn_valid = `<a href="#" class="action-button bgabutton bgabutton_blue" onclick="return false;" id="more_valid_button">valid</a>`;
    var jstpl_btn_nobonus = `<a href="#" class="action-button bgabutton bgabutton_green" onclick="return false;" id="more_valid_button">Play without bonus</a>`;
    var jstpl_card_content = `
        <span class="card_text card_title">\${title}</span>
        <span class="card_text card_subtitle">\${subtitle}</span>
        <span class="card_text card_text1">\${text1}</span>
        <span class="card_text card_text2">\${text2}</span>
        <span class="debug">\${id} / \${type} - S : \${smilePoints}</span>
    `;
    var jstpl_card_more = `
        <div id="card_more_\${id}" class="cardontable selectable" data-type="\${type}" data-id="\${id}" data-category="\${category}" data-points="\${smilePoints}" data-name="\${name}">
            <div class="card_sides">
                <div class="card-side front" id="front_card_more_\${id}">
                   ` + jstpl_card_content + `
                </div>
            </div>
        </div>
    `;
    var jstpl_target_with_card = `
        <div id="target_\${targetId}" class="target_selection">
            <div class="target_identification" style="background-color:#\${targetColor}">
                <b style="color:\${textColor}">\${targetName}</b>
            </div>
            <div class="target_stats">
                <div class="target_stats_list">
                    <div class="target_stats_list_item">
                        <div class="wage_value">\${targetAviableWagesLevel}/\${targetWagesLevel}</div>
                    </div>
                    <div class="target_stats_list_item">
                        <div class="studie_value">\${targetStudiesLevel}</div>
                    </div>
                </div>
            </div>
            <div class="target_card" id="target_card_\${targetId}">

            </div>
        </div>
    `;



</script>

{OVERALL_GAME_FOOTER}
