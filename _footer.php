<footer class="footer fixed-bottom bg-light">
    <div class="row" >
        <div class="col text-center">
            <a href="#" class="nav-link active" id="home-link" style="color: <?php echo $user['theme']; ?>;"><i class="fa-solid fa-house"></i></a>
        </div>
        <div class="col text-center">
            <a href="#" class="nav-link" id="user-link" style="color: <?php echo $user['theme']; ?>;"><i class="fa-solid fa-user"></i></a>
        </div>
        <div class="col text-center">
            <a href="#" class="nav-link" id="settings-link" style="color: <?php echo $user['theme']; ?>;"><i class="fa-solid fa-gear"></i></a>
        </div>
        <div class="col text-center">
            <a href="#" class="nav-link" id="mail-link" style="color: <?php echo $user['theme']; ?>;"><i class="fa-solid fa-envelope"></i></a>
        </div>
        <div class="col text-center">
            <a href="<?php echo base_url('auth/act_logout.php'); ?>" class="nav-link" id="notifications-link" style="color: <?php echo $user['theme']; ?>;"><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<!-- ECharts JS -->
<script src="https://cdn.jsdelivr.net/npm/echarts@4.9.0/dist/echarts.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize DataTables
        $('#example').DataTable();

        // Initialize Select2
        $('.select2').select2();

        // Initialize ECharts
        var chart = echarts.init(document.getElementById('chart'));
        var option = {
            title: {
                text: 'ECharts Example'
            },
            tooltip: {},
            xAxis: {
                data: ["category1", "category2", "category3", "category4", "category5"]
            },
            yAxis: {},
            series: [{
                name: 'Sales',
                type: 'bar',
                data: [5, 20, 36, 10, 10]
            }]
        };
        chart.setOption(option);

        // Handle active link toggle
        $('.footer .nav-link').on('click', function() {
            $('.footer .nav-link').removeClass('active'); // Remove active from all links
            $(this).addClass('active'); // Add active to the clicked link
        });

        // Update the date
        setInterval(updateDateTime, 1000); // Update every second
        updateDateTime(); // Initial call
    });

    // function untuk menampilkan tanggal
    function updateDateTime() {
        var now = new Date();
        var options = {
            weekday: 'long',
            day: '2-digit',
            month: 'short',
            year: 'numeric'
        };
        var formattedDate = now.toLocaleDateString('id-ID', options).replace('.', '');

        var hours = String(now.getHours()).padStart(2, '0'); // Ensure 2-digit format
        var minutes = String(now.getMinutes()).padStart(2, '0');
        var seconds = String(now.getSeconds()).padStart(2, '0');
        var timeString = hours + ":" + minutes + ":" + seconds;

        $("#current-date-time").text(formattedDate + " " + timeString);
    }
</script>
</body>

</html>