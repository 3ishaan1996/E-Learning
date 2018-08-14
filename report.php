<?php
include_once('db.php');

?>

<!doctype html>
<html>
<head>
  <title>Report</title>
  <link rel="stylesheet" type="text/css" href="dhingra.css" />
</head>

<body>
  <div class="container">
  	<div class="wraper">
      <h1>Report</h1>
  	</div>
    <div class="data">
      <form action="report.html" method="post">


      <select name="Course">

        <<option>course</option>

        <?php
        $query1= "select * from course";
        $result1 = mysql_query($query1);
        while($rows1=my_sql_fetch_array($result1)) {
        $courseID=$rows1['id'];
        $rowsData1=$rows1['coursename'];

         ?>

         <option value="<?php echo $courseID; ?>"><?php echo $rowsData1; ?></option>

         <<?php
}
          ?>
      <!--
      <<option>HTML5</option>
        <<option>CSS</option>
        <<option>PHP</option>

      these are the options that should be displayed but we are fetching this from database-->


      </select>

      <select name="Level of your Course">

        <<option>level</option>
        <<option>beginner</option>
        <<option>intermediate</option>
        <<option>expert</option>


      </select>

      <input type="submit" name="submit" class="submit"  />
      <table border="1" class="table">
        <tr>
          <th>
            Course
          </th>
          <th>
            Teacher Selected
          </th>
          <th>
            Marks before test
          </th>
          <th>
            Marks after test
          </th>
        </tr>
      </table>
    </div>
  </div>
</body>
</html>
