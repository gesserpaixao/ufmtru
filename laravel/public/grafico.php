
<head>
    <meta charset="utf-8" />
    <title>Grafico</title>
    <link id="themecss" rel="stylesheet" type="text/css" href="./shieldui.1.7.37-Trial/css/light/all.min.css" />
    <link id="themecss" rel="stylesheet" type="text/css" href="./shieldui.1.7.37-Trial/css/light/all.min.css" />
    <script type="text/javascript" src="./shieldui.1.7.37-Trial/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="./shieldui.1.7.37-Trial/js/shieldui-all.min.js"></script>

</head>

<body class="theme-light">
    <?php 
        session_start();
        $conn = mysqli_connect("localhost","ufmtru","bLHpejBv") or die("Erro ao conectar ao banco de dados");
        $db = mysqli_select_db($conn,"ufmtru") or die("Erro no banco de dados");        

        $resp = mysqli_query($conn, $queryp=("SELECT questao_01 FROM `avaliars` WHERE questao_01 = 'pessimo'"));        
        if ($p = mysqli_query($conn,$queryp)) {$p = mysqli_num_rows($resp);}        
        $resr = mysqli_query($conn, $queryr=("SELECT questao_01 FROM `avaliars` WHERE questao_01 = 'ruin'"));        
        if ($r = mysqli_query($conn,$queryr)) {$r = mysqli_num_rows($resr);}        
        $resb = mysqli_query($conn, $queryb=("SELECT questao_01 FROM `avaliars` WHERE questao_01 = 'bom'"));        
        if ($b = mysqli_query($conn,$queryb)) {$b = mysqli_num_rows($resb);}        
        $resrg = mysqli_query($conn, $queryrg=("SELECT questao_01 FROM `avaliars` WHERE questao_01 = 'regular'"));        
        if ($rg = mysqli_query($conn,$queryrg)) {$rg = mysqli_num_rows($resrg);}        
        $reso = mysqli_query($conn, $queryo=("SELECT questao_01 FROM `avaliars` WHERE questao_01 = 'otimo'"));        
        if ($o = mysqli_query($conn,$queryo)) {$o = mysqli_num_rows($reso);}                 
        $pessimo = $p;
        $ruim = $r;
        $bom = $b;
        $regular = $rg;
        $otimo = $o;
        

        $q2resp = mysqli_query($conn, $q2queryp=("SELECT questao_02 FROM `avaliars` WHERE questao_02 = 'pessimo'"));        
        if ($q2p = mysqli_query($conn,$q2queryp)) {$q2p = mysqli_num_rows($q2resp);}        
        $q2resr = mysqli_query($conn, $q2queryr=("SELECT questao_02 FROM `avaliars` WHERE questao_02 = 'ruin'"));        
        if ($q2r = mysqli_query($conn,$q2queryr)) {$q2r = mysqli_num_rows($q2resr);}        
        $q2resb = mysqli_query($conn, $q2queryb=("SELECT questao_02 FROM `avaliars` WHERE questao_02 = 'bom'"));        
        if ($q2b = mysqli_query($conn,$q2queryb)) {$q2b = mysqli_num_rows($q2resb);}        
        $q2resrg = mysqli_query($conn, $q2queryrg=("SELECT questao_02 FROM `avaliars` WHERE questao_02 = 'regular'"));        
        if ($q2rg = mysqli_query($conn,$q2queryrg)) {$q2rg = mysqli_num_rows($q2resrg);}        
        $q2reso = mysqli_query($conn, $q2queryo=("SELECT questao_02 FROM `avaliars` WHERE questao_02 = 'otimo'"));        
        if ($q2o = mysqli_query($conn,$q2queryo)) {$q2o = mysqli_num_rows($q2reso);} 
        
        $q2pessimo = $q2p;
        $q2ruim = $q2r;
        $q2bom = $q2b;
        $q2regular = $q2rg;
        $q2otimo = $q2o;


        $q3resp = mysqli_query($conn, $q3queryp=("SELECT questao_02 FROM `avaliars` WHERE questao_02 = 'pessimo'"));        
        if ($q3p = mysqli_query($conn,$q3queryp)) {$q3p = mysqli_num_rows($q3resp);}        
        $q3resr = mysqli_query($conn, $q3queryr=("SELECT questao_02 FROM `avaliars` WHERE questao_02 = 'ruin'"));        
        if ($q3r = mysqli_query($conn,$q3queryr)) {$q3r = mysqli_num_rows($q3resr);}        
        $q3resb = mysqli_query($conn, $q3queryb=("SELECT questao_02 FROM `avaliars` WHERE questao_02 = 'bom'"));        
        if ($q3b = mysqli_query($conn,$q3queryb)) {$q3b = mysqli_num_rows($q3resb);}        
        $q3resrg = mysqli_query($conn, $q3queryrg=("SELECT questao_02 FROM `avaliars` WHERE questao_02 = 'regular'"));        
        if ($q3rg = mysqli_query($conn,$q3queryrg)) {$q3rg = mysqli_num_rows($q3resrg);}        
        $q3reso = mysqli_query($conn, $q3queryo=("SELECT questao_02 FROM `avaliars` WHERE questao_02 = 'otimo'"));        
        if ($q3o = mysqli_query($conn,$q3queryo)) {$q3o = mysqli_num_rows($q3reso);} 

        $q3pessimo = $q3p;
        $q3ruim = $q3r;
        $q3bom = $q3b;
        $q3regular = $q3rg;
        $q3otimo = $q3o;

        $q4resp = mysqli_query($conn, $q4queryp=("SELECT questao_04 FROM `avaliars` WHERE questao_04 = 'pessimo'"));        
        if ($q4p = mysqli_query($conn,$q4queryp)) {$q4p = mysqli_num_rows($q4resp);echo $q4p;}        
        $q4resr = mysqli_query($conn, $q4queryr=("SELECT questao_04 FROM `avaliars` WHERE questao_04 = 'ruin'"));        
        if ($q4r = mysqli_query($conn,$q4queryr)) {$q4r = mysqli_num_rows($q4resr);echo $q4r;}        
        $q4resb = mysqli_query($conn, $q4queryb=("SELECT questao_04 FROM `avaliars` WHERE questao_04 = 'bom'"));        
        if ($q4b = mysqli_query($conn,$q4queryb)) {$q4b = mysqli_num_rows($q4resb);echo $q4b;}        
        $q4resrg = mysqli_query($conn, $q4queryrg=("SELECT questao_04 FROM `avaliars` WHERE questao_04 = 'regular'"));        
        if ($q4rg = mysqli_query($conn,$q4queryrg)) {$q4rg = mysqli_num_rows($q4resrg);echo $q4rg;}        
        $q4reso = mysqli_query($conn, $q4queryo=("SELECT questao_04 FROM `avaliars` WHERE questao_04 = 'otimo'"));        
        if ($q4o = mysqli_query($conn,$q4queryo)) {$q4o = mysqli_num_rows($q4reso);echo $q4o;} 

        $q4pessimo = $q4p;
        $q4ruim = $q4r;
        $q4bom = $q4b;
        $q4regular = $q4rg;
        $q4otimo = $q4o;
    ?>
    <div width="50%">
    
                        <div id="chart">Grafico Questão 1 x Questao 2</div>
                   
                        <div id="chart2">Grafico Questão 1 x Questao 3</div>
                        
                        <div id="chart3">Grafico Questão 3</div>

                        <div id="chart4">Grafico Questão 4</div>
                        
    </div>

    <script type="text/javascript">    
        $(function () {


            var pessimo = <?php print $pessimo; ?>;
            var ruim = <?php print $ruim; ?>;
            var bom = <?php print $bom; ?>;
            var regular = <?php print $regular; ?>;
            var muitobom = <?php print $otimo; ?>;

            var q2pessimo = <?php print $q2pessimo; ?>;
            var q2ruim = <?php print $q2ruim; ?>;
            var q2bom = <?php print $q2bom; ?>;
            var q2regular = <?php print $q2regular; ?>;
            var q2muitobom = <?php print $q2otimo; ?>;

            var q3pessimo = <?php print $q3pessimo; ?>;
            var q3ruim = <?php print $q3ruim; ?>;
            var q3bom = <?php print $q3bom; ?>;
            var q3regular = <?php print $q3regular; ?>;
            var q3muitobom = <?php print $q3otimo; ?>;

            var q4pessimo = <?php print $q4pessimo; ?>;
            var q4ruim = <?php print $q4ruim; ?>;
            var q4bom = <?php print $q4bom; ?>;
            var q4regular = <?php print $q4regular; ?>;
            var q4muitobom = <?php print $q4otimo; ?>;


            $("#chart").shieldChart({
                theme: "light-bootstrap-gradient",
                primaryHeader: {
                    text: "Avaliação - Questão 1 x Questao 2 "
                },
                exportOptions: {
                    image: false,
                    print: false
                },
                axisX: {
                    categoricalValues: ["Pessimo", "Ruim", "Bom", "Regular", "MuitoBom"]
                },
                axisY: {
                    title: {
                        text: "Visitor statistics"
                    }
                },
                dataSeries: [{
                    seriesType: "bar",
                    collectionAlias: "Total Visits",
                    data: [pessimo, ruim, { y: bom, selected: true }, regular, muitobom]
                }, {
                    seriesType: "line",
                    collectionAlias: "Unique Visits",
                    data: [q2pessimo, q2ruim, { y: q2bom, selected: true }, q2regular, q2muitobom]
                }]
            });

            $("#chart2").shieldChart({
                theme: "light",
                primaryHeader: {
                    text: "Questionario - Questao 2 "
                },
                exportOptions: {
                    image: false,
                    print: false
                },
                axisX: {
                    categoricalValues: ["Pessimo", "Ruim", "Bom", "Regular", "MuitoBom"]
                },
                axisY: {
                    title: {
                        text: "Visitor statistics"
                    }
                },
                dataSeries: [{
                    seriesType: "bar",
                    collectionAlias: "Questão 1",
                    data: [pessimo, ruim, { y: bom, selected: true }, regular, muitobom]
                }, {
                    seriesType: "bar",
                    collectionAlias: "Questao 3",
                    data: [q3pessimo, q3ruim, { y: q3bom, selected: true }, q3regular, q3muitobom]
                }]
            });


            $("#chart3").shieldChart({
                theme: "light",
                exportOptions: {
                    image: false,
                    print: false
                },
                primaryHeader: {
                    text: "Questão 3"
                },
                chartLegend: {
                    enabled: true
                },
                seriesSettings: {
                    pie: {
                        enablePointSelection: true        
                    }
                },
                dataSeries: [{
                    seriesType: "pie",
                    collectionAlias: "Usage",
                    data: [
                        ["Pessimo", q3pessimo],                        
                        { collectionAlias: "Ruim", y: q3ruim , selected: true },
                        ["Bom", q3bom],
                        ["Regular", q3regular],
                        ["Otimo", q3muitobom]
                    ]
                }]
            });


            $("#chart4").shieldChart({
                theme: "light",
                exportOptions: {
                    image: false,
                    print: false
                },
                primaryHeader: {
                    text: "Questão 4"
                },
                chartLegend: {
                    enabled: true
                },
                seriesSettings: {
                    pie: {
                        enablePointSelection: true        
                    }
                },
                dataSeries: [{
                    seriesType: "pie",
                    collectionAlias: "Usage",
                    data: [
                        ["Pessimo", q4pessimo],                        
                        { collectionAlias: "Ruim", y: q4ruim , selected: true },
                        ["Bom", q4bom],
                        ["Regular", q4regular],
                        ["Otimo", q4muitobom]
                    ]
                }]
            });




    });
</script>
    
    
    
    </div>
