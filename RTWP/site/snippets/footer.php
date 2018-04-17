  <footer class="footer cf" role="contentinfo">
    <div class="wrap wide">

      <p class="footer-copyright"><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo html::decode($site->copyright()->kirbytext())
      ?></p>


      <p class="footer-madewithkirby">
        <?php
    // please note that the jQuery library is not included in the file set
    echo js([
      'assets/js/jquery-3.3.1.min.js',
      'assets/js/isotope.pkgd.min.js',
      'assets/js/script.js'
    ]);
  ?>
        <!-- <a href="http://getkirby.com/made-with-kirby-and-love">Made with Kirby and <b class="heart">♥</b></a> -->
      </p>

    </div>
  </footer>

</body>
</html>
