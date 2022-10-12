<head>
<title>Display Employe Details</title>
<style>
	body
	{
		text-align: center;
		background-size: cover;
		background-repeat: no-repeat;
	}
	td
	{
		text-align: center;
		height: 50px;
		width: 150px;
		color: white;
	}
	img
	{
		border: none;
	}
	th
	{
		font-family: verdana;
    	font-size: 18px;
    	color: skyblue;
    	font-weight: 600;
    	padding: 5px 10px;
	}
	table {  
        border-collapse: collapse;  
    }  
        .inline{   
            display: inline-block;   
            float: right;     
        }   
         
        input, button{   
            height: 34px;   
        }   
  
    .pagination {   
        display: inline-block;   
    }   
    .pagination a {   
        font-weight:bold;   
        font-size:18px;   
        color: black;   
        float: left;   
        padding: 7px 14px;   
        text-decoration: none;   
        border:1px solid black;  
		background-color: #ffffff; 
    }   
    .pagination a.active {   
            background-color: pink;   
    }   
    .pagination a:hover:not(.active) {   
        background-color: skyblue;   
    }   

</style>
</head>
<body>
<?php
include('dbconn.php');

$per_page_record = 7;  // Number of entries to show in a page.   
// Look for a GET variable page if not found default is 1.        
if (isset($_GET["page"])) {    
      $page  = $_GET["page"];    
 }    
 else {    
       $page=1;    
 }
 //determine the sql LIMIT starting number for the results on the displaying page  
 $start_from = ($page-1) * $per_page_record;  

$sql="Select * from emp_table order by name LIMIT $start_from, $per_page_record";
$query=mysqli_query($db,$sql);
echo "<table align='center' border='1'>";
	echo "<tr>";
		// echo "<th> S. No.</th>";
		echo "<th> Name</th>";
		echo "<th> Gender</th>";
		echo "<th> Emp. Code</th>";
		echo "<th> Phone</th>";
		echo "<th> E-mail</th>";
		echo "<th> Department</th>";
	echo "</tr>";

// $count = 1;
while ($fetch=mysqli_fetch_array($query))
 {
	echo "<tr>";
		// echo "<td>$count</td>";
		echo "<td> $fetch[name]</td>";
		echo "<td> $fetch[gender]</td>";
		echo "<td> $fetch[code]</td>";
		echo "<td> $fetch[phone]</td>";
		echo "<td> $fetch[email_id]</td>";
		echo "<td> $fetch[department_name]</td>";
	echo "</tr>";
	// $count++;
}
echo "</table>";

?>
<div class="pagination">    
      <?php  
	  include('dbconn.php');
        $query = "SELECT COUNT(*) FROM emp_table";     
        $rs_result = mysqli_query($db,$query);    
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    echo "</br>";     


        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='emp_display_0.php?page=".($page-1)."'>  Prev </a>";  
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='emp_display_0.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='emp_display_0.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='emp_display_0.php?page=".($page+1)."'>  Next </a>";   
        }   
  
      ?>    
      </div>  
  
     
     </div>    
    </div>   
  </div>    
  <script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'emp_display_0.php?page='+page;   
    }   
  </script>

<form action="">
<!-- <input type="button" id="p3" value="Print" onclick="print12()" /> -->
</form>
<script type="text/javascript">
	function print12()
	{
		w=document.getElementById('p3');
		w.style.display='none';
		window.print();
		w.style.display='block';

	}



</script>
</body>