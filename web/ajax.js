$(function () {
    jQuery(document).ready(function() {
        console.log("jQuery est prêt !");
        console.log($("input#mk_louvrebundle_reservation_dtReservation").val());

            $.ajax({
                url: 'http://localhost/louvre/web/app_dev.php/reservation',
                type: 'POST',
                data:
                {
                    date : $("input#mk_louvrebundle_reservation_dtReservation").val()
                },
                dataType: 'json',
                success: function(date) {
                    console.log("okok");
                }
            });
    });
});