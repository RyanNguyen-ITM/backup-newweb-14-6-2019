<div class="content container">
            <h2 class="page-title">Quản lý - <span class="fw-semi-bold">Đơn hàng</span></h2>
            <div class="widget-body-toolbar margin-top-10 form-horizontal">
                <div class="row">
                    <div class="col-sm-4" style="float: right; height: 72px; display: flex; align-items: center;">
                    <div class="input-group" style="width: 100%;">
                            <div class="input-group-btn">
                                <button style="float: right; background-color: #286090;" type="button" class="btn btn-default" id="btnRefresh">
                                        <i class="fa fa-refresh"></i>
                                    </button>
                                <button style="float: right; background-color: red;" type="button" class="btn btn-default" id="btnDelete">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                <button style="float: right; background-color: green;" type="button" class="btn btn-default" id="btnAdd">
                                <a style="color: #fff;" href="index.php?com=donhang&act=add">
                                  <i class="fa fa-plus"></i> Thêm mới
                                </a>                
                                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="widget">
                <header>
                    <h4>Danh sách <span class="fw-semi-bold">Đơn hàng</span></h4>
                    <div class="widget-controls">
                        <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                        <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                    </div>
                </header>
                <div class="body">
                    <p>
                        Column sorting, live search, pagination. Built with
                        <a href="http://www.datatables.net/" target="_blank">jQuery DataTables</a>
                    </p>
                    <div class="mt">
                        <table id="datatable-table" class="table table-striped table-hover">
                            <thead>
                                <tr role="row">
                                    <th class="no-sort"></th>
                                    <th class="width-100">Mã đơn hàng</th>
                                    <th class="hidden-xs width-100">Ngày đặt</th>
                                    <th class="hidden-xs width-100">Khách hàng</th>
                                    <th class="width-100">Mã vận chuyển</th>
                                    <th class="no-sort width-150">Giao hàng</th>
                                    <th class="no-sort width-150">Thanh toán</th>
                                    <th class="no-sort width-50">COD</th>
                                    <th class="no-sort width-50">Tổng tiền</th>
                                    <th class="no-sort width-200">Lời nhắn</th>
                                    <th class="">Nguồn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <!--Chọn-->
                                    <td><input type="checkbox"></td>
                                    <!--Mã đơn hàng-->
                                    <td><span class="width-100"><a href="index.php?com=donhang&act=edit&id=id" style="color: #22A5F1">D9082305735</a></span></td>
                                    <!--Ngày tạo-->
                                    <td class="width-100">24-03-2013</td>
                                    <!--Khách hàng-->
                                    <td class="hidden-xs width-100">Hoàng Kha</td>
                                    <!--Mã vận chuyển-->
                                    <td class=""> #039484646</td>
                                    <!--Giao hàng-->
                                    <td class="width-150">
                                        <span style="background-color: #5BC0DE; border-radius: 3px;">Chưa</span>
                                    </td>
                                    <!--Thanh toán-->
                                    <td class="width-150"><span style="background-color: #5CB85C; border-radius: 3px;">Chưa thanh toán</span></td>
                                    <!--COD-->
                                    <td class="width-50">12.000</td>
                                    <!--Tổng tiền-->
                                    <td class="width-50"><span style="background-color: red; border-radius: 3px; float: right;">124.421.000</span></td>
                                    <!--lời nhắn-->
                                    <td class="width-200"><span>Giao trước 12h trưa, không thì tự mang về mà sài.</span></td>
                                    <!--COD-->
                                    <td class=""><span>daft</span></td>
                                </tr>
                                <tr role="row" class="even">
                                     <!--Chọn-->
                                     <td><input type="checkbox"></td>
                                    <!--Mã đơn hàng-->
                                    <td><span class="width-100"><a href="index.php?com=donhang&act=edit&id=id" style="color: #22A5F1">D9082355756</a></span></td>
                                    <!--Ngày tạo-->
                                    <td class="width-100">24-03-1998</td>
                                    <!--Khách hàng-->
                                    <td class="hidden-xs width-100">Hoàng Huy</td>
                                    <!--Mã vận chuyển-->
                                    <td class="">#03948546</td>
                                    <!--Giao hàng-->
                                    <td class="width-150">
                                        <span style="background-color: #5BC0DE; border-radius: 3px;">Đã giao hàng</span>
                                    </td>
                                    <!--Thanh toán-->
                                    <td class="width-150"><span style="background-color: #5CB85C; border-radius: 3px;">Đã thanh toán</span></td>
                                    <!--COD-->
                                    <td class="width-50">31.000</td>
                                    <!--Tổng tiền-->
                                    <td class="width-50"><span style="background-color: red; border-radius: 3px; float: right;">331.000</span></td>
                                    <!--lời nhắn-->
                                    <td class="width-200"><span>Giao trước 12h trưa</span></td>
                                    <!--COD-->
                                    <td class=""><span>daft</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>