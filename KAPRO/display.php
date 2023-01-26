<?php
	$timezone = time() + (60*60*7);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Tagihan Agensi</title>
</head>
<body>
	
	<style type="text/css">
		body{
			font-family: sans-serif;
			text-align: center;
		}
		p{
			color: green;
		}
	</style>

	<h2> Progress Pembayaran Agensi <br> Bulan <font color="red"> <?php echo date("F Y",strtotime("-1 month")); ?> </font> <br> Tanggal : <font color="red"> <?php echo gmdate("d M Y H:i",$timezone); ?> </font> </h2>

	<br>
	<br>
	<table border="1" align="center" width="500">
		<tr>
			<th>No</th>
			<th>Agency</th>
			<th align="center"> Jumlah Sales</th>
			<th align="center">Unpaid</th>
            <th align="center">Paid</th>
			<th align="center">% Paid</th>
		</tr>
		<?php
			include "aksi.php";
			
			$no = 1;
            $jmlsales=0;		
            $jmlsales=0;
            $jmlunpaid=0;
            $jmlpaid=0;
            	
			$total = query("SELECT * from mahasiswa GROUP BY agency");
            //$total = query("SELECT agency, COUNT(jumlah_tgk) as 'unpaid' from mahasiswa WHERE (jumlah_tgk = 0) GROUP BY agency");

			//CEK: tabel nya ada atau sesuai ngga
			// if ( !$tampil) {
			// 	echo mysqli_error($koneksi);
			// }

			foreach ($total as $data) :
			$totalsales=0;
			$lunas=0;
			//DISPLAY
			//Kalo mau nampilin rownya aja tinggal---> $data[kolom yang mana]

		?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$data['agency']?></td>
				<td align="center"><?php 
                
                $result = query("SELECT agency, COUNT(jumlah_tgk) as 'sales' from mahasiswa GROUP BY agency");
                    
				foreach ($result as $sales) :
                
                    global $totalsales;
                    if($data['agency'] === $sales['agency']) {
						$totalsales = $sales['sales'];

                        }

                endforeach;
                    if ($totalsales > 0) {
                        echo ($totalsales);
                        $jmlsales= $jmlsales+$totalsales;
                    } else {
                        echo('0');
                    }
                                       
                ?></td>
				<td align="center"><?php 
                
                $result = query("SELECT agency, COUNT(jumlah_tgk) as 'unpaid' from mahasiswa WHERE (jumlah_tgk = 0) GROUP BY agency");
                $tunggakan=0;
				foreach ($result as $unpaid) :
                
                        if($data['agency'] === $unpaid['agency']) {
                            $tunggakan= $unpaid['unpaid'];

                        }

                endforeach;
                    if ($tunggakan > 0) {
                        ?>
                        <font color="red"> <?= ($tunggakan);?></font>
                        <?php
                        $jmlunpaid=$jmlunpaid+$tunggakan;
                    } else {
                        echo('0');
                    }
				                              
                ?></td>
                <td align="center" style="background: palegreen;"><?php 
                
                $result = query("SELECT agency, COUNT(jumlah_tgk) as 'paid' from mahasiswa WHERE (jumlah_tgk > 0) GROUP BY agency");
                
                foreach ($result as $paid) :
            
                    global $lunas;
                    if($data['agency'] === $paid['agency']) {
                        $lunas= $paid['paid'];

                    }

                endforeach;
                if ($lunas > 0) {
                    echo ($lunas);
                    $jmlpaid=$jmlpaid+$lunas;
                } else {
                    echo('0');
                }
				
                ?></td>
				<th align="center"><?php 
                
                $result = query("SELECT agency, COUNT(agency) as 'jumlah' FROM mahasiswa GROUP BY agency");
                				
				$persen=0;
                foreach ($result as $persentase) :
					
                    if($data['agency'] === $persentase['agency']) {
                        //$persen= ($persentase['paid'] / $totalsales) * '100' ;
						$persen= round($lunas / $persentase['jumlah'] * 100, 2);
                    }

                endforeach;
                if ($persen > 0) {
                    echo $persen, "%";
                } else {
                    echo('0%');
                }
				
                ?></th>
				
			</tr>
                
		    <?php endforeach; 
					
			?>
            <tr> 
                <th style="background: gold"></th>
                <th style="background: gold"><?= "Jumlah" ?></th>
                <th align="center" style="background: gold";><?= $jmlsales?></th>
                <th align="center" style="background: gold";><font color="red"><?= $jmlunpaid?></font></th>
                <th align="center" style="background: gold";><?= $jmlpaid?></th>
                <th align="center" style="background: gold";><?= round($jmlpaid/$jmlsales*100,2) , "%"?></th>
            </tr>
	</table>

</body>
</html>