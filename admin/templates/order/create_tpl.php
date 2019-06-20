<div class="content container">
            <div class="col-lg-12">
                <div class="col-lg-6" style="float: left;">
                    <h4 class="page-title"><small><b>Thêm mới</b></small> Đơn hàng</h4>
                </div>
                <div class="col-lg-6">
                    <div class="input-group-btn">
                        <button style="float: right; background-color: #f9f9f9; padding: 5px 10px; border-top-right-radius: 5px; border-bottom-right-radius: 5px;" type="button" class="btn btn-default btn-sm" id="back">
                                        <a style="color: #000" href="index.php?com=tintuc&act=back">
                                                <i class="fa fa-undo"></i> Trở về
                                        </a>
                        </button>
                        <button style="float: right; background-color: #286090; padding: 5px 10px;" type="button" class="btn btn-default btn-sm" id="saveandback">
                                          <a style="color: #fff" href="index.php?com=tintuc&act=saveandback">
                                                <i class="fa fa-plus"></i> Lưu và quay lại
                                          </a>
                        </button>
                        <button style="float: right; background-color: #286090; padding: 5px 10px; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" type="button" class="btn btn-default btn-sm" id="save">
                                <a style="color: #fff" href="index.php?com=tintuc&act=save">
                                  <i class="fa fa-save"></i> Lưu
                                </a>                
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <section class="widget">
                        <header>
                            <h2><i class="fa fa-file-alt"></i> Chi tiết <small>Đơn hàng</small></h2>
                        </header>
                        <hr style="border: 1px solid gray;" />
                        <div class="body">
                            <form class="form-horizontal" role="form" id="article-form" method="post" novalidate="novalidate" data-parsley-priority-enabled="false">
                                <fieldset>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input style="outline: none; border: none;" type="text" class="form-control" placeholder="Tìm hoặc tạo mới 1 sản phẩm">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-default">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </span>
                                            </div>
                                            <div class="body">
                                                <div class="mt">
                                                    <table id="datatable-table" class="table table-striped table-hover">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="width-100">Tên sản phẩm</th>
                                                                <th class="width-50">Giá tiền</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr role="row" class="odd" style="cursor: pointer;">
                                                                <!--Tên sản phẩm-->
                                                                <td class="width-100"><a href="index.php?com=donhang&act=edit&id=id" style="color: #22A5F1">Áo nam tay dài</a></td>
                                                                <!--Giá -->
                                                                <td class="width-150"><span style="float: right">130.000</span></td> 
                                                            </tr>
                                                            <tr role="row" class="even" style="cursor: pointer;">
                                                                <!--Tên sản phẩm-->
                                                                <td class="width-100"><a href="index.php?com=donhang&act=edit&id=id" style="color: #22A5F1">Quần ngắn</a></td>
                                                                <!--Giá -->
                                                                <td class="width-150"><span style="float: right">175.000</span></td> 
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <label>Ghi chú</label>
                                            <div class="col-sm-12" style="padding-left: 0;">
                                                <textarea name="note" id="note" cols="30" rows="3" style="color: #000; width: auto;"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="col-sm-12">
                                                <label style="color: #22A5F1">Tổng giá trị của sản phẩm: </label>
                                                <label style="float: right;">0 VNĐ</label>
                                            </div>     
                                            <div class="col-sm-12">
                                                <a href="">
                                                <i class="fa fa-plus-circle"></i><label style="text-decoration: underline;"> Thêm khuyến mãi </label>
                                                </a>
                                                <label style="float: right;">0 VNĐ</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <a href="">
                                                <i class="fa fa-plus-circle"></i><label style="text-decoration: underline;"> Thêm phí vận chuyển</label>
                                                </a>
                                                <label style="float: right;">0 VNĐ</label>
                                            </div>
                                            <div class="col-sm-12" style="background-color: #5CB85C; border-radius: 3px; display: flex; align-items: center; line-height: 200%; padding: 0; padding-left: 5px;">
                                                <label>Số tiền phải thanh toán:&nbsp;&nbsp;&nbsp;</label>
                                                <label style="float: right;">123.900.000 VNĐ</label>
                                            </div> 
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                </fieldset>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-sm-6" style="padding-right: 0;">
                                            XÁC NHẬN THANH TOÁN VÀ TẠO ĐƠN HÀNG
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="btn-toolbar">
                                                <div class="input-group-btn">
                                                    <button style="background-color: #286090; padding: 5px 10px; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" type="button" class="btn btn-default btn-sm" id="save">
                                                            <a style="color: #fff" href="index.php?com=tintuc&act=save">
                                                            <i class="fa fa-save"></i> Đã thanh toán
                                                            </a>                
                                                    </button>
                                                    <button style=" background-color: #f9f9f9; padding: 5px 10px; border-top-right-radius: 5px; border-bottom-right-radius: 5px;" type="button" class="btn btn-default btn-sm" id="back">
                                                                    <a style="color: #000" href="index.php?com=tintuc&act=back">
                                                                            <i class="fa fa-undo"></i> Thanh toán sau
                                                                    </a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
                <div class="col-lg-5">
                <section class="widget">
                        <header>
                            <h4><i class="fa fa-file-alt"></i> <small> <b> Thông tin </b></small> Khách hàng </h4>
                        </header>
                        <hr style="border: 1px solid gray;" />
                        <div class="body">
                            <form class="form-horizontal" role="form" id="article-form" method="post" novalidate="novalidate" data-parsley-priority-enabled="false">
                                <fieldset>
                                    <div class="form-group">
                                    <div class="body">
                                                <div class="mt">
                                                    <table id="datatable-table" class="table table-striped table-hover">
                                                        <tbody>
                                                            <tr role="row" class="odd" style="cursor: pointer;">
                                                                <!--Tên sản phẩm-->
                                                                <td class=""><a href="index.php?com=donhang&act=edit&id=id" style="color: #22A5F1">Nguyễn Đức Hoàng Huy</a></td>
                                                            </tr>
                                                            <tr role="row" class="even" style="cursor: pointer;">
                                                                <!--Tên sản phẩm-->
                                                                <td class=""><a href="index.php?com=donhang&act=edit&id=id" style="color: #22A5F1">Hoàng Kha</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                    </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                </section>
            </div>
        </div>