<div class="container-sm">
       
  
       <form id="upload" method="POST" action="entdeckungen.php" enctype="multipart/form-data">
       <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
           <div>
             <input type="file" name="bild" class="text-info">
           </div> <br>
           <div>
             <input type="text" name="bildtitel" id="bildtitel" placeholder="Bildtitel">
           </div> <br>
           <div>
            <textarea 
               id="text" 
               cols="40" 
               rows="4" 
               name="bild_text" 
               placeholder="Schreibe etwas über das Bild..."></textarea>
           </div>
         <div> <br>
         <div>
            <?php echo "<input type='hidden' name='username' id='username' value='$userid'>"; ?>
           </div> <br>
        
               <button class="btn btn-outline-info" type="submit" name="upload">Upload</button>
           </div>
       </form> <br>
     
       
      
     
     </div>

    