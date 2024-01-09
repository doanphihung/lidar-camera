const $numberNotifications = $('#number-notifications');
let url = "ws://192.168.0.126/detection";
let ws = new WebSocket( url );
ws.onopen = function(e) {
    ws.send( '{"src":"live","ctrl":"start"}' );
};

ws.onmessage = function ( e ) {
    let data = JSON.parse(e.data);
    console.log(data);

    let numberObj = data.number;
    let objDetection = data.objects;
    if (numberObj > 0) {
        if (objDetection[0].kind === 'detected') {
            // createOrUpdate(API_CREATE_OBJECT_DETECTION, objDetection[0], nextCreateObjectDetection);
            let numberNoticeCurrent = $numberNotifications.text() === '' ? 0 : parseInt($numberNotifications.text());
            $('#number-notifications, #dropdown-header-notifications').text(numberNoticeCurrent + 1);
            let messageDetection = `<div>`
                + `<a href="#" class="dropdown-item">`
                + `<i class="fas fa-dot-circle mr-2"></i>` + `Có đối tượng xâm nhập khoảng cách x: ${objDetection[0].currentPos.x}m, y: ${objDetection[0].currentPos.y}m`
                + `</a>`
                + `<div class="dropdown-divider"></div>`
                + `</div>`
            $("#dropdown-content-notifications").append(messageDetection);

            <!-- Flashing camera frame -->
            $('#camera-01').addClass('flash');
            setTimeout(function() {
                $('#camera-01').removeClass('flash');
            }, 5000);

        }
    }
};

function nextCreateObjectDetection(dataResponse) {
    // $('#number-notifications, #dropdown-header-notifications').text(dataResponse.notice_not_read);
}

$(document).ready(function() {
    $('#show-dropdown-notice').on('click', function () {
        let numberNoticeCurrent = $numberNotifications.text() === '' ? 0 : parseInt($numberNotifications.text());
        $numberNotifications.text('');
        if (numberNoticeCurrent === 0) {
            $('.dropdown-header').empty().text('Không có thông báo!')
            $('#dropdown-content-notifications, .dropdown-footer').remove();

        }
    })
});