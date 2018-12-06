var deleteUrl = '';
var deleteUrlBase = 'user/removeUserByID';

$(function () {

    //给每个按钮做一个绑定, 为了区分不同的按钮
    $('.delete_span').children('a').click(function () {
        //console.info('clicked');
        //console.info(this.name);
        deleteUrl = deleteUrlBase + '?id=' + this.name;
        console.info(deleteUrl);
    });

    $('#delete_confirm_btn').click(function () {
        $.get(
            deleteUrl,
            function (res) {
                if (res.success) {
                    //console.info(res);
                    //隐藏弹出窗
                    $('#myModal').modal('hide');
                    //重载窗口
                    window.location.reload();
                }
            }
        );

    });
});
