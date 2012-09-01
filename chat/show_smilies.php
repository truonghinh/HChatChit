<?php
/*
Credits: Bit Repository
URL: http://www.bitrepository.com/web-programming/php/how-to-convert-smilies-to-graphics.html
*/
function smilies($text, $url_address_to_images_folder) // with '/' at the end
{
$array = array(':-)' => 'smile001.gif', // happy 
':)' => 'smile001.gif', // happy 
':-D' => 'smile002.gif', // very happy 
':D' => 'smile002.gif', // very happy
':-O' => 'smile008.gif', // surprised / o, no   
':-P' => 'smile007.gif', // tongue sticking out
':P' => 'smile007.gif', // tongue sticking out 
';-)' => 'smile009.gif', // wink 
';)' => 'smile009.gif', // wink
':-(' => 'smile003.gif', // sad 
':(' => 'smile003.gif', // sad
'8o|' => 'smile011.gif', // angry grin 
':-@' => 'smile010.gif', // angry 
'8-)' => 'smile027.gif', // nerd 
":'(" => "smile040.gif", // crying 
':-S' => 'smile005.gif', // confused 
':-$' => 'smile004.gif', // embarrassed 
':-|' => 'smile012.gif', // undecided 
':-*' => 'smile055.gif', // kissing 
':-#' => 'smile056.gif', // don't tell anyone 
'(H)' => 'smile006.gif', // wacked out sunny face 
'<:o)' => 'smile041.gif', // party 
'(A)' => 'angel.gif', // angel 
'+o(' => 'Bo.gif', // Sick 
'(brb)' => 'smile043.gif', // be right back 
'(6)' => 'smile039.gif', // devil 
'(Y)' => 'smile049.gif', // yes 
'(N)' => 'smile050.gif', // no 
'(X)' => 'grl.gif', // girl 
'(Z)' => 'boy.gif', // boy 
'(L)' => 'smile015.gif', // love 
'(U)' => 'smile016.gif', // don't love 
'(K)' => 'smile020.gif', // kiss 
'(P)' => 'pic.gif', // picture 
'(G)' => 'gift.gif', // gift 
'(%)' => 'smile037.gif', // handcuffs 
'(F)' => 'smile019.gif', // flower 
'(W)' => 'smile018.gif', // Wilt flower 
'(D)' => 'smile036.gif', // drink 
'(B)' => 'smile035.gif', // beer 
'(C)' => 'coffee.gif', // cup 
'(^)' => 'smile054.gif', // (Birthday) cake 
'(pi)' => 'pi.gif', // pizza 
'(||)' => 'smile047.gif', // chopsticks 
'(M)' => 'm.gif', // messenger 
'(@)' => 'cat.gif', // cat 
'(sn)' => 'sn.gif', // snail 
'(bah)' => 'bah.gif', // sheep 
'(tu)' => 'smile042.gif', // turtel 
'(&)' => 'dog.gif', // dog 
':-[' => 'smile034.gif', // Bat 
'(?)' => 'smile038.gif', // ASL - Age Sex Location 
'({)' => 'smile026.gif', // hug left 
'(})' => 'smile025.gif', // hug right 
'(pl)' => 'smile048.gif', // plate 
'(I)' => 'light.gif', // idea 
'(8)' => 'music.gif', // music 
'(ip)' => 'ip.gif', // island 
'(S)' => 'smile021.gif', // asleep / moon 
'(*)' => 'smile022.gif', // star 
'(R)' => 'smile024.gif', // rainbow 
'(#)' => 'smile023.gif', // sun 
'(li)' => 'smile052.gif', // lightning 
'(st)' => 'smile051.gif', // storm / rain 
'(um)' => 'um.gif', // umbrella 
'(co)' => 'co.gif', // computer 
'(mp)' => 'mp.gif', // mobile phone 
'(T)' => 'phone.gif', // telephone 
'(E)' => 'mail.gif', // email 
'(ap)' => 'ap.gif', // airplane 
'(au)' => 'au.gif', // car 
'(~)' => 'movie.gif', // movie 
'(O)' => 'time.gif', // time / clock 
'(so)' => 'so.gif', // soccer ball 
'(ci)' => 'ci.gif', // cigarette 
'(yn)' => 'smile046.gif', // fingers crossed 
'(h5)' => 'smile045.gif', // high five 
'(xx)' => 'smile044.gif', // x-box 
'(mo)' => 'mo.gif'); // money


foreach($array as $s => $xc)
{
$text = str_replace($s, "<img align='absmiddle' src='".$url_address_to_images_folder.$xc."'>", $text);
}

return $text;		
}

$text = "Hi :). This is a sample description that uses smilies :D. I hope that you will find them useful (Y).";

// 1st param: text, 2nd param: the URL address to the folder where the files are located

$text = smilies($text, 'smilies/');

echo $text."</font>";
?>