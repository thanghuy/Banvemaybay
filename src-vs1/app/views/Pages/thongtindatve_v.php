<?php
    while($row = mysqli_fetch_array($data['Chon'])){
?>
<div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-10 offset-xl-1">
                <div class="jumbotron text-left" id="route">
                    <h2>Flight from <?php echo changbay::getTP($row['DiemDi']) ?> to <?php echo changbay::getTP($row['DiemDen']) ?></h2>
                    <p style="margin: 0;"><i class="fa fa-plane" id="icon-plane">
                    </i>&nbsp;&nbsp;<?php echo changbay::getTP($row['DiemDi']) ?> → <?php echo changbay::getTP($row['DiemDen']) ?> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <?php echo $row['NgayDi'] ?><br></p>
                    <p>
                    <i class="fa fa-user" id="icon-user"></i>&nbsp; &nbsp;1 người lớn &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; Economy<br></p>
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
                                        <p style="/*border-bottom: 1px;*/"><i class="fa fa-plane" id="icon-plane"></i>&nbsp; <strong><?php echo changbay::getTP($row['DiemDi']) ?> &nbsp;</strong><i class="fa fa-long-arrow-right"></i><strong>&nbsp; <?php echo changbay::getTP($row['DiemDen']) ?>)</strong></p>
                                    </div>
                                    <div class="col-xl-4"><a href="#">Thông tin chi tiết</a></div>
                                </div>
                                <hr>
                                <p><strong>T2, <?php echo $row['NgayDi'] ?></strong><br></p>
                                <p><img src="public/img/1568609997285-658c304aa2757dc5ecc27248c9f66bb4.png" style="width: 40px;"><strong>&nbsp; &nbsp;Jetstar BL-755</strong><br></p>
                                <p>Phổ thông</p>
                                <div class="row">
                                    <div class="col">
                                        <p><?php echo $row['ThoiGianDi'] ?></p>
                                        <p><?php echo changbay::getTP($row['DiemDi']) ?></p>
                                    </div>
                                    <div class="col">
                                        <p>&nbsp; &nbsp;&nbsp;</p>
                                        <p style="text-align: center;"><i class="fa fa-long-arrow-right"></i></p>
                                    </div>
                                    <div class="col">
                                        <p><?php echo $row['ThoiGianDen'] ?></p>
                                        <p><?php echo changbay::getTP($row['DiemDen']) ?></p>
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
                                        <p><?php echo changbay::getFullName($row['DiemDi']) ?> &nbsp;<i class="fa fa-long-arrow-right"></i>&nbsp;<?php echo changbay::getFullName($row['DiemDen']) ?></p>
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
                                                <p>Jetstar (Người lớn x1)</p>
                                            </div>
                                            <div class="col" style="text-align: right;">
                                                <p>VND 1.164.339</p>
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
                                                <p style="text-align: right;">VND 0</p>
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
                                                <p style="text-align: right;">VND 1.64.339</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="text-align: center;padding-left: 0;">
                                <div class="col" style="align-items: center;"><a href="datve/datve" class="btn btn-primary" role="button" style="text-align: center;width: 100%;margin-bottom: 100px;">Tiếp tục</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>