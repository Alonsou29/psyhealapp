<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Psicologo;
use App\Models\Paciente;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */

    public function up(): void
    {
        $role1= Role::create(['name' => 'paciente']);
        $role2= Role::create(['name' => 'admin']);
        $role3= Role::create(['name' => 'psicologo']);

        $user= User::create([
            'email' => "alonso@gmail.com",
            'password' => Hash::make('12345678'),
            'first_name' => "Alonso",
            'second_name' => "David",
            'last_name' => "Urdaneta",
            'second_last_name' => "Fernandez",
            'cedula' => "31585282",
            'telefono' => "04246228729",
            'genero' => "Masculino",
            'birthdate' => "29/05/2003",
        ]);

        $psico=Psicologo::Create([
            'Universidad' => "Urbe",
            'Diploma' => "02863891623",
            'Especialistas' => "Depresion",
            'Descripcion' => "Puedo ser tu mejor opcion para tu espacialidad",
            'id_user' => $user->id,
        ]);
        
        $psicolo=User::find($user->id);
        $psicolo->assignRole(3);

    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down(): void
    {
        //
    }
};
