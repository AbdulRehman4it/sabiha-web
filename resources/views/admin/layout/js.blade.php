
<script src="{{URL::asset('admin/js/jquery1-3.4.1.min.js')}}"></script>
<script src="{{URL::asset('admin/js/popper1.min.js')}}"></script>
<script src="{{URL::asset('admin/js/bootstrap1.min.js')}}"></script>
<script src="{{URL::asset('admin/js/metisMenu.js')}}"></script>
<script src="{{URL::asset('admin/js/jquery.waypoints.min.js')}}"></script>
<script src="{{URL::asset('admin/js/Chart.min.js')}}"></script>
<script src="{{URL::asset('admin/js/jquery.counterup.min.js')}}"></script>
<script src="{{URL::asset('admin/js/jquery.nice-select.min.js')}}"></script>
<script src="{{URL::asset('admin/js/owl.carousel.min.js')}}"></script>
<script src="{{URL::asset('admin/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('admin/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('admin/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('admin/js/buttons.flash.min.js')}}"></script>
<script src="{{URL::asset('admin/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('admin/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('admin/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('admin/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('admin/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('admin/js/datepicker.js')}}"></script>
<script src="{{URL::asset('admin/js/datepicker.en.js')}}"></script>
<script src="{{URL::asset('admin/js/datepicker.custom.js')}}"></script>
<script src="{{URL::asset('admin/js/chart.min.js')}}"></script>
<script src="{{URL::asset('admin/js/roundedBar.min.js')}}"></script>
<script src="{{URL::asset('admin/js/jquery.barfiller.js')}}"></script>
<script src="{{URL::asset('admin/js/tagsinput.js')}}"></script>
<script src="{{URL::asset('admin/js/summernote-bs4.js')}}"></script>
<script src="{{URL::asset('admin/js/amcharts.js')}}"></script>
<script src="{{URL::asset('admin/js/perfect-scrollbar.min.js')}}"></script>
<script src="{{URL::asset('admin/js/scrollable-custom.js')}}"></script>
<script src="{{URL::asset('admin/js/vectormap-2.0.2.min.js')}}"></script>
<script src="{{URL::asset('admin/js/vectormap-world-mill-en.js')}}"></script>
<script src="{{URL::asset('admin/js/apex-chart2.js')}}"></script>
<script src="{{URL::asset('admin/js/apex_dashboard.js')}}"></script>
<script src="{{URL::asset('admin/js/echarts.min.js')}}"></script>
<script src="{{URL::asset('admin/js/core.js')}}"></script>
<script src="{{URL::asset('admin/js/charts.js')}}"></script>
<script src="{{URL::asset('admin/js/animated.js')}}"></script>
<script src="{{URL::asset('admin/js/kelly.js')}}"></script>
<script src="{{URL::asset('admin/js/chart-custom.js')}}"></script>
<script src="{{URL::asset('admin/js/dashboard_init.js')}}"></script>
<script src="{{URL::asset('admin/js/custom.js')}}"></script>



<script>
const wheelables = [].slice.call(document.querySelectorAll('.wheelable'));

function stepper(event) {
if (event.deltaY < 0) {
event.target.stepUp();
}
if (event.deltaY > 0) {
event.target.stepDown();
}
}

wheelables.forEach(function(x) {
x.addEventListener('wheel', stepper);
});

const digits = [].slice.call(document.querySelectorAll('.digits-container input'));

function focusNext(event) {
console.log(event);
if (event.target.value) {
event.target.nextElementSibling.focus();
}
}

digits.forEach(function(x) {
x.addEventListener('input', focusNext);
});
</script>

</body>
</html>
