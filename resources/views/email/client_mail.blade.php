<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Demande reçue – Conexus IT</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            body {
                background-color: #f0f2f0;
                font-family: 'Inter', Arial, sans-serif;
                color: #1a2230;
                -webkit-font-smoothing: antialiased;
            }

            .email-wrapper {
                max-width: 600px;
                margin: 40px auto;
                background: #ffffff;
                border-radius: 20px;
                overflow: hidden;
                box-shadow: 0 8px 40px rgba(0, 0, 0, 0.1);
            }

            /* ── HEADER ── */
            .header {
                background: #171d25;
                padding: 36px 44px 32px;
                position: relative;
                overflow: hidden;
            }
            .header::before {
                content: '';
                position: absolute;
                top: -60px;
                right: -60px;
                width: 200px;
                height: 200px;
                border-radius: 50%;
                background: radial-gradient(
                    circle,
                    rgba(74, 222, 128, 0.15) 0%,
                    transparent 70%
                );
            }
            .header-logo {
                display: flex;
                align-items: center;
                gap: 10px;
                margin-bottom: 28px;
            }
            .logo-icon {
                width: 36px;
                height: 36px;
            }
            .logo-text {
                font-size: 1.1rem;
                font-weight: 700;
                color: #ffffff;
                letter-spacing: -0.5px;
            }
            .logo-text span {
                color: #4ade80;
            }

            .header-badge {
                display: inline-flex;
                align-items: center;
                gap: 7px;
                background: rgba(74, 222, 128, 0.12);
                border: 1px solid rgba(74, 222, 128, 0.3);
                border-radius: 20px;
                padding: 5px 14px;
                font-size: 0.75rem;
                font-weight: 600;
                color: #4ade80;
                letter-spacing: 0.04em;
                margin-bottom: 16px;
            }
            .badge-dot {
                width: 6px;
                height: 6px;
                border-radius: 50%;
                background: #4ade80;
            }

            .header h1 {
                font-size: 1.5rem;
                font-weight: 700;
                color: #ffffff;
                line-height: 1.3;
                position: relative;
                z-index: 1;
            }
            .header h1 span {
                color: #4ade80;
            }

            /* ── BODY ── */
            .body {
                padding: 40px 44px;
            }

            .greeting {
                font-size: 1rem;
                font-weight: 600;
                color: #1a2230;
                margin-bottom: 12px;
            }

            .intro-text {
                font-size: 0.9rem;
                color: #5a6474;
                line-height: 1.7;
                margin-bottom: 32px;
            }

            /* ── SUMMARY CARD ── */
            .summary-card {
                background: #f8f9f8;
                border: 1px solid #e4e9e4;
                border-radius: 14px;
                padding: 24px 28px;
                margin-bottom: 28px;
            }
            .summary-title {
                font-size: 0.7rem;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 0.1em;
                color: #9aab9a;
                margin-bottom: 16px;
            }
            .summary-row {
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
                padding: 10px 0;
                border-bottom: 1px solid #eaeee9;
                gap: 16px;
            }
            .summary-row:last-child {
                border-bottom: none;
            }
            .summary-label {
                font-size: 0.8rem;
                color: #8a9a8a;
                font-weight: 500;
                flex-shrink: 0;
                min-width: 140px;
            }
            .summary-value {
                font-size: 0.85rem;
                color: #1a2230;
                font-weight: 600;
                text-align: right;
            }

            /* ── WHAT HAPPENS NEXT ── */
            .steps-title {
                font-size: 0.95rem;
                font-weight: 700;
                color: #1a2230;
                margin-bottom: 16px;
            }
            .step-item {
                display: flex;
                gap: 14px;
                align-items: flex-start;
                margin-bottom: 16px;
            }
            .step-num {
                width: 28px;
                height: 28px;
                border-radius: 50%;
                background: #171d25;
                color: #4ade80;
                font-size: 0.72rem;
                font-weight: 700;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-shrink: 0;
                margin-top: 2px;
            }
            .step-text {
                font-size: 0.85rem;
                color: #5a6474;
                line-height: 1.6;
            }
            .step-text strong {
                color: #1a2230;
            }

            /* ── CTA BUTTON ── */
            .cta-wrap {
                text-align: center;
                margin: 32px 0;
            }
            .cta-btn {
                display: inline-block;
                background: #4ade80;
                color: #0a1a0d;
                font-size: 0.88rem;
                font-weight: 700;
                padding: 14px 32px;
                border-radius: 10px;
                text-decoration: none;
                letter-spacing: 0.02em;
            }

            /* ── CONTACT BOX ── */
            .contact-box {
                background: #171d25;
                border-radius: 14px;
                padding: 24px 28px;
                display: flex;
                gap: 20px;
                align-items: center;
                margin-top: 8px;
            }
            .contact-icon {
                width: 44px;
                height: 44px;
                border-radius: 11px;
                background: rgba(74, 222, 128, 0.12);
                border: 1px solid rgba(74, 222, 128, 0.25);
                display: flex;
                align-items: center;
                justify-content: center;
                flex-shrink: 0;
            }
            .contact-icon svg {
                width: 20px;
                height: 20px;
                color: #4ade80;
            }
            .contact-info p {
                font-size: 0.78rem;
                color: rgba(255, 255, 255, 0.45);
                margin-bottom: 4px;
            }
            .contact-info a {
                font-size: 0.9rem;
                font-weight: 600;
                color: #4ade80;
                text-decoration: none;
            }

            /* ── FOOTER ── */
            .footer {
                background: #f8f9f8;
                padding: 24px 44px;
                border-top: 1px solid #eaeee9;
                text-align: center;
            }
            .footer p {
                font-size: 0.75rem;
                color: #9aab9a;
                line-height: 1.6;
            }
            .footer a {
                color: #4ade80;
                text-decoration: none;
            }

            /* top green bar */
            .top-bar {
                height: 4px;
                background: linear-gradient(90deg, #4ade80, #22c55e, #4ade80);
            }
        </style>
    </head>
    <body>
        <div class="email-wrapper">
            <div class="top-bar"></div>

            <!-- HEADER -->
            <div class="header">
                <div class="header-logo">
                    <!-- inline molecule icon -->
                    <svg
                        class="logo-icon"
                        viewBox="0 0 36 36"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <circle
                            cx="8"
                            cy="18"
                            r="3.5"
                            stroke="#4ade80"
                            stroke-width="1.8"
                        />
                        <circle
                            cx="28"
                            cy="8"
                            r="3.5"
                            stroke="#4ade80"
                            stroke-width="1.8"
                        />
                        <circle
                            cx="28"
                            cy="28"
                            r="3.5"
                            stroke="#4ade80"
                            stroke-width="1.8"
                        />
                        <line
                            x1="11.5"
                            y1="17"
                            x2="24.5"
                            y2="9.5"
                            stroke="#4ade80"
                            stroke-width="1.4"
                        />
                        <line
                            x1="11.5"
                            y1="19"
                            x2="24.5"
                            y2="26.5"
                            stroke="#4ade80"
                            stroke-width="1.4"
                        />
                        <line
                            x1="28"
                            y1="11.5"
                            x2="28"
                            y2="24.5"
                            stroke="#4ade80"
                            stroke-width="1.4"
                            stroke-dasharray="2 2"
                        />
                    </svg>
                    <span class="logo-text">
                        Conexus
                        <span>IT</span>
                        Solutions
                    </span>
                </div>

                <div class="header-badge">
                    <span class="badge-dot"></span>
                    Demande reçue avec succès
                </div>

                <h1>
                    Votre demande a bien été
                    <br />
                    <span>enregistrée</span>
                    ✓
                </h1>
            </div>

            <!-- BODY -->
            <div class="body">
                <p class="greeting">Bonjour {{ $data['name'] }},</p>
                <p class="intro-text">
                    Nous avons bien reçu votre demande de démo et d'estimation
                    pour votre projet d'étiquetage électronique. Notre équipe va
                    étudier votre dossier et vous contactera dans les
                    <strong>24 à 48h</strong>
                    pour convenir d'un rendez-vous de présentation personnalisé.
                </p>

                <!-- Summary -->
                <div class="summary-card">
                    <div class="summary-title">
                        Récapitulatif de votre demande
                    </div>

                    <div class="summary-row">
                        <span class="summary-label">Nom &amp; prénom</span>
                        <span class="summary-value">{{ $data['name'] }}</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Société</span>
                        <span class="summary-value">
                            {{ $data['societe'] ?? '—' }}
                        </span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Ville</span>
                        <span class="summary-value">
                            {{ $data['ville'] ?? '—' }}
                        </span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Type de magasin</span>
                        <span class="summary-value">
                            {{ $data['type'] ?? '—' }}
                        </span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Surface (approx.)</span>
                        <span class="summary-value">
                            {{ $data['surface'] ?? '—' }}
                        </span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Étiquettes estimées</span>
                        <span class="summary-value">
                            {{ $data['etiquettes'] ?? '—' }}
                        </span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Téléphone</span>
                        <span class="summary-value">
                            {{ $data['telephone'] }}
                        </span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Email</span>
                        <span class="summary-value">{{ $data['email'] }}</span>
                    </div>
                </div>

                <!-- Next steps -->
                <p class="steps-title">Ce qui se passe maintenant :</p>

                <div class="step-item">
                    <div class="step-num">1</div>
                    <p class="step-text">
                        <strong>Analyse de votre profil</strong>
                        — Notre équipe examine vos besoins spécifiques (surface,
                        volume, type de rayon).
                    </p>
                </div>
                <div class="step-item">
                    <div class="step-num">2</div>
                    <p class="step-text">
                        <strong>Prise de contact</strong>
                        — Un conseiller vous appellera sous
                        <strong>24 à 48h</strong>
                        pour convenir d'un créneau de démo.
                    </p>
                </div>
                <div class="step-item">
                    <div class="step-num">3</div>
                    <p class="step-text">
                        <strong>Démo &amp; estimation</strong>
                        — Présentation personnalisée de la solution Pricer et
                        remise d'un devis adapté à votre enseigne.
                    </p>
                </div>

                <!-- CTA -->
                <div class="cta-wrap">
                    <a href="https://wa.me/212661220585" class="cta-btn">
                        📲 Contacter via WhatsApp
                    </a>
                </div>

                <!-- Contact box -->
                <div class="contact-box">
                    <div class="contact-icon">
                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="#4ade80"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path
                                d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 01.98 1.1 2 2 0 012.96 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L7.91 7.91a16 16 0 006.18 6.18l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14.92z"
                            />
                        </svg>
                    </div>
                    <div class="contact-info">
                        <p>Une question urgente ? Appelez-nous directement</p>
                        <a href="tel:+212661220585">+212 661 220 585</a>
                    </div>
                </div>
            </div>

            <!-- FOOTER -->
            <div class="footer">
                <p>
                    Cet email a été envoyé automatiquement suite à votre demande
                    sur
                    <a href="#">conexus-it.ma</a>
                    .
                    <br />
                    © {{ date('Y') }} Conexus IT Solutions — Casablanca, Maroc
                </p>
            </div>
        </div>
    </body>
</html>
