<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col">
            <?php 
              $target = file_get_contents('/etc/target_model');
              // Prefer a device specific brand logo (app/img/<hostname>.png) when available.
              // No fallback image: if there is no brand logo, render nothing (nothing is loaded).
              $brandLogo = '';
              $brandHostname = function_exists('getHostname') ? trim((string) getHostname()) : '';
              if ($brandHostname === '' && file_exists('/etc/hostname')) {
                  $brandHostname = trim((string) file_get_contents('/etc/hostname'));
              }
              if ($brandHostname !== '' && file_exists('/var/www/html/app/img/'.$brandHostname.'.png')) {
                  $brandLogo = 'app/img/'.$brandHostname.'.png';
              }
              if (trim($target) === '4logit') {
                echo _("About 4Logit");
              } else {
                echo _("About Elastel");
              }
            ?>
          </div>
        </div><!-- ./row -->
      </div><!-- ./card-header -->
      <div class="card-body">
        <!-- about general tab -->
        <div class="tab-pane active" id="aboutgeneral">
          <div class="row">
            <?php if (trim($target) === '4logit') { ?>
            <div class="col-md-8">
              <div class="mt-3"><img class="about-logo" src="app/img/<?php echo trim($target); ?>.png"></div>
              <div class="mt-3" style="text-indent : 1rem; font-weight: bold;">UAx300 and CEMx300 are products of 4Logit.
              </div>
              <div class="mt-3" style="text-indent : 1rem; font-weight: bold;">4Logit is a brand of "Tesla Olcu Kontrol Sistemleri ve Cevre Tek. Ltd. Sti. Turkiye - Turkey"  <a href="https://www.teslakontrol.com">www.teslakontrol.com</a>
              </div>
            </div>
            </br></br></br></br></br></br></br></br></br></br></br></br></br></br>
            <?php } else {?>
            <div class="col-md-8">
              <?php if ($brandLogo !== '') : ?>
              <div class="ml-5 mt-3"><img class="about-logo" src="<?php echo htmlspecialchars($brandLogo, ENT_QUOTES); ?>"></div>
              <?php endif; ?>
              <div class="mt-3" style="text-indent : 1rem"><a href="https://www.elastel.com/">Elastel</a> Technology Ltd is a design and manufacturing company providing industrial-quality wireless products and solutions for IoT and M2M.
              </div>
              <div class="mt-3" style="text-indent : 1rem">With an innovative design on open standards, premium quality control, Elastel providing the most Elastic and robust <a href="https://www.elastel.com/product-category/industrial-computer/">Industrial Computers</a>,
              <a href="https://www.elastel.com/product/cellular-router/eg500-wifi-halow-gateway/">Routers</a>, <a href="https://www.elastel.com/product-category/edge-gateway/">Edge Gateways</a> for people easy and fast achieved their IoT telecommunication needs. 
              </div>
            </div>
            <?php } ?>
          </div><!-- /.row -->
        </div><!-- /.tab-pane | general tab -->

      </div><!-- /.card-body -->
      <div class="card-footer"></div>
    </div><!-- /.card -->
  </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
