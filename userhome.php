<?php
  require_once "userheader.php";
 ?>
 <!--start Content-->
         <div class="col-md-9 content">
           <?php
           if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
             echo "<p style='color:green;'>
              Successfully added ".$_SESSION['success']."'s information.</p>";
              unset($_SESSION['success']);
           }
            ?>
           <div>
             <img src="https://c.ndtvimg.com/kut3blc8_kerala-flood-afp-august-2018-650_625x300_18_August_18.jpg">
             <p>

Monsoon rainfall that affected India from August 13 to 20, 2018<br><br>S

Red alert issued by India Meteorological Department (earlier in August)
Beginning on 15 August 2018, severe floods affected the south Indian state of Kerala, due to unusually high rainfall during the monsoon season.[4] It was the worst flood in Kerala in nearly a century.[5] Over 483 people died, and 15 are missing.[6] About a million[7][8] people were evacuated, mainly from Chengannur,[9] Pandanad,[10] Edanad, Aranmula, Kozhencherry, Ayiroor, Ranni, Pandalam, Kuttanad, Aluva, and Chalakudy, N.Paravur, Chendamangalam, Eloor and few places in Vypin Island. All 14 districts of the state were placed on red alert.[11][12] According to the Kerala government, one-sixth of the total population of Kerala had been directly affected by the floods and related incidents.[13] The Indian government had declared it a Level 3 Calamity, or "calamity of a severe nature".[14][15] It is the worst flood in Kerala after the great flood of 99 that took place in 1924.</p>
             
 <div class="row">
                      <div class="form-group col-xs-4">
                          <button class="btn btn-primary" type="submit"><a href="userdoner.php">Donate</a></button>
                      </div>
                  </div>           </div>
         </div>
         <!--end Content-->
     </div>
     <script>
     $(document).ready(function(){
         $('.sidebar ul li.active').removeClass("active");
         $('.sidebar ul li:nth-child(2)').addClass("active");
     });
     </script>
   </body>
</html>
