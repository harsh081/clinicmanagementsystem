<?php 
$jan=$feb=$mar=$apr=$may=$jun=$jul=$aug=$sep=$oco=$nev=$dec=
        $flag=null;
        
  $data=new mysqli("localhost","root","","clinic");
                    
       $query1=$data->query("select sum(Payment) a from Payment_Master where Payment_date between '2018-01-01' and '2018-01-31'");
       $row=$query1->fetch_assoc();
       $jan=$row['a'];
       
       $query2=$data->query("select sum(Payment) a from Payment_Master where Payment_date between '2018-02-01' and '2018-02-29'");
       $row2=$query2->fetch_assoc();
       $feb=$row2['a'];
       
       $query3=$data->query("select sum(Payment) a from Payment_Master where Payment_date between '2018-03-01' and '2018-03-31'");
       $row3=$query3->fetch_assoc();
       $mar=$row3['a'];
       
       $query4=$data->query("select sum(Payment) a from Payment_Master where Payment_date between '2018-04-01' and '2018-04-30'");
       $row4=$query4->fetch_assoc();
       $apr=$row4['a'];
       
       $query5=$data->query("select sum(Payment) a from Payment_Master where Payment_date between '2018-05-01' and '2018-05-31'");
       $row5=$query5->fetch_assoc();
       $may=$row5['a'];
       
       $query6=$data->query("select sum(Payment) a from Payment_Master where Payment_date between '2018-06-01' and '2018-06-30'");
       $row6=$query6->fetch_assoc();
       $jun=$row6['a'];
       
       $query7=$data->query("select sum(Payment) a from Payment_Master where Payment_date between '2018-07-01' and '2018-07-31'");
       $row7=$query7->fetch_assoc();
       $jul=$row7['a'];
       
       $query8=$data->query("select sum(Payment) a from Payment_Master where Payment_date between '2018-08-01' and '2018-08-31'");
       $row8=$query8->fetch_assoc();
       $aug=$row8['a'];
       
       $query9=$data->query("select sum(Payment) a from Payment_Master where Payment_date between '2018-09-01' and '2018-09-30'");
       $row9=$query9->fetch_assoc();
       $sep=$row9['a'];
           
       $query10=$data->query("select count(Payment_id) a from Payment_Master where Payment_date between '2018-10-01' and '2018-10-31'");
       $row10=$query10->fetch_assoc();
       $oco=$row10['a'];
       
       $query11=$data->query("select count(Payment_id) a from Payment_Master where Payment_date between '2018-11-01' and '2018-11-30'");
       $row11=$query11->fetch_assoc();
       $nev=$row11['a'];
       
       $query12=$data->query("select count(Payment_id) a from Payment_Master where Payment_date  between '2018-12-01' and '2018-12-31'");
       $row12=$query12->fetch_assoc();
       $dec=$row12['a'];
           

?>

<!DOCTYPE html>
<html>
	<head>
<script src="../Trial/js/Chart/amcharts.js"></script>
<script src="../Trial/js/Chart/serial.js"></script>
<script src="../Trial/js/Chart/export.min.js"></script>
<link rel="stylesheet" href="../Trial/js/Chart/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/none.js"></script>

<input type="hidden"  id="jan" value="<?php echo $jan;?>" />
<input type="hidden"  id="feb" value="<?php echo $feb;?>" />
<input type="hidden"  id="mar" value="<?php echo $mar;?>" />
<input type="hidden"  id="apr" value="<?php echo $apr;?>" />
<input type="hidden"  id="may" value="<?php echo $may;?>" />
<input type="hidden"  id="jun" value="<?php echo $jun;?>" />
<input type="hidden"  id="jul" value="<?php echo $jul;?>" />
<input type="hidden"  id="aug" value="<?php echo $aug;?>" />
<input type="hidden"  id="sep" value="<?php echo $sep;?>" />
<input type="hidden"  id="oco" value="<?php echo $oco;?>" />
<input type="hidden"  id="nev" value="<?php echo $nev;?>" />
<input type="hidden"  id="dec" value="<?php echo $dec;?>" />

		

		<!-- amCharts javascript code -->
		<script type="text/javascript">
                    var a = document.getElementById("jan").value;
                    var b = document.getElementById("feb").value;
                    var c = document.getElementById("mar").value;
                    var d = document.getElementById("apr").value;
                    var e = document.getElementById("may").value;
                    var f = document.getElementById("jun").value;
                    var g = document.getElementById("jul").value;
                    var h = document.getElementById("aug").value;
                    var i = document.getElementById("sep").value;
                    var j = document.getElementById("oco").value;
                    var k = document.getElementById("nev").value;
                    var l = document.getElementById("dec").value;
                    
                    
			AmCharts.makeChart("chartdiv",
				{
					"type": "serial",
					"categoryField": "category",
					"startDuration": 1,
					"categoryAxis": {
						"gridPosition": "start"
					},
					"trendLines": [],
					"graphs": [
						{
							"colorField": "color",
							"fillAlphas": 1,
							"id": "AmGraph-1",
							"lineColorField": "color",
							"title": "graph 1",
							"type": "column",
							"valueField": "column-1"
						}
					],
					"guides": [],
					"valueAxes": [
						{
							"id": "ValueAxis-1",
							"title": "Total Income"
						}
					],
					"allLabels": [],
					"balloon": {},
					"titles": [
						{
							"id": "Title-1",
							"size": 15,
							"text": "Month Wise Payment Detail"
						}
					],
					"dataProvider": [
						{
							"category": "Janury",
							"column-1": a
						},
						{
							"category": "February",
							"column-1": b
						},
						{
							"category": "March",
							"column-1": c
						},
						{
							"category": "April",
							"column-1": d
						},
						{
							"category": "May",
							"column-1": e
						},
						{
							"category": "June",
							"column-1": f
						},
						{
							"category": "July",
							"column-1": g
						},
						{
							"category": "August",
						
							"column-1": h
						},{
							"category": "September",
							"column-1": i
						},
						{
							"category": "October",
							"column-1": j
						},
						{
							"category": "November",
							"column-1": k
						},
                                                {
							"category": "December",
							"column-1": l
						},
					]
				}
			);
		</script>
	</head>
	<body>
		<div id="chartdiv" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
	</body>
</html>