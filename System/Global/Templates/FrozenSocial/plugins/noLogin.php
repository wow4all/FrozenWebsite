<?php
/***************************************************************************
 *   Archivo:                   noLogin.php
 *                            -------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   Última modificación   : Noviembre 26, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/
?>
<div id="rt-main" class="mb8-sa4">
	<div class="rt-main-inner">
		<div class="rt-grid-8">
			<div id="rt-content-top">
				<div class="rt-grid-8 rt-alpha rt-omega">
                    <div class="promo">
						<div class="rt-block">
							<div class="rt-module-surround">
								<div class="module-title-surround"><div class="module-title"><h2 class="title">Frozen Gaming</h2></div></div>
	                					<div class="rt-module-inner">
											<div class="module-content">
												<p>Frozen Gaming es un lugar para divertirse jugando gratuitamente tus videojuegos preferidos mientras conoces nuevos amigos.</p>							
												<div class="clear"></div>
											</div>
										</div>
							</div>
						</div>
					</div>
		        <div class="box3 tabs nohover nomargintop">
                    <div class="rt-block">
						<div class="rt-module-surround">
							<div class="rt-module-inner">
								<div class="module-content">
									<script type="text/javascript">
										RokTabsOptions.mouseevent.push('click');
										RokTabsOptions.duration.push(600);
										RokTabsOptions.transition.push(Fx.Transitions.Quad.easeInOut);
										RokTabsOptions.auto.push(0);
										RokTabsOptions.delay.push(2000);
										RokTabsOptions.type.push('scrolling');
										RokTabsOptions.linksMargins.push(0);
										RokTabsOptions.navscroll.push(1);
									</script>
							<div class="roktabs-wrapper" style="width: 618px;">
								<div class="roktabs base top">
									<div class='roktabs-links' >
										<ul class='roktabs-top'>
											<li class="first active icon-left"><span>&Uacute;ltimos Personajes</span></li>
											<li class="icon-left"><span>Estado del Servidor</span></li>
											<li class="icon-left"><span>Info. del Foro</span></li>
											<li class="last icon-left"><span>Changelog</span></li>
										</ul>
									</div>
							<div class="roktabs-container-inner">
								<div class="roktabs-container-wrapper">
									<div class='roktabs-tab1'>
										<div class='wrapper'>
											<div class='wrapper-inner'>
												<div class="mod_latestmembers">
													<div>		
														<ul>
															<?php
																foreach(System::getLastesCharacters() as $lastesCharacters)
																{
																	echo'<li class="latestmembers-item">
																		<a href="#"><img width="32" src="'.URL_PATH.'/images/avatar/'.getCharacterAvatar($lastesCharacters['race'], $lastesCharacters['gender'], $lastesCharacters['level'], $lastesCharacters['class']).'" class="avatar jomTips" alt="'.$lastesCharacters['name'].'" title="'.$lastesCharacters['name'].'::Nivel: '.$lastesCharacters['level'].', Raza: '.getRace($lastesCharacters['race'], $lastesCharacters['gender']).', Clase: '.getClass($lastesCharacters['class'], $lastesCharacters['gender']).'"/></a>
																	</li>';
																}
															?>
														</ul>
													</div>
											<a href="/ver/personajes" class="latestmembers-showall">Mostrar Todos</a>
													<div style='clear:both;'></div>
												</div>	
											</div>
										</div>
									</div>
								<div class='roktabs-tab2'>
									<div class='wrapper'>
										<div class='wrapper-inner'>
											<div class="floatleft" style="width: 183px">
												<img src="<?php echo URL_PATH; ?>/images/stories/demo/frontpage/gantry.png" class="floatleft medmarginbottom" alt="image" width="183" height="112"/><br />
											</div>
												<span>Zet'Ghor. <br /> 
														Estado de Conexi&oacute;n: <b><?php echo System::checkStatus(); ?></b> <br />
														Jugadores Conectados: <b><?php echo System::playersOnline(0); ?></b><br />
														Alianza Online: <b>null</b><br />
														Horda Online: <b>null</b><br />
														Tiempo de Conexi&oacute;n: <b><?php echo System::uptime(); ?></b><br />
												</span>
													<br /><br />
												<a class="readon" href="#"><span>M&aacute;s informaci&oacute;n</span></a>	
										</div>
									</div>
								</div>
<div class='roktabs-tab3'>
	<div class='wrapper'>
		<div class='wrapper-inner'>
			<div class="fp-tabs-2">
				<div class="rt-demo-grid-4">

					<ul class="mod_latestgroupwalls">
						<li>
							<?php
								foreach(System::getLastesPosts() as $getLastesPosts)
								{
									echo '<a href="/foro/index.php?topic='.$getLastesPosts['id_topic'].'.msg'.$getLastesPosts['id_msg'].'#">'.htmlentities(reduceString($getLastesPosts['subject'], 25)).'</a><br />';
								}
							?>
						</li>
						<li>
							<div style="clear: both;"></div>
						</li>
					</ul>
				</div>
			<span>Informaci&oacute;n del <b>Foro</b>.<br /><br /> Temas totales: <b><?php echo System::forumInfo(0); ?></b> <br />Mensajes Totales: <b><?php echo System::forumInfo(1); ?></b> <br />Usuarios totales: <b><?php echo System::forumInfo(2); ?></b></span><br /><br />
			<a class="readon" href="/foro/index.php"><span>Ir a los Foros.</span></a>
				<div class="clear"></div>
			</div>	
		</div>
	</div>
</div>
<div class='roktabs-tab4'>
	<div class='wrapper'>
		<div class='wrapper-inner'>
			<div class="rt-demo-grid-4">
				<ul class="bullet-2 nomarginbottom">
					<li>[Game Mech]Anti-Cheat System Improved.</li>		
					<li>[Spells]Rogue: Shadowstep.</li>		
					<li>[Spells]Rogue: Killing Spree.</li>		
					<li>[Spells]Rogue: Distract.</li>		
					<li>[Spells]Priest: Shadowform.</li>		
				</ul>	
			</div>
			<div class="rt-demo-grid-3">
				<ul class="bullet-2">
					<li>[Quest]In Memoriam</li>		
					<li>[Misc]CleanUP</li>		
					<li>[Misc]CodeStyle</li>		
					<li>[Quest]Cleansing the Scar</li>		
					<li>[NPC]Ravaged Crystalline Ice Giant</li>		
				</ul>
				<a class="readon" href="changelog.txt"><span>Changelog Completo</span></a>
			</div>
			<div class="clear"></div>	
		</div>
	</div>
</div>
</div>
			</div>
		</div>
	</div>
		<div class="clear"></div>
		</div>
	</div>
</div>
		</div>
    </div>
<div class="search box9 nohover">
    <div class="rt-block">
		<div class="rt-module-surround">
			<div class="rt-module-inner">
				<div class="module-content">
		           <form action="" method="post">
					<div class="search search box9 nohover">
						<input name="searchword" id="mod_search_searchword" maxlength="20" alt="Search" class="inputbox" type="text" size="20" value="Buscar..."  onblur="if(this.value=='') this.value='Buscar...';" onfocus="if(this.value=='Buscar...') this.value='';" /><input type="submit" value="Buscar" class="button" onclick="this.form.searchword.focus();"/>	</div>
					</form>		
						<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
</div>
		
</div>
	<div class="clear"></div>
</div>
<div id="rt-content-bottom">
	<div class="rt-grid-4 rt-alpha">
        <div class="box7 title1">
            <div class="rt-block">
				<div class="rt-module-surround">
					<div class="module-title-surround"><div class="module-title"><h2 class="title">Bienvenido a <?php echo SERVER_NAME; ?></h2></div></div>
	                	<div class="rt-module-inner">
							<div class="module-content">
								<div class="jomsocial-box">
									<a target="_blank" href="#"></a>
										<a href="#" target="_blank">
											<img width="185" height="60" alt="image" src="<?php echo URL_PATH; ?>/images/stories/demo/general/ext-jomsocial.png" />
										</a><br />
								</div>
								<b><?php echo SERVER_NAME; ?></b> <?php echo DESCRIPTION; ?>
							</div>
					</div>
				</div>
								            </div>
                </div>
		
</div>
<div class="rt-grid-4 rt-omega">
    <div class="box1 button2 nomarginbottom">
        <div class="rt-block">
			<div class="rt-module-surround">
				<div class="module-title-surround">
					<div class="module-title">
						<h2 class="title">Caracter&iacute;sticas</h2>
					</div>
				</div>
				<div class="rt-module-inner">
					<div class="module-content">
						<ul class="bullet-check">
							<li><strong>Emulador:</strong> <?php echo CORE_NAME; ?></li>
							<li><strong>Base de Datos:</strong> <?php echo DATABASE_NAME; ?>.</li>
							<li><strong>Web:</strong> FrozenWebsite <?php /*No modificar esta parte*/?></li>
							<li><strong>Reino:</strong> <?php echo REALM_NAME; ?></li>
							<li><strong>Rates:</strong> x<?php echo GENERAL_RATES; ?></li>
							<li><strong>Tipo:</strong> <?php echo SERVER_TYPE; ?></li>
						</ul>
					<a href="/informacion-reino/" class="readon"><span>Leer m&aacute;s</span></a>							
						<div class="clear"></div>
					</div>
				</div>
			</div>
		 </div>
     </div>	
</div>
		</div>
	</div>
<div class="rt-grid-4">
    <div id="rt-sidebar-a">
		<div class="box4 nohover">
            <div class="rt-block">
				<div class="rt-module-surround">
					<div class="rt-module-inner">
						<div class="module-content">	                	
							<div class="roknewspager-wrapper">
								<div class="roknewspager">
								<?php
									foreach(System::getIndexNews() as $News)
									{
									echo'<div class="roknewspager-li">
											<div class="roknewspager-li2">
												<h3 class="roknewspager-h3">
													<a href="#" class="roknewspager-title">'.reduceString($News['subject'], 25).'</a>
														<span class="roknewspager-toggle"></span>
												</h3>
											<div class="roknewspager-div">
												<div class="roknewspager-content">
													<div class="introtext">'.$News['body'].'</div>	            									            	            	       
												</div>
											</div>
										</div>
									</div>';
									}
								?>

								</div>
							</div>


<script type="text/javascript">
	RokNewsPagerStorage.push({
		'autoupdate': 0, 
		'delay': 5000,
		'accordion': true
	});
</script>							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
        </div>
					<div class="box3">
						<div class="rt-block">
							<div class="rt-module-surround">
								<div class="module-title-surround">
									<div class="module-title">
										<h2 class="title">Chat</h2>
									</div>
								</div>
									<div class="rt-module-inner">
										<script type="text/javascript">
											$(document).ready(function(){
												setInterval(loadMessages,5000);
											});

											function loadMessages(){
												$("#shoutbox-mensajes").load("../System/Ajax/Shoutbox.php");
											}
										</script>
										<div class="module-content">
											<div id="shoutbox-mensajes"></div>            	
											<div id="form-chat">
												<form method="post" id="chat">
													Mensaje:<input type="text" id="mensaje" name="mensaje" class="inputbox" />
													<?php
														if(isset($_COOKIE['u_login:s:a:true']))
															echo '<input type="submit" id="enviar-chat" value="Enviar" />';
														else
															echo '<br />Debes iniciar sesi&oacute;n para utilizar el chat';
													?>
															
												</form>
											</div>
											<div class="clear"></div>
										</div>
									</div>
							</div>
						</div>
					</div>
					<div class="box3">
						<div class="rt-block">
							<div class="rt-module-surround">
								<div class="module-title-surround">
									<div class="module-title">
										<h2 class="title">Blog</h2>
									</div>
								</div>
									<div class="rt-module-inner">
										<div class="module-content">  
											<ul class="bullet-check">
												<li><a href="#">En construcci&oacute;n...</a></li>
												<li><a href="#">Test...</a></li>
												<li><a href="#">Test...</a></li>
												<li><a href="#">Test...</a></li>
											</ul>
											<div class="clear"></div>
										</div>
									</div>
							</div>
						</div>
					</div>
					<div class="box3">
						<div class="rt-block">
							<div class="rt-module-surround">
								<div class="module-title-surround">
									<div class="module-title">
										<h2 class="title">Video Recomendado</h2>
									</div>
								</div>
									<div class="rt-module-inner">
										<div class="module-content">               	
											<iframe width="260" height="162" src="http://www.youtube.com/embed/JSjSIhnVblo" frameborder="0" allowfullscreen></iframe>
											<div class="clear"></div>
										</div>
									</div>
							</div>
						</div>
					</div>
    </div>
</div>

		<div class="clear"></div>
	</div>
</div>
