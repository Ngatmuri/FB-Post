<?php
//                    Pengaturan 

$cookie =  ''; //cookie Kamu
$target =  ''; // Target Post

$teks = '



'; 
/*
            pakai '.$angka_format.' untuk menampilkan Nomor
            pakai '.$emoticon.' untuk menampilkan Emoji
*/

$dtsg = file_get_contents('dtsg.txt');
///            Sticker ID
$sticker_id = array('610033092751507','610032956084854','610032786084871','610029832751833','610030086085141','610031329418350','610031539418329','610031662751650','610387602716056','610034316084718','610033669418116','610034166084733','610033566084793','610033396084810','610033269418156','610429656045184','610497139371769','610501709371312','610502019371281','610569976031152','610570986031051','610570389364444','180554745770841','181834355642880','','180555742437408','180555445770771','157616594731323','181834645642851','180555255770790','180555522437430');
$stik = $sticker_id [rand(0,count($sticker_id )-1)];
$stiker =($stik);
                      // Emoji \\
$lope = array('💛','🧡','❤️','💚','💙','💜','🖤','🤎','🤍','💔','❣','️','💕','💞','💓','💗','💖','💘','💝☮','💟','🟡','🟨');
$love = $lope[rand(0,count($lope)-1)];
$ovee=($love); 

$motic = array("😀","😁","😂","😃","😄","😅","😆","😉","?","😋","😎","😍","😘","😗","😙","😚","☺","🙂","🤔","😐","😑","😶","🙄","😏","😣","😥","😮","😛","😴","😫","😪","😯","🤐","😝","😜","😒","😓","😔","😕","🙃","🤑","😢","😰","😱","😭","😲","🙁","😦","😳","😖","😧","😵","😞","😨","😡","😟","😩"," 😀 ", "😁", "😂", " 😃 "," 😄 "," 😅"," 😆"," 😗"," 😘"," 😍 "," 😎"," 😋"," 😊","  😉"," 😙"," 😚"," ☺"," 🙂"," 🤗"," 🤔"," 😐"," 😑"," 🤐"," 😜"," 😝"," 😯"," 😶"," 🙄"," 😪"," 😒"," 😓"," 😫"," 😏"," 😣"," 😴"," 😔"," 😕"," 😌"," 😥"," 😮"," 😛"," 🙃"," 😷"," 😠"," 😩"," 😬"," 😤"," 😟"," 😞"," 😨"," 😡"," 😵"," 😧"," 😖"," 🙁"," 😦"," 😳"," 😱"," 😭"," 😲"," 🤑"," 😢"," 😰"," 🤒"," 👺"," 💩"," 😺"," 💀"," 🤕"," 😇"," ☠"," 😸"," 😹"," 👻"," 🤓"," 😈"," 👽"," 😻"," 👿"," 👾"," 😼"," 👹"," 🤖"," 😽"," 👶"," 🙊"," 🙉"," 🙈"," 😾"," 😿"," 🙀"," 👦"," 👧"," 👨"," 👩"," 👴"," 👵"," 👮"," 👱"," 👲"," 👳"," 👸"," 👷"," 💂"," 🕵"," 👰"," 💁"," 💃"," 👯"," 🙋"," 👼"," 🎅"," 🙇"," 🛀"," 🛌"," 💆"," 🙍"," 🙎"," 💇"," 🙅"," 🚶"," 🗣"," 🕴"," 👤"," 🏃"," 🙆"," 👥"," 🏊"," 👫"," 👬"," 🏇"," 🏇"," ⛷"," 🏋"," 👭"," 🏂"," 🚴"," 💏"," 🏌"," 🚵"," 👨"," ❤","💋"," 👨"," 🏄"," 🏎"," 👩"," ❤","💋"," 👩"," 💑"," 🏍"," 🚣"," 👨❤","💪"," 👨"," 👧"," 👧"," 👈"," 👉"," ☝"," 🖐"," 🤘"," 👊"," 👋"," 👂"," 💅"," 🙏"," ✊"," 🖖"," ✌"," 👎"," 🙌"," 👐"," 👍"," 👇"," 🖕"," 👌"," 👏"," ✋"," 👆"," ✍"," 👃"," 💋💗"," 💙"," 💘"," 👣"," ❤"," 👁"," 💓"," 💛"," 💚"," 💜"," 💔"," 👁"," 👅"," 💕"," 💝"," 💞"," 💖"," 👄"," 💥"," 💣"," 💢"," 💤"," 💌"," 💟"," 💦"," 💨"," 🕳"," 👓"," 🕶"," 🐵","🐈"," 🐒"," 🦁"," 🐮"," 🦄"," 🐂"," 🐯"," 🐶"," 🐕"," 🐅"," 🐃"," 🐄"," 🐆"," 🐩"," 🐺"," 🐴"," 🐷"," 🐖"," 🐎"," 🐱"," 🐗"," 🐽"," 🐏"," 🐑"," 🐐"," 🐪"," 🐫"," 🐇"," 🐰"," 🐹"," 🐼"," 🐀"," 🐁"," 🐭"," 🐘"," 🐿"," 🐻"," 🐨"," 🐔"," 🐚"," 🐙"," 🐡"," 🐳"," 🐧"," 🐦"," 🐥"," 🐤"," 🐣"," 🐓"," 🐌"," ⛅"," 💧"," 🎈",);
$motic1 = $motic[rand(0,count($motic)-1)];
 
$emoticon=($motic1); 

?>
