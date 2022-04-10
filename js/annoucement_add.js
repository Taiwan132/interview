$(document).ready(function () {
    $('#submit').click(function () {
        $.ajax({
            url:'control/annoucement_add.php',
            method:'post',
            dataType:'json',
            data:{ 'annoucement':$('#annoucement').val(), 'title':$('#title').val() },
            success:function( data ){
                if( data.statue == 0) {
                    alert('成功');
                    document.location.href="/test/";
                }else{
                    alert(data.msg);
                }
            },
            error:function(){
                alert('Internet error');
            }
        });
    });
});