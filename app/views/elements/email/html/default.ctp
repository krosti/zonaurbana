<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<title>Sample</title>
	<style type="text/css" media="screen">a{ style="color:#00aeef; text-decoration:underline;" }</style>
</head>
<body style="padding:0; margin:0; background:#ffffff">
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
	<tbody><tr>
		<td align="center" valign="top">
			<table width="600" border="0" cellspacing="0" cellpadding="0">
				<tbody><tr>
					<td>
						<table width="100%" border="0" cellspacing="0" cellpadding="10" bgcolor="#2790BE">
							<tbody><tr>
								<td style="font-family:&#39;Lucida Sans&#39;, Lucida, Arial; font-size:11px; line-height:12px; color:#000000; text-align:center;" bgcolor="#2790BE">
									Contacto!<br>
									Desde: el sitio web | Zona Urbana 
								</td>
							</tr>
						</tbody></table>
					</td>
				</tr>
				<tr>					
				</tr>
				<tr>					
				</tr>
				<tr>
					<td>
						<table width="100%" border="0" cellspacing="0" cellpadding="10">
							<tbody>
							<tr>
								<td>									
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tbody>
										<tr>
											<td style="font-family:&#39;Lucida Sans&#39;, Lucida, Arial; font-size:12px; line-height:20px; color:#333333; text-align:left;">
												<div style="font-family:&#39;Lucida Sans&#39;, Lucida, Arial; font-size:16px; line-height:20px; color:#363636; font-weight:bold;">
												La persona <b><?php echo$this->data['Contacto']['nombre'] ?></b> te ha enviado un correo de consulta.
												</div>
												<div style="font-size:0; line-height:0; text-align:left;"><div style="font-size:0; line-height:0; height:5px"><img src="./Sample_files/empty.gif" width="1" height="5" style="height:5px" alt="">
												</div>
												<hr width="100%" noshade="0" size="1" color="#2790BE" />
												<div style="font-size:0; line-height:0; height:8px"><img src="./Sample_files/empty.gif" width="1" height="8" style="height:8px" alt="">
												</div>
												</div>
												<b>El mail: </b>
												<a href="mailto:<?php echo $this->data['Contacto']['email']; ?>" style="color:#00aeef; text-decoration:underline;"><?php echo $this->data['Contacto']['email']; ?></a><br/><br/>
												<b>Telefono: </b>
												<?php echo $this->data['Contacto']['telefono']; ?><br/><br/>
												<b>Asunto: </b>
												<?php echo $this->data['Contacto']['asunto']; ?><br/><br/>
												<b>Mensaje:</b>												
												<?php echo $this->data['Contacto']['mensaje']; ?><br/><br/><br/><br/>
												<h5>Saludos</h5>												
											</td>
										</tr>
									</tbody>
									</table>									
								</td>
							</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr><td style="font-size:0; line-height:0; text-align:left;"></td></tr>
				<tr>
					<td style="font-family:&#39;Lucida Sans&#39;, Lucida, Arial; font-size:10px; line-height:12px; color:#ababab; text-align:center;">
						<table width="100%" border="0" cellspacing="0" cellpadding="6" bgcolor="#2790BE">
							<tbody><tr>
								<td style="font-family:&#39;Lucida Sans&#39;, Lucida, Arial; font-size:10px; line-height:12px; color:#000000; text-align:center;" bgcolor="#2790BE">
									Design & Developing of Newsletter - <br>
									<a href="http://www.borealdev.com.ar/#" style="color:#FFFFFF; text-decoration:none;">BorealDev</a>
									<div style="font-size:0; line-height:0; height:50px"><img src="./Sample_files/empty.gif" width="1" height="50" style="height:50px" alt=""></div>								</td>
							</tr>
						</tbody></table>
					</td>
				</tr>
			</tbody></table>
		</td>
	</tr>
</tbody>
</table>
</body>
</html>