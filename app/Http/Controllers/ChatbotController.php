<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\Support_Mail;
use App\Mail\Client_Mail;
use App\Models\Client;

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
                                  If you don\'t know something, ask them to contact us at g.darbane@conexusit.ma or by phone +212 661-220585.'
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
            'reply' => $data['choices'][0]['message']['content'] ?? 'Sorry, I couldn\'t generate a response.'
        ]);
    }
    public function index()
    {
        return view('welcome');
    }
    public function contact(Request $request)
    {
        $validated = $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'societe' => ['nullable', 'string', 'max:255'],
            'ville' => ['nullable', 'string', 'max:255'],
            'type' => ['nullable', 'string', 'max:255'],
            'surface' => ['nullable', 'string', 'max:255'],
            'etiquettes' => ['nullable',  'string', 'max:255'],
            'tel' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['nullable', 'string'],
        ]);

        $client = Client::create($validated);

        $data = [
            'name' => $validated['nom'],
            'societe' => $validated['societe'] ?? null,
            'ville' => $validated['ville'] ?? null,
            'type' => $validated['type'] ?? null,
            'surface' => $validated['surface'] ?? null,
            'etiquettes' => $validated['etiquettes'] ?? null,
            'email' => $validated['email'],
            'message' => $validated['message'] ?? null,
            'telephone' => $validated['tel'],
        ];

        Mail::to('mostapha.dev.elhor@gmail.com')->send(new Support_Mail($data));

        Mail::to($validated['email'])->send(new Client_Mail($data));
        //save data in database
        return response()->json([
            'success' => true,
            'message' => 'Thank you for contacting us! We will get back to you shortly.',
            'data' => [
                'id' => $client->id,
                'nom' => $client->nom,
                'email' => $client->email,
                'tel' => $client->tel,
            ]
        ]);
    }
}
