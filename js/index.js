$(document).ready(function () {
    var page = getUrlParameter('page');
    if (!page) {
        page = 1;
    }
    $.ajax({
        url: 'control/get_annoucement.php',
        method: 'post',
        dataType: 'json',
        data: {
            'page': page,
            'length': length
        },
        success: function (data) {
            if (data.statue != 0) {
                alert(data.msg);
            } else {
                $.each(data.data, function (index, val) {
                    $('.table').append(
                        `<tr>
                            <td>${val.id}</td>
                            <td>${val.title}</td>
                            <td>${val.content}</td>
                            <td class="operate" > <button class="delete" id="${val.id}" >delete</button> <button class="edit" id="${val.id}" >edit</button> </td>
                        </tr>`
                    );
                });
                pagenation(page, data.count)
                load_event();
            }
        },
        error: function () {
            alert('Internet error');
        }
    });

    function load_event() {
        $('.edit').click(function () {
            var id = $(this).attr('id');
            document.location.href = 'annoucement_edit.html?id=' + id;
        });
        $('.delete').click(function () {
            var id = $(this).attr('id');
            $.ajax({
                url: 'control/delete_annoucement.php',
                method: 'post',
                dataType: 'json',
                data: {
                    'id': id,
                },
                success: function (data) {
                    if (data.statue == 0) {
                        alert('success');
                        document.location.reload();
                    } else {
                        alert('fail');
                    }
                },
                error: function () {
                    alert('Internet error');
                }
            });
        });
    }

    function pagenation( page , num_row) {
        page = parseInt(page);

        var page_num = Math.ceil(num_row / length);
        var html = '';
        for (var i = 1; i <= page_num; i++) {
            if (page_num == page) {
                if (i >= (page_num - 2) && i <= page_num) {

                    if (page == i) {
                        html += `<a class="active page" href="?page=${i}">${i}</a>`;
                    } else {
                        html += `<a class="page" href="?page=${i}">${i}</a>`;
                    }
                }
            } else if (page >= 3) {
                console.log('eeee');

                if (i > (page - 2) && i <= ( page +1)) {

                    if (page == i) {
                        html += `<a class="active page" href="?page=${i}">${i}</a>`;
                        console.log('html' + html);
                    } else {
                        html += `<a class="page" href="?page=${i}">${i}</a>`;
                    }
                    console.log((page +1));
                }
            } else  if (page < 3) {
                    if (i <= 3) {
                        if (page == i) {
                            html += `<a class="active page" href="?page=${i}">${i}</a>`;
                        } else {
                            html += `<a class="page" href="?page=${i}">${i}</a>`;
                        }
                    }
            }
        }
        $('.page_nation').append(html);
    }

})