<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Nouveau lead – Conexus IT Support</title>
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

            /* ── TOP ALERT BAR ── */
            .alert-bar {
                background: #171d25;
                padding: 14px 44px;
                display: flex;
                align-items: center;
                gap: 10px;
            }
            .alert-pulse {
                width: 10px;
                height: 10px;
                border-radius: 50%;
                background: #4ade80;
                box-shadow: 0 0 8px #4ade80;
                flex-shrink: 0;
                animation: pulse 2s infinite;
            }
            @keyframes pulse {
                0%,
                100% {
                    opacity: 1;
                }
                50% {
                    opacity: 0.4;
                }
            }
            .alert-bar span {
                font-size: 0.78rem;
                font-weight: 600;
                color: #4ade80;
                letter-spacing: 0.05em;
                text-transform: uppercase;
            }
            .alert-bar .alert-time {
                margin-left: auto;
                font-size: 0.75rem;
                color: rgba(255, 255, 255, 0.35);
                font-weight: 400;
                text-transform: none;
                letter-spacing: 0;
            }

            /* ── HEADER ── */
            .header {
                background: linear-gradient(135deg, #171d25 0%, #1e2d20 100%);
                padding: 36px 44px 32px;
                position: relative;
                overflow: hidden;
            }
            .header::after {
                content: '';
                position: absolute;
                bottom: -40px;
                right: -40px;
                width: 160px;
                height: 160px;
                border-radius: 50%;
                background: radial-gradient(
                    circle,
                    rgba(74, 222, 128, 0.1) 0%,
                    transparent 70%
                );
            }
            .header-logo {
                display: flex;
                align-items: center;
                gap: 10px;
                margin-bottom: 24px;
            }
            .logo-text {
                font-size: 0.95rem;
                font-weight: 700;
                color: rgba(255, 255, 255, 0.7);
            }
            .logo-text span {
                color: #4ade80;
            }

            .header-tag {
                display: inline-block;
                background: rgba(74, 222, 128, 0.15);
                border: 1px solid rgba(74, 222, 128, 0.3);
                border-radius: 6px;
                padding: 3px 10px;
                font-size: 0.7rem;
                font-weight: 700;
                color: #4ade80;
                letter-spacing: 0.08em;
                text-transform: uppercase;
                margin-bottom: 12px;
            }

            .header h1 {
                font-size: 1.4rem;
                font-weight: 700;
                color: #ffffff;
                line-height: 1.3;
            }
            .header p {
                margin-top: 8px;
                font-size: 0.85rem;
                color: rgba(255, 255, 255, 0.45);
            }

            /* ── BODY ── */
            .body {
                padding: 36px 44px;
            }

            /* ── LEAD CARD ── */
            .lead-card {
                background: #f8f9f8;
                border: 1.5px solid #e0e8e0;
                border-radius: 16px;
                overflow: hidden;
                margin-bottom: 28px;
            }
            .lead-card-header {
                background: #171d25;
                padding: 14px 24px;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            .lead-card-header span {
                font-size: 0.75rem;
                font-weight: 600;
                color: rgba(255, 255, 255, 0.5);
                text-transform: uppercase;
                letter-spacing: 0.08em;
            }
            .lead-id {
                font-size: 0.72rem;
                color: #4ade80;
                font-weight: 700;
                font-family: monospace;
                background: rgba(74, 222, 128, 0.1);
                padding: 3px 8px;
                border-radius: 6px;
            }
            .lead-body {
                padding: 8px 0;
            }

            .info-row {
                display: flex;
                align-items: flex-start;
                padding: 11px 24px;
                border-bottom: 1px solid #eaeee9;
                gap: 16px;
            }
            .info-row:last-child {
                border-bottom: none;
            }

            .info-icon {
                width: 30px;
                height: 30px;
                border-radius: 8px;
                background: #edf2ed;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-shrink: 0;
            }
            .info-icon svg {
                width: 14px;
                height: 14px;
                color: #2d6a3f;
            }

            .info-content {
                flex: 1;
            }
            .info-label {
                font-size: 0.7rem;
                color: #9aab9a;
                font-weight: 500;
                text-transform: uppercase;
                letter-spacing: 0.06em;
                margin-bottom: 2px;
            }
            .info-value {
                font-size: 0.9rem;
                color: #1a2230;
                font-weight: 600;
            }
            .info-value a {
                color: #2d6a3f;
                text-decoration: none;
            }

            /* ── MESSAGE BOX ── */
            .message-box {
                background: #f0f5f0;
                border-left: 3px solid #4ade80;
                border-radius: 0 10px 10px 0;
                padding: 16px 20px;
                margin-bottom: 28px;
            }
            .message-box .msg-label {
                font-size: 0.7rem;
                font-weight: 700;
                color: #9aab9a;
                text-transform: uppercase;
                letter-spacing: 0.08em;
                margin-bottom: 8px;
            }
            .message-box p {
                font-size: 0.88rem;
                color: #3a4a3a;
                line-height: 1.7;
                font-style: italic;
            }

            /* ── ACTION BUTTONS ── */
            .actions-title {
                font-size: 0.88rem;
                font-weight: 700;
                color: #1a2230;
                margin-bottom: 14px;
            }
            .action-btns {
                display: flex;
                gap: 12px;
                flex-wrap: wrap;
                margin-bottom: 28px;
            }
            .action-btn {
                display: inline-flex;
                align-items: center;
                gap: 7px;
                padding: 11px 20px;
                border-radius: 9px;
                font-size: 0.82rem;
                font-weight: 600;
                font-family: 'Inter', sans-serif;
                text-decoration: none;
                border: none;
                cursor: pointer;
            }
            .action-btn svg {
                width: 15px;
                height: 15px;
            }
            .btn-call {
                background: #4ade80;
                color: #0a1a0d;
            }
            .btn-wa {
                background: #25d366;
                color: #fff;
            }
            .btn-email {
                background: #171d25;
                color: #fff;
            }

            /* ── PRIORITY BADGE ── */
            .priority-box {
                background: #fffbeb;
                border: 1px solid #fcd34d;
                border-radius: 10px;
                padding: 14px 18px;
                display: flex;
                align-items: center;
                gap: 12px;
            }
            .priority-box span {
                font-size: 0.82rem;
                color: #92400e;
                line-height: 1.5;
            }
            .priority-box strong {
                color: #78350f;
            }

            /* ── FOOTER ── */
            .footer {
                background: #f8f9f8;
                padding: 20px 44px;
                border-top: 1px solid #eaeee9;
                text-align: center;
            }
            .footer p {
                font-size: 0.72rem;
                color: #9aab9a;
                line-height: 1.6;
            }

            .top-bar {
                height: 4px;
                background: linear-gradient(90deg, #4ade80, #22c55e, #4ade80);
            }
        </style>
    </head>
    <body>
        <div class="email-wrapper">
            <div class="top-bar"></div>

            <!-- ALERT BAR -->
            <div class="alert-bar">
                <span class="alert-pulse"></span>
                <span>Nouveau lead entrant</span>
                <span class="alert-time">
                    {{ now()->format('d/m/Y à H:i') }}
                </span>
            </div>

            <!-- HEADER -->
            <div class="header">
                <div class="header-logo">
                    <svg width="28" height="28" viewBox="0 0 36 36" fill="none">
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
                        — Support
                    </span>
                </div>
                <div class="header-tag">🔔 Nouveau prospect</div>
                <h1>
                    Un client vient de soumettre
                    <br />
                    une demande de démo
                </h1>
                <p>Prenez contact dans les 24h pour maximiser la conversion.</p>
            </div>

            <!-- BODY -->
            <div class="body">
                <!-- Lead info card -->
                <div class="lead-card">
                    <div class="lead-card-header">
                        <span>Informations du prospect</span>
                        <span class="lead-id">
                            #{{ strtoupper(substr(md5($data['email']), 0, 8)) }}
                        </span>
                    </div>
                    <div class="lead-body">
                        <div class="info-row">
                            <div class="info-icon">
                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"
                                    />
                                    <circle cx="12" cy="7" r="4" />
                                </svg>
                            </div>
                            <div class="info-content">
                                <div class="info-label">Nom &amp; prénom</div>
                                <div class="info-value">
                                    {{ $data['name'] }}
                                </div>
                            </div>
                        </div>

                        <div class="info-row">
                            <div class="info-icon">
                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
                                    />
                                    <polyline points="9 22 9 12 15 12 15 22" />
                                </svg>
                            </div>
                            <div class="info-content">
                                <div class="info-label">Société</div>
                                <div class="info-value">
                                    {{ $data['societe'] ?? '—' }}
                                </div>
                            </div>
                        </div>

                        <div class="info-row">
                            <div class="info-icon">
                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"
                                    />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                            </div>
                            <div class="info-content">
                                <div class="info-label">Ville</div>
                                <div class="info-value">
                                    {{ $data['ville'] ?? '—' }}
                                </div>
                            </div>
                        </div>

                        <div class="info-row">
                            <div class="info-icon">
                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"
                                    />
                                    <line x1="3" y1="6" x2="21" y2="6" />
                                </svg>
                            </div>
                            <div class="info-content">
                                <div class="info-label">Type de magasin</div>
                                <div class="info-value">
                                    {{ $data['type'] ?? '—' }}
                                </div>
                            </div>
                        </div>

                        <div class="info-row">
                            <div class="info-icon">
                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <rect
                                        x="3"
                                        y="3"
                                        width="18"
                                        height="18"
                                        rx="2"
                                    />
                                    <path d="M3 9h18M9 21V9" />
                                </svg>
                            </div>
                            <div class="info-content">
                                <div class="info-label">
                                    Surface / Étiquettes estimées
                                </div>
                                <div class="info-value">
                                    {{ $data['surface'] ?? '—' }} &nbsp;·&nbsp;
                                    {{ $data['etiquettes'] ?? '—' }} étiquettes
                                </div>
                            </div>
                        </div>

                        <div class="info-row">
                            <div class="info-icon">
                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 01.98 1.1 2 2 0 012.96 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L7.91 7.91a16 16 0 006.18 6.18l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14.92z"
                                    />
                                </svg>
                            </div>
                            <div class="info-content">
                                <div class="info-label">Téléphone</div>
                                <div class="info-value">
                                    <a href="tel:{{ $data['telephone'] }}">
                                        {{ $data['telephone'] }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="info-row">
                            <div class="info-icon">
                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                                    />
                                    <polyline points="22,6 12,13 2,6" />
                                </svg>
                            </div>
                            <div class="info-content">
                                <div class="info-label">Email</div>
                                <div class="info-value">
                                    <a href="mailto:{{ $data['email'] }}">
                                        {{ $data['email'] }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Message -->
                @if (! empty($data['message']))
                    <div class="message-box">
                        <div class="msg-label">Message du client</div>
                        <p>"{{ $data['message'] }}"</p>
                    </div>
                @endif

                <!-- Action buttons -->
                <p class="actions-title">Contacter ce prospect :</p>
                <div class="action-btns">
                    <a
                        href="tel:{{ $data['telephone'] }}"
                        class="action-btn btn-call"
                    >
                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path
                                d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 01.98 1.1 2 2 0 012.96 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L7.91 7.91a16 16 0 006.18 6.18l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14.92z"
                            />
                        </svg>
                        Appeler
                    </a>
                    <a
                        href="https://wa.me/{{ preg_replace('/\D/', '', $data['telephone']) }}"
                        class="action-btn btn-wa"
                        target="_blank"
                    >
                        <svg
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            width="15"
                            height="15"
                        >
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"
                            />
                        </svg>
                        WhatsApp
                    </a>
                    <a
                        href="mailto:{{ $data['email'] }}"
                        class="action-btn btn-email"
                    >
                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                            />
                            <polyline points="22,6 12,13 2,6" />
                        </svg>
                        Répondre par email
                    </a>
                </div>

                <!-- Priority reminder -->
                <div class="priority-box">
                    <span>⏱</span>
                    <span>
                        <strong>Rappel :</strong>
                        Un prospect contacté dans les
                        <strong>2 heures</strong>
                        suivant sa demande a 7× plus de chances de convertir.
                        Traitez ce lead en priorité.
                    </span>
                </div>
            </div>

            <!-- FOOTER -->
            <div class="footer">
                <p>
                    Notification automatique — Conexus IT Solutions CRM
                    <br />
                    © {{ date('Y') }} Conexus IT Solutions — Casablanca, Maroc
                </p>
            </div>
        </div>
    </body>
</html>
