<script type="text/javascript" src="js/formchk.js" ></script>
<h1 class='contact-title'>Contact Me:</h1>
	
	<p class="mandatory">*mandatory fields</p>

 <form action="send.php" name="mailform" method="post" onSubmit="return check(mailform)">
 <div class='trform'><input type='text' name='tress' size='10'/> </div>
 <table>
                                <tbody><tr>
                                        <th class="lable">*Name:</th>
                                        <td class="input"><input name="sname" size="40" maxlength="40" class="input" type="text"></td>
                                </tr>
                              <tr>
                                        <th class="lable">*E-mail:</th>
                                        <td class="input"><input name="semail" size="40" maxlength="40" class="input" type="text"></td>
                                </tr>
                               <tr>
                                        <th class="lable">Subject:</th>
                                        <td class="input"><input name="ssubject" size="40" maxlength="40" class="input" type="text"></td>
                                </tr>
                               <tr>
                                        <th class="lable">*Message:</th>
                                        <td class="input"><textarea name="stext_message" cols="40" rows="10" class="input"></textarea></td>
                                </tr> 
                                <br><br>       
                                <tr><th></th>
                                <td align="center">
                                  <input name="mail_submit" type="submit" value="Send Me">     </td>
                                  
                                </tr>
                        </tbody></table>

 
 
</form>

