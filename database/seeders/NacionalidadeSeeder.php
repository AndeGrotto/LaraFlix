<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nacionalidade;

class NacionalidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nacionalidade::create(['descricao' => 'Brasileiro(a)']);
        Nacionalidade::create(['descricao' => 'Argentino(a)']);
        Nacionalidade::create(['descricao' => 'Norte-Americano(a)']);
        Nacionalidade::create(['descricao' => 'Canadense']);
        Nacionalidade::create(['descricao' => 'Uruguaio(a)']);
        Nacionalidade::create(['descricao' => 'Espanhol(a)']);
        Nacionalidade::create(['descricao' => 'Ingles(a)']);
        Nacionalidade::create(['descricao' => 'Peruano(a)']);
        Nacionalidade::create(['descricao' => 'Colombiano(a)']);
        Nacionalidade::create(['descricao' => 'Japones(a)']);
        Nacionalidade::create(['descricao' => 'Chines(a)']);
        Nacionalidade::create(['descricao' => 'Sul-Africano(a)']);
        Nacionalidade::create(['descricao' => 'Polones(a)']);
        Nacionalidade::create(['descricao' => 'Alema(o)']);
        Nacionalidade::create(['descricao' => 'Russo(a)']);

    }
}
