namespace App\Models;
class ejemplo{
    public $nombre;
    public $grupo;

    public function mostrarDetalles(){
        echo $this->nombre;
        echo $this->grupo;
    }

}