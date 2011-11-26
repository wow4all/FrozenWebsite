<?php
/***************************************************************************
 *   Archivo:                   head.php
 *                            -------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   Última modificación   : Noviembre 09, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/
	if(isset($_COOKIE['u_login:s:a:true']))
		echo '<body  class="bodylevel-high modulehover-1 readonstyle-button fixedheader font-family-helvetica font-size-is-default menu-type-splicemenu col12 menu-jomsocial option-com-community view-profile">';
	else
		echo '<body  class="bodylevel-high modulehover-1 readonstyle-button fixedheader font-family-helvetica font-size-is-default menu-type-splicemenu col12 menu-home option-com-content view-frontpage">';
?>
<style type="text/css">
#newbar{
	position:relative;
	z-index:100;
	background:#111 url(http://s.twimg.com/a/1290471375/images/whatsnew/bg-newbar.jpg) repeat-x 0 0;
	color:#ccc;box-shadow:0 1px 2px rgba(0,0,0,0.5);
	-webkit-box-shadow:0 1px 2px rgba(0,0,0,0.5);min-height:40px;
}
#newbar2{
	width:936px;
	margin:0 auto;
	padding:10px 0;
	font:bold 13px/19px "Helvetica Neue",Arial,Sans-serif;text-align:left;
}
#newbar strong{
	color:#fff;
}
#newbar a{
	color:#7df;
}
#newbar a.hashtag{
	color:#999;
	font-weight:normal;
}
#newbar a.hashtag:hover{
	color:#ccc;
}
.notification
{
	font-family: Arial, Helvetica, clean, sans-serif;
	font-size: large;
	font-weight: bold;
	background-color: rgb(247, 247, 247);
	color: red;
}
.success
{
	font-family: Arial, Helvetica, clean, sans-serif;
	font-size: large;
	font-weight: bold;
	background-color: #acfa58;
	color: black;
}
.fail
{
	font-family: Arial, Helvetica, clean, sans-serif;
	font-size: large;
	font-weight: bold;
	background-color: #fe2e2e;
	color: white;
}
.errorInput{
	border: 1px solid: #FF0000;
}
	
</style>
<div id="newbar"> 
      <div id="newbar2"> 
		P&aacute;gina en desarrollo<strong> BETA </strong> | Puede que algunos sistemas no funcionen correctamente...
	  </div> 
</div>
	<div id="rt-page-surround">
		<div id="rt-drawer">
			<div class="rt-container">
				<div class="clear"></div>
			</div>
		</div>
	<div id="rt-page-background">
		<div id="rt-header-surround" class="headerstyle-dark">
			<div id="rt-header-background" class="menupillstyle-default">
				<div id="rt-header">
					<div class="rt-container">
								
					<div class="rt-grid-3 rt-alpha">
						<div class="rt-block logo-block">
							<a href="/index.php" id="rt-logo"></a>
				    	</div>
					</div>
						<div class="rt-grid-9 rt-omega">
							<div class="rt-block menu-block">
								<div class="rt-splicemenu">
									<div class="rt-menubar">
										<ul class="menutop level1" >
											<li class="item1 parent <?php if(!isset($_GET['page'])) echo "active"; else echo "";?>" id="current"><a class="orphan item" href="/index.php"><span>Inicio</span></a></li>
											<?php
												if(isset($_COOKIE['u_login:s:a:true']))
												{
													if(isset($_GET['page']) && $_GET['page'] == 'perfil')
													{
														if(isset($_GET['section']) && $_GET['section'] == 'configuraciones')
															$Active = '';
														else
															$Active = 'active';
													}
													else
														$Active = '';
													echo '<li class="item53 parent '.$Active.'" ><a class="orphan item" href="/perfil/"><span>Perfil</span></a></li>
														  <li class="item57 parent"><a class="orphan item" href="/perfil/configuraciones/"><span>Configuraci&oacute;n</span></a>';
												}
												else
												{
													if(isset($_GET['page']) && $_GET['page'] == 'registro')
														$Active = 'active';
													else
														$Active = '';
													echo '<li class="item53 parent '.$Active.'" ><a class="orphan item" href="/registro/"><span>Registro</span></a></li>';
												}
											?>
											<li class="item59 parent"><a class="orphan item" href="/foro/index.php"><span>Foro</span></a></li>
										</ul>
										<div class="arrow-indicator"></div>
									</div>
								</div>
							</div>
						</div>
							<div class="clear"></div>
					</div>
				</div>
			</div>
				<div id="rt-header-bottom"></div>
		</div>
<div id="rt-body-background">
	<div class="rt-container">
		<div id="rt-controls">
			<span class="rt-date-feature"><span><?php echo System::getDate(); ?></span></span>

		
			<div id="rt-login-button">
				<?php
					if(isset($_COOKIE['u_login:s:a:true']))
						echo '<a href="/salir/" class="buttontext"><span class="desc">Cerrar Sesi&oacute;n</span></a>';
					else
						echo '<a href="#" class="buttontext" rel="rokbox[360 160][module=rt-popuplogin]"><span class="desc">Iniciar Sesi&oacute;n</span></a>';
				?>
			</div>
		
		</div>
			<div class="clear"></div>
																