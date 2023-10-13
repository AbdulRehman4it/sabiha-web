
    <script src="{{ URL::asset('userpanel/js/jquery1-3.4.1.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/popper1.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/bootstrap1.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/metisMenu.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/Chart.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/owl.carousel.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/buttons.flash.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/jszip.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/pdfmake.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/vfs_fonts.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/buttons.html5.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/buttons.print.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/datepicker.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/datepicker.en.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/datepicker.custom.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/chart.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/roundedBar.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/jquery.barfiller.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/tagsinput.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/summernote-bs4.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/amcharts.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/scrollable-custom.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/vectormap-2.0.2.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/vectormap-world-mill-en.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/apex-chart2.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/apex_dashboard.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/echarts.min.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/core.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/charts.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/animated.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/kelly.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/chart-custom.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/dashboard_init.js')}}"></script>
    <script src="{{ URL::asset('userpanel/js/custom.js')}}"></script>




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