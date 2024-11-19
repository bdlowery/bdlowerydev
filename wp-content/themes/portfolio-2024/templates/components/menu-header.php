<nav>
  <ol class='item-list'>
    <!-- <li class='item'><a href="/my-work">my work</a></li> -->
    <!-- <li class='item'><a href="/writing">writing</a></li> -->
    <!-- <li class=''><a href="/about" class='hover:underline'>about</a></li> -->
    <li>
      <?php if (current_user_can('administrator')) { ?>
        <?php edit_post_link("EDIT", null, null, null, "site-link"); ?>
      <?php } ?>
    </li>
  </ol>
</nav>