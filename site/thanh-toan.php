<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="css/index.css"> -->
    <link rel="stylesheet" href="plugin/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/cart.css">
    <title>Giỏ hàng</title>
</head>

<body>
    <div id="wrapper">
                        
        <main>
            <section class="cart">
                <form action="" method="POST">
                    <div class="container">
                        <h3 style="text-align: center;">Tiến hành đặt hàng</h3>
                        <div class="row">
                            <div class="panel panel-primary col-md-6">
                                <h4 style="padding: 2rem 0; border-bottom:1px solid black;">Nhập thông tin mua hàng </h4>
                                <div class="form-group">
                                    <label for="usr">Họ và tên:</label>
                                    <input required="true" type="text" class="form-control" id="usr" name="fullname">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input required="true" type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Số điện thoại:</label>
                                    <input required="true" type="text" class="form-control" id="phone_number" name="phone_number">
                                </div>
                                <div class="form-group">
                                    <label for="address">Địa chỉ:</label>
                                    <input required="true" type="text" class="form-control" id="address" name="address">
                                </div>
                                <div class="form-group">
                                    <label for="note">Ghi chú:</label>
                                    <textarea class="form-control" rows="3" name="note" id="note"></textarea>
                                </div>

                            </div>
                            <!-- <button onclick="hienthi()"><i class="fas fa-angle-down"></i> Xem lại đơn hàng</button> -->

                            <div class="panel panel-primary col-md-6">
                                <h4 style="padding: 2rem 0; border-bottom:1px solid black;">Đơn hàng</h4>
                                <table class="table table-bordered table-hover none">
                                    <thead>
                                        <tr style="font-weight: 500;text-align: center;">
                                            <td width="50px">STT</td>
                                            <td>Tên Sản Phẩm</td>
                                            <td>Số lượng</td>
                                            <td>Tổng tiền</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                    </tbody>
                                </table>
                                <p>Tổng đơn hàng: <span class="bold red"><span> VNĐ</span></span></p>
                                <a href="dashboard.php"><button class="btn btn-success">Đặt hàng</button></a>
                            </div>
                        </div>

                    </div>
                </form>

            </section>
        </main>
       
</body>
<style>
    .xemlai {
        font-size: 18px;
        font-weight: 500;
        color: blue;
    }

    .b-500 {
        font-weight: 500;
    }

    .bold {
        font-weight: bold;
    }

    .red {
        color: rgba(207, 16, 16, 0.815);
    }
</style>

</html>