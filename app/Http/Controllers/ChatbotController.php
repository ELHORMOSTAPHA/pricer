<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function reply(Request $request)
    {
        $userMessage = $request->input('message');
        $description="Conexus IT accompagne les enseignes dans la digitalisation de l’étiquetage prix avec les solutions Pricer, de l’étude initiale jusqu’au support opérationnel. Nous réalisons l’audit et le dimensionnement du besoin, assurons le déploiement des étiquettes et des infrastructures, configurons les flux de mise à jour, puis formons les équipes pour une adoption rapide. Notre objectif : fiabiliser l’affichage, réduire les erreurs rayon/caisse, améliorer la productivité magasin et offrir une meilleure expérience client. Nous proposons aussi un accompagnement continu (maintenance, supervision, optimisation du parc et des coûts) pour garantir une exploitation durable et évolutive.";
try {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('GROQ_API_KEY'),
            'Content-Type'  => 'application/json',
        ])->post('https://api.groq.com/openai/v1/chat/completions', [
            'model'      => 'llama-3.3-70b-versatile', // free and fast
            'max_tokens' => 500,
            'messages'   => [
                [
                    'role'    => 'system',
                    'content' => 'You are a helpful assistant for Conexus IT Solutions. 
                                  Our company description: ' . $description . '
                                  Answer customer questions politely and concisely.
                                  If you don\'t know something, ask them to contact us at contact@conexus-it.com.'
                ],
                [
                    'role'    => 'user',
                    'content' => $userMessage
                ],
            ],
        ]);
}catch (\Exception $e) {
            return response()->json([
                'reply' => 'Sorry, there was an error processing your request.',
                'error' => $e->getMessage()
            ], 500);
        }

        $data = $response->json();

        return response()->json([
            'reply' => "salam" // $data['choices'][0]['message']['content'] ?? 'Sorry, I couldn\'t generate a response.'
        ]);
    }
    public function index()
    {
        return view('welcome');
    }
}
