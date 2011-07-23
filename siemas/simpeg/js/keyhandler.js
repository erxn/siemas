// KEYBOARD NAVIGATION FOR TEXTFIELDS

$(document).ready(function(){

    $('input[type=text]').each(function() {
        this.onfocus = function() {
            this.select();
            var cur_id = this.id.split('_');
            var cur_x = parseInt(cur_id[1]);
            var cur_y = parseInt(cur_id[2]);
			
            this.onkeydown = function(event) {
                if(!event) event = window.event;
                funcKeyDown(event,cur_x,cur_y);
                if(event.keyCode == 37 || event.keyCode == 38 || event.keyCode == 39 || event.keyCode == 40) return false;  // intercept arrow keys
            };
        };
    });
});

function funcKeyDown(evt, cur_x, cur_y) {

    var next_x = 0, next_y = 0;

    switch(evt.keyCode) {
        case 39: 	// kanan
            next_x = parseInt(cur_x + 1);
            next_y = cur_y;
            $('#field_' + next_x + '_' + next_y).select();
            $('#field_' + cur_x + '_' + cur_y).blur();
            return false;
		
        case 37: 	// kiri
            next_x = parseInt(cur_x - 1);
            next_y = cur_y;
            $('#field_' + next_x + '_' + next_y).select();
            $('#field_' + cur_x + '_' + cur_y).blur();
            return false;
	
        case 38: 	// atas
            next_x = cur_x;
            next_y = parseInt(cur_y - 1);
            $('#field_' + next_x + '_' + next_y).select();
            $('#field_' + cur_x + '_' + cur_y).blur();
            return false;
		
        case 40: 	// bawah
            next_x = cur_x;
            next_y = parseInt(cur_y + 1);
            $('#field_' + next_x + '_' + next_y).select();
            $('#field_' + cur_x + '_' + cur_y).blur();
            return false;
	
    }

}
