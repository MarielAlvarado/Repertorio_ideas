<?php
namespace Database\Seeders;
use App\Models\Categoria;
use Illuminate\Database\Seeder;
class CategoriaSeeder extends Seeder
{
 public function run(): void
 {
 Categoria::create(['nombre' => 'Tecnología','descripcion' => 'Ideas relacionadas con tecnología y software.'
 ]);
 Categoria::create([
 'nombre' => 'Educación',
 'descripcion' => 'Ideas relacionadas con educación y aprendizaje.'
 ]);
 Categoria::create([
 'nombre' => 'Salud',
 'descripcion' => 'Ideas relacionadas con salud ybienestar.'
 ]);
 Categoria::create([
 'nombre' => 'Medio ambiente',
 'descripcion' => 'Ideas relacionadas con el cuidado del medio ambiente.'
 ]);
 Categoria::create([
 'nombre' => 'Innovación en el hogar',
 'descripcion' => 'Ideas relacionadas con avances tecnologicos para su uso en el hogar.'
 ]);
 }
 protected $fillable = [
    'nombre',
    'descripcion'
    ];


}