<?php
$isHome=false;
$curr_page = str_replace("/","",$_SERVER["PHP_SELF"]);
if($curr_page=="home.php")
{
	$isHome=true;
}

?>
<?php
$activePage='msg';
if(isset($_REQUEST['page']) && !empty($_REQUEST['page']))
{
	$pageReq = htmlentities($_REQUEST['page']);
	switch ($pageReq) {
		case 'loginCompany':
			$activePage='lfc';
			break;
		case 'loginStudent':
			$activePage='lfs';
			break;
		case 'signupCompany':
			$activePage='sfc';
			break;
		default:
			$activePage='msg';
			break;
	}
}
?>

	<div class="col-xs-12"  id="signLogin">
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
			  <ol class="carousel-indicators hidden">
			    <li data-target="#myCarousel" data-slide-to="0" id="msg" class=""></li>
			    <li data-target="#myCarousel" data-slide-to="1" id="lo" class=""></li>
			    <li data-target="#myCarousel" data-slide-to="2" id="so" class=""></li>
			    <li data-target="#myCarousel" data-slide-to="3" id="sfs" class=""></li>
			    <li data-target="#myCarousel" data-slide-to="4" id="lfs" class=""></li>
			    <li data-target="#myCarousel" data-slide-to="5" id="sfc" class=""></li>
			    <li data-target="#myCarousel" data-slide-to="6" id="lfc" class=""></li>
			  </ol>
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item <?php echo ($isHome || $activePage=='msg')?' active':''; ?>">
			      <div class="hidden-xs">&nbsp;</div>
			    </div>
			    <div class="item">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><h2 style="color:red"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></h2></button>
			      <?php
				include './handshake/loginOptions.php';
				?>
			    </div>
			    <div class="item">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><h2 style="color:red"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></h2></button>
			      <?php
				include './handshake/signupOptions.php';
				?>
			    </div>
			    <div class="item">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><h2 style="color:red"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></h2></button>
			      <?php
				include './handshake/signupform.php';
				?>
			    </div>

			    <div class="item <?php echo ($activePage=='lfs')?' active':''; ?>">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><h2 style="color:red"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></h2></button>
			      <?php
				include './handshake/loginform.php';
				?>
			    </div>

			    <div class="item  <?php echo ($activePage=='sfc')?' active':''; ?>">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><h2 style="color:red"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></h2></button>
			      <?php
				include './handshake/signupformcompany.php';
				?>
			    </div>

			    <div class="item  <?php echo ($activePage=='lfc')?' active':''; ?>">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><h2 style="color:red"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></h2></button>
			      <?php
				include './handshake/loginformcompany.php';
				?>
			    </div>
			  </div>
		</div>
	</div>
	<!--<p style="color:green"> I Love You!!! & "I+12" ??? </p>-->