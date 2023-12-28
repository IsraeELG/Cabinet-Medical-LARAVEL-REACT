<!DOCTYPE html>
<html lang="en" style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF download</title>
</head>
<body>

        <br>
        <p style="margin-left:505px;"><b>S.H CABINET</b><br>
<b>Adresse:</b>Quartier administratif  <br>
IMM 19 NR 8 Demnate <br>
<b> TEL:</b> 05 34 87 34 56</p>
        
        <p style="margin-left: -10px;margin-top:-115px;"><B>DR.{{ $ordonnance->nomM }} {{ $ordonnance->prenomM }}</B></p><BR>
            <p style="margin-left: -12px;margin-top: -26px;">MEDECIN {{ $ordonnance->specialite }}</p><BR>
                <p style="margin-left:-14px;margin-top: -23px;"><b>TEL:</b> 05 22 89 34 65</p>
<p style="margin-left: -13px;margin-top: -14px;"><b>EMAIL:</b>dahreddineabd@gmail.com</p>
<hr>




<div class="card-body">
        <h5 class="card-title" style="margin-left:280px;font-size:20px;">Le : {{ $ordonnance->dateordonnance }}</h5>
        
        <p class="card-text" style="margin-left:230px;font-size:20px;">Patient : {{ $ordonnance->nomP }} {{ $ordonnance->prenomP }}</p>
       
       <center style="margin-top:200px;">
        <p class="card-text"><b>Age Patient :</b> {{ $ordonnance->ageP }}</p>
        <p class="card-text"><b>Poids Patient :</b> {{ $ordonnance->poidsP }}</p>
        <p class="card-text"><b>Sexe Patient : </b>{{ $ordonnance->sexeP }}</p>
        <p class="card-text"><b>Medicaments :</b> {{ $ordonnance->Medicaments }}</p>
</center>
  </div>
 
</div>

<footer style="margin-top:350px;margin-left:50px;">
<hr>
<b>Adresse:</b>Quartier administratif IMM 19 NR 8 Demnate / TEL:05 34 87 34 56 /TEL:05 34 87 34 57

</footer>
</body>
</html>