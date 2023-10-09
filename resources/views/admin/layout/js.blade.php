
<script src="{{url('admin./js/jquery1-3.4.1.min.js')}}"></script>

<script src="{{url('admin./js/popper1.min.js')}}"></script>

<script src="{{url('admin./js/bootstrap1.min.js')}}"></script>

<script src="{{url('admin./js/metisMenu.js')}}"></script>

<script src="{{url('admin./js/jquery.waypoints.min.js')}}"></script>

<script src="{{url('admin./js/Chart.min.js')}}"></script>

<script src="{{url('admin./js/jquery.counterup.min.js')}}"></script>

<script src="{{url('admin./js/jquery.nice-select.min.js')}}"></script>

<script src="{{url('admin./js/owl.carousel.min.js')}}"></script>

<script src="{{url('admin./js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('admin./js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('admin./js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('admin./js/buttons.flash.min.js')}}"></script>
<script src="{{url('admin./js/jszip.min.js')}}"></script>
<script src="{{url('admin./js/pdfmake.min.js')}}"></script>
<script src="{{url('admin./js/vfs_fonts.js')}}"></script>
<script src="{{url('admin./js/buttons.html5.min.js')}}"></script>
<script src="{{url('admin./js/buttons.print.min.js')}}"></script>

<script src="{{url('admin./js/datepicker.js')}}"></script>
<script src="{{url('admin./js/datepicker.en.js')}}"></script>
<script src="{{url('admin./js/datepicker.custom.js')}}"></script>
<script src="{{url('admin./js/chart.min.js')}}"></script>
<script src="{{url('admin./js/roundedBar.min.js')}}"></script>

<script src="{{url('admin./js/jquery.barfiller.js')}}"></script>

<script src="{{url('admin./js/tagsinput.js')}}"></script>

<script src="{{url('admin./js/summernote-bs4.js')}}"></script>
<script src="{{url('admin./js/amcharts.js')}}"></script>

<script src="{{url('admin./js/perfect-scrollbar.min.js')}}"></script>
<script src="{{url('admin./js/scrollable-custom.js')}}"></script>

<script src="{{url('admin./js/vectormap-2.0.2.min.js')}}"></script>
<script src="{{url('admin./js/vectormap-world-mill-en.js')}}"></script>

<script src="{{url('admin./js/apex-chart2.js')}}"></script>
<script src="{{url('admin./js/apex_dashboard.js')}}"></script>
<script src="{{url('admin./js/echarts.min.js')}}"></script>
<script src="{{url('admin./js/core.js')}}"></script>
<script src="{{url('admin./js/charts.js')}}"></script>
<script src="{{url('admin./js/animated.js')}}"></script>
<script src="{{url('admin./js/kelly.js')}}"></script>
<script src="{{url('admin./js/chart-custom.js')}}"></script>

<script src="{{url('admin./js/dashboard_init.js')}}"></script>
<script src="{{url('admin./js/custom.js')}}"></script>

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
