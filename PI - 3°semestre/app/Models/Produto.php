<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Produto extends Model
{
    use HasFactory;
    protected $table ="PRODUTO";
    protected $primaryKey="PRODUTO_ID";
 
    public function Categoria(){
        return $this->belongsTo(Categoria::class,'CATEGORIA_ID','CATEGORIA_ID');
    }

    public function Produto_imagem(){
        return $this->HasMany(Produto_imagem::class,'PRODUTO_ID','PRODUTO_ID');
    }

    public function Produto_estoque(){
        return $this->belongsTo(Produto_estoque::class,'PRODUTO_ID','PRODUTO_ID');
    }
}