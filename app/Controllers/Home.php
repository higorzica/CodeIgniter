<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $db = db_connect();
        $sqlprojetos = "SELECT proj.id, proj.titulo, proj.descricao, proj.link_github, proj.link_demo, proj.foto
        FROM projetos AS proj WHERE ativo = 'ativo'";
        $resultprojetos = $db->query($sqlprojetos);
        $projetos = $resultprojetos->getResultObject();
        // dd($projetos);

        if(!isset(session()->status_acesso)) {
            // Registrar quando houver um acesso a pagina
            $ip = $_SERVER['REMOTE_ADDR'];
            $navegador = $_SERVER['HTTP_USER_AGENT'];
    
            $salvarvisitas = "INSERT INTO visitas (`data`, navegador, ip) VALUES (NOW(), '$navegador', '$ip')";
            $resultsalvarvisitas = $db->query($salvarvisitas);
            session()->set('status_acesso', true);
        }

        $sqlcontagemvisitas = "SELECT count(*) FROM visitas";
        // $sqlvisitas = "SELECT vis.id, vis.data, vis.navegador, vis.ip FROM visitas AS vis";
        $resultvisitas = $db->query($sqlcontagemvisitas);
        $visitas = $resultvisitas->getResultObject();
        // dd($visitas);

        $data['projetos'] = $projetos;
        $data['visitas'] = $visitas;

        return view('home', $data);
    }
    public function ver_projeto($id): string
    {

        $db = db_connect();
        $sqlverprojetos = "SELECT ft.id_projeto, ft.nomearquivo, ft.filepath, pr.titulo, pr.descricao
        FROM fotos ft
        JOIN projetos pr ON (pr.id = ft.id_projeto) 
        WHERE pr.ativo = 'ativo' AND ft.id_projeto = $id";
        $resultverprojetos = $db->query($sqlverprojetos);
        $verprojetos = $resultverprojetos->getResultArray();
        // dd($verprojetos);

        $data['verprojetos'] = $verprojetos;
        return view('ver_projeto', $data);
    }
}
