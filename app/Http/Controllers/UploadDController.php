<?php

namespace App\Http\Controllers;

use App\DHIS2;
use App\Franquia;
use App\Http\Requests\UploadRequest;
use App\Salesforce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\Cast\Object_;

class UploadDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $franquias = Franquia::all();
        return view('admin.uploadDB',compact('franquias'));

    }
    
    
    //retorna o id da franquia
    /*
	 private function getFranquiaID($val){
	    if (preg_match('/\d{4,}/')) {
	       preg_match('/\d{4,}/', $val, $result, PREG_OFFSET_CAPTURE); 
	       //print_r($result);
	       return $result[0][0];
	    }else return 0;
	  }
*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UploadRequest $request)
    {
        $file = $this->storeFile($request, 'csv_import'); //retorna o nome do ficheiro
        //$data = $request->all();

        $data_DQA = $request->data_DQA;
        $data_inicio = $request->data_inicio;
        $data_Fim = $request->data_Fim;
        $user_id = $request->user_id;
        $nameF = $request->nome_ficheiro;

        $nome='';
        $linhas=0;

        if ($nameF=='Sales Force'){
            $nome='Sales Force';

            if (($handle = fopen ( $file, 'r' )) !== FALSE) {
                while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
                    $produtos_id = $data [0];
                    $saldo_inicial = (int)$data [1];
                    $saidas = (int)$data [2];
                    $entradas = (int)$data [3];
                    $franquia_id = $data [4];

                    $csv_falesForce = new Salesforce ();
                    $csv_falesForce->data_DQA = $data_DQA;
                    $csv_falesForce->data_inicio = $data_inicio;
                    $csv_falesForce->data_Fim = $data_Fim;
                    $csv_falesForce->produtos_id = $produtos_id;
                    $csv_falesForce->saldo_inicial = $saldo_inicial;
                    $csv_falesForce->saidas = $saidas;
                    $csv_falesForce->entradas = $entradas;
                    $csv_falesForce->stock_balance = $entradas+$saldo_inicial-$saidas;
                    $csv_falesForce->franquia_id = $franquia_id;
                    $csv_falesForce->user_id = $user_id;
                    $dd = $csv_falesForce->save ();
                    $linhas++;
/*
                   $dd= DB::select('call store_sales_force_update(?,?,?,?,?,?,?,?,?,?)',
                           array(
                            $data_DQA,
                            $data_inicio,
                            $data_Fim,
                            $produtos_id,
                            $saldo_inicial,
                            $saidas,
                            $entradas,
                            $franquia_id,
                            false,
                            $user_id));
                dd($dd);
*/
                }
                fclose ( $handle );
            }

        }elseif ($nameF=='DHIS2'){
            $nome='DHIS2';    

             if (($handle = fopen ( $file, 'r' )) !== FALSE) {
                 while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
                     $franquia = $data [0];
                     $atividade = $data [1];
                     $idade = null;
                     //$total = (int)$data [2]+(int)$data [3]+(int)$data [4];
                     
                     if (preg_match('/\d{4,}/', $data [0])) {
		       preg_match('/\d{4,}/', $data [0], $result, PREG_OFFSET_CAPTURE); 
		       //print_r($result);
		       $franquia_id = $result[0][0];
		    }else $franquia_id = 0;

                     //$franquia_id = getFranquiaID($data [0]);

                     if ((int)$data [2]>0) {
                         $idade = '<=19anos';
                         $total = (int)$data [2];
                         
                         $csv_dhis2 = new DHIS2();
                         $csv_dhis2->data_DQA = $data_DQA;
                         $csv_dhis2->data_inicio = $data_inicio;
                         $csv_dhis2->data_Fim = $data_Fim;
                         $csv_dhis2->franquia = $franquia;
                         $csv_dhis2->atividade = $atividade;
                         $csv_dhis2->idade = $idade;
                         $csv_dhis2->total = $total;
                         $csv_dhis2->user_id = $user_id;
                         $csv_dhis2->franquia_id = $franquia_id;
                         $dd = $csv_dhis2->save ();
                     }
                     if ((int)$data [3]>0){
                         $idade = '20-24anos';
                         $total = (int)$data [3];
                         
                         $csv_dhis2 = new DHIS2();
                         $csv_dhis2->data_DQA = $data_DQA;
                         $csv_dhis2->data_inicio = $data_inicio;
                         $csv_dhis2->data_Fim = $data_Fim;
                         $csv_dhis2->franquia = $franquia;
                         $csv_dhis2->atividade = $atividade;
                         $csv_dhis2->idade = $idade;
                         $csv_dhis2->total = $total;
                         $csv_dhis2->user_id = $user_id;
                         $csv_dhis2->franquia_id = $franquia_id;
                         $dd = $csv_dhis2->save ();
                     }
                     if ((int)$data [4]>0){
                         $idade = '>=25anos';
                         $total = (int)$data [4];
                        
                         $csv_dhis2 = new DHIS2();
                         $csv_dhis2->data_DQA = $data_DQA;
                         $csv_dhis2->data_inicio = $data_inicio;
                         $csv_dhis2->data_Fim = $data_Fim;
                         $csv_dhis2->franquia = $franquia;
                         $csv_dhis2->atividade = $atividade;
                         $csv_dhis2->idade = $idade;
                         $csv_dhis2->total = $total;
                         $csv_dhis2->user_id = $user_id;
                         $csv_dhis2->franquia_id = $franquia_id;
                         $dd = $csv_dhis2->save ();
                     }
                     
                   /*  
                    if(){
                         $idade = 'N/A';
                         $total = 0;
                     }
                     */

                     $linhas++;
                 }
                 fclose ( $handle );
             }


        }

        return redirect()->route('upload-db.index')->with('message', "Carregamento da BD $nome efectuada com sucesso com sucesso! \n# Tolatl de linhas $linhas");
    }
    

    /**
     * @param Request $request
     * @param $fileKey
     * @return \Illuminate\Http\RedirectResponse|string
     * Carrega o ficheiro para pasta sotore do projeto
     */
    private function storeFile(Request $request, $fileKey){
        $file = $request->file($fileKey);
        $fileName = $file->getClientOriginalName();
        $destinationPath = config('app.fileDestinationPath').'/'.$fileName;
        $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));

        if ($uploaded)
            return $destinationPath;
        else
            return redirect()->route('providers.index')->with('message', 'Provedor Erro ao carregar '.$fileName);
    }

    /**
     * @param $fileName
     * @param Object_ $entity
     * @return mixed
     * Insere os dados da BD Csv na BD MySQl
     */
    function toDataBase($fileName, Object_$entity) {

        if (($handle = fopen ( $fileName, 'r' )) !== FALSE) {
            while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
                $csv_data = new Csvdata ();
                $csv_data->id = $data [0];
                $csv_data->firstname = $data [1];
                $csv_data->lastname = $data [2];
                $csv_data->email = $data [3];
                $csv_data->gender = $data [4];
                $csv_data->save ();
            }
            fclose ( $handle );
        }

        $finalData = $csv_data::all ();

        return view ( 'welcome' )->withData ( $finalData );
    }
}
