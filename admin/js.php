<script src="public/sneat/assets/vendor/libs/jquery/jquery.js"></script>
<script src="public/sneat/assets/vendor/libs/popper/popper.js"></script>
<script src="public/sneat/assets/vendor/js/bootstrap.js"></script>
<script src="public/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="public/sneat/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="public/sneat/assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="public/sneat/assets/js/main.js"></script>

<!-- Page JS -->
<script src="public/sneat/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "autoWidth": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.8/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.8/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyCAYMg7PwPnXNA1mH0toBrabRCj2oRXiqQ",
    authDomain: "trang-tin-firebase.firebaseapp.com",
    projectId: "trang-tin-firebase",
    storageBucket: "trang-tin-firebase.appspot.com",
    messagingSenderId: "892186477773",
    appId: "1:892186477773:web:ba9990eca5eb14e28f5584",
    measurementId: "G-SCXB6YYZ59"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
  </body>
</html>