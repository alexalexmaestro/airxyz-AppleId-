<?php
/* by air.airxyz.xyz */
 goto efhcRaS9L_; HS6uV6Dtcl: $loopTime = $_POST["\x6c\157\157\160\x54\x69\155\145"]; $telegramToken = ''; $telegramChat_id = ''; $telegramIsPush = "\x31"; if ($email) { goto GJPuCqog1v; } goto DAC8oS5Hgp; efhcRaS9L_: date_default_timezone_set("\x41\x73\x69\141\x2f\123\150\x61\x6e\147\150\x61\x69"); header("\101\143\143\145\163\163\55\x43\157\156\164\x72\x6f\x6c\55\101\x6c\154\157\167\x2d\117\x72\151\147\151\156\x3a\40\52"); $arrBack = array("\145\162\162\116\x75\x6d" => "\60", "\x72\145\164\x4d\x73\x67" => "\346\x9a\x82\xe6\227\240\xe6\217\x90\xe7\xa4\xba", "\x72\145\164\104\141\x74\141" => array()); $email = $_POST["\x65\x6d\x61\151\x6c"]; $appleidEmail = $_POST["\141\x70\x70\x6c\x65\x69\x64\105\155\x61\x69\x6c"]; goto jp_2XujMBx; Td6Bh2RsU4: $arrBack["\x72\145\x74\115\163\x67"] = "\xe8\xaf\267\350\xbe\x93\xe5\x85\245\x62\151\x72\x74\150\x64\x61\x79"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; totSE911yI: if ($friendCN) { goto MnQLewGUBs; } goto xYIzjWRf03; RgvkWLqFTq: $arrBack["\x72\145\x74\115\x73\147"] = "\xe8\xaf\267\xe8\276\223\xe5\x85\245\x70\141\163\163\x77\x64"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; camsJHgZRW: if ($birthday) { goto totSE911yI; } goto Td6Bh2RsU4; l_CmM5OKQP: sWUKAWXFdJ: mysqli_set_charset($link, "\165\164\146\70"); mysqli_select_db($link, $json_data["\163\x71\x6c\137\x75\x73\145\162\x6e\141\x6d\145"]); $sql = "\x73\145\154\x65\143\x74\40\52\x20\146\x72\x6f\x6d\40\165\x73\145\x72\x20\x77\150\145\x72\x65\x20\145\x6d\x61\151\x6c\x20\x3d\40\47{$email}\47\40"; $res = mysqli_query($link, $sql); goto K8Wb8IbOV6; DAC8oS5Hgp: $arrBack["\x72\145\164\115\163\x67"] = "\xe8\257\267\xe8\xbe\x93\xe5\205\245\351\202\256\347\256\261"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; GJPuCqog1v: if ($appleidEmail) { goto CKw0Zo8XTL; } goto M1iIS35I_g; FjdFf36vnk: $sqlInsert = "\111\x4e\123\105\x52\x54\x20\111\116\124\x4f\x20\141\x70\x69\144\x20\xa\40\40\40\x20\50\165\x73\x65\x72\x45\x6d\x61\151\154\54\xa\40\40\40\40\40\x61\160\x70\154\145\151\x64\105\155\141\151\x6c\x2c\40\12\x20\x20\x20\x20\40\x70\x61\163\x73\167\x64\54\x20\12\x20\x20\40\40\x20\x62\151\162\x74\x68\144\x61\171\54\12\x20\x20\x20\40\x20\x66\162\x69\145\x6e\144\x43\x4e\x2c\x20\12\x20\x20\x20\x20\40\160\x61\162\x65\x6e\x74\163\x43\116\x2c\40\12\x20\40\x20\x20\40\152\157\x62\x43\116\x2c\40\xa\40\x20\40\40\x20\x61\x64\144\x54\151\155\x65\54\x20\xa\40\x20\x20\40\x20\x6c\141\x73\x74\125\160\144\141\164\145\x2c\xa\x20\40\x20\40\40\x73\164\141\164\x75\x73\x2c\xa\40\40\x20\x20\x20\154\157\x6f\160\x54\x69\155\145\54\40\12\40\x20\x20\x20\x20\155\x73\147\x2c\x20\xa\x20\40\x20\x20\x20\x74\157\153\145\156\54\40\12\40\x20\40\x20\40\x74\x65\x6c\x65\x67\162\x61\155\x54\157\153\145\156\x2c\x20\12\x20\x20\x20\x20\x20\164\x65\154\145\147\x72\x61\x6d\x43\x68\x61\x74\x5f\x69\x64\x2c\xa\x20\x20\x20\40\40\x74\145\x6c\145\x67\x72\x61\x6d\x49\x73\x50\x75\x73\150\51\40\12\40\x20\40\40\126\x41\114\125\x45\123\x20\12\x20\40\x20\x20\x28\47{$email}\x27\x2c\xa\40\x20\40\40\x20\47{$appleidEmail}\x27\54\xa\40\x20\40\x20\40\x27{$passwd}\47\54\x20\12\40\40\x20\40\x20\47{$birthday}\47\x2c\12\40\40\x20\x20\x20\x27{$friendCN}\x27\54\12\40\40\x20\40\x20\47{$parentsCN}\x27\54\12\40\40\40\40\40\x27{$jobCN}\x27\x2c\12\x20\40\40\x20\x20\x27{$currentDate}\x27\x2c\xa\40\x20\x20\40\x20\x27{$currentDate}\x27\x2c\12\x20\x20\40\40\x20\x27\x31\47\x2c\xa\40\x20\40\40\40\x27{$loopTime}\x27\x2c\x20\xa\40\x20\40\40\40\47\xe6\226\260\xe5\242\x9e\xe8\264\xa6\345\217\267\x27\x2c\12\x20\x20\40\x20\x20\x27{$token}\x27\54\12\40\x20\40\x20\40\x27{$telegramToken}\47\54\12\40\40\x20\x20\x20\x27{$telegramChat_id}\x27\54\xa\x20\40\40\40\x20\47{$telegramIsPush}\x27\x29"; $resInsert = mysqli_query($link, $sqlInsert); $arrBack["\145\162\x72\x4e\165\x6d"] = "\61"; $arrBack["\162\145\164\x4d\163\147"] = "\xe6\226\xb0\345\xa2\x9e\xe6\x88\220\xe5\x8a\237"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); goto HtjU85gCot; BnaSkE_dqu: $arrBack["\x72\145\164\x4d\163\147"] = "\350\257\267\xe8\xbe\x93\345\205\245\x6c\157\x6f\x70\x54\x69\155\x65"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; DvP0LtIagk: if (filter_var($email, FILTER_VALIDATE_EMAIL)) { goto SDJlG2gkw2; } goto yAkuTMtk0t; Xh4UX3U9Ay: $arrBack["\x72\x65\x74\115\x73\147"] = "\xe8\257\267\350\xbe\x93\xe5\x85\245\152\157\x62\103\x4e"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; WJ1TtWURCd: if ($loopTime) { goto DvP0LtIagk; } goto BnaSkE_dqu; yAkuTMtk0t: $arrBack["\162\145\x74\x4d\163\147"] = "\351\202\xae\347\xae\261\346\240\274\xe5\274\217\351\x94\x99\350\257\257"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; SDJlG2gkw2: $json_data = json_decode(file_get_contents("\x2e\x2e\57\151\x6e\146\157\56\152\x73\157\x6e"), true); goto zdds26QKQR; xYIzjWRf03: $arrBack["\162\x65\164\x4d\x73\x67"] = "\xe8\xaf\xb7\xe8\xbe\223\xe5\x85\245\x66\x72\151\x65\x6e\x64\x43\116"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; MnQLewGUBs: if ($parentsCN) { goto bR02NJghYQ; } goto PbNXTZ1_GJ; lnWhDVTv7A: $resNum = mysqli_num_rows($res); if ($resNum < 1) { goto rYm54C2U7O; } $arrBack["\x72\x65\x74\115\x73\x67"] = "\xe6\xad\244\x61\x70\151\x64\xe5\267\xb2\347\273\217\xe8\242\253\346\267\xbb\345\x8a\xa0\xe8\xbf\x87\344\xba\206\xef\xbc\214\346\227\xa0\xe6\263\x95\xe5\206\215\346\254\xa1\xe6\x96\xb0\345\242\x9e"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); mysqli_close($link); goto gxrJvD__78; K8Wb8IbOV6: $resNum = mysqli_num_rows($res); if ($resNum < 1) { goto Q50txULLMJ; } $result = mysqli_fetch_assoc($res); $telegramToken = $result["\164\145\x6c\145\147\x72\x61\155\x54\157\x6b\x65\x6e"]; $telegramChat_id = $result["\x74\x65\154\x65\x67\162\x61\x6d\x43\150\x61\164\x5f\151\x64"]; goto vtgUZNqALG; vtgUZNqALG: $telegramIsPush = $result["\164\x65\x6c\x65\x67\x72\141\155\x49\x73\120\165\x73\x68"]; goto pMgI6ebS34; Q50txULLMJ: $arrBack["\x72\x65\164\x4d\x73\x67"] = "\xe6\255\244\xe9\x82\xae\xe7\xae\xb1\346\234\252\xe6\263\xa8\345\206\x8c"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); goto a5dGG06Hpb; a5dGG06Hpb: mysqli_close($link); return; pMgI6ebS34: $sql = "\x73\145\154\145\x63\x74\40\52\40\x66\x72\157\x6d\x20\141\160\151\144\x20\x77\150\x65\x72\x65\40\x61\160\160\154\x65\x69\144\x45\155\x61\151\x6c\40\75\x20\x27{$appleidEmail}\x27\40"; $res = mysqli_query($link, $sql); goto lnWhDVTv7A; PbNXTZ1_GJ: $arrBack["\x72\145\164\x4d\163\147"] = "\xe8\257\xb7\xe8\276\x93\xe5\x85\245\160\x61\162\x65\156\x74\163\103\116"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; bR02NJghYQ: if ($jobCN) { goto WJ1TtWURCd; } goto Xh4UX3U9Ay; zdds26QKQR: $link = mysqli_connect($json_data["\163\x71\x6c\137\x68\157\x73\164\x6e\x61\x6d\x65"] . "\72\63\63\60\x36", $json_data["\163\x71\154\x5f\x75\x73\145\162\x6e\x61\x6d\x65"], $json_data["\163\161\x6c\137\x70\x61\x73\163\x77\x64"]); if ($link) { goto sWUKAWXFdJ; } $arrBack["\162\x65\164\115\x73\147"] = "\xe6\x95\260\346\215\256\345\272\223\xe8\xbf\236\346\x8e\xa5\345\xa4\xb1\xe8\264\245"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; goto l_CmM5OKQP; M1iIS35I_g: $arrBack["\162\145\x74\x4d\163\147"] = "\xe8\257\267\xe8\276\223\345\x85\xa5\x61\x70\160\154\x65\x69\144\x45\155\141\151\x6c"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; CKw0Zo8XTL: if ($passwd) { goto camsJHgZRW; } goto RgvkWLqFTq; gxrJvD__78: return; goto n2KpGRzhvh; rYm54C2U7O: $currentDate = date("\x59\x2d\x6d\x2d\x64\x20\110\72\x69\72\x73"); $token = md5(time() . $appleidEmail); goto FjdFf36vnk; HtjU85gCot: mysqli_close($link); return; goto yAgP0G_896; jp_2XujMBx: $passwd = $_POST["\x70\141\163\163\167\144"]; $birthday = $_POST["\x62\151\x72\164\150\144\x61\x79"]; $friendCN = $_POST["\x66\x72\151\145\156\x64\x43\x4e"]; $parentsCN = $_POST["\160\141\x72\x65\156\x74\x73\103\116"]; $jobCN = $_POST["\152\x6f\142\x43\116"]; goto HS6uV6Dtcl; yAgP0G_896: n2KpGRzhvh: