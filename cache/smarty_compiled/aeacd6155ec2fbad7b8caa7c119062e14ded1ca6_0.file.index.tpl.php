<?php
/* Smarty version 4.1.1, created on 2022-06-08 16:30:00
  from 'C:\Groups\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62a0b268d71ca4_96017098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aeacd6155ec2fbad7b8caa7c119062e14ded1ca6' => 
    array (
      0 => 'C:\\Groups\\templates\\index.tpl',
      1 => 1654692343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a0b268d71ca4_96017098 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Losowanie grup maratonów rowerowych</h1>

               
                

                <div>
                    <h4 color = black> Podaj uczestników lub ich numery do rozlosowania (każdy w osobnej linii) </h4>
                    <div>
                      <form action="index.php" method="post">
                        <ul>
                            <textarea input name="participants" class="textarea" rows="25" cols="70"></textarea>
                          <h4 color = black> Podaj rozmiar grup </h4>
                            <input name="group_size" input type="number" min="1" step="1" value="10"/>
                            <br> <br/>
                            <input type="submit" value="Losuj"/>
                        </ul>
                      </form>
                    </div>
                </div>

           
            

<footer>
    <span>Copyright &copy; SPZ 2022</span>
</footer><?php }
}
