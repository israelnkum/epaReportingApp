<!-- .right-sidebar -->
<div class="right-sidebar">
    <div class="slimscrollright">
        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
        <div class="r-panel-body">
            <ul id="themecolors" class="m-t-20">
                <li><b>With Light sidebar</b></li>
                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme working">6</a></li>
                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-center">
    © 2018 Environmental Protection Agency
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('js/sidebarmenu.js')}}"></script>
<script src="{{asset('js/pages/mask.init.js')}}"></script>
<!--stickey kit -->


<!-- This Page JS -->
<script src="{{asset('js/jquery.steps.min.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js')}}"></script>

<script src="http://eliteadmin.themedesigner.in/demos/bt4/assets/node_modules/sweetalert/sweetalert.min.js"></script>
<script src="{{asset('js/moment.js')}}"></script>
<script>

    var form = $(".validation-wizard").show();

    $(".validation-wizard").steps({
        headerTag: "h6",
        bodyTag: "section",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
            finish: "Submit"
        },
        onStepChanging: function (event, currentIndex, newIndex) {
            return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
        },
        onFinishing: function (event, currentIndex) {
            return form.validate().settings.ignore = ":disabled", form.valid()
        },
        onFinished: function (event, currentIndex) {
            $(".validation-wizard").submit();
        }
    }), $(".validation-wizard").validate({
        ignore: "input[type=hidden]",
        errorClass: "text-danger",
        successClass: "text-success",
        highlight: function (element, errorClass) {
            $(element).removeClass(errorClass)
        },
        unhighlight: function (element, errorClass) {
            $(element).removeClass(errorClass)
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element)
        },
        rules: {
            email: {
                email: !0
            }
        }
    })
</script>

<script src="http://eliteadmin.themedesigner.in/demos/bt4/assets/node_modules/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!-- Flot Charts JavaScript -->
<script src="{{asset('js/jquery.flot.js')}}"></script>
<script src="{{asset('js/jquery.flot.tooltip.min.js')}}"></script>
<!--sparkline JavaScript -->
<script src="{{asset('js/jquery.sparkline.min.js')}}"></script>
<!-- EASY PIE CHART JS -->
<script src="{{asset('js/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('js/easy-pie-chart.init.js')}}"></script>
<!-- Vector map JavaScript -->
<script src="{{asset('js/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('js/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- Chart JS -->
<script src="{{asset('js/dashboard2.js')}}"></script>
<script src="{{asset('js/datatables.min.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script src="{{asset('js/jQuery.style.switcher.js')}}"></script>
<script src="http://eliteadmin.themedesigner.in/demos/bt4/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="http://eliteadmin.themedesigner.in/demos/bt4/assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
<script src="{{asset('js/custom.min.js')}}"></script>


</body>
</html>