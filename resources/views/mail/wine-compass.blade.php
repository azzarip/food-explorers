<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Zurich Wine Compass</title>
    <meta name="x-apple-disable-message-reformatting">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body
    style="margin:0; padding:0; background:#f6f6f6; -webkit-font-smoothing:antialiased; font-family:Arial,Helvetica,sans-serif;">
    <!-- Preheader (hidden) -->
    <div style="display:none; max-height:0; overflow:hidden; opacity:0; mso-hide:all;">
        Zurich Wine Compass — tastings from {{ $loader->start->format('j F') }} to {{ $loader->end->format('j F') }}
    </div>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
        style="background:#f6f6f6; margin:0; padding:24px 0;">
        <tr>
            <td align="center" style="padding:0 12px;">
                <table role="presentation" width="600" cellpadding="0" cellspacing="0"
                    style="width:600px; max-width:600px; background:#ffffff;">
                    <!-- Header -->
                    <tr>
                        <td style="padding:28px 28px 8px 28px; text-align:center;">
                            <h1
                                style="margin:0 0 8px 0; font-size:28px; line-height:1.2; color:#111111; font-weight:800;">
                                Zurich Wine Tastings
                            </h1>
                            <p style="margin:0; font-size:15px; line-height:1.6; color:#111111;">
                                Wine Tastings in Zurich from <strong
                                    style="color:#111111;">{{ $loader->start->format('j F') }}</strong>
                                to <strong style="color:#111111;">{{ $loader->end->format('j F') }}</strong>. 🍷
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td align="center" style="padding:10px 28px 6px 28px;">
                            <table role="presentation" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center" style="border-radius:999px;">
                                        <a href="{{ $calendarUrl }}" target="_blank"
                                            style="display:inline-block;background:#EC003F;border-radius:9999px;
          padding:12px 18px;font-family:Arial,Helvetica,sans-serif;
          font-size:14px;font-weight:700;line-height:14px;color:#ffffff;text-decoration:none;">
                                            See Full Calendar
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>


                    @forelse($days as $day)
                        <tr>
                            <td style="padding:20px 28px 0 28px;">
                                <h2
                                    style="margin:0 0 10px 0; font-size:20px; line-height:1.35; color:#111111; font-weight:700;">
                                    {{ $day->label }}
                                </h2>
                            </td>
                        </tr>

                        @foreach ($day->items as $date)
                            <!-- Card -->
                            <tr style="margin-top: 24px;">
                                <td style="padding:8px 28px;">
                                    <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                        style="width:100%; border:1px solid #e5e7eb; background:#fafafa; border-radius: 8px;">
                                        <tr>
                                            <td style="padding: 14px 16px 14px 16px;">
                                                <a href="{{ durl('/tasting/' . $date->tasting->id, 'winetastings') }}"
                                                    style="text-decoration: none;">
                                                    <h3
                                                        style="margin:6px 0 6px 0; font-size:17px; line-height:1.35; color:#111111; font-weight:700;">
                                                        {{ $date->tasting->title }}
                                                    </h3>
                                                    <p
                                                        style="margin:0 0 4px 0; font-size:14px; line-height:1.6; color:#374151;">
                                                        <strong style="color:#111111;">🕒 When:</strong>
                                                        {{ $date->formatted_time }}
                                                    </p>
                                                    <p style="margin:0; float: right;">🡢</p>
                                                    <p
                                                        style="margin:0; font-size:14px; line-height:1.6; color:#374151;">
                                                        <strong style="color:#111111;">📍 Where:</strong>
                                                        {{ $date->tasting->location->name_address }}
                                                        - <a href="{{ $date->tasting->location->google_maps_url }}"
                                                            target="_blank" rel="noopener noreferrer nofollow"
                                                            style="color:#1d4ed8; text-decoration:underline;">Maps</a>
                                                    </p>
                                                    @if ($date->tasting->is_dinner)
                                                        <p
                                                            style="margin:0; margin-top: 4px; font-size:0.875rem; color:#ca8a04; font-weight:600;">
                                                            ⭐ Dinner Experience </p>
                                                    @endif
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        @endforeach


                    @empty
                        <tr>
                            <td style="padding:24px 28px;">
                                <p style="margin:0; font-size:15px; line-height:1.6; color:#374151;">
                                    No tastings scheduled this week. Check back next Wednesday at 12:00.
                                </p>
                            </td>
                        </tr>
                    @endforelse




                    <tr>
                        <td align="center" style="padding:10px 28px 6px 28px;">
                            <table role="presentation" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center" style="border-radius:999px;">
                                        <a href="{{ $calendarUrl }}" target="_blank"
                                            style="display:inline-block;background:#EC003F;border-radius:9999px;
          padding:12px 18px;font-family:Arial,Helvetica,sans-serif;
          font-size:14px;font-weight:700;line-height:14px;color:#ffffff;text-decoration:none;">
                                            See Full Calendar
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:10px 28px 6px 28px;">
                            <p><strong>P.S.</strong> Anything we can improve? Or you would like to have? Let us know
                                replying to this email!</p>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="padding:20px 28px 28px 28px; text-align:center;">
                            <p style="margin:0;  font-size:12px; line-height:1.6; color:#6b7280;">
                                <a href="{{ $unsubscribeUrl }}"
                                    style="color:#6b7280; text-decoration:underline;">Unsubscribe</a>
                            </p>
                        </td>
                    </tr>
                </table>

                <!-- Spacer -->
                <div style="height:24px; line-height:24px;">&nbsp;</div>
            </td>
        </tr>
    </table>
</body>

</html>
