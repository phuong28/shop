<?php include_once('views/admin/layouts/main.php') ?>
<?php
$connect = new mysqli('localhost','root','','shop');
$query ="SELECT product_name as'name', Sum(quantity) as 'quantity' FROM `order_detail` GROUP by(product_id);";

$result = mysqli_query($connect,$query);
$data =[];
while($row = mysqli_fetch_array($result)){
    $data[]=$row;
}
?>

<head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    // Load the Visualization API and the corechart package.
    google.charts.load('current', {
        'packages': ['corechart']
    });

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart() {

        // Create the data table.
        var data = new google.visualization.arrayToDataTable([
            [
                'name', 'quantity',

            ],
            <?php 
                foreach($data as $key){
                    echo "['".$key['name']."',".$key['quantity']."],";
                }
            ?>
        ]);

        // Set chart options
        var options = {
            'title': 'Số lượng sản phẩm bán',
            'is3D': true,

        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
    }
    </script>
</head>
<?php
$connect = new mysqli('localhost','root','','shop');
$query1 ="SELECT product_name as name, Sum(quantity) as quantities FROM `order_detail` GROUP by name ORDER by quantities DESC Limit 4;";

$result = mysqli_query($connect,$query1);
$data =[];
while($row = mysqli_fetch_array($result)){
    $data[]=$row;
}
?>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['bar']
    });
    google.charts.setOnLoadCallback(drawStuff);

    function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
            ['name', 'quantities', ],
            <?php 
            foreach($data as $key){
                echo "['".$key['name']."',".$key['quantities']."],";
            }
          ?>
        ]);


        var options = {
            // width: 100%,
            legend: {
                position: 'none'
            },
            chart: {
                title: 'Top five product best sell',
                subtitle: ''
            },
            axes: {
                x: {
                    0: {
                        side: 'top',
                        label: 'White to move'
                    } // Top x-axis.
                }
            },
            bar: {
                groupWidth: "50%"
            }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));

    };
    </script>
</head>


<?php startblock('doanhthu') ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>best selling product statistics</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo url('admin/thongke/index') ?>">Home</a></li>
                <li class="breadcrumb-item">Product</li>
                <li class="breadcrumb-item active">selling products</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <div id="piechart_3d"></div>
                        
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">

                        <div id="top_x_div"  style="height: 600px;"></div>


                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php endblock() ?>