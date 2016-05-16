/**
 * Created on 15.05.2016.
 */

$('#ad-remove-button').on('click', function () {

    var adsIds = $('#ads').find('input:checked').map(function (_, it) {
        return it.dataset.adId;
    });

    if (adsIds.length) {

        notification({
            text: 'Вы действительно желаете удалить ' + adsIds.length + ' ' + (((adsIds.length % 10 == 1) && adsIds.length != 11) ? 'объявление' : ((parseInt(adsIds.length / 10) == 0 && (adsIds.length % 10 < 5 ))  ? 'объявления' : 'объявлений')),
            type: 'confirm',
            layout: 'top',
            dismissQueue: true,
            animation: {
                open: {height: 'toggle'},
                close: {height: 'toggle'},
                easing: 'swing',
                speed: 500
            },
            killer: true,
            buttons: [{
                addClass: 'btn btn-danger',
                text: 'Ok',
                onClick: function($noty) {

                    var $okButton = $(this);

                    $.ajax({
                        url: '/employer/ad/remove',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            ids: adsIds
                        },
                        beforeSend: function () {
                            $okButton.prop('disabled', true);
                        },
                        success: function (data) {
                            debugger
                        },
                        error: function () {

                            notification({
                                text: 'Ошибка! <br> Отказ сервера',
                                type: 'error'
                            });

                            console.error(err);
                        },
                        complete: function () {
                            $noty.close();
                        }
                    });
                }
            }, {
                addClass: 'btn btn-default',
                text: 'Cancel',
                onClick: function($noty) {
                    $noty.close();
                }
            }]
        });

    } else {

        notification({
            text: 'Внимание! <br>Сначала отметьте хотя бы одно объявление',
            type: 'warning',
            timeout: 3000,
            animation: {
                open: 'animated fadeIn',
                close: 'animated fadeOut'
            }
        });
    }
});

