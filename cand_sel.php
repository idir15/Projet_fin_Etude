<?php

session_start();  
$idR=$_SESSION['id_recruteur'];



require "bd.php";
if(isset($_POST['a'])){

if(isset($_POST['cr'])){	
			$req="SELECT c.email, o.code_offre, o.poste, c.nom, c.prenom, cd.etat, cd.id_candidat FROM recruteur r, offre_emploi o, candidature cd, candidat c WHERE r.id_recruteur = o.id_recruteur AND o.id_recruteur='$idR' AND c.id_candidat=cd.id_candidat AND cd.code_offre=o.code_offre AND cd.reponse IS NULL AND cd.etat='Conditions requises satisfaites' ";
			$rep = mysqli_query($connection,$req);
		}elseif(isset($_POST['ms'])){		
			$req="SELECT c.email, o.code_offre, o.poste, c.nom, c.prenom, cd.etat, cd.id_candidat FROM recruteur r, offre_emploi o, candidature cd, candidat c WHERE r.id_recruteur = o.id_recruteur AND o.id_recruteur='$idR' AND c.id_candidat=cd.id_candidat AND cd.code_offre=o.code_offre AND cd.reponse IS NULL AND cd.etat='Manque de spécialités' ";
			$rep = mysqli_query($connection,$req);
		}elseif(isset($_POST['me'])){		
			$req="SELECT c.email, o.code_offre, o.poste, c.nom, c.prenom, cd.etat, cd.id_candidat FROM recruteur r, offre_emploi o, candidature cd, candidat c WHERE r.id_recruteur = o.id_recruteur AND o.id_recruteur='$idR' AND c.id_candidat=cd.id_candidat AND cd.code_offre=o.code_offre AND cd.reponse IS NULL AND cd.etat='Manque d\'experiences' ";
			$rep = mysqli_query($connection,$req);
		}elseif(isset($_POST['ml'])){	
			$req="SELECT c.email, o.code_offre, o.poste, c.nom, c.prenom, cd.etat, cd.id_candidat FROM recruteur r, offre_emploi o, candidature cd, candidat c WHERE r.id_recruteur = o.id_recruteur AND o.id_recruteur='$idR' AND c.id_candidat=cd.id_candidat AND cd.code_offre=o.code_offre AND cd.reponse IS NULL AND cd.etat='Manque de langues' ";
			$rep = mysqli_query($connection,$req);
		}elseif(isset($_POST['mc'])){		
			$req="SELECT c.email, o.code_offre, o.poste, c.nom, c.prenom, cd.etat, cd.id_candidat FROM recruteur r, offre_emploi o, candidature cd, candidat c WHERE r.id_recruteur = o.id_recruteur AND o.id_recruteur='$idR' AND c.id_candidat=cd.id_candidat AND cd.code_offre=o.code_offre AND cd.reponse IS NULL AND cd.etat='Manque de compétences' ";
			$rep = mysqli_query($connection,$req);
		}   
			  ?>
		<table id="myTable" cellspacing="0" width="100%" class=" table responsive table-striped   mt-4 align-center ">
	
	<thead >
		<tr>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Poste de l'offre</th>
			<th>Réponse</th>
			<th>Detail</th>
			
			
		</tr>
	</thead>
	
	<tbody>
		<?php
  if (mysqli_num_rows($rep)>0)
  {
  while($row = mysqli_fetch_assoc($rep))

{
?>

		<tr>
			<td class='d-none idc'><?php echo $row['id_candidat']; ?></td>
			<td class='d-none cof'><?php echo $row['code_offre']; ?></td>
			<td class='d-none cof'><?php echo $row['email']; ?></td>
			<td><?php echo $row['nom']; ?></td>
			<td><?php echo $row['prenom']; ?></td>
			<td><?php echo $row['poste']; ?></td>
		<td > <button onClick="valider('<?php echo $row["id_candidat"]; ?>','<?php echo $row["code_offre"]; ?>','<?php echo $row["email"]; ?>')" class="btn-primary"><i class="fa fa-check"></i></button> <button onClick="refuser('<?php echo $row["id_candidat"]; ?>','<?php echo $row["code_offre"]; ?>','<?php echo $row["email"]; ?>')" class="btn-danger"><i class="fa fa-times"></i></button></td>
			<td class="text-center">+</td>


		
		</tr>
		<?php
    } }
    ?>
	</tbody>
	
      
</table>
<?php
}elseif(isset($_POST['tc'])){	
			$reqt="SELECT c.email, o.code_offre, o.poste, c.nom, c.prenom, cd.etat, cd.id_candidat FROM recruteur r, offre_emploi o, candidature cd, candidat c WHERE r.id_recruteur = o.id_recruteur AND o.id_recruteur='$idR' AND c.id_candidat=cd.id_candidat AND cd.code_offre=o.code_offre AND cd.reponse IS NULL  ";
			$rept = mysqli_query($connection,$reqt);

		
?>
		
		<table id="myTable" cellspacing="0" width="100%" class=" table responsive table-striped   mt-4 align-center ">
	
	<thead >
		<tr>
			<th class="d-none">Nom</th>
			<th class="d-none">Prenom</th>
			<th class="d-none">Poste de l'offre</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Poste de l'offre</th>
			<th>Rgh</th>
			<th>Detail</th>
			
			
		</tr>
	</thead>
	
	<tbody>
		<?php
  if (mysqli_num_rows($rept)>0)
  {
  while($rowt = mysqli_fetch_assoc($rept))

{
?>

		<tr>
			<td class='d-none idc'><?php echo $rowt['id_candidat']; ?></td>
			<td class='d-none cof'><?php echo $rowt['code_offre']; ?></td>
			<td class='d-none cof'><?php echo $rowt['email']; ?></td>
			<td><?php echo $rowt['nom']; ?></td>
			<td><?php echo $rowt['prenom']; ?></td>
			<td><?php echo $rowt['poste']; ?></td>
		    <td><?php echo $rowt['etat']; ?></td>
			<td class="text-center">+</td>


		
		</tr>
		<?php
    } }
    ?>
	</tbody>
	
      
</table>
<?php
}elseif(isset($_POST['cs'])){	
			$reqt="SELECT c.email, o.code_offre, o.poste, c.nom, c.prenom, cd.etat, cd.id_candidat FROM recruteur r, offre_emploi o, candidature cd, candidat c WHERE r.id_recruteur = o.id_recruteur AND o.id_recruteur='$idR' AND c.id_candidat=cd.id_candidat AND cd.code_offre=o.code_offre AND cd.reponse='Accepté'  ";
			$rept = mysqli_query($connection,$reqt);

		
?>

		<table id="myTablee" cellspacing="0" width="100%" class=" table responsive table-striped   mt-4 align-center ">
	
	<thead >
		<tr>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Poste de l'offre</th>
			<th>Remarque</th>
			<th>Detail</th>
			
			
		</tr>
	</thead>
	
	<tbody>
		<?php
  if (mysqli_num_rows($rept)>0)
  {
  while($rowt = mysqli_fetch_assoc($rept))

{
?>

		<tr>
			<td class='d-none idc'><?php echo $rowt['id_candidat']; ?></td>
			<td class='d-none cof'><?php echo $rowt['code_offre']; ?></td>
			<td class='d-none cof'><?php echo $rowt['email']; ?></td>
			<td><?php echo $rowt['nom']; ?></td>
			<td><?php echo $rowt['prenom']; ?></td>
			<td><?php echo $rowt['poste']; ?></td>
		    <td><?php echo $rowt['etat']; ?></td>
			<td class="text-center">+</td>


		
		</tr>
		<?php
    } }
    ?>
	</tbody>
	
      
</table><?php }?>

