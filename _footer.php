

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

    // Logout
    $("#logout-link").click(function() {
        Swal.fire({
            title: 'Logout',
            text: 'Are you sure you want to logout?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, logout'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "../auth/act_logout.php";  }
        });
    });
</script>
</body>

</html>