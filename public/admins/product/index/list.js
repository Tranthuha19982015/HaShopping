function actionDelete(event) {
    event.preventDefault();
    let urlRequest = $(this).data('url');
    let that = $(this);

    Swal.fire({
        title: 'Bạn có chắc chắn xóa sản phẩm này?',
        text: "Bạn không thể hoàn tác sau khi xóa!!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Đồng ý',
        cancelButtonText: 'Hủy'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: 'GET',
                url: urlRequest,
                success: function (data) {
                    if (data.code == 200) {
                        that.parent().parent().remove();
                        Swal.fire(
                            'Đã xóa!',
                            'Sản phẩm đã được xóa!',
                            'success'
                        )
                    }
                    console.log(data);
                },
                error: function () {

                }
            });
        }
    })
}

$(function () {
    $(document).on('click', '.action_delete', actionDelete);
});
