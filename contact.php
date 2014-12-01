<?php 

$thisPage = "index";
include "inc/head.php"; 

?>
		<section class="main">
			<div class="our-address">
				<div class="wrapper">
					<h2><?php lang("83"); ?>  <!--Our Adress --></h2>
					<address>
						<?php lang("77"); ?>  <!--PT. Karisma Bahan Aviasi --> <br />
						<?php lang("78"); ?>  <!--Terminal Building, suite A64/PK --><br />
						<?php lang("79"); ?>  <!--Halim Perdanakusuma International Airport --><br />
						<?php lang("80"); ?>  <!--Jakarta 13610, Indonesia --><br />
					</address>
					<div class="phone-box">
						<a href="callto:<?php lang("81"); ?>  <!--+62 (21) 80 88 4882 -->"><?php lang("81"); ?>  <!--+62 (21) 80 88 4882 --></a>
						<a href="mailto:<?php lang("82"); ?>  <!--info@kbairops.com -->" class="mail"><?php lang("82"); ?>  <!--info@kbairops.com --></a>
					</div>
				</div>
			</div>
			<div class="map-holder">
				<div id="map-canvas"></div>
			</div>
			<div class="intro">
				<div class="wrapper">
					<h2><?php lang("76"); ?>  <!--We Serve Flight Support in Indonesia --></h2>
				</div>
			</div>
		</section>
		<?php include"inc/footer.php"; ?>		
	</div>
<?php include"inc/popup.php";	?>
<?php include"admin/analytics.php";	?>	

</body>
</html>