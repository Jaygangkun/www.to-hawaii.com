<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$WUBix98130746mOZyM=920048755;$WuLWg25653883rAcmP=905996184;$qwthn33653203VBIAE=481599617;$zBAnj81360890hHzyu=788130746;$VSDkq51377730RUbFL=755495159;$ZETop81172781hHoak=721071801;$aynSB90888714OsVEc=846535572;$NFLlf38607269zAdoe=338859097;$tUfoG60520558LaLhN=362376819;$ChoBo82980513eUmvg=47135375;$tGedu94804849TPnvU=591129634;$uvHei41733871nPQsb=447449949;$YRRAH72973356NTugp=198575210;$GjoGM54266866QmAJJ=467042419;$wuIEQ11974993IKPrv=861079630;$BQQoS29374577BXCKX=754241715;$mrkQP80542918fYNfv=811245828;$VjLco19983393WkNjw=807013170;$djIbp27859637vUngF=176498819;$qCqyR26116955Yxplh=413682315;$UaZfz80400793kfeXK=511685720;$PryiS80269224IFpOU=4020068;$eQHzp62385321gfMXJ=567483353;$CUeXv98997133CGMKQ=680423343;$YHOlw45646804dvYcq=147319117;$wrNKg69989596TITqj=241388480;$loNKa40465982JjBnK=938479875;$FBAKO18997799NVdHc=574040492;$qCEOX53535054KsagH=495594686;$fCZAe38991139UQNIh=600526641;$KQDOJ12491249XFctP=60419642;$mOlSO65492043yiDDb=459663518;$JQSgg22121903VAZlM=337005988;$FgoYP68324588TCkVA=822820563;$SWDuw89541961vvwwd=559289389;$QOssE66512060qXCFP=308478873;$BxsFz15399890kIQUD=528027192;$adGwB35206996ajcjr=924739450;$Zpmmk51373462bfkxb=374055573;$CDfVU61513466WoqPW=271472384;$CYofy82629342RyGhO=500029051;$bFEJZ61115235NimSG=26558708;$JxAJT84769616LlmZU=861577675;$UWLCz49667352aUoPk=154516653;$DAqWb13921251dyDYU=222085413;$ZWuMq98308192WylYa=828640030;$dCdaY38395869ordLt=982657995;$CJwYi58160496PofdQ=706465506;$SPzSW76244412GmyMl=144636211;$Dnclv21247894zyvMy=917484195;?><?php function oE9dBNjn0hHPEIxcl() { global $XxUBMOp2N7eJa5VtbH, $P2N3ANrE7NK4CO5a, $xXef_Bf_vR1w8i, $grab_parameters; $ctime = time(); if(($ctime - $xXef_Bf_vR1w8i) > 15) cSWJnXyUrcempD(); $xXef_Bf_vR1w8i = $ctime; if(!function_exists('getrusage'))return; if(!isset($P2N3ANrE7NK4CO5a)){ $P2N3ANrE7NK4CO5a = explode('|',$grab_parameters['xs_cpumon']); } if(!is_array($P2N3ANrE7NK4CO5a)||!$P2N3ANrE7NK4CO5a[0])return; $zyn5Hgl78t9Bn = microtime(true); if(($e05nUMcS4=$zyn5Hgl78t9Bn-$XxUBMOp2N7eJa5VtbH[1]) < $P2N3ANrE7NK4CO5a[3])return; $qCBeyN1zgX = getrusage(); $dXDmwmq3qFSQg0W = $qCBeyN1zgX["ru_utime.tv_sec"] + $qCBeyN1zgX["ru_utime.tv_usec"] / 1e6;	 $leprSeyuRghCyST8hjA = 0; if($XxUBMOp2N7eJa5VtbH){ $f_FecIo1zuhn = ($dXDmwmq3qFSQg0W - $XxUBMOp2N7eJa5VtbH[0]); $leprSeyuRghCyST8hjA = 100 * $f_FecIo1zuhn / $e05nUMcS4; } if($leprSeyuRghCyST8hjA>$P2N3ANrE7NK4CO5a[0]) { Y1qFyrFH0Wg53("\n<br>CPU monitor sleep: ".number_format($leprSeyuRghCyST8hjA,2)."% (". number_format($f_FecIo1zuhn,2)." / ".number_format($e05nUMcS4,2). " / ".number_format($zyn5Hgl78t9Bn-$XxUBMOp2N7eJa5VtbH[2],2)." ) ". (number_format(memory_get_usage()/1024).'K')); $XxUBMOp2N7eJa5VtbH[2] = $zyn5Hgl78t9Bn+$P2N3ANrE7NK4CO5a[1]; sleep($P2N3ANrE7NK4CO5a[1]); Y1qFyrFH0Wg53(".. go\n<br>"); }else if($e05nUMcS4 > $P2N3ANrE7NK4CO5a[2]) { $XxUBMOp2N7eJa5VtbH[0] = $dXDmwmq3qFSQg0W; $XxUBMOp2N7eJa5VtbH[1] = $zyn5Hgl78t9Bn; } } function cSWJnXyUrcempD()  { $gvmnRl5DdeA8rT = array( TuLXmMBFSKj5mt.Nivf2Dt1sV, TuLXmMBFSKj5mt.xG52MBct6dseMt ); MqLRGN6ocWR('Touch: '.TuLXmMBFSKj5mt.Nivf2Dt1sV); foreach($gvmnRl5DdeA8rT as $lg) { if(file_exists($lg)){ touch($lg); } } } function DGtpyxfykIiii($progpar) { global $NN7qjJXDtlroH6AUI; if((time()-$NN7qjJXDtlroH6AUI)>GTbIezugf4NKv1('xs_state_interval',5)){ $NN7qjJXDtlroH6AUI = time(); $progpar[] = NpJgovXJ0kAS(); tRsLQ5oUyNb5(xG52MBct6dseMt,AEks4EOfaorM1XL($progpar)); } } function t58ZTbPW78() { global $l0IA2m0DUlWF9; $l0IA2m0DUlWF9 = cokTfdpvPOceFs7s(TuLXmMBFSKj5mt.'debug.log','a'); Y1qFyrFH0Wg53( str_repeat('=',60)."\n".date('Y-m-d H:i:s')."\n\n"); } function xwynkDbx7TFNHJY_l() { $e = new Exception; var_dump($e->getTraceAsString()); } function Y1qFyrFH0Wg53($izLWaYLVFR8JE, $DSbF8k9o4RWJPqYyNG = '') { global $l0IA2m0DUlWF9,$ec75yzgau3Fm1,$_udbg_tm; if(!$_udbg_tm)$_udbg_tm = microtime(true); $_t = number_format(microtime(true)-$_udbg_tm,1); $SLdNjRQUUqkVwYEze = $_GET['ddbg'.$DSbF8k9o4RWJPqYyNG]; if($SLdNjRQUUqkVwYEze){ if($l0IA2m0DUlWF9){ SEQKcL37vrK0KML0($l0IA2m0DUlWF9, strip_tags($izLWaYLVFR8JE)); } echo $ec75yzgau3Fm1 ? strip_tags($izLWaYLVFR8JE) : '| '.$_t .' |<br>'.$izLWaYLVFR8JE; flush(); if(function_exists('ob_flush'))ob_flush(); } } function SwIPpM21WDqv($yZBibWpQs71gXgnVNh) { global $grab_parameters; MqLRGN6ocWR('Del: '.$yZBibWpQs71gXgnVNh); if($grab_parameters['xs_filewmove'] && file_exists($yZBibWpQs71gXgnVNh) ){ $NlFEk2SbUh = tempnam("/tmp", "sgtmp"); if(file_exists($NlFEk2SbUh))unlink($NlFEk2SbUh); if(file_exists($yZBibWpQs71gXgnVNh))rename($yZBibWpQs71gXgnVNh, $NlFEk2SbUh); return !file_exists($NlFEk2SbUh) || unlink($NlFEk2SbUh); }else { return unlink($yZBibWpQs71gXgnVNh); } } function rReu77ByhTGR_sc($f){if(function_exists('file_get_contents'))return file_get_contents($f);else return implode('',file($f));} function cokTfdpvPOceFs7s($yZBibWpQs71gXgnVNh, $SNh0aonkZ = '') { global $grab_parameters; MqLRGN6ocWR('Open for writing: '.$yZBibWpQs71gXgnVNh); if($grab_parameters['xs_filewmove'] && file_exists($yZBibWpQs71gXgnVNh) ){ $QL4o5uPeqRe8cc4z = ($SNh0aonkZ == 'a') ? file_get_contents($yZBibWpQs71gXgnVNh) : ''; SwIPpM21WDqv($yZBibWpQs71gXgnVNh); $pf = fopen($yZBibWpQs71gXgnVNh, 'w'); if($QL4o5uPeqRe8cc4z){ SEQKcL37vrK0KML0($pf, $QL4o5uPeqRe8cc4z); } return $pf; } else { $pf = fopen($yZBibWpQs71gXgnVNh, 'w'); return $pf; } } function IaXzOg24Zukh13cJ($yZBibWpQs71gXgnVNh) { return md5($yZBibWpQs71gXgnVNh); } function Qg9JXhBg7s($PkA6ZmFD87qyv1obf_s, $K18oR2j0FtXUC2e) { $mXYcdrjW3RmQ = K0e08WrVt . substr($PkA6ZmFD87qyv1obf_s,0,2) . '/'; if(!file_exists($mXYcdrjW3RmQ)) mkdir($mXYcdrjW3RmQ, 0755); $pf = cokTfdpvPOceFs7s($mXYcdrjW3RmQ . $PkA6ZmFD87qyv1obf_s.'.txt','w'); SEQKcL37vrK0KML0($pf, serialize($K18oR2j0FtXUC2e)); fclose($pf); } function jc8PTlfERBm6($PkA6ZmFD87qyv1obf_s) { $fl = K0e08WrVt . substr($PkA6ZmFD87qyv1obf_s,0,2) . '/' . $PkA6ZmFD87qyv1obf_s . '.txt'; if(!file_exists($fl)) return array(); $NDMyPgjiu_2Ct0h3d = Zx6LBsBDu($fl); return unserialize($NDMyPgjiu_2Ct0h3d); } function AEks4EOfaorM1XL($qCBeyN1zgX) { global $grab_parameters; if($grab_parameters['xs_dumptype'] == 'var_export') return var_export($qCBeyN1zgX,1); else return serialize($qCBeyN1zgX); } function qosXLA3o9B8rfQ4hiZq($qCBeyN1zgX) { global $grab_parameters; if($grab_parameters['xs_dumptype'] != 'var_export') $Wk4s_hEhE7ZuPpQ0PK6 = unserialize($qCBeyN1zgX); else eval ($s='$Wk4s_hEhE7ZuPpQ0PK6 = '.$qCBeyN1zgX.';'); return $Wk4s_hEhE7ZuPpQ0PK6; } function ZctF_GYww0IP2FS9v($i,$PVr4ajN4yAj3k,$Hl1GlYN42WF=false) { if($Hl1GlYN42WF && $i<2) return $PVr4ajN4yAj3k; return $i ? preg_replace('#(.*)\.#','$01'.$i.'.',$PVr4ajN4yAj3k) : $PVr4ajN4yAj3k; } function tRsLQ5oUyNb5($yZBibWpQs71gXgnVNh, $vhxsXieQ5PIWy_, $IHAIkIdA4B7B782=TuLXmMBFSKj5mt, $Q2DDUrsp5BFyIZ = false) { Y1qFyrFH0Wg53("\n<br>Save file start: $yZBibWpQs71gXgnVNh\n".	number_format(memory_get_usage()/1024)."K\n"); $txJi9wGf5CVO = false; if($Q2DDUrsp5BFyIZ){ if(function_exists('gzopen')){ if(!strstr($yZBibWpQs71gXgnVNh,'.log')) $yZBibWpQs71gXgnVNh .= '.gz'; $pf = gzopen($IHAIkIdA4B7B782.$yZBibWpQs71gXgnVNh,"w"); gzwrite($pf, $vhxsXieQ5PIWy_); gzclose($pf); $txJi9wGf5CVO = true; }else if(function_exists('gzencode')){ $XnbTWsGGULHPmgsXwH = gzencode($vhxsXieQ5PIWy_, 1); unset($vhxsXieQ5PIWy_); $vhxsXieQ5PIWy_ = $XnbTWsGGULHPmgsXwH; if(!strstr($yZBibWpQs71gXgnVNh,'.log')) $yZBibWpQs71gXgnVNh .= '.gz'; } } if(!$txJi9wGf5CVO){ $pf = cokTfdpvPOceFs7s($IHAIkIdA4B7B782.$yZBibWpQs71gXgnVNh,"w"); SEQKcL37vrK0KML0($pf, $vhxsXieQ5PIWy_); fclose($pf); } Y1qFyrFH0Wg53("\n<br>Save file complete: $yZBibWpQs71gXgnVNh\n".	number_format(memory_get_usage()/1024)."K\n"); @chmod($IHAIkIdA4B7B782.$yZBibWpQs71gXgnVNh, 0666); unset($vhxsXieQ5PIWy_); return $yZBibWpQs71gXgnVNh; } function Zx6LBsBDu($yZBibWpQs71gXgnVNh, $x8QZ2rXNISg5ggwfr = false) { if($x8QZ2rXNISg5ggwfr && file_exists($fn = $yZBibWpQs71gXgnVNh.'.gz')) $yZBibWpQs71gXgnVNh = $fn; MqLRGN6ocWR('Read: '.$yZBibWpQs71gXgnVNh); $fc = @file_get_contents($yZBibWpQs71gXgnVNh); if($x8QZ2rXNISg5ggwfr){ if((ord($fc[0])==0x1f)&&(ord($fc[1])==0x8b)){ if(function_exists('gzinflate')){ if($funVlrc4LVySKpRCC = gzinflate(substr($fc,10))) $fc = $funVlrc4LVySKpRCC; } else if(function_exists('gzdecode'))if($funVlrc4LVySKpRCC = gzdecode($fc))$fc = $funVlrc4LVySKpRCC; } } return $fc; } function SFyCqd1ndtCTQ($txh9yAUKCWsiF) { return @unserialize(Zx6LBsBDu(TuLXmMBFSKj5mt.$txh9yAUKCWsiF, true)); } function MqLRGN6ocWR($s) { } function Da4nnYdI_() { $taQuUZ8AF = array(); MqLRGN6ocWR('Get log list: '.TuLXmMBFSKj5mt); $pd = opendir(TuLXmMBFSKj5mt); while($fn=readdir($pd)) if(preg_match('#^\d+.*?\.log$#',$fn)) $taQuUZ8AF[] = $fn; closedir($pd); sort($taQuUZ8AF); return $taQuUZ8AF; } function xnuzCmCCV3S9VStg($tm) { $tm = intval($tm); $h = intval($tm/60/60); $tm -= $h*60*60; $m = intval($tm/60); $tm -= $m*60; $s = $tm; if($s<10)$s="0$s"; if($m<10)$m="0$m"; return "$h:$m:$s"; } function PpV5U2ubaMUby9SliLO($TXmWeoj9jo, $Yg_t9QQq8zcmiDd) { if(strstr($Yg_t9QQq8zcmiDd, '://'))return $Yg_t9QQq8zcmiDd; 
																											 if($TXmWeoj9jo[strlen($TXmWeoj9jo)-1] == '/' && $Yg_t9QQq8zcmiDd[0] == '/') $Yg_t9QQq8zcmiDd = substr($Yg_t9QQq8zcmiDd, 1); if($TXmWeoj9jo[strlen($TXmWeoj9jo)-1] == '/' && $TXmWeoj9jo[strlen($TXmWeoj9jo)-2] == '/' ) $TXmWeoj9jo = substr($TXmWeoj9jo, 0, strlen($TXmWeoj9jo)-1); return $TXmWeoj9jo . $Yg_t9QQq8zcmiDd; } function vlFjdpHNBgwv5SbZw(){ global $cx8MXWPn4cWtc, $f05vf9khfG7qm11hiB; $ctime = time(); if(($ctime - $cx8MXWPn4cWtc) > GTbIezugf4NKv1('xs_interrupt_interval',3)){ $cx8MXWPn4cWtc = $ctime; if(file_exists($VgoZuTff46gVC = TuLXmMBFSKj5mt.naDNgdhQWKEoBa)) $f05vf9khfG7qm11hiB = $VgoZuTff46gVC; } return $f05vf9khfG7qm11hiB; } function GTbIezugf4NKv1($s3uOaIz554zkrRrHuAA, $MOlV03x6aekT3ISkYJ = false) { global $grab_parameters; return isset($grab_parameters[$s3uOaIz554zkrRrHuAA])  ? $grab_parameters[$s3uOaIz554zkrRrHuAA] : $MOlV03x6aekT3ISkYJ; } function Xz3u7KwMuNzZ0p($dr) { $dr = preg_replace('#\?.*#', '', $dr); $dr = preg_replace('#\#.*#', '', $dr); if($dr[strlen($dr)-1]!='/' && $dr) { $dr=str_replace('\\','/',dirname($dr)); if($dr[strlen($dr)-1]!='/')$dr.='/'; } return PpV5U2ubaMUby9SliLO($dr, ''); } function xZCUYP4DbtlRDk($bkFhNzhUv9opP4,$l8Kc6qO7MU) { return Xz3u7KwMuNzZ0p(strstr($l8Kc6qO7MU,'://') ? $l8Kc6qO7MU : $bkFhNzhUv9opP4 . $l8Kc6qO7MU); 
																											 } function AcAo_7JhC_QYBb1w_($IHAIkIdA4B7B782, $jGAi6OsYsF) { MqLRGN6ocWR('Clear dir: '.$IHAIkIdA4B7B782); $pd = opendir($IHAIkIdA4B7B782); if($pd) while($fn = readdir($pd)) if(is_file($IHAIkIdA4B7B782.$fn) && preg_match('#'.$jGAi6OsYsF.'$#',$fn)) { @SwIPpM21WDqv($IHAIkIdA4B7B782.$fn); }else if($fn[0]!='.'&&is_dir($IHAIkIdA4B7B782.$fn)) { AcAo_7JhC_QYBb1w_($IHAIkIdA4B7B782.$fn.'/', $jGAi6OsYsF); @rmdir($IHAIkIdA4B7B782.$fn); } closedir($pd); } function SEQKcL37vrK0KML0($pf, $NDMyPgjiu_2Ct0h3d) { global $grab_parameters; if($grab_parameters['xs_write_disable'] ){ } return @fwrite($pf, $NDMyPgjiu_2Ct0h3d); } function hUdK6YSwWWGWPyo($d4Twvy93ftO, $ybU_ViMnsXh) { $ws = "<xmlsitemaps_settings>"; foreach($ybU_ViMnsXh as $k=>$v) if(strstr($k,'xs_')) $ws .= "\n\t<option name=\"$k\">$v</option>"; $ws .= "\n</xmlsitemaps_settings>"; $pf = cokTfdpvPOceFs7s($d4Twvy93ftO,'w'); SEQKcL37vrK0KML0($pf, $ws); fclose($pf); } function iu9ZFgawTmqjTsQK($d4Twvy93ftO, &$ybU_ViMnsXh, $ycgnlq_fqFvqI2QFaif = false) { $fl = Zx6LBsBDu($d4Twvy93ftO); preg_match_all('#<option name="(.*?)">(.*?)</option>#is', $fl, $oGHUtGh6VMhR5L, PREG_SET_ORDER); foreach($oGHUtGh6VMhR5L as $m) if(!$ycgnlq_fqFvqI2QFaif || $m[2]) { $ybU_ViMnsXh[$m[1]] = $m[2]; } return $fl && (count($oGHUtGh6VMhR5L)>0); } function C12hOInTGiLMkPq7L($s3uOaIz554zkrRrHuAA, $TFrJb5bVRe = true) { global $grab_parameters, $R835G5lbvW9JfMRYGV; return str_replace(basename($grab_parameters['xs_smurl']), $grab_parameters[$s3uOaIz554zkrRrHuAA],  $grab_parameters['xs_smurl']).($TFrJb5bVRe ? $R835G5lbvW9JfMRYGV : ''); } function ciWGCr0W_($IHAIkIdA4B7B782, $f2) { $f1 = preg_replace('#(\.[^\.]+$)#', '2$01', $f2); return @file_exists($IHAIkIdA4B7B782.$f1) ? $f1 : $f2; } function NpJgovXJ0kAS() { global $EF0UYjCwo; $eJm473_iCy0 = '';$_ss=0; if($EF0UYjCwo) foreach($EF0UYjCwo as $L09ejYxM52UFE=>$ta){ if(count($ta)){ $_s = array_sum($ta)/count($ta); $_ss+=$_s; $eJm473_iCy0 .= $L09ejYxM52UFE.' = '.number_format($_s,2)."s \n "; } } return '['.number_format($_ss,2).'s] '.$eJm473_iCy0; } function uSk7q90jdmeIeR565A($L09ejYxM52UFE, $xm9Q8TlCl = false) { global $EF0UYjCwo, $gwcVb_kUf; if(!isset($EF0UYjCwo[$L09ejYxM52UFE])) $EF0UYjCwo[$L09ejYxM52UFE] = array(); if($xm9Q8TlCl){ if($gwcVb_kUf[$L09ejYxM52UFE]){ $t = microtime(true) - $gwcVb_kUf[$L09ejYxM52UFE]; $gwcVb_kUf[$L09ejYxM52UFE] = 0; array_push($EF0UYjCwo[$L09ejYxM52UFE], $t); if(count($EF0UYjCwo[$L09ejYxM52UFE])>GTbIezugf4NKv1('xs_perf_counter',20)) array_shift($EF0UYjCwo[$L09ejYxM52UFE]); } }else { $gwcVb_kUf[$L09ejYxM52UFE] = microtime(true); } } 



































































































