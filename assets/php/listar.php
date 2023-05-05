<?php
    include('conexao.php');

    function listarTimeForm(){
        $sql = 'SELECT * FROM tb_time ORDER BY nome';
        $res = $GLOBALS['mysqli']->query($sql);

        if ($res){
            while($row = $res->fetch_assoc()){
                echo '<option value="'.$row['nome'].'">'.$row['nome'].'</option>';
            }
        }
    }
    
    function listarCalendario(){
        $sql = 'SELECT * FROM tb_partida ORDER BY data DESC';
        $res = $GLOBALS['mysqli']->query($sql);

        if ($res){
            while($row = $res->fetch_assoc()){
                echo '<div class="block-content-calendario"><div class="calendario-pt-1"><h2>'.strtoupper($row['tipo']).'</h2><h2>';
                if($row['tipo'] == "jeesp"){
                    echo strtoupper($row['modalidade']);
                }else{
                    echo strtoupper($row['foco']);
                }
                echo '</h2></div><div class="calendario-pt-2"><h2>'.$row['time1'].'</h2><h3>Vs</h3><h2>'.$row['time2'].'</h2></div><div class="calendario-pt-3"><p>'.$row['data'].'</p><p>'.$row['hora'].'</p><p>'.$row['local'].'</p></div></div>';
            }
        }
    }

    function listarPremios(){
        $sql = 'SELECT * FROM tb_rank ORDER BY id DESC';
        $res = $GLOBALS['mysqli']->query($sql);

        if ($res){
            while($row = $res->fetch_assoc()){
                echo '<div class="block-ranking"><img src="assets/img/icons/pessoa.png" alt="logo etec"><h2>'.$row['premiacao'].'</h2><p>'.$row['nome'].'</p></div>';
            }
        }
    }

    function listarInterFut(){
        $sql = 'SELECT * FROM tb_participante WHERE foco = "futsal" ORDER BY time';
        $res = $GLOBALS['mysqli']->query($sql);

        if ($res){
            echo '<table><thead><tr><th>Time</th><th>Nome</th><th>Sala</th></tr></thead><tbody>';
            while($row = $res->fetch_assoc()){
                echo '<tr><td>'.$row['time'].'</td><td>'.$row['nome'].'</td><td>'.$row['sala'].'</td></tr>';
            }
            echo '</tbody></table>';
        }
    }

    function listarInterVol(){
        $sql = 'SELECT * FROM tb_participante WHERE foco = "volei" ORDER BY time';
        $res = $GLOBALS['mysqli']->query($sql);

        if ($res){
            echo '<table><thead><tr><th>Time</th><th>Nome</th><th>Sala</th></tr></thead><tbody>';
            while($row = $res->fetch_assoc()){
                echo '<tr><td>'.$row['time'].'</td><td>'.$row['nome'].'</td><td>'.$row['sala'].'</td></tr>';
            }
            echo '</tbody></table>';
        }
    }

    function listarJeespFut(){
        $sql = 'SELECT * FROM tb_participante WHERE modaljesp = "futsal" ORDER BY time';
        $res = $GLOBALS['mysqli']->query($sql);

        if ($res){
            echo '<table><thead><tr><th>Time</th><th>Nome</th><th>Sala</th></tr></thead><tbody>';
            while($row = $res->fetch_assoc()){
                echo '<tr><td>'.$row['time'].'</td><td>'.$row['nome'].'</td><td>'.$row['sala'].'</td></tr>';
            }
            echo '</tbody></table>';
        }
    }

    function listarJeespVol(){
        $sql = 'SELECT * FROM tb_participante WHERE modaljesp = "volei" ORDER BY time';
        $res = $GLOBALS['mysqli']->query($sql);

        if ($res){
            echo '<table><thead><tr><th>Time</th><th>Nome</th><th>Sala</th></tr></thead><tbody>';
            while($row = $res->fetch_assoc()){
                echo '<tr><td>'.$row['time'].'</td><td>'.$row['nome'].'</td><td>'.$row['sala'].'</td></tr>';
            }
            echo '</tbody></table>';
        }
    }

    function listarJeespAtl(){
        $sql = 'SELECT * FROM tb_participante WHERE modaljesp = "atletismo" ORDER BY time';
        $res = $GLOBALS['mysqli']->query($sql);

        if ($res){
            echo '<table><thead><tr><th>Time</th><th>Nome</th><th>Sala</th></tr></thead><tbody>';
            while($row = $res->fetch_assoc()){
                echo '<tr><td>'.$row['time'].'</td><td>'.$row['nome'].'</td><td>'.$row['sala'].'</td></tr>';
            }
            echo '</tbody></table>';
        }
    }

    function listarJeespXad(){
        $sql = 'SELECT * FROM tb_participante WHERE modaljesp = "xadrez" ORDER BY time';
        $res = $GLOBALS['mysqli']->query($sql);

        if ($res){
            echo '<table><thead><tr><th>Time</th><th>Nome</th><th>Sala</th></tr></thead><tbody>';
            while($row = $res->fetch_assoc()){
                echo '<tr><td>'.$row['time'].'</td><td>'.$row['nome'].'</td><td>'.$row['sala'].'</td></tr>';
            }
            echo '</tbody></table>';
        }
    }

    function listarJeespDam(){
        $sql = 'SELECT * FROM tb_participante WHERE modaljesp = "dama" ORDER BY time';
        $res = $GLOBALS['mysqli']->query($sql);

        if ($res){
            echo '<table><thead><tr><th>Time</th><th>Nome</th><th>Sala</th></tr></thead><tbody>';
            while($row = $res->fetch_assoc()){
                echo '<tr><td>'.$row['time'].'</td><td>'.$row['nome'].'</td><td>'.$row['sala'].'</td></tr>';
            }
            echo '</tbody></table>';
        }
    }

    function listarJeespPin(){
        $sql = 'SELECT * FROM tb_participante WHERE modaljesp = "pingpong" ORDER BY time';
        $res = $GLOBALS['mysqli']->query($sql);

        if ($res){
            echo '<table><thead><tr><th>Time</th><th>Nome</th><th>Sala</th></tr></thead><tbody>';
            while($row = $res->fetch_assoc()){
                echo '<tr><td>'.$row['time'].'</td><td>'.$row['nome'].'</td><td>'.$row['sala'].'</td></tr>';
            }
            echo '</tbody></table>';
        }
    }

    function listarEspVal(){
        $sql = 'SELECT * FROM tb_participante WHERE foco = "valorant" ORDER BY time';
        $res = $GLOBALS['mysqli']->query($sql);

        if ($res){
            echo '<table><thead><tr><th>Time</th><th>Nome</th><th>Sala</th></tr></thead><tbody>';
            while($row = $res->fetch_assoc()){
                echo '<tr><td>'.$row['time'].'</td><td>'.$row['nome'].'</td><td>'.$row['sala'].'</td></tr>';
            }
            echo '</tbody></table>';
        }
    }

    function listarEspLol(){
        $sql = 'SELECT * FROM tb_participante WHERE foco = "lol" ORDER BY time';
        $res = $GLOBALS['mysqli']->query($sql);

        if ($res){
            echo '<table><thead><tr><th>Time</th><th>Nome</th><th>Sala</th></tr></thead><tbody>';
            while($row = $res->fetch_assoc()){
                echo '<tr><td>'.$row['time'].'</td><td>'.$row['nome'].'</td><td>'.$row['sala'].'</td></tr>';
            }
            echo '</tbody></table>';
        }
    }

    function listarEspFif(){
        $sql = 'SELECT * FROM tb_participante WHERE foco = "fifa" ORDER BY time';
        $res = $GLOBALS['mysqli']->query($sql);

        if ($res){
            echo '<table><thead><tr><th>Time</th><th>Nome</th><th>Sala</th></tr></thead><tbody>';
            while($row = $res->fetch_assoc()){
                echo '<tr><td>'.$row['time'].'</td><td>'.$row['nome'].'</td><td>'.$row['sala'].'</td></tr>';
            }
            echo '</tbody></table>';
        }
    }

    function listarEspCsg(){
        $sql = 'SELECT * FROM tb_participante WHERE foco = "csgo" ORDER BY time';
        $res = $GLOBALS['mysqli']->query($sql);

        if ($res){
            echo '<table><thead><tr><th>Time</th><th>Nome</th><th>Sala</th></tr></thead><tbody>';
            while($row = $res->fetch_assoc()){
                echo '<tr><td>'.$row['time'].'</td><td>'.$row['nome'].'</td><td>'.$row['sala'].'</td></tr>';
            }
            echo '</tbody></table>';
        }
    }