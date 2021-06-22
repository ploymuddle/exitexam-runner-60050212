<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title> <!-- Template หน้าเว็บ ในการตั้งชื่อ title -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">

  <!-- ตกแต่งหน้าเว็บ -->
  <style>
    body {
      font-family: 'Mitr', sans-serif;
    }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #f1f1f1;
      /* color: white; */
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
<!-- header -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Exit Exam MVC 2/2563 [วิ่งไร่พัทลุง]</a>
    </div>
  </div>
</nav>

<!-- Menu [Left] -->
<div class="container-fluid text-center">    
  <div class="row content">
    <!-- Menu -->
    <div class="col-sm-2 sidenav">
        <ul class="nav nav-pills nav-stacked ">
            <li class="{{ Request::path() ==  '/' ? 'active' : ''  }}"><a href="{{ url('/') }}">หน้าหลัก</a></li>
            <li class="{{ Request::path() ==  'blog/create' ? 'active' : ''  }}"><a href="{{ url('blog/create') }}">ลงทะเบียน</a></li>
            <li class="{{ Request::path() ==  'edit'  ? 'active' : ''  }}"><a href="{{ url('edit') }}">ผู้เข้าร่วม</a></li>
            <li class="{{ Request::path() ==  'show' ? 'active' : ''  }}"><a href="{{ url('show') }}">ผู้จัดงาน</a></li>
        </ul>
    </div>
    <!-- content [Center] -->
    <div class="col-sm-8 text-left"> 
      <h1>@yield('header', 'Input Teams')</h1>  <!-- Template หน้าเว็บ ในการกำหนดหัวข้อ -->
      <hr>
    @yield('text')  <!-- Template หน้าเว็บ ในการใส่เนื้อหา -->
    </div>
    <!-- [Right] -->
    <div class="col-sm-2 sidenav">
      <!-- <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div> -->
    </div>
  </div>
</div>

 <!-- footer -->
<footer class="container-fluidc text-center">
  <p>@60050212 Ploypilin Bunrasoet</p>
</footer>

</body>
</html>
