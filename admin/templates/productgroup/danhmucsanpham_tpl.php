<div class="content container">
            <h2 class="page-title">Quản lý - <span class="fw-semi-bold">Danh mục sản phẩm</span></h2>
            <div class="widget-body-toolbar margin-top-10 form-horizontal">
                <div class="row">
                    <div class="col-sm-8"></div>
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
                                <a style="color: #fff;" href="index.php?com=danhmucsanpham&act=add">
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
                    <h4>Danh mục <span class="fw-semi-bold">Sản phẩm</span></h4>
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
                                    <th class="width-200">Tên</th>
                                    <th class="no-sort width-100">Hình ảnh</th>
                                    <th class="no-sortwidth-50">Icon</th>
                                    <th class="no-sort hidden-xs width-50">Icon ảnh</th>
                                    <th class="no-sort hidden-xs">Dùng Icon ảnh</th>
                                    <th class="no-sort">Nổi bật</th>
                                    <th class="">Thứ tự</th>
                                    <th class="no-sort">Ngưng dùng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <!--Chọn-->
                                    <td><input type="checkbox"></td>
                                    <!--Tên Danh mục-->
                                    <td><span class="fw-semi-bold width-150"><a href="index.php?com=danhmucsanpham&act=edit&id=id">Áo quần</a> </span></td>
                                    <!--Hình ảnh-->
                                    <td class="width-100"><img class="img-jqgrid-thumbnail" src="./img/1.jpg" alt=""></td>
                                    <!--icon-->
                                    <td class="hidden-xs width-50"><img class="img-jqgrid-thumbnail" src="./img/1.jpg" alt=""></td>
                                    <!--icon ảnh-->
                                    <td class="width-50"><img class="img-jqgrid-thumbnail" src="./img/1.jpg" alt=""></td>
                                    <!--Dùng icon ảnh-->
                                    <td class="width-100">                                        
                                        <input type="checkbox" checked="checked" value="true" offval="no" disabled="disabled">
                                    </td>
                                    <!--Nổi bật-->
                                    <td>
                                        <input type="checkbox" checked="checked" value="true" offval="no" disabled="disabled">
                                    </td>
                                    <!--Thứ tự-->
                                    <td>1</td>
                                    <!--Ngưng dùng-->
                                    <td>
                                        <input type="checkbox" checked="checked" value="true" offval="no">
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                     <!--Chọn-->
                                     <td><input type="checkbox"></td>
                                    <!--Tên Danh mục-->
                                    <td><span class="fw-semi-bold width-150"><a href="index.php?com=danhmucsanpham&act=edit&id=id">Đầm</a> </span></td>
                                    <!--Hình ảnh-->
                                    <td class="width-100"><img class="img-jqgrid-thumbnail" src="./img/1.jpg" alt=""></td>
                                    <!--icon-->
                                    <td class="hidden-xs width-50"><img class="img-jqgrid-thumbnail" src="./img/1.jpg" alt=""></td>
                                    <!--icon ảnh-->
                                    <td class="width-50"><img class="img-jqgrid-thumbnail" src="./img/1.jpg" alt=""></td>
                                    <!--Dùng icon ảnh-->
                                    <td class="width-100">                                        
                                        <input type="checkbox" checked="checked" value="true" offval="no" disabled="disabled">
                                    </td>
                                    <!--Nổi bật-->
                                    <td>
                                        <input type="checkbox" checked="checked" value="true" offval="no" disabled="disabled">
                                    </td>
                                    <!--Thứ tự-->
                                    <td>13</td>
                                    <!--Ngưng dùng-->
                                    <td>
                                        <input type="checkbox" checked="checked" value="true" offval="no">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>