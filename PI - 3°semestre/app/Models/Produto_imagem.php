<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Produto_imagem extends Model
{
    use HasFactory;
    protected $table ="PRODUTO_IMAGEM";
    protected $primaryKey="IMAGEM_ID";
 
    public function Produto_imagem(){
        return $this->HasMany(Produto_imagem::class,'PRODUTO_ID','PRODUTO_ID');
    }
}