<?php
    while($row = mysqli_fetch_array($data['Chon'])){
        $cb = new changbay();
        $cb->getGia($row['Gia'],$row['GiaHang'],$_SESSION['timkiem']['NguoiLon'],$_SESSION['timkiem']['TreEm']);
?>
<div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-10 offset-xl-1">
                <div class="jumbotron text-left" id="route">
                    <h2>Flight from <?php echo $cb->getTP($row['DiemDi']) ?> to <?php echo $cb->getTP($row['DiemDen']) ?></h2>
                    <p style="margin: 0;"><i class="fa fa-plane" id="icon-plane">
                    </i>&nbsp;&nbsp;<?php echo $cb->getTP($row['DiemDi']) ?> → <?php echo $cb->getTP($row['DiemDen']) ?> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <?php echo $row['NgayDi'] ?><br></p>
                    <p>
                    <i class="fa fa-user" id="icon-user"></i>&nbsp; &nbsp; <?php echo $_SESSION['timkiem']['songuoi'] ?> Người &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; Economy<br></p>
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
                            <div class="jumbotron" style="padding-bottom: 10px;padding-top: 15px;margin-bottom: 15px;">
                                <div class="row">
                                    <div class="col">
                                        <p style="/*border-bottom: 1px;*/">
                                        <i class="fa fa-plane" id="icon-plane"></i>&nbsp; <strong><?php echo $cb->getTP($row['DiemDi']) ?> &nbsp;</strong><i class="fa fa-long-arrow-right"></i><strong>&nbsp; <?php echo changbay::getTP($row['DiemDen']) ?>)</strong></p>
                                    </div>
                                    <div class="col-xl-4"><a href="#">Thông tin chi tiết</a></div>
                                </div>
                                <hr>
                                <p><strong>T2, <?php echo $row['NgayDi'] ?></strong><br></p>
                                <p><img src="<?php echo $row['HinhAnh'] ?>" style="width: 40px;">
                                <strong>&nbsp; &nbsp;<?php echo $row['Hang']." ".$row['MaMayBay'] ?></strong><br></p>
                                <p><?php echo $cb->gethangghe($_SESSION['timkiem']['HangGhe']) ?></p>
                                <div class="row">
                                    <div class="col">
                                        <p><?php echo $row['ThoiGianDi'] ?></p>
                                        <p><?php echo $cb->getTP($row['DiemDi']) ?></p>
                                    </div>
                                    <div class="col">
                                        <p>&nbsp; &nbsp;&nbsp;</p>
                                        <p style="text-align: center;"><i class="fa fa-long-arrow-right"></i></p>
                                    </div>
                                    <div class="col">
                                        <p><?php echo $row['ThoiGianDen'] ?></p>
                                        <p><?php echo $cb->getTP($row['DiemDen']) ?></p>
                                    </div>
                                    <div class="col">
                                        <p>02h15m</p>
                                        <p>&nbsp;<i class="fa fa-circle" style="color: #0770cd;"></i> Bay thẳng</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 offset-xl-0">
                    <div class="row">
                        <div class="col-xl-11 offset-xl-1" style="padding-left: 0;">
                            <div class="jumbotron" style="padding-bottom: 10px;padding-top: 15px;margin-bottom: 15px;">
                                <div class="row">
                                    <div class="col">
                                        <p><i class="fa fa-info-circle"></i> Thông tin bổ sung</p>
                                    </div>
                                    <div class="col-xl-4"><a href="#">Chi tiết</a></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p><?php echo $cb->getFullName($row['DiemDi']) ?> &nbsp;<i class="fa fa-long-arrow-right"></i>&nbsp;<?php echo changbay::getFullName($row['DiemDen']) ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
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
                        <div class="col-xl-11 offset-xl-1" style="padding-left: 0;">
                            <div class="jumbotron" style="margin-bottom: 15px;padding-top: 15px;padding-bottom: 10px;">
                                <div class="row">
                                    <div class="col">
                                        <p><strong>Tóm tắt</strong></p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <p>Người lớn x<?php echo $_SESSION['timkiem']['NguoiLon']?></p>
                                                <p>Trẻ em x<?php echo $_SESSION['timkiem']['TreEm']?></p>
                                                <p>Em bé x<?php echo $_SESSION['timkiem']['EmBe']?></p>
                                            </div>
                                            <div class="col" style="text-align: right;">
                                                <p class="price"><?php echo  $cb->giaNguoilon() ?></p>
                                                <p class="price"><?php echo  $cb->giaTreem() ?></p>
                                                <p class="price">0 VND</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <p>Hành lý HAN - SGN</p>
                                            </div>
                                            <div class="col">
                                                <p class="price" style="text-align: right;">0 VND</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <p>Giá bạn trả</p>
                                            </div>
                                            <div class="col">
                                                <p class="price" style="text-align: right;"><?php echo  $cb->giatong() ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="text-align: center;padding-left: 0;">
                                <div class="col" style="align-items: center;"><a href="datve/ve/<?php echo $row['ID_ChuyenBay']?>" class="btn btn-primary" role="button" style="text-align: center;width: 100%;margin-bottom: 100px;">Tiếp tục</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>