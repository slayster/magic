var life = new Array();
life[0] = 20;
life[1] = 20;
life[2] = 20;
life[3] = 20;
life[4] = 20;
life[5] = 20;
var playercount = 0;

function init(p1,p2,p3,p4,p5,p6,pc) {
    document.addEventListener('keyup', key_up_event, false);
    life[0] = p1;
    life[1] = p2;
    life[2] = p3;
    life[3] = p4;
    life[4] = p5;
    life[6] = p6;
    playercount = pc;
}

function getAjaxConnection() {
    var xmlHttp;
    try {
        // Firefox, Opera 8.0+, Safari
        xmlHttp = new XMLHttpRequest();
    } catch (e) {
        // Internet Explorer  
        try {
            // IE 6+
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                // IE 5
                xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                alert("Your browser does not support AJAX.");
                xmlHttp = false;
            }
        }
    }
    return xmlHttp;
}

function update_life(player) {
    xmlHttp = getAjaxConnection();
    if (xmlHttp.readyState==0) {
        xmlHttp.onreadystatechange = togglestate;
        var url = "updatelife.php?player="+player+"&life="+life[player-1];
        xmlHttp.open("GET",url,true);
        xmlHttp.send(null);
    } else {
        alert("ERROR");
    }
}

function togglestate() {
    if (xmlHttp.readyState==2) { 
        // loading
    }
    if (xmlHttp.readyState==4) {
        // done
    }
}

function update_score(player) {
    document.getElementById("p"+player+"_life").innerHTML = life[player-1];
}

function increase(player) {
    if (player<=playercount) {
        life[player-1]++;
        update_score(player);
        update_life(player);
    }
}

function decrease(player) {
    if (player<=playercount) {
        life[player-1]--;
        update_score(player);
        update_life(player);
    }
}

function reset_all() {
    for (i=1; i<=playercount; i++) {
        life[i-1] = 20;
        update_score(i);
        update_life(i);
    }
}

function key_up_event(e) {
	var evt = e || window.event;
    switch(evt.keyCode) {
        case 81:
            // player 1+
            increase(1);
            break;
        case 65:
            // player 1-
            decrease(1);
            break;
        case 87:
            // player 2+
            increase(2);
            break;
        case 83:
            // player 2-
            decrease(2);
            break;
        case 69:
            // player 3+
            increase(3);
            break;
        case 68:
            // player 3-
            decrease(3);
            break;
        case 82:
            // player 4+
            increase(4);
            break;
        case 70:
            // player 4-
            decrease(4);
            break;
        case 84:
            // player 5+
            increase(5);
            break;
        case 71:
            // player 5-
            decrease(5);
            break;
        case 89:
            // player 6+
            increase(6);
            break;
        case 72:
            // player 6-
            decrease(6);
            break;
    }
}
