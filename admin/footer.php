</div>
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<!-- ChartJS -->
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<script>
      (function(){
        var path = window.location.href;
        $(".nav-link").each(function(){
            var href = $(this).attr('href');
            if(path === decodeURIComponent(href))
            {
                $(this).addClass('active');
                var parent=$(this).closest('.has-treeview');
                parent.addClass('menu-open');
                $(parent).find('.nav-link').first().addClass('active');
                //console.log(parent);
            };
        });
    }());
</script>
</body>
</html>
