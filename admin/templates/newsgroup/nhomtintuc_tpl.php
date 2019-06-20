<div class="content container">
            <h2 class="page-title">Quản lý - <span class="fw-semi-bold">Danh mục tin tức</span></h2>
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
                                <a style="color: #fff;" href="index.php?com=nhomtintuc&act=add">
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
                    <h4>Danh sách <span class="fw-semi-bold">Danh mục tin tức</span></h4>
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
                                    <th class="">Tên danh mục</th>
                                    <th class="">Thứ tự</th>
                                    <th class="no-sort">Ngưng dùng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <!--Chọn-->
                                    <td><input type="checkbox"></td>
                                    <!--Tên danh mục tin tức-->
                                    <td><span class=""><a href="index.php?com=nhomtintuc&act=edit&id=id">Tin động trời</a></span></td>
                                    <!--Thứ tự-->
                                    <td class="">12</td>
                                    <!--Ngưng dùng-->
                                    <td class="">
                                        <input type="checkbox">
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <!--Chọn-->
                                    <td><input type="checkbox"></td>
                                     <!--ten Danh mục-->
                                    <td class="">Giật gân</td>
                                    <!--Thứ tự-->
                                    <td class="">31</td>
                                    <!--Ngưng dùng-->
                                    <td class="">
                                        <input type="checkbox">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>