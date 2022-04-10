var id = getUrlParameter('id');
$(document).ready(function () {
    $.ajax({
        url: 'control/get_annoucement_info.php',
        data: {
            id: id
        },
        method: 'post',
        dataType: 'json',
        success: function (data) {
            $('#title').val(data.title);
            $('#annoucement').val(data.content);
        },
        error: function () {
            alert('Internet error');
        }
    });
    $('#submit').click(function () {
        var title = $('#title').val();
        var annoucement = $('#annoucement').val();
        $.ajax({
            url: 'control/annoucement_edit.php',
            data: {
                id: id,
                title: title,
                content: annoucement
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                if( data.statue == 0) {
                    alert('成功');
                    document.location.href="/test/";
                }else{
                    alert(data.msg);
                }
            },
            error: function () {
                alert('Internet error');
            }
        });
    });
});