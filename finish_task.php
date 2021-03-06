<?php
// session_start();

// if (isset($_SESSION['id']) && isset($_SESSION['user_name']))
// {

?>

<html>

<head>
  <meta charset="utf-8">
  <title> Finish Task. </title>
  <link rel="icon" href="to-do-list.png" type="image/png">
  <link rel="stylesheet" href="./css/date-picker.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/finish_task.css" type="text/css">

  <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"> </script>
  <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-database.js"> </script>
</head>


<body onload="create_unfinished_task(), create_finished_task()">

  <div id="hello">
    <p> Xin chao :
      <?php
      // echo $_SESSION['name']; 
      ?>
    </p>
  </div>



  <div id="content_container">
    <div id="finish_task_header">
      <p> Todo List </p>
    </div>



    <div id="task_input_container">

      <input id="input_box" size="30px" type="text" placeholder="Việc cần làm ..." />
      
      <!-- Date Picker Custom Control -->
      <div class="date-picker">
        <div class="selected-date"></div>

        <div class="dates">
          <div class="month">
            <div class="arrows prev-mth">&lt;</div>
            <div class="mth"></div>
            <div class="arrows next-mth">&gt;</div>
          </div>

          <div class="days"></div>
        </div>
      </div> <!-- Date Picker Custom Control -->
      
      <!-- <input id="input_date" type="date" /> -->
      <button id="input_button" onclick="add_task();">
        Lưu
      </button>
    </div>

    <!-- Task To Do -->
    <p class="header"> Danh sách việc cần làm </p>
    <div class="container">


    </div>


    <!-- Task Finished Yay -->
    <p class="header"> Đã Hoàn Thành </p>
    <div class="container">

      <div class="task_container">
        <div id="task_data">
          <p id="task_title" contenteditable="false"> Task Title 1 </p>
          <p id="task_date" contenteditable="false"> Task Date 1 </p>
        </div>
      </div>
      <div class="task_container">
        <div id="task_data">
          <p id="task_title" contenteditable="false"> Task Title 1 </p>
          <p id="task_date" contenteditable="false"> Task Date 1 </p>
        </div>
      </div>
      <div class="task_container">
        <div id="task_data">
          <p id="task_title" contenteditable="false"> Task Title 1 </p>
          <p id="task_date" contenteditable="false"> Task Date 1 </p>
        </div>
      </div>

    </div>
  </div>

  <script src="./js/date-picker.js"> </script>
  <script src="./js/finish_task.js"> </script>
</body>

</html>
<?php
// }else{
//  header("Location: ./dangnhap.php");
//  exit();
// }
?>

<html>