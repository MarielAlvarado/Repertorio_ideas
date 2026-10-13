<?php
namespace Database\Seeders;
use App\Models\Idea;
use Illuminate\Database\Seeder;
class IdeaSeeder extends Seeder
{
 public function run(): void
 {
 Idea::create([
 'titulo' => 'Aplicación para organizar citas
veterinarias',
 'descripcion' => 'Sistema para registrar y organizar
citas de mascotas.',
 'estado' => 'registrada',
 'autor' => 'Jose',
 'categoria_id' => 1
 ]);
 Idea::create([
 'titulo' => 'Plataforma para cursos en línea',
 'descripcion' => 'Sistema para ofrecer cursos y
materiales educativos.',
 'estado' => 'en revisión',
 'autor' => 'Pedro',
 'categoria_id' => 2
 ]);
 Idea::create([
 'titulo' => 'Asistente domestico',
 'descripcion' => 'Desarrollar un sistema local para automatizar el hogar usando Python y sensores conectados.',
 'estado' => 'en revisión',
 'autor' => 'Mariel',
 'categoria_id' => 3
 ]);

 }
 protected $fillable = [
 'titulo',
 'descripcion',
 'estado',
 'autor',
 'categoria_id'
 ];
}