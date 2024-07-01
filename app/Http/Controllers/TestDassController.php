<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestDassController extends Controller
{
    public function index()
    {
        $preguntas = [
            "Me costó mucho relajarme",
            "Me di cuenta que tenia la boca seca",
            "No podía sentir ningún sentimiento positivo",
            "Se me hizo difícil respirar",
            "Se me hizo difícil tomar la iniciativa para hacer cosas",
            "Reaccioné exageradamente en ciertas situaciones",
            "Sentí que mis manos temblaban",
            "Sentí que tenia muchos nervios",
            "Estaba preocupado por situaciones en las cuales podía tener pánico o en las que podría hacer el ridículo",
            "Sentí que no tenia nada por que vivir",
            "Noté que me agitaba",
            "Se me hizo difícil relajarme",
            "Me sentí triste y deprimido",
            "No toleré nada que no me permitiera continuar con lo que estaba haciendo",
            "Sentí que estaba al punto de pánico",
            "No me pude entusiasmar por nada",
            "Sentí que valía muy poco como persona",
            "Sentí que estaba muy irritable",
            "Sentí los latidos de mi corazón a pesar de no haber hecho ningún esfuerzo físico",
            "Tuve miedo sin razón",
            "Sentí que la vida no tenia ningún sentido"
        ];

        return view('prueba.test-dass', compact('preguntas'));
    }
}
