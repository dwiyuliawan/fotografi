<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-1 col-md-4">
          <div class="logo"><a href="index.php"><img src="admin/img/icon11.jpg" width="150%" height="70px" alt="image"/></a>  </div>
        </div>
        <div class="col-sm-8 col-md-8">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">E-mail : </p>
              <a href="rizkiwibowo123@gmail.com">dazazart007@gmail.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Telp : </p>
              <a href="tel:+62878881066">+62 8213517362</a> </div>
			<?php   if(strlen($_SESSION['ulogin'])==0)
			{	
			?>
			<div class="login_btn"> 
				<a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> 
			</div>
			<?php }
			else{ 
				echo "Selamat Datang!";
			} ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"  bgcolor="blue"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> 
<?php 
$email=$_SESSION['ulogin'];
$sql ="SELECT nama_user FROM member WHERE email='$email'";
$query = mysqli_query($koneksidb,$sql);
if(mysqli_num_rows($query)>0)
{
while($results = mysqli_fetch_array($query))
	{
	 echo htmlentities($results['nama_user']); }}?>
	 <i class="fa fa-angle-down" aria-hidden="true"></i></a>
          <ul class="dropdown-menu">
           <?php if($_SESSION['ulogin']){?>
            <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li>
            <li><a href="riwayatsewa.php">Riwayat Sewa</a></li>
            <li><a href="logout.php">Sign Out</a></li>
            <?php }?>
          </ul>
            </li>
          </ul>
        </div>
      </div>
	  	  
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
		  <li><a href="index.php">Home</a></li>
          <li><a href="paket.php">Daftar Paket</a></li>
          <li><a href="page.php?type=faqs">FAQs</a></li>
          <li><a href="tentang_kami.php">Tentang Kami</a></li>
          <li><a href="contact-us.php">Hubungi Kami</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header>