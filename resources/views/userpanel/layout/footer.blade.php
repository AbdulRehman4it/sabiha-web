
    <script src="{{url('userpanel./js/jquery1-3.4.1.min.js')}}"></script>
    <script src="{{url('userpanel./js/popper1.min.js')}}"></script>
    <script src="{{url('userpanel./js/bootstrap1.min.js')}}"></script>
    <script src="{{url('userpanel./js/metisMenu.js')}}"></script>
    <script src="{{url('userpanel./js/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('userpanel./js/Chart.min.js')}}"></script>
    <script src="{{url('userpanel./js/jquery.counterup.min.js')}}"></script>
    <script src="{{url('userpanel./js/jquery.nice-select.min.js')}}"></script>
    <script src="{{url('userpanel./js/owl.carousel.min.js')}}"></script>
    <script src="{{url('userpanel./js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('userpanel./js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('userpanel./js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('userpanel./js/buttons.flash.min.js')}}"></script>
    <script src="{{url('userpanel./js/jszip.min.js')}}"></script>
    <script src="{{url('userpanel./js/pdfmake.min.js')}}"></script>
    <script src="{{url('userpanel./js/vfs_fonts.js')}}"></script>
    <script src="{{url('userpanel./js/buttons.html5.min.js')}}"></script>
    <script src="{{url('userpanel./js/buttons.print.min.js')}}"></script>
    <script src="{{url('userpanel./js/datepicker.js')}}"></script>
    <script src="{{url('userpanel./js/datepicker.en.js')}}"></script>
    <script src="{{url('userpanel./js/datepicker.custom.js')}}"></script>
    <script src="{{url('userpanel./js/chart.min.js')}}"></script>
    <script src="{{url('userpanel./js/roundedBar.min.js')}}"></script>
    <script src="{{url('userpanel./js/jquery.barfiller.js')}}"></script>
    <script src="{{url('userpanel./js/tagsinput.js')}}"></script>
    <script src="{{url('userpanel./js/summernote-bs4.js')}}"></script>
    <script src="{{url('userpanel./js/amcharts.js')}}"></script>
    <script src="{{url('userpanel./js/perfect-scrollbar.min.js')}}"></script>
    <script src="{{url('userpanel./js/scrollable-custom.js')}}"></script>
    <script src="{{url('userpanel./js/vectormap-2.0.2.min.js')}}"></script>
    <script src="{{url('userpanel./js/vectormap-world-mill-en.js')}}"></script>
    <script src="{{url('userpanel./js/apex-chart2.js')}}"></script>
    <script src="{{url('userpanel./js/apex_dashboard.js')}}"></script>
    <script src="{{url('userpanel./js/echarts.min.js')}}"></script>
    <script src="{{url('userpanel./js/core.js')}}"></script>
    <script src="{{url('userpanel./js/charts.js')}}"></script>
    <script src="{{url('userpanel./js/animated.js')}}"></script>
    <script src="{{url('userpanel./js/kelly.js')}}"></script>
    <script src="{{url('userpanel./js/chart-custom.js')}}"></script>
    <script src="{{url('userpanel./js/dashboard_init.js')}}"></script>
    <script src="{{url('userpanel./js/custom.js')}}"></script>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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