$(function () {
    "use strict";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    $(document).on('click', '#checkAll', function () {
        if (this.checked) {
            $('.item').each(function () {
                this.checked = true
            })
        } else {
            $('.item').each(function () {
                this.checked = false
            })
        }
    });

    $(document).on('click', '.item', function () {
        if ($('.item').length === $('.item:checked').length) {
            $('#checkAll').prop('checked', true)
        } else {
            $('#checkAll').prop('checked', false)
        }
    });

    $(document).on('submit', '.create-form', function () {
        event.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            data: $(this).serialize(),
            method: 'POST',
            success: function (result) {
                if(result.status){
                    success_noti(result.message)
                    $('.create-form')[0].reset()
                }else {
                    warning_noti(result.message)
                }
            },
            error: function (error) {
                let text = error.responseJSON.message
                $.each(error.responseJSON.errors, function (key, value) {
                    text += '<div>' + value + '</div>'
                })

                warning_noti(text)
            }

        })
    });

    $(document).on('click', '.remove-item', function (){
        event.preventDefault()
        let url = $(this).attr('href')
        $.ajax({
            url: url,
            method: 'delete',
            success: function (response){
                if(response.status){
                    success_noti(response.message)
                }else {
                    warning_noti(response.message)
                }
            }
        })
    })

    function warning_noti(msg) {
        Lobibox.notify('warning', {
            pauseDelayOnHover: true,
            icon: 'fa fa-exclamation-circle',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            /*size: 'mini',*/
            msg: msg
        });
    }
    function success_noti(msg) {
        Lobibox.notify('success', {
            pauseDelayOnHover: true,
            icon: 'fa fa-check',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            /*size: 'mini',*/
            msg: msg
        });
    }


});
