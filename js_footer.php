<!-- Placed js at the end of the page so the pages load faster -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="assets/vendor/popper.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/jquery-ui-touch/jquery.ui.touch-punch-improved.js"></script>
<script class="include" type="text/javascript" src="assets/vendor/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/vendor/lobicard/js/lobicard.js"></script>
<script src="assets/vendor/jquery.scrollTo.min.js"></script>

<!--chartjs-->
<script src="assets/vendor/chartjs/Chart.min.js"></script>

<!-- uikit js -->
<script src="../assets/js/uikit.min.js" charset="utf-8"></script>
<!--chartjs initialization-->
<script>

    var ctx = document.getElementById('myChart-light').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "My First dataset",
                backgroundColor: 'rgba(167,104,243,.2)',
                borderColor: 'rgba(167,104,243,1)',
                data: [0, 20, 9, 25, 15, 25,18]
            }]


        },

        // Configuration options go here
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },

            scales: {
                xAxes: [{
                    display: false
                }],
                yAxes: [{
                    display: false
                }]
            },
            elements: {
                line: {
                    tension: 0.00001,
                    //tension: 0.4,
                    borderWidth: 1
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    });


    var ctx = document.getElementById('myChart-tow-light').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "My First dataset",
                backgroundColor: 'rgba(54,162,245,.2)',
                borderColor: 'rgba(54,162,245,1)',
                //data: [6.06, 82.2, -22.11, 21.53, -21.47, 73.61, -53.75, -60.32]
                data: [70, 45, 65, 50, 65, 35, 50]
            }]


        },

        // Configuration options go here
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    display: false
                }],
                yAxes: [{
                    display: false
                }]
            },
            elements: {
                line: {
                    //tension: 0.00001,
                    tension: 0.4,
                    borderWidth: 1
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    });

</script>

<script type="text/javascript">
           $(document).ready(function() {
    $('#summernote').summernote();
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']]
    ]
});

</script>


<script type="text/javascript">
    $("#summernote").summernote({
lang: 'hu-HU',
height: 300,
minHeight: null,
maxHeight: null,
 toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']]
        ]
});
</script>



<!--custom chart-->
<script src="assets/vendor/custom-chart/Chart.min.js"></script>
<script src="assets/vendor/custom-chart/underscore-min.js"></script>
<script src="assets/vendor/custom-chart/moment.min.js"></script>
<script src="assets/vendor/custom-chart/accounting.min.js"></script>
<!--custom chart init-->
<script src="assets/vendor/custom-chart/custom-chart-init.js"></script>


<!--easy pie chart-->
<script src="assets/vendor/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="assets/vendor/jquery-easy-pie-chart/easy-pie-chart-init.js"></script>

<!--vectormap-->
<script src="assets/vendor/vector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/vendor/vector-map/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/vendor/vmap-init.js"></script>


<!--[if lt IE 9]>
<script src="assets/vendor/modernizr.js"></script>
<![endif]-->

<!--init scripts-->
<script src="assets/js/scripts.js"></script>
<!-- <script src="assets/js/jquery-3.5.1.min.js"></script> -->
<script src="assets/js/summernote-lite.js"></script>
<script src="assets/js/summernote.js"></script>
