
<div class="container">
    <form method="GET" action="thongtinchitiet/KT">
        <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="jumbotron">
                                    <section id="vertical-menu">
                                        <div class="list-group"><a class="list-group-item" href="./thongtinchitiet/thongtinKH"> <i class="fa fa-user fa-fw"></i>&nbsp;Thông tin khách hàng</a><a class="list-group-item" href="./thongtinchitiet/DH"> <i class="fa fa-list-alt fa-fw"></i>&nbsp;Xem đơn hàng</a><a class="list-group-item"
                                                href="#"> <i class="fa fa-sign-out fa-fw"></i>&nbsp;Đăng xuất</a></div>
                                    </section>
                                </div>
                            </div>
                            <div class="col">
                                <form>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="jumbotron" id="thongtinKH">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <p>Họ và tên</p>
                                                    </div>
                                                    <div class="col">
                                                        <p>Địa chỉ email</p>
                                                    </div>
                                                    <div class="col">
                                                        <p>Số điện thoại</p>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3"><input value="<?php echo $_SESSION['account']['TenKH']?>" name="tenKH" class="form-control" type="text"></div>
                                                    <div class="col-md-3 offset-md-1"><input value="<?php echo $_SESSION['account']['Email']?>" name="email" class="form-control" type="email"></div>
                                                    <div class="col-md-3 offset-md-1"><input value="<?php echo $_SESSION['account']['SDT']?>" name="sdt" class="form-control" type="tel"></div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <p></p>
                                                    </div>
                                                    <div class="col-md-3 offset-md-1">
                                                        <p></p>
                                                    </div>
                                                    <div class="col-md-3 offset-md-1">
                                                        <p></p>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <p></p>
                                                    </div>
                                                    <div class="col-md-3 offset-md-1">
                                                        <p></p>
                                                    </div>
                                                    <div class="col-md-3 offset-md-1">
                                                        <p></p>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <p>Ngày sinh</p>
                                                    </div>
                                                    <div class="col-md-3 offset-md-1">
                                                        <p>CMND</p>
                                                    </div>
                                                    <div class="col-md-3 offset-md-1">
                                                        <p>Giới tính</p>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3"><input value="<?php echo $_SESSION['account']['NgaySinh']?>" name="ngaysinh" class="form-control" type="date"></div>
                                                    <div class="col-md-3 offset-md-1"><input value="<?php echo $_SESSION['account']['CMND']?>" name="CMND" class="form-control" type="number"></div>
                                                    <div class="col-md-3 offset-md-1"><select name=gt class="form-control"><option value="1" <?php if($_SESSION['account']['GioiTinh']==1) echo "selected" ?> >Nam</option><option <?php if($_SESSION['account']['GioiTinh']==0) echo "selected" ?> value="0">Nữ</option></select></div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <p></p>
                                                    </div>
                                                    <div class="col-md-3 offset-md-1">
                                                        <p></p>
                                                    </div>
                                                    <div class="col-md-3 offset-md-1">
                                                        <p></p>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <p></p>
                                                    </div>

                                                    <input type="hidden" name="MaKH" value="<?php echo $_SESSION['account']['MaKH'] ?>">
                                                    <input type="hidden" name="ID_KH" value="<?php echo $_SESSION['account']['ID_KH'] ?>">
                                                    <input type="hidden" name="TenDangNhap" value="<?php echo $_SESSION['account']['TenDangNhap'] ?>">
                                                    <div class="col-md-3 offset-md-1">
                                                        <p></p><button id="luuthaydoi" class="btn btn-primary"name="thongtinKH" type="submit">Lưu thay đổi</button></div>
                                                    <div class="col-md-3 offset-md-1">
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
</div>