   <!-- end .page-content -->
   </main>

   <?php
   $updatedDate = get_latest_update_date();
   $updatedDateDatetime = get_latest_update_date_datetime();
   ?>

   <footer>
      <div class="inner-column">
         <div class="footer-info">
            <div class="links-group">
               <ul class='social-links'>
                  <li>
                     <a href="https://twitter.com/bdlowery2">twitter</a>
                  </li>
                  <li>
                     <a href="https://www.linkedin.com/in/bdlowery">linkedin</a>
                  </li>
                  <li>
                     <a href="https://codepen.io/bdlowery">codepen</a>
                  </li>
                  
                  <li>
                     <a href="https://github.com/bdlowery">github</a>
                  </li>
               </ul>
               <span class='last-updated'>Last updated: <time datetime="<?= $updatedDateDatetime ?>"><?= $updatedDate; ?></time></span>
            </div>
            
            <div class="account-group">
              <ul class='account-links'>
                 <li>
                     <?php
                       //display logout link
                       if (is_user_logged_in()) { ?>
                          <?php wp_loginout(home_url()); ?>
                       <?php } else { ?>
                          <a href="sign-in">sign-in</a>
                       <?php }
                     ?>
                 </li>
              </ul>
            </div>
         </div>
      </div>
   </footer>
   <script>
      document.addEventListener('mouseover', function(event) {
         if (event.target.closest('#my-logo')) {
            event.target.closest('#my-logo').querySelectorAll('span').forEach(function(item) {
               item.style.width = item.scrollWidth + 'px';
            })
         }
      })

      document.addEventListener('mouseout', function(event) {
         if (event.target.closest('#my-logo')) {
            event.target.closest('#my-logo').querySelectorAll('span').forEach(function(item) {
               item.style.width = 0;
            })
         }
      })
   </script>

   <?php wp_footer(); ?>
</body>

</html>