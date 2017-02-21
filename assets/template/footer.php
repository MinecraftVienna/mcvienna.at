						<!-- FOOTER -->
						
							<script src="/js/lightbox.js"></script>
							<!-- haschek Piwik -->
							<script type="text/javascript">
							  var _paq = _paq || [];
							  _paq.push(['trackPageView']);
							  _paq.push(['enableLinkTracking']);
							  (function() {
							    var u="//tracking.haschek.at/";
							    _paq.push(['setTrackerUrl', u+'piwik.php']);
							    _paq.push(['setSiteId', 10]);
							    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
							    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
							  })();
							</script>
							<noscript><p><img src="//tracking.haschek.at/piwik.php?idsite=10" style="border:0;" alt="" /></p></noscript>
							<!-- End Piwik Code -->
							<!-- My piwik Pixel, Code is in head-->
							<noscript><p><img src="//statistics.niemeczek.at/piwik.php?idsite=4" style="border:0;" alt="" /></p></noscript>
						</div><!-- Content -->

				<!-- Footer Navigation -->
			<div id="footer">
				<ul id="footer-nav">
					<li><a href="/legal/">Impressum</a></li>	
					<li><a href="/legal/">Datenschutz</a></li>	
					<li><a href="/legal/">Disclaimer</a></li>	
					<li><a href="/legal/">Kontakt</a></li>
				</ul>
				<a class="footer-brand" href="#">&copy; 2015 mcvienna.at</a>
					<a class="menue-button menue-button-beschr-close" id="footer_menu_opener" href="#" >
						<span class="menue-button-line"></span>
						<span class="menue-button-line"></span>
						<span class="menue-button-line"></span>
					</a>	
			</div>
								</div><!-- Content-Column -->
				</div><!-- White-Box -->
</div>
		<?php // SCHNEEFLOCKEN DIV BEGINN 
			//Ein PHP-Script fügt den entsprechenden Codetag je nach Jahreszeit ein
			//Beginn u. Ende siehe Oben!
		
			if ( $winter == true )
				{echo '</div>';}
			else
				{echo '</div>';}
		?><!-- Winter Tag closed-->
		<!-- Javascript navigation -->
<script type="text/javascript"> 
      var position = 0;
      var grayarea = document.getElementById("grayarea");
      var nav_menu_opener = document.getElementById("nav_menu_opener");
      var xsidebar = document.getElementById("sidebar");
    //var nav_menue_auf = document.getElementById("nav_menue_auf");
      
      
      
		console.log("start");

      function toggle(evt) {
        position++;
			 if (position == 1) {
          xsidebar.classList.add("open");
          grayarea.classList.add("open");
          console.log("2");
        } else {
          xsidebar.classList.remove("open");
          grayarea.classList.remove("open");
          console.log("3");
          position = 0;
        }  
      }
		
    //bigContentArea.addEventListener("click", toggle);
    //grayarea.addEventListener("click", toggle);
      grayarea.addEventListener("click", toggle);
      nav_menu_opener.addEventListener("click", toggle);

   
  
     
    </script>

		<!-- Javascript footer -->
<script type="text/javascript"> 
      var position = 0;
     // var grayarea = document.getElementById("grayarea");
      var nav_menu_opener = document.getElementById("footer_menu_opener");
      var xfooternav = document.getElementById("footer-nav");
    //var nav_menue_auf = document.getElementById("nav_menue_auf");
      
      
      
		console.log("start");

      function toggle(evt) {
        position++;
			 if (position == 1) {
          xfooternav.classList.add("open");
          //grayarea.classList.add("open");
          console.log("2 open");
        } else {
          xfooternav.classList.remove("open");
          //grayarea.classList.remove("open");
          console.log("3 close");
          position = 0;
        }  
      }
		
    //bigContentArea.addEventListener("click", toggle);
    //grayarea.addEventListener("click", toggle);
      grayarea.addEventListener("click", toggle);
      nav_menu_opener.addEventListener("click", toggle);

   
  
     
    </script>

	</body>
</html>









































































