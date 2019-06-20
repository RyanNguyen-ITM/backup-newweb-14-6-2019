<div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin"></i>
        </div>
    </div>
    <!-- common libraries. required for every page-->
    <script src="lib/jquery/dist/jquery.min.js"></script>
    <script src="lib/jquery-pjax/jquery.pjax.js"></script>
    <script src="lib/bootstrap-sass-official/assets/javascripts/bootstrap.js"></script>
    <script src="lib/widgster/widgster.js"></script>
    <script src="lib/underscore/underscore.js"></script>

    <!-- common application js -->
    <script src="js/app.js"></script>
    <script src="js/settings.js"></script>

    <!-- common templates -->
    <script type="text/template" id="settings-template">
        <div class="setting clearfix">
            <div>Background</div>
            <div id="background-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
                <% dark = background == 'dark'; light = background == 'light';%>
                    <button type="button" data-value="dark" class="btn btn-sm btn-default <%= dark? 'active' : '' %>">Dark</button>
                    <button type="button" data-value="light" class="btn btn-sm btn-default <%= light? 'active' : '' %>">Light</button>
            </div>
        </div>
        <div class="setting clearfix">
            <div>Sidebar on the</div>
            <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
                <% onRight = sidebar == 'right'%>
                    <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
                    <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
            </div>
        </div>
        <div class="setting clearfix">
            <div>Sidebar</div>
            <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
                <% display = displaySidebar%>
                    <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
                    <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
            </div>
        </div>
        <div class="setting clearfix">
            <div>White Version</div>
            <div>
                <a href="../white/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </script>

    <script type="text/template" id="sidebar-settings-template">
        <% auto = sidebarState == 'auto'%>
            <% if (auto) {%>
                <button type="button" data-value="icons" class="btn-icons btn btn-transparent btn-sm">Icons</button>
                <button type="button" data-value="auto" class="btn-auto btn btn-transparent btn-sm">Auto</button>
                <%} else {%>
                    <button type="button" data-value="auto" class="btn btn-transparent btn-sm">Auto</button>
                    <% } %>
    </script>

    <!-- page specific scripts -->
    <!-- page libs -->
    <script src="lib/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="lib/jquery.sparkline/index.js"></script>

    <script src="lib/backbone/backbone.js"></script>
    <script src="lib/backbone.localStorage/backbone.localStorage-min.js"></script>

    <script src="lib/d3/d3.min.js"></script>
    <script src="lib/nvd3/nv.d3.min.js"></script>

    <script src="lib/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="lib/underscore/underscore.js"></script>

    <script src="lib/backbone.paginator/lib/backbone.paginator.min.js"></script>

    <script src="lib/backgrid/lib/backgrid.min.js"></script>
    <script src="lib/backgrid-paginator/backgrid-paginator.js"></script>
    <script src="lib/datatables/media/js/jquery.dataTables.min.js"></script>

    <!-- Add Ckeditor -->
    <script src="ckeditor/ckeditor.js"></script>

    <!-- page application js -->
    <script src="js/index.js"></script>
    <script src="js/chat.js"></script>
    <script src="js/tables-dynamic.js"></script> <!--Sắp xếp và tìm kiếm trên table-->

    <!-- page template -->

<!-- form account start -->

    <!-- page libs -->
        <!-- <script src="lib/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="lib/select2/select2.min.js"></script>
        <script src="lib/moment/moment.js"></script>
        <script src="lib/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        <script src="lib/parsleyjs/dist/parsley.min.js"></script>
        <script src="lib/jquery/dist/jquery.min.js"></script> -->

        <!-- page application js -->
        <!-- <script src="js/forms-account.js"></script> -->

<!-- form account end -->
    <script type="text/template" id="message-template">
        <div class="sender pull-left">
            <div class="icon">
                <img src="img/2.jpg" class="img-circle" alt="">
            </div>
            <div class="time">
                just now
            </div>
        </div>
        <div class="chat-message-body">
            <span class="arrow"></span>
            <div class="sender"><a href="#">Tikhon Laninga</a></div>
            <div class="text">
                <%- text %>
            </div>
        </div>
    </script>

</body>

</html>