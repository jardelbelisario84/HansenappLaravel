<?php 
namespace App\Classes;

use App\Http\Requests;

class File{
		
	public static function salvarImagem($request, $nameInput, $destinoArquivo, $dataEditar){

		$file = $request->file($nameInput);

		 if($file != null){     

                $destino = $destinoArquivo;

                $fileName = md5(uniqid());


                if(isset($dataEditar->foto)){
                  @unlink($dataEditar->foto);
                }
               
                if ($request->hasFile($nameInput) && $file->isValid()) {
                    if ($file->getClientMimeType() == 'image/jpeg' || $file->getClientMimeType() == 'jpg' || $file->getClientMimeType() == 'png') {
                            //$file->move("painel/uploads/{$this->pastaView}/", $file->getClientOriginalname());
                           $uploadFeito = $file->move($destino, $fileName.'.'.$file->getClientOriginalExtension());
                    }

                    $caminhoFoto =  $destino.$fileName.'.'.$file->getClientOriginalExtension();
                    //$dadosForm[$nameInput] =  $caminhoFoto; 
                    return [
                    	$caminhoFoto,
                    	$file,
                    ];
                }
            }

	}
        
}