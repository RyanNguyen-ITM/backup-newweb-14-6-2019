        <div class="content container">
            <h2 class="page-title">Quản lý - <span class="fw-semi-bold">Sản phẩm</span></h2>
            <div class="widget-body-toolbar margin-top-10 form-horizontal">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Nhóm sản phẩm</label>
                            <div class="col-md-12">
                                <select class="form-control" id="ProductGroupId" name="ProductGroupId"><option value="0">Toàn bộ danh mục</option>
                                    <option value="157051">TOYOTA</option>
                                    <option value="157058">├──Camry</option>
                                    <option value="157060">├──Fortuner</option>
                                    <option value="157059">├──Vios</option>
                                    <option value="157052">KIA</option>
                                    <option value="157054">HONDA</option>
                                    <option value="157053">FORD</option>
                                    <option value="157055">AUDI</option>
                                    <option value="157061">├──A</option>
                                    <option value="157062">├──Q</option>
                                    <option value="157056">BMW</option>
                                    <option value="157057">Lamborghini</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Tag sản phẩm</label>
                            <div class="col-md-12">
                                <select class="form-control" id="ProductTag" name="ProductTag"><option value="0">----------Tất cả----------</option>
    </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4" style="height: 72px; display: flex; align-items: center;">
                        <div class="input-group" style="width: 100%;">
                            <div class="input-group-btn">
                                <button style="float: right; background-color: #286090;" type="button" class="btn btn-default" id="btnRefresh">
                                        <i class="fa fa-refresh"></i>
                                    </button>
                                <button style="float: right; background-color: red;" type="button" class="btn btn-default" id="btnDelete">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                <button style="float: right; background-color: green;" type="button" class="btn btn-default" id="btnAdd">
                                <a style="color: #fff;" href="index.php?com=sanpham&act=add">
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
                    <h4>Danh sách <span class="fw-semi-bold">Sản phẩm</span></h4>
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
                                    <th class="hidden-xs no-sort">Id</th>
                                    <th class="width-150">Tên sản phẩm</th>
                                    <th class="width-150">Danh mục</th>
                                    <th class="no-sort hidden-xs">Hình ảnh</th>
                                    <th class="hidden-xs">Tồn kho</th>
                                    <th class="width-100">Giá</th>
                                    <th class="width-100">Giá giảm</th>
                                    <th class="no-sort">Bán chạy</th>
                                    <th class="no-sort">Mới</th>
                                    <th class="no-sort">Hot</th>
                                    <th class="no-sort">Khuyến mãi</th>
                                    <th>Thứ tự</th>
                                    <th class="no-sort">Ngưng dùng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <!--Chọn-->
                                    <td><input type="checkbox"></td>
                                    <!--ID-->
                                    <td>1</td>
                                    <!--Tên SP-->
                                    <td><span class="fw-semi-bold width-150"><a href="index.php?com=sanpham&act=edit&id=id">Algerd</a> </span></td>
                                    <!--Danh mục-->
                                    <td class="width-150">Quần áo</td>
                                    <!--Hình ảnh-->
                                    <td class=""><img class="img-jqgrid-thumbnail" src="./img/1.jpg" alt=""></td>
                                    <!--Tồn kho-->
                                    <td class="hidden-xs">---</td>
                                    <!--Giá-->
                                    <td class="width-100">150.000 VNĐ</td>
                                    <!--Giá giảm-->
                                    <td class="width-100">145.000 VNĐ</td>
                                    <!--Bán chạy-->
                                    <td><input type="checkbox" checked="checked" value="true" offval="no" disabled="disabled">
                                    </td>
                                    <!--Mới-->
                                    <td><input type="checkbox" checked="checked" value="true" offval="no" disabled="disabled">
                                    </td>
                                    <!--Hot-->
                                    <td><input type="checkbox" checked="checked" value="true" offval="no" disabled="disabled">
                                    </td>
                                    <!--Khuyến mãi-->
                                    <td><input type="checkbox" checked="checked" value="true" offval="no" disabled="disabled">
                                    </td>
                                    <!--Thứ tự-->
                                    <td>1</td>
                                    <!--Ngưng dùng-->
                                    <td><input type="checkbox" checked="checked" value="true" offval="no">
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td><input type="checkbox"></td>
                                    <!--ID-->
                                    <td class="sorting_1">2</td>
                                    <!--Tên SP-->
                                    <td><span class="fw-semi-bold width-150"><a href="index.php?com=sanpham&act=edit&id=id">Blgerd</a> </span></td>
                                    <!--Danh mục-->
                                    <td class="">Quần áo</td>
                                    <!--Hình ảnh-->
                                    <td class=""><img class="img-jqgrid-thumbnail" src="./img/2.jpg" alt=""></td>
                                    <!--Tồn kho-->
                                    <td class="hidden-xs">---</td>
                                    <!--Giá-->
                                    <td class="width-100">150.000 VNĐ</td>
                                    <!--Giá giảm-->
                                    <td class="width-100">145.000 VNĐ</td>
                                    <!--Bán chạy-->
                                    <td><input type="checkbox" checked="checked" value="true" offval="no" disabled="disabled">
                                    </td>
                                    <!--Mới-->
                                    <td><input type="checkbox" checked="checked" value="true" offval="no" disabled="disabled">
                                    </td>
                                    <!--Hot-->
                                    <td><input type="checkbox" checked="checked" value="true" offval="no" disabled="disabled">
                                    </td>
                                    <!--Khuyến mãi-->
                                    <td><input type="checkbox" checked="checked" value="true" offval="no" disabled="disabled">
                                    </td>
                                    <!--Thứ tự-->
                                    <td>1</td>
                                    <!--Ngưng dùng-->
                                    <td><input type="checkbox" checked="checked" value="true" offval="no">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>