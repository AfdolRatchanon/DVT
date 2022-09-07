<footer class="main-footer">

    <!-- <div class="float-right d-none d-sm-inline">
        Anything you want
    </div> -->

    <strong>Copyright &copy; 2022 <a href="https://www.vec.go.th/">สํานักงานคณะกรรมการการอาชีวศึกษา</a>.</strong> All
    rights
    reserved.
    <!-- <div class="row">
        <div class="col-md-3">
            <a href="#">
                <h6>link</h6>
            </a>
            <a href="#">
                <h6>link</h6>
            </a>
            <a href="#">
                <h6>link</h6>
            </a>

        </div>
        <div class="col-md-3">
            <a href="#">
                <h6>link</h6>
            </a>
            <a href="#">
                <h6>link</h6>
            </a>
            <a href="#">
                <h6>link</h6>
            </a>

        </div>
        <div class="col-md-3">
            <a href="#">
                <h6>link</h6>
            </a>
            <a href="#">
                <h6>link</h6>
            </a>
            <a href="#">
                <h6>link</h6>
            </a>

        </div>
        <div class="col-md-3">
            <a href="#">
                <h6>link</h6>
            </a>
            <a href="#">
                <h6>link</h6>
            </a>
            <a href="#">
                <h6>link</h6>
            </a>

        </div>
    </div> -->


</footer>
</div>



<script src="plugins/jquery/jquery.min.js"></script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- pace-progress -->
<script src="plugins/pace-progress/pace.min.js"></script>

<script src="dist/js/adminlte.min.js?v=3.2.0"></script>



</body>
<script>
$(function() {
    /** add active class and stay opened when selected */
    var url = window.location;
    // console.log(url);
    // for sidebar menu entirely but not cover treeview
    console.log(url.href);
    $('li.nav-item a.navtop').filter(function() {
        const RegExpURL = new RegExp('^' + this.href + '.{0,}$');
        return RegExpURL.test(url.href);
        // return this.href == url.href;
    }).addClass('text-primary');
    // }).parent().addClass('bg-primary');
    // for treeview
    // $('ul.nav-treeview a.navtop').filter(function() {
    //     return this.href == url.href;
    // }).parentsUntil("").addClass('menu-is-opening menu-open');
});
</script>

</html>