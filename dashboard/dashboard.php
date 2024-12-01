<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Tài Khoản</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Quản Lý Tài Khoản</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action" onclick="showContent('user_info')">Thông tin tài khoản</a>
                    <a href="#" class="list-group-item list-group-item-action" onclick="showContent('edit_address')">Địa chỉ nhận hàng</a>
                    <a href="#" class="list-group-item list-group-item-action" onclick="showContent('orders')">Đơn đặt hàng</a>
                    <a href="#" class="list-group-item list-group-item-action" onclick="showContent('change_password')">Đổi mật khẩu</a>
                    <a href="#" class="list-group-item list-group-item-action" onclick="showContent('review_history')">Lịch sử đánh giá sản phẩm</a>
                </div>
            </div>

            <div class="col-md-9">
                <div id="content" class="card">
                    <div class="card-body">
                        <h4 class="text-center">Chọn một mục để xem chi tiết</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showContent(content) {
            let url = '';

            switch(content) {
                case 'user_info':
                    url = 'user_info.php';
                    break;
                case 'edit_address':
                    url = 'list_address.php';
                    break;
                case 'orders':
                    url = 'orders.php';
                    break;
                case 'change_password':
                    url = 'change_password.php';
                    break;
                case 'review_history':
                    url = 'review_history.php';
                    break;
                default:
                    url = ''; 
                    break;
            }

            if (url) {
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(response) {
                        document.getElementById('content').innerHTML = response;
                    },
                    error: function() {
                        document.getElementById('content').innerHTML = '<p class="text-center text-danger">Có lỗi xảy ra khi tải nội dung.</p>';
                    }
                });
            }
        }
    </script>
</body>
</html>
