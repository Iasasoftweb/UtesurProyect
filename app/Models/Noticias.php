<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'noticias';

    protected $fillable = ['titulo','descripcion','estatus','slug', 'path', 'path2', 'path3', 'path4'];
	
    // /**
    //  * @return \Illuminate\Database\Eloquent\Relations\HasOne
    //  */
    // public function ncategoria()
    // {
    //     return $this->hasOne('App\Models\Ncategoria', 'id', 'categorias_id');
    // }

  
}
