  </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dropzone.js"></script>

    <!-- WYSIWYG -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- CUSTOM JS -->
    <script src="js/custom.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'Percentage'],
          // ["Views", <#?php echo $session->count; ?>],
          ["Photos", <?php echo Photo::count_all(); ?>],
          ["Users", <?php echo User::count_all(); ?>],
          ["Comments", <?php echo Comment::count_all(); ?>],
        ]);

        var options = {
          width: 800,
          backgroundColor : 'transparent ',
          legend: { position: 'none' },
          chart: {
            title: '',
            subtitle: '' },
          axes: {
            x: {
              0: { side: 'top', label: ''} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>

</body>

</html>
