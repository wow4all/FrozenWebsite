<?php
/***************************************************************************
 *   Archivo:                   Profile.php
 *                            -------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   Última modificación   : Noviembre 07, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/
?>											              
<div id="rt-main" class="mb9-sa3">
	<div class="rt-main-inner">
		<div class="rt-grid-9">
			<div class="box3 button2 nohover">
				<div class="rt-block">
					<div id="rt-mainbody">
						<div class="rt-module-surround">
							<div class="component-content">
								<div id="community-wrap" class="on-rt_tachyon_j15 ltr">
									<script type="text/javascript"> joms.filters.bind();</script>
								<div id="cProfileWrapper">
									<div class="cLayout clrfix">
										<div class="cSidebar clrfix">					
											<div class="cModule">
												<h3>Acerca de mi</h3>
													<h4>Informaci&oacute;n B&aacute;sica</h4>
														<dl class="profile-right-info">
															<dt>Fecha de Nacimiento:</dt>
																<dd>{$fecha_nacimiento}</dd>
															<dt>Pa&iacute;s</dt>
																<dd>{$pais}</dd>
															<dt>Sexo:</dt>
																<dd>{$sexo}</dd>
															<dt>Descripci&oacute;n</dt>
																<dd>{$descripcion}</dd>

														</dl>
													<h4>Informaci&oacute;n de Contacto</h4>
														<dl class="profile-right-info">
															<dt>Twitter</dt>
																<dd><a href="#">{$twitter}</a></dd>
															<dt>Facebook</dt>
																<dd><a href="#">{$facebook}</a></dd>
															<dt>P&aacute;gina web</dt>
																<dd><a href="#">{$pag_web}</a></dt></dd>
											</div>   			
									<div class="cModule">
										<h3><span>Amigos</span></h3>
											<ul class="cThumbList clrfix">
												<li>Sistema desactivado</li>
											</ul>	
									</div>
									<div class="cModule">
										<h3><span>Lista de Personajes</span></h3>
											<ul class="cThumbList clrfix"></ul>
										<div style="clear: both;"></div>
											<div class="app-box-footer">
												<span>Sistema desactivado</span>
										</div>
									</div>
							</div>
	    <div class="cMain">
			<div class="profile-box">
				<div class="profile-avatar">
					<img src="#" alt="<?php echo Profile::getFullName(); ?>" />		
				</div>
		<div class="profile-info">
			<div class="contentheading"><?php echo Profile::getFullName(); ?></div>
			<div id="profile-status">
				<span id="profile-status-message">{$mensaje_de_estado}</span>
			</div>
			<ul class="profile-details">		
				<li class="title">Miembro Desde</li>
					<li>{$miembro_desde}</li>
				<li class="title">&Uacute;ltima Conexi&oacute;n</li>
					<li>{$ultima_conexion}</li>
				<li class="title">Vistas del Perfil</li>
					<li>{$vistas_perfil}</li>
			</ul>
		</div>
		<div style="clear: left;"></div>

	</div>
	<div class="profile-toolbox-bl">
	    <div class="profile-toolbox-br">
	        <div class="profile-toolbox-tl">
				<ul class="small-button">
				<?php
					if(isset($_GET['page']))
						if($_GET['page'] == 'perfil' || $_GET['page'] == 'donaciones-sms' || $_GET['page'] == 'donaciones-paypal')
						{
							echo '';
						}
						else
						{
							echo '<li class="btn-add-friend">
								<a href="#"><span>Agregar como Amigo</span></a>
							</li>
							<li class="btn-write-message">
								<a href="#"><span>Escribir Mensaje</span></a>
							</li>';						
						}
					else
						echo '';
				?>
						<li class="btn-gallery">
							<a href="#">
								<span>Fotos</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>			
	<div class="activity-stream-profile">
		<div id="activity-stream-container">
			<div id="profile-newsfeed-item90" class="joms-newsfeed-item">
				<div class="newsfeed-avatar">
					<a href="#"><img class="avatar" src="#" width="36" border="0" alt=""/></a>
				</div>
				<div class="newsfeed-content">
					<form method="post" action="">
						<textarea cols="30" rows="4" name="update" class="inputbox" id="update" maxlength="400" placeholder="&iquest;Qu&eacute; est&aacute;s pensando?"></textarea>
							<br />
						<input type="submit"  value="Publicar"  id="update_button"  class="update_button button" />
					</form>
					
					<div id='flashmessage'>
						<div id="flash" align="left" >Test!</div>
					</div>
					<hr />
					<div id="content">
						<?php
							foreach(Wall::getWallMessages(System::getIdFromCookie()) as $messageData)
							{
								
							}
						?>
					</div>
				</div>
		</div>
	
			  	</div>
			</div>
			<div id="apps-sortable" class="connectedSortable" >
						</div> 

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
		            <div class="rt-grid-3">
                <div id="rt-sidebar-a">
                                    <div class="noticebox3">
                    <div class="rt-block">
				<div class="rt-module-surround">
					<div class="module-title-surround"><div class="module-title"><h2 class="title">Aviso</h2></div></div>
	                					<div class="rt-module-inner">
						<div class="module-content">
		                	<p>El perfil está en desarrollo, los sistemas no están funcionando, así que se pide paciencia.</p>
							<div class="clear"></div>
						</div>
					</div>
				</div>
												<div class="module-icon"></div>
				            </div>
                </div>
		                <div class="box7 title1">
                    <div class="rt-block">
				<div class="rt-module-surround">
										<div class="module-title-surround"><div class="module-title"><h2 class="title">Donaci&oacute;n SMS</h2></div></div>
	                					<div class="rt-module-inner">
						<div class="module-content">
		                	<div id="latest-discussions-wrapper">
	<ul class="latest-discussions-items">
			<li>			
<!-- PayGol JavaScript -->
<script src="http://www.paygol.com/micropayment/js/paygol.js" type="text/javascript"></script> 

<!-- PayGol Form -->
<form name="pg_frm">
 <input type="hidden" name="pg_serviceid" value="3450">
 <input type="hidden" name="pg_currency" value="USD">
 <input type="hidden" name="pg_name" value="Frozen Puntos">
 <input type="hidden" name="pg_custom" value="<?php echo Profile::getUsername(System::getIdFromCookie()); ?>">
 <input type="hidden" name="pg_price" value="1">
 <input type="hidden" name="pg_return_url" value="http://wow-frozen.servegame.com/donacion-sms/completo/">
 <input type="hidden" name="pg_cancel_url" value="http://wow-frozen.servegame.com/donacion-sms/error/">
 <input type="image" name="pg_button" class="paygol" src="http://www.paygol.com/micropayment/img/buttons/175/donate_es_1.png" border="0" alt="Realiza pagos con PayGol: la forma mas facil!" title="Realiza pagos con PayGol: la forma mas facil!" onClick="pg_reDirect(this.form)">
</form> 
			<div style="clear: both;"></div>
		</li>
			</ul>
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
										<div class="module-title-surround"><div class="module-title"><h2 class="title">Estado del Servidor</h2></div></div>
	                					<div class="rt-module-inner">
						<div class="module-content">
		                	

<ul class="mod_latestgroupwalls">
	<li>
		<b>Zet'Ghor</b>			
	</li>
	<li>
		Estado de Conexi&oacute;n: <b><?php echo System::checkStatus(); ?></b> <br />
		Jugadores Conectados: <b><?php echo System::playersOnline(0); ?></b><br />
		Alianza Online: <b>null</b><br />
		Horda Online: <b>null</b><br />
		Tiempo de Conexi&oacute;n: <b><?php echo System::uptime(); ?></b><br />

	</li>
</ul>
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