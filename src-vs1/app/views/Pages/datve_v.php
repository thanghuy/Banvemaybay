<?php 
    while($row = mysqli_fetch_array($data['Chon'])){
?>
<div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-10 offset-xl-1">
                    <div class="jumbotron text-left" id="route">
                        <h2>Flight from <?php echo changbay :: getFullName($row['DiemDi']) ?> to <?php echo changbay :: getFullName($row['DiemDen']) ?></h2>
                        <p style="margin: 0;">
                            <i class="fa fa-plane" id="icon-plane"></i>&nbsp;&nbsp;<?php echo changbay :: getTP($row['DiemDi']) ?> → <?php echo changbay :: getTP($row['DiemDen']) ?> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <?php echo $row['NgayDi'] ?><br></p>
                        <p><i class="fa fa-user" id="icon-user"></i>&nbsp; &nbsp;<?php echo $_SESSION['timkiem']['songuoi'] ?> Người &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; Economy<br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-xl-1">
                    <div class="row">
                        <div class="col-xl-12 offset-xl-0">
                            <div class="jumbotron">
                                <div class="row">
                                    <div class="col-md-3"><img src="public/img/logo%20fight/fight3.png"></div>
                                    <div class="col">
                                        <p>Bạn chưa đăng kí tài khoản</p>
                                        <a href="#">Đăng nhập hoặc đăng kí để nhận ưu đãi</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5>Thông tin liên hệ</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" id="datve">
                        <form action="thanhtoan/thanhtoanVISA/<?php echo $row['ID_ChuyenBay'] ?>" method="post">
                                <div class="jumbotron">
                                    <div class="form-row">
                                        <div class="col">
                                            <h6>Thông tin liên hệ</h6>
                                        </div>
                                        <div class="col" style="text-align: right;"><a href="#">Điền thông tin</a></div>
                                    </div>
                                    <hr>
                                    <div class="form-row">
                                        <div class="col">
                                            <p>&nbsp;Họ và tên</p>
                                        </div>
                                        <div class="col">
                                            <input class="form-control" name="tenKH" type="text" value="<?php echo  $_SESSION['account']['TenDangNhap'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <p>&nbsp;</p>
                                        </div>
                                        <div class="col note">
                                            <p>như trên CMND</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <p>Điện thoại</p>
                                        </div>
                                        <div class="col">
                                            <input class="form-control" name="dienthoai" type="text" value="<?php echo  $_SESSION['account']['SDT'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-row">
                                                <div class="col">
                                                    <p>&nbsp;</p>
                                                </div>
                                                <div class="col note">
                                                    <p>Gồm 10 chữ số</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <p>Email</p>
                                        </div>
                                        <div class="col">
                                            <input class="form-control" name="email" type="email" value="<?php echo  $_SESSION['account']['Email'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <p>&nbsp;</p>
                                        </div>
                                        <div class="col">
                                            <p class="note">VD: abc@gmail.com, abc@yahoo.com.vn</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <h5>Thông tin hành khách</h5>
                                        <div class="form-row">
                                            <div class="col">
                                                <?php 
                                                    $n = (int)$_SESSION['timkiem']['NguoiLon'];
                                                    for($i = 1 ; $i <= $n ;$i++)
                                                    {
                                                        $loai = "Người lớn";
                                                ?>
                                                <div class="jumbotron">
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <p><?php echo $loai." ".$i ?></php>
                                                        </div>
                                                        <div class="col right"><a href="#">Điền thông tin</a></div>
                                                    </div>
                                                    <hr>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <p>Họ tên</p>
                                                        </div>
                                                        <div class="col"><input name="hotenND" class="form-control" type="text"></div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <p>&nbsp;</p>
                                                        </div>
                                                        <div class="col">
                                                            <p class="note">như trên CMND/CCCD</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <p>Ngày sinh</p>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-row">
                                                                <div class="col">
                                                                    <select class="form-control date" name="date">
                                                                        <option value="1" selected="">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="2">3</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col">
                                                                    <select class="form-control month" name="month">
                                                                        <option value="1" selected="">Tháng 1</option>\
                                                                        <option value="1">Tháng 2</option>
                                                                        <option value="1">Tháng 3</option>
                                                                        </select>
                                                                    </div>
                                                                <div class="col">
                                                                    <select class="form-control year" name="year">
                                                                        <option value="12" selected="">2007</option>
                                                                        <option value="13">1999</option>
                                                                        <option value="14">1998</option>
                                                                    </select>
                                                                </div>
                                                            </div>
<<<<<<< Updated upstream
=======
                                                            <input type="text" name="ngaysinh" class="form-control">
>>>>>>> Stashed changes
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <p>&nbsp;</p>
                                                        </div>
                                                        <div class="col">
                                                            <p class="note">như trên CMND/CCCD</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <p>CMND/CCCD</p>
                                                        </div>
                                                        <div class="col"><input class="form-control" name="CMND" type="text"></div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <p>&nbsp;</p>
                                                        </div>
                                                        <div class="col">
                                                            <p class="note">như trên CMND/CCCD</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php }?>
                                                <?php 
                                                    isset($_SESSION['timkiem']['TreEm']);
                                                    $n = (int)$_SESSION['timkiem']['TreEm'];
                                                    for($i = 1 ; $i <= $n ;$i++)
                                                    {
                                                        $loai = "Trẻ Em";
                                                        echo '<div class="jumbotron">
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <p>'.$loai." ".$i.'</php>
                                                            </div>
                                                            <div class="col right"><a href="#">Điền thông tin</a></div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <p>Họ tên</p>
                                                            </div>
                                                            <div class="col"><input class="form-control" type="text"></div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <p>&nbsp;</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="note">như trên CMND/CCCD</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <p>Ngày sinh</p>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-row">
                                                                    <div class="col">
                                                                    <select class="form-control">
                                                                            <option value="12" selected="">This is item 1</option>
                                                                            <option value="13">This is item 2</option>
                                                                            <option value="14">This is item 3</option>
                                                                        </select></div>
                                                                    <div class="col">
                                                                        <select class="form-control">
                                                                            <option value="12" selected="">This is item 1</option>
                                                                            <option value="13">This is item 2</option>
                                                                            <option value="14">This is item 3</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col">
                                                                        <select class="form-control">
                                                                            <option value="12" selected="">This is item 1</option>
                                                                            <option value="13">This is item 2</option>
                                                                            <option value="14">This is item 3</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <p>&nbsp;</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="note">như trên CMND/CCCD</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <p>CMND/CCCD</p>
                                                            </div>
                                                            <div class="col"><input class="form-control" type="text"></div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <p>&nbsp;</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="note">như trên CMND/CCCD</p>
                                                            </div>
                                                        </div>
                                                    </div>';
                                                    }
                                                ?>
                                                <?php 
                                                    isset($_SESSION['timkiem']['EmBe']);
                                                    $n = (int)$_SESSION['timkiem']['EmBe'];
                                                    for($i = 1 ; $i <= $n ;$i++)
                                                    {
                                                        $loai = "Em Bé";
                                                        echo '<div class="jumbotron">
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <p>'.$loai." ".$i.'</php>
                                                            </div>
                                                            <div class="col right"><a href="#">Điền thông tin</a></div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <p>Họ tên</p>
                                                            </div>
                                                            <div class="col"><input class="form-control" type="text"></div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <p>&nbsp;</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="note">như trên CMND/CCCD</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <p>Ngày sinh</p>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-row">
                                                                    <div class="col">
                                                                    <select class="form-control">
                                                                    <option value="12" selected="">This is item 1</option>
                                                                    <option value="13">This is item 2</option>
                                                                    <option value="14">This is item 3</option>
                                                                    </select></div>
                                                                    <div class="col">
                                                                        <select class="form-control">
                                                                            <option value="12" selected="">This is item 1</option>
                                                                            <option value="13">This is item 2</option>
                                                                            <option value="14">This is item 3</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col">
                                                                        <select class="form-control">
                                                                            <option value="12" selected="">This is item 1</option>
                                                                            <option value="13">This is item 2</option>
                                                                            <option value="14">This is item 3</option>
                                                                            </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <p>&nbsp;</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="note">như trên CMND/CCCD</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <p>CMND/CCCD</p>
                                                            </div>
                                                            <div class="col"><input class="form-control" type="text"></div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <p>&nbsp;</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="note">như trên CMND/CCCD</p>
                                                            </div>
                                                        </div>
                                                    </div>';
                                                    }
                                                ?>
                                                <div class="form-row">
                                                    <div class="col button">
                                                            <button class="btn btn-primary" type="submit" name="datcho" style="border-radius: 5px;">Đặt chỗ</button>
                                                    </div>
                                                </div>
                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 offset-xl-0">
                    <div class="row">
                        <div class="col-xl-11 offset-xl-1" style="padding-left: 0;">
                            <div class="jumbotron">
                                <div class="row">
                                    <div class="col">
                                        <p><i class="fa fa-plane" id="icon-plane"></i>&nbsp; <strong><?php echo changbay:: getTP($row['DiemDi']) ?> &nbsp;</strong>
                                        <i class="fa fa-long-arrow-right"></i><strong>&nbsp; <?php echo changbay:: getTP($row['DiemDen']) ?></strong></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <p><strong>Chuyến bay đi &nbsp;</strong><i class="fa fa-star"></i><strong> T2, <?php echo $row['NgayDi'] ?></strong><br></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p><img src="<?php echo $row['HinhAnh'] ?>" style="width: 40px;">
                                        <strong>&nbsp; &nbsp;<?php echo $row['Hang']." ".$row['MaMayBay'] ?></strong><br></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p> <?php echo changbay :: gethangghe($_SESSION['timkiem']['HangGhe']) ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <p style="margin-bottom: 0;"><?php echo $row['ThoiGianDi'] ?></p>
                                                <p><?php echo changbay :: getFullName($row['DiemDi']) ?></p>
                                            </div>
                                            <div class="col-md-2">
                                                <p>&nbsp; &nbsp; <i class="fa fa-long-arrow-right"></i>&nbsp;</p>
                                                <p></p>
                                            </div>
                                            <div class="col-md-5">
                                                <p style="margin-bottom: 0;"><?php echo $row['ThoiGianDen'] ?></p>
                                                <p><?php echo changbay :: getFullName($row['DiemDen']) ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p>02h15m</p>
                                            </div>
                                            <div class="col">
                                                <p>&nbsp;<i class="fa fa-circle"></i> Bay thẳng</p>
                                            </div>
                                        </div>
                                        <p style="color: gray;">&nbsp;<i class="fa fa-info-circle"></i> &nbsp;Không hoàn tiền</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p style="color: gray;">&nbsp;<i class="fa fa-info-circle"></i> &nbsp;Khong áp dụng đổi lịch bay</p>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>